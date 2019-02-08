 function initEvent(){
          document.getElementById("loc-bt").onclick=function(){
              localise();
          }
          function localise(){
              if(navigator.geolocation){
                  navigator.geolocation.getCurrentPosition(AffichePosition, gestionErrors,{timeout: 20000});
              }
          }
          function AffichePosition(position){
              var latitude = position.coords.latitude;
              var longitude = position.coords.longitude;
  
              // var options = {zoom: 15, center:new google.maps.LatLng(latitude,longitude),};
              //google.maps.event.addDomListener(window, 'load', initMap)
              var center = new google.maps.LatLng( latitude,longitude);
              map = new google.maps.Map(document.getElementById('map'),{
                center : center,
                zoom: 13
              });
              var request = {
                location: center,
                radius: 8047,
                types: ['pharmacy']
              };
              infowindow = new google.maps.InfoWindow();
              var service = new google.maps.places.PlacesService(map);
              service.nearbySearch(request, callback);
              //var map = new google.maps.Map(document.getElementById("map"), options);
              var marker = new google.maps.Marker({position: new google.maps.LatLng(latitude,longitude,)});
              marker.setMap(map);
          }
          
      }
  
      function gestionErrors(error){
          switch(error.code){
              case 3:
              alert("temps dépassé");
              break;
  
              case 2:
              alert("Le navigateur ne parvient pas à vous localiser");
  
              case 1:
              alert("Vous ne souhaitez pas partager votre localisation");
  
              case 0:
              alert("Une erreur est survenue, réessayez ultérieurement");
              break;
          }
      }
  
      if(window.addEventListener){
          window.addEventListener('load',initEvent,false);
      }else if(window.addEventListener){
          window.attachEvent('onload', initEvent);
      }
      var map;
      var infowindow;
      function callback(results, status){
        if(status == google.maps.places.PlacesServiceStatus.OK){
          for (var i = 0; i < results.length; i++){
            createMarker(results[i]);
          }
        }
      }
      var image = {
        // Adresse de l'icône personnalisée
        url: 'public/images/pharmacie.png',
        // Taille de l'icône personnalisée
        size: new google.maps.Size(25, 25),
        // Origine de l'image, souvent (0, 0)
        origin: new google.maps.Point(0,0),
        // L'ancre de l'image. Correspond au point de l'image que l'on raccroche à la carte. Par exemple, si votre îcone est un drapeau, cela correspond à son mâts
        anchor: new google.maps.Point(0, 20)
    };
     
      function createMarker(place){
        // var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
          map : map,
          position: place.geometry.location,
          icon: image
          
        });
        google.maps.event.addListener(marker, 'click', function(){
          infowindow.setContent(place.name);
          infowindow.open(map, this);
        })
      }
     