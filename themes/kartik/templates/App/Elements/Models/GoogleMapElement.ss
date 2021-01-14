<% require javascript('_resources/themes/kartik/dist/javascript/googlemap.js') %>
<div class="element google-map">
    <div class="googlemap" data-mapid="$ID"></div>
    <div class="google-map-error alert alert-danger mt-3 d-none" role="alert">
        Error loading google map. Try refreshing...
    </div>
</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBA1_8CQ8CZfGldwFCSQiNL8t0RGJWcaPg&callback=initMap"></script>
