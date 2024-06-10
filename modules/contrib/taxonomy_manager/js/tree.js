(function ($, Drupal, drupalSettings, once) {
  'use strict';

  /**
   * Attaches the JS.
   */
  Drupal.behaviors.TaxonomyManagerTree = {
    attach: function (context, settings) {
      var treeSettings = settings.taxonomy_manager.tree || [];
      if (treeSettings instanceof Array) {
        for (var i = 0; i < treeSettings.length; i++) {
          $(once('taxonomy-manager-tree', '#' + treeSettings[i].id)).each(function () {
            var tree = new Drupal.TaxonomyManagerFancyTree(treeSettings[i].id, treeSettings[i].name, treeSettings[i].source);
          });
        }
      }
      // Handle click on search terms
      $('.taxonomy-manager-search-button').click(function (e) {
        e.preventDefault();
        $('.taxonomy-manager-autocomplete-input').show();
        return true;
      });
      // Handle click on autocomplete suggestion
      $(once('input', '.ui-autocomplete', context)).on('click', function (e) {
        e.stopPropagation();
        var tidMatch = $('input[name="search_terms"]').val().match(/\([0-9]*\)/g)
        if (tidMatch.length) {
          var tid = parseInt(tidMatch[0].replace(/^[^0-9]+/, ''), 10);
          // Request tree keys to activate via ajax.
          $.ajax({
            url: Drupal.url('taxonomy_manager/subtree/child-parents'),
            dataType: 'json',
            data: {
              'tid': tid
            },
            success: function (termData) {
              var $tree = $("#edit-taxonomy-manager-tree").fancytree("getTree");
              var path = termData.path;
              $tree.loadKeyPath(path).progress(function (keyData) {
                if (keyData.status === 'ok') {
                  $tree.activateKey(keyData.node.key);
                }
              });
            }
          });
        }
      });
    }
  };

  /**
   * FancyTree integration.
   *
   * @param {string} id The id of the wrapping div element
   * @param {string} name The form element name (used in $_POST)
   * @param {object} source The JSON object representing the initial tree
   */
  Drupal.TaxonomyManagerFancyTree = function (id, name, source) {
    // Settings generated by http://wwwendt.de/tech/fancytree/demo/sample-configurator.html
    $('#' + id).fancytree({
      activeVisible: true, // Make sure, active nodes are visible (expanded).
      aria: false, // Enable WAI-ARIA support.
      autoActivate: true, // Automatically activate a node when it is focused (using keys).
      autoCollapse: false, // Automatically collapse all siblings, when a node is expanded.
      autoScroll: false, // Automatically scroll nodes into visible area.
      clickFolderMode: 4, // 1:activate, 2:expand, 3:activate and expand, 4:activate (dblclick expands)
      checkbox: true, // Show checkboxes.
      debugLevel: 2, // 0:quiet, 1:normal, 2:debug
      disabled: false, // Disable control
      focusOnSelect: false, // Set focus when node is checked by a mouse click
      generateIds: false, // Generate id attributes like <span id='fancytree-id-KEY'>
      idPrefix: 'ft_', // Used to generate node id´s like <span id='fancytree-id-<key>'>.
      icon: false, // Display node icons.
      keyboard: false, // Support keyboard navigation.
      keyPathSeparator: '/', // Used by node.getKeyPath() and tree.loadKeyPath().
      minExpandLevel: 1, // 1: root node is not collapsible
      quicksearch: false, // Navigate to next node by typing the first letters.
      selectMode: 2, // 1:single, 2:multi, 3:multi-hier
      tabindex: 0, // Whole tree behaves as one single control
      titlesTabbable: false, // Node titles can receive keyboard focus
      lazyLoad: function (event, data) {
        // Load child nodes via ajax GET /taxonomy_manager/parent=1234
        data.result = {
          url: Drupal.url('taxonomy_manager/subtree'),
          data: {parent: data.node.key},
          cache: false
        };
      },
      source: source,
      select: function (event, data) {
        // We update the form inputs on every checkbox state change as ajax
        // events might require the latest state.
        data.tree.generateFormElements(name + '[]');
        // If no item is selected then disable delete button.
        if (data.tree.getSelectedNodes().length < 1) {
          document.getElementById("edit-delete").disabled = true;
        } else {
          let $deleteButton = document.getElementById("edit-delete");
          $deleteButton.disabled = false;
          if ($deleteButton.classList.contains('is-disabled')) {
            $deleteButton.classList.remove('is-disabled');
          }
        }

        // Create custom event for tree selection so other modules are able to
        // react on selection changes.
        let treeSelectEvent = new CustomEvent('taxonomy_manager-tree-select', {
          detail: data
        });
        document.dispatchEvent(treeSelectEvent);
      },
      focus: function (event, data) {
        new Drupal.TaxonomyManagerTermData(data.node.key, data.tree);
      }
    });
  };

})(jQuery, Drupal, drupalSettings, once);
