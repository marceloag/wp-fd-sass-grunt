<!-- FOOTER -->
    <footer>
        <div class="row full">
            <div class="large-12 medium-12 small-12 columns">
                <div class="logo_footer text-center">
                    <img src="<?php bloginfo('template_directory'); ?>/img/logo_footer.png" alt="">
                </div>

                <div class="informacion">
                    <ul>
                        <li>proyectopuestosyranchos@gmail.com</li>
                        <li>+569 56650624 /@puestosyranchos</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

    <script src="<?php bloginfo('template_directory'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/bower_components/foundation/js/foundation.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
    <script type="text/javascript">
      /**
       * initMap
       *
       * Renders a Google Map onto the selected jQuery element
       *
       * @date    22/10/19
       * @since   5.8.6
       *
       * @param   jQuery $el The jQuery element.
       * @return  object The map instance.
       */
      function initMap( $el ) {

          // Find marker elements within map.
          var $markers = $el.find('.marker');

          // Create gerenic map.
          var mapArgs = {
              zoom        : $el.data('zoom') || 16,
              mapTypeId   : google.maps.MapTypeId.ROADMAP
          };
          var map = new google.maps.Map( $el[0], mapArgs );

          // Add markers.
          map.markers = [];
          $markers.each(function(){
              initMarker( $(this), map );
          });

          // Center map based on markers.
          centerMap( map );

          // Return map instance.
          return map;
      }

      /**
       * initMarker
       *
       * Creates a marker for the given jQuery element and map.
       *
       * @date    22/10/19
       * @since   5.8.6
       *
       * @param   jQuery $el The jQuery element.
       * @param   object The map instance.
       * @return  object The marker instance.
       */
      function initMarker( $marker, map ) {

          // Get position from marker.
          var lat = $marker.data('lat');
          var lng = $marker.data('lng');
          var latLng = {
              lat: parseFloat( lat ),
              lng: parseFloat( lng )
          };

          // Create marker instance.
          var marker = new google.maps.Marker({
              position : latLng,
              map: map
          });

          // Append to reference for later use.
          map.markers.push( marker );

          // If marker contains HTML, add it to an infoWindow.
          if( $marker.html() ){

              // Create info window.
              var infowindow = new google.maps.InfoWindow({
                  content: $marker.html()
              });

              // Show info window when marker is clicked.
              google.maps.event.addListener(marker, 'click', function() {
                  infowindow.open( map, marker );
              });
          }
      }

      /**
       * centerMap
       *
       * Centers the map showing all markers in view.
       *
       * @date    22/10/19
       * @since   5.8.6
       *
       * @param   object The map instance.
       * @return  void
       */
      function centerMap( map ) {

          // Create map boundaries from all map markers.
          var bounds = new google.maps.LatLngBounds();
          map.markers.forEach(function( marker ){
              bounds.extend({
                  lat: marker.position.lat(),
                  lng: marker.position.lng()
              });
          });

          // Case: Single marker.
          if( map.markers.length == 1 ){
              map.setCenter( bounds.getCenter() );

          // Case: Multiple markers.
          } else{
              map.fitBounds( bounds );
          }
      }

      // Render maps on page load.
      function iniciaMapa(){
          $('.acf-map').each(function(){
              var map = initMap( $(this) );
          });
      };

    </script>
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXV_14x9Fx9nm2-6JnLBE5JWLpNt1ALYY&callback=iniciaMapa">
    </script>

</body>

</html>
