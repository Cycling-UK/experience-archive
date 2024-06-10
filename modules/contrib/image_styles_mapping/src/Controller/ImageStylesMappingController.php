<?php

declare(strict_types = 1);

namespace Drupal\image_styles_mapping\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\Core\Utility\TableSort;
use Drupal\image_styles_mapping\Service\ImageStylesMappingServiceInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Provides methods which allows to render reports listing the image styles.
 */
class ImageStylesMappingController extends ControllerBase {

  /**
   * Fields report title.
   *
   * @var \Drupal\Core\StringTranslation\TranslatableMarkup
   */
  protected TranslatableMarkup $fieldsReportTitle;

  /**
   * Fields report empty value.
   *
   * @var \Drupal\Core\StringTranslation\TranslatableMarkup
   */
  protected TranslatableMarkup $fieldsReportEmptyValue;

  /**
   * Views fields report title.
   *
   * @var \Drupal\Core\StringTranslation\TranslatableMarkup
   */
  protected TranslatableMarkup $viewsFieldsReportTitle;

  /**
   * Views fields report empty value.
   *
   * @var \Drupal\Core\StringTranslation\TranslatableMarkup
   */
  protected TranslatableMarkup $viewsFieldsReportEmptyValue;

  /**
   * Image styles mapping service Interface.
   *
   * @var \Drupal\image_styles_mapping\Service\ImageStylesMappingServiceInterface
   */
  protected ImageStylesMappingServiceInterface $imageStylesMappingService;

  /**
   * The request stack service.
   *
   * @var \Symfony\Component\HttpFoundation\Request
   */
  protected Request $currentRequest;

  /**
   * Constructs a new ImageStylesMappingController.
   *
   * @param \Drupal\image_styles_mapping\Service\ImageStylesMappingServiceInterface $image_styles_mapping_service
   *   An instance of imageStylesMappingService.
   * @param \Symfony\Component\HttpFoundation\RequestStack $request_stack
   *   The request stack service.
   */
  public function __construct(
    ImageStylesMappingServiceInterface $image_styles_mapping_service,
    RequestStack $request_stack
  ) {
    $this->imageStylesMappingService = $image_styles_mapping_service;
    $this->currentRequest = $request_stack->getCurrentRequest() ?: new Request();
    $this->fieldsReportTitle = $this->t('Image fields');
    $this->fieldsReportEmptyValue = $this->t('No image styles or responsive image styles have been used in any views fields yet.');
    $this->viewsFieldsReportTitle = $this->t('View image fields');
    $this->viewsFieldsReportEmptyValue = $this->t('No image styles or responsive image styles have been used in any views fields yet.');
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container): static {
    // @phpstan-ignore-next-line
    return new static(
      $container->get('image_styles_mapping.image_styles_mapping_service'),
      $container->get('request_stack')
    );
  }

  /**
   * Retrieves the available reports.
   *
   * @return string[]
   *   Name of available reports.
   */
  protected function getAvailableReports() {
    // @todo Remove the hardcoded reports, maybe using a plugin architecture.
    return [
      'fieldsReport',
      'viewsFieldsReport',
    ];
  }

  /**
   * Checks if a report matches conditions to be available.
   *
   * @param string $report_name
   *   The report's name.
   *
   * @return bool
   *   TRUE if the report is available. FALSE otherwise.
   */
  protected function isAvailableReport($report_name) {
    $available = FALSE;
    // @todo Remove the hardcoded reports, maybe using a plugin architecture.
    switch ($report_name) {
      case 'fieldsReport':
        $available = TRUE;
        break;

      case 'viewsFieldsReport':
        if ($this->moduleHandler()->moduleExists('views')) {
          $available = TRUE;
        }
        break;
    }
    return $available;
  }

  /**
   * Generates a report.
   *
   * @param string $report_name
   *   The report name to display.
   *
   * @return array
   *   Display a table of the image styles used in fields.
   */
  public function getReport($report_name) {
    $field_report = $this->imageStylesMappingService->{$report_name}();
    return $this->renderTable(
      $this->{$report_name . 'Title'},
      $field_report['header'],
      $field_report['rows'],
      $this->{$report_name . 'EmptyValue'}
    );
  }

  /**
   * Displays all the reports.
   *
   * @return array
   *   HTML tables for the results.
   */
  public function allReport() {
    $reports = $this->getAvailableReports();
    $output = [];

    foreach ($reports as $report_name) {
      if ($this->isAvailableReport($report_name)) {
        $output[] = $this->getReport($report_name);
      }
    }

    return $output;
  }

  /**
   * Helper function to sort rows.
   *
   * @param array $header
   *   The table's header.
   * @param array $rows
   *   Array of rows.
   *
   * @return array
   *   Array of sorted rows.
   */
  protected function sortRows(array $header, array $rows) {
    if (!empty($rows)) {
      // Get selected order from the request or the default one.
      $order = TableSort::getOrder($header, $this->currentRequest);
      // Note that we do not run any sql query against the database. The
      // 'sql' key is simply there for tablesort needs.
      $order = $order['sql'];

      // Get the field we sort by from the request if any.
      $sort = TableSort::getSort($header, $this->currentRequest);
      $order_column = [];

      // Obtain the column we need to sort by.
      foreach ($rows as $key => $value) {
        $order_column[$key] = $value[$order];
      }
      // Sort data.
      if ($sort == 'asc') {
        \array_multisort($order_column, \SORT_ASC, $rows);
      }
      elseif ($sort == 'desc') {
        \array_multisort($order_column, \SORT_DESC, $rows);
      }
    }
    return $rows;
  }

  /**
   * Helper function to render a table.
   *
   * @param string $h2_string
   *   The string to use as H2 title.
   * @param array $header
   *   The table's header.
   * @param array $rows
   *   The table's row.
   * @param string $empty_string
   *   The string to use of the table is empty.
   *
   * @return array
   *   A renderable array.
   */
  protected function renderTable($h2_string, array $header, array $rows, $empty_string) {
    $output = [];
    $output[] = [
      '#type' => 'html_tag',
      '#tag' => 'h2',
      '#value' => $h2_string,
    ];

    $output[] = [
      '#theme' => 'table',
      '#header' => $header,
      '#rows' => $this->sortRows($header, $rows),
      '#empty' => $empty_string,
    ];

    return $output;
  }

}
