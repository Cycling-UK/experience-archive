/**
 * 
 * Make the eu cookie banner reappear on click of class.
 */
(function ($, Drupal) {
  Drupal.behaviors.euCookieBannerOpen = {
    attach: function (context, settings) {
      $('.cookie-comp', context).once('cookieBannerOpen').each(function () {
        // Apply the cookieBannerOpen effect to the elements only once.
        $(".cookie-comp").click(Drupal.eu_cookie_compliance.withdrawAction);
      });
    }
  };
})(jQuery, Drupal);
  
  

