/**
 * 
 * Replace the default leaflet map icon pin for nodes that are route related, with gpx file display.
 */

(function ($, Drupal) {
  Drupal.behaviors.leafletIconSwitch = {
    attach: function (context, settings) {
      $('.path-node', context).once('leafletIconSwitch').each(function () {
        // Apply the leafletIconSwitch effect to the elements only once.
        // to switch out leaflet icon
        if ($("body").hasClass("path-search-map") || $("body").hasClass("path-routes") || $("body").hasClass("page-node-type-route")) {
          L.Marker.prototype.options.icon = L.icon({
            iconUrl: "/sites/default/files/map-icons/map-marker-route.png",
            iconRetinaUrl: '/sites/default/files/map-icons/map-marker-route.png',
            iconSize:    [30, 40],
            iconAnchor:  [15, 41],
            //popupAnchor: [1, -34],
            //tooltipAnchor: [16, -28],
          });
        }
        else {
          // do nothing
        }
        
      });

    }
  };
})(jQuery, Drupal);
