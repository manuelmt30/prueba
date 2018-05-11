 function initMap() {
        var uluru = {lat: 19.4326077, lng: -99.13320799999997};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }