

	// On s'assure que la page est chargée
	window.onload = function(){
    // On initialise la carte sur les coordonnées GPS de Paris
    let macarte = L.map('carte').setView([48.852969, 2.349903], 13)

    // On charge les tuiles depuis un serveur au choix, ici OpenStreetMap 
    L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=3oa3J7TEkNh2fVNl36qz', {
        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
        minZoom: 1,
        maxZoom: 20
    }).addTo(macarte)
	
	L.Routing.control({
		// On personalise le tracé gps
		lineOptions: {
			styles: [{color: '#ff8f00', opacity: 1, weight: 7}]
		},

		geocoder: L.Control.Geocoder.nominatim()
	}).addTo(macarte)
	
	

}