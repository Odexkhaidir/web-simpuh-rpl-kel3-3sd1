<x-filament::page>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/proj4js/2.7.5/proj4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/proj4leaflet/1.0.1/proj4leaflet.js"></script>
    <style>
        #map {
            height: 600px;
            width: 70vw;
            margin: 0 2.5vw;
            border-radius: 10px;
            border: 2px solid #ddd;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .info {
            padding: 6px 8px;
            font: 14px/16px Arial, Helvetica, sans-serif;
            background: white;
            background: rgba(255, 255, 255, 0.8);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }

        .info h4 {
            margin: 0 0 5px;
            color: #777;
        }

        .legend {
            line-height: 18px;
            color: #555;
        }

        .legend i {
            width: 18px;
            height: 18px;
            float: left;
            margin-right: 8px;
            opacity: 0.7;
        }

        .info-box {
            background-color: white;
        }

        .btn {
            padding: 5px 16px;
            margin-top: 10px;
            font-size: 14px;
            font-weight: 600;
            background-color: #3b82f6;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .btn:hover {
            background-color: #2563eb;
        }

        .btn-primary {
            background-color: #4CAF50;
        }
    </style>

    <div id="map"></div>
    <script src="{{ asset('js/geojson_desa.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var map = L.map('map').setView([-7.04, 109.624], 11);

            var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            function getColor(d) {
                return d > 1000 ? '#800026' :
                    d > 500 ? '#BD0026' :
                        d > 200 ? '#E31A1C' :
                            d > 100 ? '#FC4E2A' :
                                d > 50 ? '#FD8D3C' :
                                    d > 20 ? '#FEB24C' :
                                        d > 10 ? '#FED976' :
                                            '#FFEDA0';
            }

            function style(feature) {
                return {
                    fillColor: getColor(feature.properties.value),
                    weight: 2,
                    opacity: 1,
                    color: 'white',
                    dashArray: '3',
                    fillOpacity: 0.7
                };
            }

            var dataValues = {
                "Api-Api": 50
            };

            statesData.features.forEach(function (feature) {
                feature.properties.value = dataValues[feature.properties.NAMOBJ] || 0;
            });

            window.zoomToFeature = function (e) {
                map.fitBounds(e.target.getBounds());
            };

            function onEachFeature(feature, layer) {
                layer.on({
                    mouseover: function (e) {
                        e.target.setStyle({
                            weight: 5,
                            color: '#666',
                            fillOpacity: 0.9
                        });
                    },
                    mouseout: function (e) {
                        geojson.resetStyle(e.target);
                    },
                    click: function (e) {
                        var latlng = e.latlng;
                        L.popup()
                            .setLatLng(latlng)
                            .setContent(`<b>${feature.properties.NAMOBJ}</b><br>Value: ${feature.properties.value || 'No data'} <br> <button id="zoomButton" class="btn btn-primary">Lihat Selengkapnya</button>`)
                            .openOn(map);
                        document.getElementById('zoomButton').addEventListener('click', function () {
                            zoomToFeature(e);
                        });
                    }

                });
            }

            geojson = L.geoJson(statesData, {
                style: style,
                onEachFeature: onEachFeature
            }).addTo(map);

            var legend = L.control({ position: 'bottomright' });

            legend.onAdd = function (map) {

                var div = L.DomUtil.create('div', 'info legend'),
                    grades = [0, 10, 20, 50, 100, 200, 500, 1000],
                    labels = [];

                // loop through our density intervals and generate a label with a colored square for each interval
                for (var i = 0; i < grades.length; i++) {
                    div.innerHTML +=
                        '<i style="background:' + getColor(grades[i] + 1) + '"></i> ' +
                        grades[i] + (grades[i + 1] ? '&ndash;' + grades[i + 1] + '<br>' : '+');
                }

                return div;
            };

            legend.addTo(map);

            // Inisialisasi FeatureGroup untuk menyimpan layer hasil gambar
            var drawnItems = new L.FeatureGroup();
            map.addLayer(drawnItems);

            // Konfigurasi toolbar Leaflet.Draw
            var drawControl = new L.Control.Draw({
                edit: {
                    featureGroup: drawnItems
                },
                draw: {
                    polyline: true,
                    polygon: true,
                    circle: false,
                    rectangle: true,
                    marker: true,
                    circlemarker: false
                }
            });
            map.addControl(drawControl);

            // Event saat objek selesai digambar
            map.on(L.Draw.Event.CREATED, function (event) {
                var layer = event.layer;

                // Tambahkan layer ke FeatureGroup
                drawnItems.addLayer(layer);

                // Akses GeoJSON dari layer yang digambar
                var geoJson = layer.toGeoJSON();
                console.log("GeoJSON data:", geoJson);
                alert("Polygon atau bentuk berhasil digambar!");
            });
        });
    </script>

</x-filament::page>