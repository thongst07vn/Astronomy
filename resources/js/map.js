
var map = L.map(`map`, {
    fullscreenControl: {
        pseudoFullscreen: false
    }
    }).setView([43.9316666666667,5.71333333333333], 4);

    var positron = L.tileLayer(`https://tile.openstreetmap.org/{z}/{x}/{y}.png`, {
        attribution: `&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, &copy; <a href="http://cartodb.com/attributions">CartoDB</a>`
    }).addTo(map);
var mangtam = [];
var i = 0;
var j = 0;
var marker = [];
mangtam = window.data.observatory;
for(i=0; i<mangtam.length; i++){
    console.log(`OBSERVATORY NAME: `+ mangtam[i].name + `<br/> INSTRUMENTS: `+ mangtam[i].instruments)
    var point = L.marker([parseFloat(mangtam[i].lng),parseFloat(mangtam[i].lat)]).addTo(map).bindPopup(`OBSERVATORY NAME: `+ mangtam[i].name + `<br/> INSTRUMENTS: `+ mangtam[i].instruments + `<br/>ALTITUDE: `+ mangtam[i].altitude + `<br/>TYPE: `+ mangtam[i].type + `<br/>DESCRIPTION SOURCE: `+ mangtam[i].descriptionsource + `<br/>LOCATION: ` +parseFloat(mangtam[i].lng) + ' : ' + parseFloat(mangtam[i].lat));
    marker.push(point);
    marker[i].on(`click`,(e) => {
        map.setView([e.latlng.lat,e.latlng.lng],40);
    });
    marker[i].on(`mouseover`,function(e) {
        e.target.openPopup();
    });
    
}


