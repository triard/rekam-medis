<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
    var propertiPeta = {
        center: new google.maps.LatLng(-7.152621, 111.90115),
        zoom: 19,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);


}

// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div id="googleMap" style="width:100%;height:380px;"></div>
