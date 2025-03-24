
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<div id="map" style="height: 400px; width: 100%;"></div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Declarations
        var latitude = <?php echo $details['Latitude']; ?>;
        var longitude = <?php echo $details['Longitude']; ?>;
        var name = "<?php echo $details['name']; ?>";
        
        var map = L.map('map').setView([latitude, longitude], 17);
        
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);
        
        L.marker([latitude, longitude]).addTo(map)
            .bindPopup(name)
            .openPopup();
    });
</script>