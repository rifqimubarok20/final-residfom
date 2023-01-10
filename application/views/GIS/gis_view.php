<?php if (!defined('BASEPATH')) exit('No direct script acess allowed'); ?>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GIS Leaflet : <?= $title; ?></title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?= base_url('template/assets/css/bootstrap.css'); ?>" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?= base_url('template/assets/css/font-awesome.css'); ?>" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="<?= base_url('template/assets/css/custom.css'); ?>" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- LEAFLET -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?= base_url('template/assets/js/jquery-1.10.2.js'); ?>"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?= base_url('template/assets/js/bootstrap.min.js'); ?>"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?= base_url('template/assets/js/jquery.metisMenu.js'); ?>"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="<?= base_url('template/assets/js/custom.js'); ?>"></script>

    <!-- LEAFLET CONTROL SEARCH -->
    <link rel="stylesheet" href="<?= base_url('leaflet-search/src/leaflet-search.css'); ?>" />
    <script src="<?= base_url('leaflet-search/src/leaflet-search.js'); ?>"></script>

</head>

<style>
    html,
    body {
        height: 100%;
        margin: 0;
    }

    .leaflet-container {
        height: 600px;
        width: 1200px;
        max-width: 200%;
        max-height: 100%;
        margin-left: 2em;
    }

    #id {
        margin-left: 1em;
    }
</style>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-edit" style="color:green"> </i> Daftar Data User
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard'); ?>"><i class="fa fa-dashboard"></i>&nbsp; Dashboard</a></li>
            <li class="active"><i class="fa fa-file-text"></i>&nbsp; Daftar Data User</li>
        </ol>
    </section>
    <br>
    <div id="map" class="col-xs-15"></div>
</div>
</div>
<script>
    var data = [
        <?php foreach ($tps as $key => $value) { ?> {
                "lokasi": [<?= $value->latitude; ?>, <?= $value->longitude; ?>],
                "nama": "<?= $value->nama; ?>"
            },
        <?php } ?>
    ];

    var map = new L.Map('map', {
        zoom: 13,
        center: new L.latLng(-6.912988, 107.619465),
        zoomControl: false
    }); //set center from first location

    L.control.zoom({
        position: 'bottomright'
    }).addTo(map);

    map.addLayer(new L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1
    }));

    var icon1 = L.icon({
        iconUrl: '<?= base_url('icon/icon-marker.png'); ?>',

        iconSize: [30, 38], // size of the icon
        iconAnchor: [15, 35], // point of the icon which will correspond to marker's location
        popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    });

    // CONTROL SEARCH

    var markersLayer = new L.LayerGroup(); //layer contain searched elements

    map.addLayer(markersLayer);

    map.addControl(new L.Control.Search({
        position: 'topright',
        layer: markersLayer,
        initial: false,
        zoom: 20,
        collapsed: true
    }));


    ////////////populate map with markers from sample data
    for (i in data) {
        var nama = data[i].nama, //value searched
            lokasi = data[i].lokasi, //position found
            marker = new L.Marker(new L.latLng(lokasi), {
                title: nama,
                icon: icon1
            }); //se property searched
        marker.bindPopup('Nama Lokasi: ' + nama);
        markersLayer.addLayer(marker);
    }
</script>

</html>