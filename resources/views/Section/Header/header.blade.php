
      <!-- ======= Header No Slider Section ======= -->
  <section id="hero-no-slider" class="d-flex justify-cntent-center align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <h2>La plateforme d'aide à domicile <span class="color: fb5607">entre particuliers</span></h2>
          <p>Prenez enfin du temps pour vous et trouvez de l'aide qui manque à votre quotidien en quelques clics!</p>
          <a href="" class="btn-get-started ">Je m'inscris</a>
        </div>
      </div>
      <div class="container search-sec ">
          
              <form action="#" method="post" novalidate="novalidate">
           
                      <div class="row d-flex jsutify-content-center">
                              <div class="col-4  ">
                                  <input id="pac-input" type="text" class="form-control search-slt" placeholder="Enter Country">
                              </div>
                              <!-- <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                  <input id="pac-input" type="text" class="form-control search-slt" placeholder="Enter City">
                              </div> -->
                              <div class="col-4 ">
                                  <select class="form-control search-slt" id="exampleFormControlSelect1">
                                      <option>Select Categories</option>
                                      <option>service one</option>
                                      <option>service one</option>
                                      <option>service one</option>
                                      <option>service one</option>
                                      <option>service one</option>
                                      <option>service one</option>
                                  </select>
                              </div>
                              <div class="col-4  ">
                                  <button type="button" class="btn wrn-btn" style="background-color :#fb5607">Search</button>
                              </div>
                        </div>
                        <div id="map"></div>
              </form>
          </div>
          <!-- <div id="map"></div> -->
      </div>
    </div>
  </section>
  <script>
    function initAutocomplete() {
    var map = new google.maps.Map(document.getElementById("map"), {
      center: { lat: -33.8688, lng: 151.2195 },
      zoom: 13,
      mapTypeId: "roadmap"
    });
  
    // Create the search box and link it to the UI element.
    var input = document.getElementById("pac-input");
    var searchBox = new google.maps.places.SearchBox(input);
    // map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  
    // Bias the SearchBox results towards current map's viewport.
    map.addListener("bounds_changed", function() {
      searchBox.setBounds(map.getBounds());
    });
  
    var markers = [];
    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener("places_changed", function() {
      var places = searchBox.getPlaces();
  
      if (places.length == 0) {
        return;
      }
  
      // Clear out the old markers.
      markers.forEach(function(marker) {
        marker.setMap(null);
      });
      markers = [];
  
      // For each place, get the icon, name and location.
      var bounds = new google.maps.LatLngBounds();
      places.forEach(function(place) {
        if (!place.geometry) {
          console.log("Returned place contains no geometry");
          return;
        }
        var icon = {
          url: place.icon,
          size: new google.maps.Size(71, 71),
          origin: new google.maps.Point(0, 0),
          anchor: new google.maps.Point(17, 34),
          scaledSize: new google.maps.Size(25, 25)
        };
  
        // Create a marker for each place.
        markers.push(
          new google.maps.Marker({
            map: map,
            icon: icon,
            title: place.name,
            position: place.geometry.location
          })
        );
  
        if (place.geometry.viewport) {
          // Only geocodes have viewport.
          bounds.union(place.geometry.viewport);
        } else {
          bounds.extend(place.geometry.location);
        }
      });
      map.fitBounds(bounds);
    });

    
}
</script>