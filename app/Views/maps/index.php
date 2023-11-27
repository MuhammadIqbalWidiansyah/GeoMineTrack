<?= $this->extend('layout') ?>

<?= $this->section('head') ?>
    <script src="<?= base_url('leaflet/leaflet.js') ?>"></script>
    <link rel="stylesheet" href="<?= base_url('leaflet/leaflet.css') ?>" />
    <style>
        #maps {
            height: 500px;
        }
    </style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1>Peta Pertambangan</h1>
<div id="maps"></div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    var map = L.map('maps').setView({ lat : 0.7893, lon : 113.9213}, 5);

// Replace {s} with a subdomain
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="https://openstreetmap.org/copyright">OpenStreetMap contributors</a>'
}).addTo(map);

// Pertambangan batu bara
L.marker({lat: -0.6833, lng: 100.7667}).bindPopup('Pertambangan Batu Bara, Sawahlunto').addTo(map);

// Pertambangan emas
L.marker({lat: -4.053, lng: 137.116}).bindPopup('Pertambangan Emas, Grasberg').addTo(map);

// Pertambangan Gas Alam
L.marker({lat: -1.6763419167174798, lng: 101.44411884235913}).bindPopup('Pertambangan Gas Alam, Natuna').addTo(map);

// Pertambangan minyak bumi
L.marker({lat: -6.661993087606927, lng: 106.58497854232911}).bindPopup('Pertambangan Emas, Pongkor').addTo(map);

// Pertambangan emas
L.marker({lat: -4.057360476654217, lng: 137.11493388465982}).bindPopup('Pertambangan Tembaga, Freeport').addTo(map);

</script>
<?= $this->endSection()?>