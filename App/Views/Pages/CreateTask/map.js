var myPos = [
    {title:"HCMUT",lat: 10.880758672488803,  lng: 106.8053648373238},
    {title:"HCMUS",lat: 10.875804131276233,  lng:106.7991484373238},
    {title:"USSH",lat: 10.873569796248342,  lng:  106.8022213508149}
];
// list of MCP after
var myListChosen = [];


function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: new google.maps.LatLng(10.880663848882676, 106.80541848150521)
    });

    //creat maker on this map
    var markers = new Array(myPos.length);
    // create list marker
    for(let i = 0; i < myPos.length;++i){
        markers[i] = new google.maps.Marker(
            {
                position:{lat: myPos[i].lat, lng: myPos[i].lng},
                title: myPos[i].title
            }
        );
        markers[i].setMap(map);
    }
    // add marker on click
    google.maps.event.addListener(                                      
                                    map, 
                                    "click", 
                                    (event) =>  {
                                    addMarker(event.latLng, map);
                                    }
                                );

     function addMarker(location, map) {
        // Add the marker at the clicked location, and add the next-available label
        // from the array of alphabetical characters.
        new google.maps.Marker({
            position: location,
            map: map,
        });
    }
// creat route throght all chosen MCP list
var directionsService = new google.maps.DirectionsService();

const creatRoute = function(result, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      var directionsDisplay = new google.maps.DirectionsRenderer({
        map: map,
        directions: result
      });
    }
    //console.log(result);
}


//add listener to all marker in list
    markers.map((marker,idx) => {
            google.maps.event.addListener(marker,'click',function() {
                    map.setZoom(15);
                    map.setCenter(marker.getPosition());
                    // console.log(myListChosen.includes(marker));

                    if(myListChosen.length === 0){ 
                        document.getElementById("MCPs").value +=  marker.title;
                        myListChosen = [...myListChosen, marker];
                    }
                    else if(!myListChosen.includes(marker)) {

                        document.getElementById("MCPs").value = ( document.getElementById("MCPs").value + ", "+ marker.title);
                        myListChosen = [...myListChosen, marker];
                    }
                    // console.log(myListChosen);

                    //creat route
                    var startPoint = undefined;
                    var waitPoint = [];
                    var endPoint= undefined;
                    var request = {};
                    // if(myListChosen.length == 2)
                    if(myListChosen.length === 2){
                        startPoint = myListChosen[0];
                        endPoint = myListChosen[1];
                        // console.log(startPoint);
                        // console.log(endPoint);
                        request = {
                            // origin: startPoint.getPosition(),
                            // destination: endPoint.getPosition(),
                            origin:  {lat: startPoint.getPosition().lat(), lng: startPoint.getPosition().lng()},
                            destination: {lat: endPoint.getPosition().lat(), lng: endPoint.getPosition().lng()},
                            optimizeWaypoints: true,
                            travelMode: google.maps.TravelMode.DRIVING
                          };

                    }
                    else if(myListChosen.length > 2){
                        startPoint = myListChosen[0];
                        for(let i = 1; i < myListChosen.length-1; ++i){
                            waitPoint = [...waitPoint, {location: myListChosen[i].getPosition()}];
                        }
                        endPoint = myListChosen[myListChosen.length-1];
                        // console.log(startPoint);
                        // console.log(waitPoint );
                        // console.log(endPoint);
                        request = {
                            // origin: startPoint.getPosition(),
                            // destination: endPoint.getPosition(),
                            origin:  {lat: startPoint.getPosition().lat(), lng: startPoint.getPosition().lng()},
                            destination: {lat: endPoint.getPosition().lat(), lng: endPoint.getPosition().lng()},
                            waypoints: waitPoint,
                            optimizeWaypoints: true,
                            travelMode: google.maps.TravelMode.DRIVING
                          };
                          
                    } 
                    //console.log(request);
                    if(myListChosen.length >= 2) directionsService.route(request, creatRoute);


                }
            )
        }
    );

  }

//   google.maps.event.addDomListener(window, 'load', initMap);