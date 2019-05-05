//Open street  Map -12.07692, -77.03036
var coord = [-12.07691, -77.03040]; // <--- coordinates here

var map = L.map('map-canvas', { scrollWheelZoom:false}).setView(coord, 17);

L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
	//maxZoom: 18,
	attribution: ''
}).addTo(map);

// custom icon
var customIcon = L.icon({
	iconUrl: 'html/img/mapmarker.png',
	iconSize:     [64, 64], // size of the icon
	iconAnchor:   [32, 63] // point of the icon which will correspond to marker's location
});

// marker object, pass custom icon as option, add to map
//var marker = L.marker(coord, {icon: customIcon}).addTo(map);
var marker = L.marker(coord).addTo(map)
	.bindPopup('Juegos Santa Beatriz <br> Jr. Teodoro Cárdenas 787')
	.openPopup();

