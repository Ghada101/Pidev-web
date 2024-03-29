
    /**
    * @license
    * Copyright 2019 Google LLC. All Rights Reserved.
    * SPDX-License-Identifier: Apache-2.0
    */
    // [START maps_add_map]
    // Initialize and add the map
    function initMap() {
    // [START maps_add_map_instantiate_map]
    // The location of Uluru
    const uluru = { lat: 35.829300, lng: 10.640630 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 10,
    center: uluru,
});
    // [END maps_add_map_instantiate_map]
    // [START maps_add_map_instantiate_marker]
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
    position: uluru,
    map: map,
});
    // [END maps_add_map_instantiate_marker]
}

    window.initMap = initMap;
    // [END maps_add_map]
