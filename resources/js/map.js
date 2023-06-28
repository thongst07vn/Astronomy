var map = L.map('map', {
    fullscreenControl: {
        pseudoFullscreen: false
    }
    }).setView([10.8066944,106.7116019], 50);

    var positron = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, &copy; <a href="http://cartodb.com/attributions">CartoDB</a>'
    }).addTo(map);
var mangtam = [[10.8066944,106.7116019],[10.8506376,106.7670422],[10.8432268,106.7717486],[21.0287797,105.8497898],[11.9458468,108.4409429]];    
var i = 0;
var marker = [];
for(i=0; i<mangtam.length; i++){
    
    var point = L.marker(mangtam[i]).addTo(map).bindPopup(mangtam[i].toString());
    marker.push(point);
    marker[i].on('click',(e) => {
        map.setView([e.latlng.lat,e.latlng.lng],40);
    });
    marker[i].on('mouseover',function(e) {
        e.target.openPopup();
      });
}
