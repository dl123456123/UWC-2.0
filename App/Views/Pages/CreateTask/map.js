var myPos = [
    {title:"HCMUT",lat: 10.880758672488803,  lng: 106.8053648373238},
    {title:"HCMUS",lat: 10.875804131276233,  lng:106.7991484373238},
    {title:"USSH",lat: 10.873569796248342,  lng:  106.8022213508149}
];
// list of MCP after
var myListChosen = [];
var directionsService = undefined;
var directionsRenderer = undefined;
// function area

function renderMCPToHMTL(myListChosen){
    document.getElementById("MCPs").value ="";
    for(let i = 0;i < myListChosen.length;++i){
        if(i === 0) document.getElementById("MCPs").value = myListChosen[i].title ;
        else
            document.getElementById("MCPs").value = ( document.getElementById("MCPs").value + ", "+ myListChosen[i].title);                
    }
}
const creatRoute = function(result, status) {
    if (status == google.maps.DirectionsStatus.OK) {
        directionsRenderer.setDirections(result);
    }
}


const creatRouteRequest = function(){
    var startPoint = undefined;
    var waitPoint = [];
    var endPoint= undefined;
    var request = {};

    if(myListChosen.length === 1){
        startPoint = myListChosen[0];
        endPoint = myListChosen[0];
        request = {
            origin:  {lat: startPoint.getPosition().lat(), lng: startPoint.getPosition().lng()},
            destination: {lat: endPoint.getPosition().lat(), lng: endPoint.getPosition().lng()},
            optimizeWaypoints: true,
            travelMode: google.maps.TravelMode.DRIVING
        };
    }
    else if(myListChosen.length === 2){
        startPoint = myListChosen[0];
        endPoint = myListChosen[1];
        request = {
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
        request = {
            origin:  {lat: startPoint.getPosition().lat(), lng: startPoint.getPosition().lng()},
            destination: {lat: endPoint.getPosition().lat(), lng: endPoint.getPosition().lng()},
            waypoints: waitPoint,
            optimizeWaypoints: true,
            travelMode: google.maps.TravelMode.DRIVING
        };
            
    } 
    if(myListChosen.length >= 1) {
        directionsService.route(request, creatRoute);
    }
}



const clearRoute = function(){
    var directions = directionsRenderer.getDirections();

    // Nếu đã có directions, xóa từng directions một
    if (directions) {
        directions.routes = [];
        directionsRenderer.setDirections(directions);
    }
}

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
directionsService = new google.maps.DirectionsService();
directionsRenderer= new google.maps.DirectionsRenderer();
directionsRenderer.setMap(map);



//add listener to all marker in list
    markers.map((marker,idx) => {
            google.maps.event.addListener(marker,'click',function() {
                    map.setZoom(15);
                    map.setCenter(marker.getPosition());

                    if(myListChosen.length === 0){ 
                        //document.getElementById("MCPs").value +=  marker.title;
                        myListChosen = [...myListChosen, marker];
                    }
                    else if(!myListChosen.includes(marker)) {

                        //document.getElementById("MCPs").value = ( document.getElementById("MCPs").value + ", "+ marker.title);
                        myListChosen = [...myListChosen, marker];
                    }else {
                        myListChosen.splice(myListChosen.indexOf(marker),1);
                    }
                    
                    renderMCPToHMTL(myListChosen);
                    //creat route
                    
                    //creat route request
                    if(document.getElementById("staff-type").value === "collector"){
                        creatRouteRequest();
                    }

                }
            )
        }
    );

  }

//   google.maps.event.addDomListener(window, 'load', initMap);
$(document).ready(function() {
    $("#reset-a").on('click',function(){
       clearRoute();
       myListChosen = [];
    });

    $('#staff-type').change(function() {
        // your code here
        var selectedValue = $('#staff-type').val();
        if(selectedValue === 'collector'){
            creatRouteRequest();
        }
        else if(selectedValue === "janitor"){
            clearRoute();
        }
        // clear input form
        else {
            myListChosen = [];
            document.getElementById("MCPs").value ="";
            clearRoute();
        }
      });
  });