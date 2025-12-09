<!DOCTYPE html>
<html style="font-size:0.875em" lang="en">

<head>
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../../assets/img/favicon/pemkab.png" sizes="180x180">
    <link rel="icon" href="../../assets/img/favicon/pemkab.png" sizes="32x32" type="image/png">
    <link rel="icon" href="../../assets/img/favicon/pemkab.png" sizes="16x16" type="image/png">

    <link rel="mask-icon" href="../../assets/img/favicon/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="../../assets/img/favicon/pemkab.ico">
    <meta name="msapplication-config" content="../../assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

    <!-- Apex Charts -->
    <link type="text/css" href="/vendor/apexcharts/apexcharts.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Datepicker -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker-bs4.min.css">

    <!-- Fontawesome -->
    <link type="text/css" href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Sweet Alert -->
    <link type="text/css" href="/vendor/sweetalert2/sweetalert2.min.css" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="/vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="/css/volt.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css') }}/css/L.Control.Layers.Tree.css"> --}}
    <link rel="stylesheet" href="{{ asset('/css/qgis2web.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/fontawesome-all.min.css') }}">
    <style>
        html,
        body,
        .map-ataslagi,
        .map-atas,
        .map,
        #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
    </style>

</head>

<body>
    <div class="d-flex flex-column min-vh-100 map-ataslagi">
        <main class="container my-4 flex-grow-1 map-atas">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="d-flex gap-2">
                    <button id="locate-me" class="btn btn-primary">
                        <i class="fas fa-location-arrow me-2"></i>Logina
                    </button>
                </div>
            </div>
            <div class="bg-white p-3 rounded shadow mb-4 map">
                <div id="map"></div>
            </div>
        </main>
    </div>
    <script src="{{ asset('js/js/qgis2web_expressions.js') }}"></script>
    <script src="{{ asset('/js/js/leaflet.js') }}"></script>
    <script src="{{ asset('/js/js/L.Control.Layers.Tree.min.js') }}"></script>
    <script src="{{ asset('/js/js/multi-style-layer.js') }}"></script>
    <script src="{{ asset('/js/js/leaflet.rotatedMarker.js') }}"></script>
    <script src="{{ asset('/js/js/leaflet.pattern.js') }}"></script>
    <script src="{{ asset('/js/js/leaflet-hash.js') }}"></script>
    <script src="{{ asset('/js/js/Autolinker.min.js') }}"></script>
    <script src="{{ asset('/js/js/rbush.min.js') }}"></script>
    <script src="{{ asset('/js/js/labelgun.min.js') }}"></script>
    <script src="{{ asset('/js/js/labels.js') }}"></script>
    <script src="{{ asset('/js/data/SUMBERASIHJADI_0.js') }}"></script>
    <script src="{{ asset('/js/data/KRAKSAANJADI_1.js') }}"></script>
    <script src="{{ asset('/js/data/kotaprobbaru_2.js') }}"></script>
    <script src="{{ asset('/js/data/SUKARUPA_3.js') }}"></script>
    <script src="{{ asset('/js/data/LUMBANGJADI_4.js') }}"></script>
    <script src="{{ asset('/js/data/WONOMERTOJADI_5.js') }}"></script>
    <script src="{{ asset('/js/data/BANTARANJADI_6.js') }}"></script>
    <script src="{{ asset('/js/data/LECESJADI_7.js') }}"></script>
    <script src="{{ asset('/js/data/PEJARAKANJADI_8.js') }}"></script>
    <script src="{{ asset('/js/data/KREJENGANJADI_9.js') }}"></script>
    <script src="{{ asset('/js/data/BESUKJADI_10.js') }}"></script>
    <script src="{{ asset('/js/data/KOTAANYARJADI_11.js') }}"></script>
    <script src="{{ asset('/js/data/KRUCILJADI_12.js') }}"></script>
    <script src="{{ asset('/js/data/GENDINGJADI_13.js') }}"></script>
    <script src="{{ asset('/js/data/DRINGUJADI_14.js') }}"></script>
    <script src="{{ asset('/js/data/TEGALSIWALANJADI_15.js') }}"></script>
    <script src="{{ asset('/js/data/TONGASJADI_16.js') }}"></script>
    <script src="{{ asset('/js/data/PAITONJADI_17.js') }}"></script>
    <script src="{{ asset('/js/data/SUMBERJADI_18.js') }}"></script>
    <script src="{{ asset('/js/data/KURIPANJADI_19.js') }}"></script>
    <script src="{{ asset('/js/data/PKMBANYUANYAR_20.js') }}"></script>
    <script src="{{ asset('/js/data/PKMKLENANGKIDUL_21.js') }}"></script>
    <script src="{{ asset('/js/data/PKMTIRIS_22.js') }}"></script>
    <script src="{{ asset('/js/data/PKMRANUGEDANG_23.js') }}"></script>
    <script src="{{ asset('/js/data/PKMWANGKAL_24.js') }}"></script>
    <script src="{{ asset('/js/data/PKMCONDONG_25.js') }}"></script>
    <script src="{{ asset('/js/data/PKMSUKO_26.js') }}"></script>
    <script src="{{ asset('/js/data/PKMMARON_27.js') }}"></script>
    <script src="{{ asset('/js/data/PANTURA_28.js') }}"></script>
    <script src="{{ asset('/js/data/PKMGLAGAH_29.js') }}"></script>
    <script src="{{ asset('/js/data/PKMPAKUNIRANBENAR_30.js') }}"></script>
    <script>
        var map = L.map('map', {
            zoomControl: false,
            maxZoom: 28,
            minZoom: 1
        }).fitBounds([
            [-8.071008085761928, 112.92364489857603],
            [-7.630874924412187, 113.6410619515761]
        ]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix(
            '<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>'
        );
        var autolinker = new Autolinker({
            truncate: {
                length: 30,
                location: 'smart'
            }
        });
        // remove popup's row if "visible-with-data"
        function removeEmptyRowsFromPopupContent(content, feature) {
            var tempDiv = document.createElement('div');
            tempDiv.innerHTML = content;
            var rows = tempDiv.querySelectorAll('tr');
            for (var i = 0; i < rows.length; i++) {
                var td = rows[i].querySelector('td.visible-with-data');
                var key = td ? td.id : '';
                if (td && td.classList.contains('visible-with-data') && feature.properties[key] == null) {
                    rows[i].parentNode.removeChild(rows[i]);
                }
            }
            return tempDiv.innerHTML;
        }
        // add class to format popup if it contains media
        function addClassToPopupIfMedia(content, popup) {
            var tempDiv = document.createElement('div');
            tempDiv.innerHTML = content;
            if (tempDiv.querySelector('td img')) {
                popup._contentNode.classList.add('media');
                // Delay to force the redraw
                setTimeout(function() {
                    popup.update();
                }, 10);
            } else {
                popup._contentNode.classList.remove('media');
            }
        }
        var zoomControl = L.control.zoom({
            position: 'topleft'
        }).addTo(map);
        var bounds_group = new L.featureGroup([]);

        function setBounds() {}

        function pop_SUMBERASIHJADI_0(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_SUMBERASIHJADI_0_0() {
            return {
                pane: 'pane_SUMBERASIHJADI_0',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(221,224,228,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_SUMBERASIHJADI_0');
        map.getPane('pane_SUMBERASIHJADI_0').style.zIndex = 400;
        map.getPane('pane_SUMBERASIHJADI_0').style['mix-blend-mode'] = 'normal';
        var layer_SUMBERASIHJADI_0 = new L.geoJson(json_SUMBERASIHJADI_0, {
            attribution: '',
            interactive: true,
            dataVar: 'json_SUMBERASIHJADI_0',
            layerName: 'layer_SUMBERASIHJADI_0',
            pane: 'pane_SUMBERASIHJADI_0',
            onEachFeature: pop_SUMBERASIHJADI_0,
            style: style_SUMBERASIHJADI_0_0,
        });
        bounds_group.addLayer(layer_SUMBERASIHJADI_0);
        map.addLayer(layer_SUMBERASIHJADI_0);

        function pop_KRAKSAANJADI_1(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['RS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['RS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_KRAKSAANJADI_1_0() {
            return {
                pane: 'pane_KRAKSAANJADI_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(35,232,35,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KRAKSAANJADI_1');
        map.getPane('pane_KRAKSAANJADI_1').style.zIndex = 401;
        map.getPane('pane_KRAKSAANJADI_1').style['mix-blend-mode'] = 'normal';
        var layer_KRAKSAANJADI_1 = new L.geoJson(json_KRAKSAANJADI_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KRAKSAANJADI_1',
            layerName: 'layer_KRAKSAANJADI_1',
            pane: 'pane_KRAKSAANJADI_1',
            onEachFeature: pop_KRAKSAANJADI_1,
            style: style_KRAKSAANJADI_1_0,
        });
        bounds_group.addLayer(layer_KRAKSAANJADI_1);
        map.addLayer(layer_KRAKSAANJADI_1);

        function pop_kotaprobbaru_2(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        var pattern_kotaprobbaru_2_0 = new L.StripePattern({
            weight: 0.3,
            spaceWeight: 2.0,
            color: '#000000',
            opacity: 1.0,
            spaceOpacity: 0,
            angle: 315
        });
        pattern_kotaprobbaru_2_0.addTo(map);

        function style_kotaprobbaru_2_0() {
            return {
                pane: 'pane_kotaprobbaru_2',
                stroke: false,
                fillOpacity: 1,
                fillPattern: pattern_kotaprobbaru_2_0,
                interactive: true,
            }
        }

        function style_kotaprobbaru_2_1() {
            return {
                pane: 'pane_kotaprobbaru_2',
                opacity: 1,
                color: 'rgba(0,0,0,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 2.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_kotaprobbaru_2');
        map.getPane('pane_kotaprobbaru_2').style.zIndex = 402;
        map.getPane('pane_kotaprobbaru_2').style['mix-blend-mode'] = 'normal';
        var layer_kotaprobbaru_2 = new L.geoJson.multiStyle(json_kotaprobbaru_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_kotaprobbaru_2',
            layerName: 'layer_kotaprobbaru_2',
            pane: 'pane_kotaprobbaru_2',
            onEachFeature: pop_kotaprobbaru_2,
            styles: [style_kotaprobbaru_2_0, style_kotaprobbaru_2_1, ]
        });
        bounds_group.addLayer(layer_kotaprobbaru_2);
        map.addLayer(layer_kotaprobbaru_2);

        function pop_SUKARUPA_3(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_SUKARUPA_3_0() {
            return {
                pane: 'pane_SUKARUPA_3',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(221,224,228,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_SUKARUPA_3');
        map.getPane('pane_SUKARUPA_3').style.zIndex = 403;
        map.getPane('pane_SUKARUPA_3').style['mix-blend-mode'] = 'normal';
        var layer_SUKARUPA_3 = new L.geoJson(json_SUKARUPA_3, {
            attribution: '',
            interactive: true,
            dataVar: 'json_SUKARUPA_3',
            layerName: 'layer_SUKARUPA_3',
            pane: 'pane_SUKARUPA_3',
            onEachFeature: pop_SUKARUPA_3,
            style: style_SUKARUPA_3_0,
        });
        bounds_group.addLayer(layer_SUKARUPA_3);
        map.addLayer(layer_SUKARUPA_3);

        function pop_LUMBANGJADI_4(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_LUMBANGJADI_4_0() {
            return {
                pane: 'pane_LUMBANGJADI_4',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(221,224,228,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_LUMBANGJADI_4');
        map.getPane('pane_LUMBANGJADI_4').style.zIndex = 404;
        map.getPane('pane_LUMBANGJADI_4').style['mix-blend-mode'] = 'normal';
        var layer_LUMBANGJADI_4 = new L.geoJson(json_LUMBANGJADI_4, {
            attribution: '',
            interactive: true,
            dataVar: 'json_LUMBANGJADI_4',
            layerName: 'layer_LUMBANGJADI_4',
            pane: 'pane_LUMBANGJADI_4',
            onEachFeature: pop_LUMBANGJADI_4,
            style: style_LUMBANGJADI_4_0,
        });
        bounds_group.addLayer(layer_LUMBANGJADI_4);
        map.addLayer(layer_LUMBANGJADI_4);

        function pop_WONOMERTOJADI_5(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_WONOMERTOJADI_5_0() {
            return {
                pane: 'pane_WONOMERTOJADI_5',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(221,224,228,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_WONOMERTOJADI_5');
        map.getPane('pane_WONOMERTOJADI_5').style.zIndex = 405;
        map.getPane('pane_WONOMERTOJADI_5').style['mix-blend-mode'] = 'normal';
        var layer_WONOMERTOJADI_5 = new L.geoJson(json_WONOMERTOJADI_5, {
            attribution: '',
            interactive: true,
            dataVar: 'json_WONOMERTOJADI_5',
            layerName: 'layer_WONOMERTOJADI_5',
            pane: 'pane_WONOMERTOJADI_5',
            onEachFeature: pop_WONOMERTOJADI_5,
            style: style_WONOMERTOJADI_5_0,
        });
        bounds_group.addLayer(layer_WONOMERTOJADI_5);
        map.addLayer(layer_WONOMERTOJADI_5);

        function pop_BANTARANJADI_6(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_BANTARANJADI_6_0() {
            return {
                pane: 'pane_BANTARANJADI_6',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(221,224,228,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_BANTARANJADI_6');
        map.getPane('pane_BANTARANJADI_6').style.zIndex = 406;
        map.getPane('pane_BANTARANJADI_6').style['mix-blend-mode'] = 'normal';
        var layer_BANTARANJADI_6 = new L.geoJson(json_BANTARANJADI_6, {
            attribution: '',
            interactive: true,
            dataVar: 'json_BANTARANJADI_6',
            layerName: 'layer_BANTARANJADI_6',
            pane: 'pane_BANTARANJADI_6',
            onEachFeature: pop_BANTARANJADI_6,
            style: style_BANTARANJADI_6_0,
        });
        bounds_group.addLayer(layer_BANTARANJADI_6);
        map.addLayer(layer_BANTARANJADI_6);

        function pop_LECESJADI_7(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_LECESJADI_7_0() {
            return {
                pane: 'pane_LECESJADI_7',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(221,224,228,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_LECESJADI_7');
        map.getPane('pane_LECESJADI_7').style.zIndex = 407;
        map.getPane('pane_LECESJADI_7').style['mix-blend-mode'] = 'normal';
        var layer_LECESJADI_7 = new L.geoJson(json_LECESJADI_7, {
            attribution: '',
            interactive: true,
            dataVar: 'json_LECESJADI_7',
            layerName: 'layer_LECESJADI_7',
            pane: 'pane_LECESJADI_7',
            onEachFeature: pop_LECESJADI_7,
            style: style_LECESJADI_7_0,
        });
        bounds_group.addLayer(layer_LECESJADI_7);
        map.addLayer(layer_LECESJADI_7);

        function pop_PEJARAKANJADI_8(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_PEJARAKANJADI_8_0() {
            return {
                pane: 'pane_PEJARAKANJADI_8',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(221,224,228,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_PEJARAKANJADI_8');
        map.getPane('pane_PEJARAKANJADI_8').style.zIndex = 408;
        map.getPane('pane_PEJARAKANJADI_8').style['mix-blend-mode'] = 'normal';
        var layer_PEJARAKANJADI_8 = new L.geoJson(json_PEJARAKANJADI_8, {
            attribution: '',
            interactive: true,
            dataVar: 'json_PEJARAKANJADI_8',
            layerName: 'layer_PEJARAKANJADI_8',
            pane: 'pane_PEJARAKANJADI_8',
            onEachFeature: pop_PEJARAKANJADI_8,
            style: style_PEJARAKANJADI_8_0,
        });
        bounds_group.addLayer(layer_PEJARAKANJADI_8);
        map.addLayer(layer_PEJARAKANJADI_8);

        function pop_KREJENGANJADI_9(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_KREJENGANJADI_9_0() {
            return {
                pane: 'pane_KREJENGANJADI_9',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(221,224,228,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KREJENGANJADI_9');
        map.getPane('pane_KREJENGANJADI_9').style.zIndex = 409;
        map.getPane('pane_KREJENGANJADI_9').style['mix-blend-mode'] = 'normal';
        var layer_KREJENGANJADI_9 = new L.geoJson(json_KREJENGANJADI_9, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KREJENGANJADI_9',
            layerName: 'layer_KREJENGANJADI_9',
            pane: 'pane_KREJENGANJADI_9',
            onEachFeature: pop_KREJENGANJADI_9,
            style: style_KREJENGANJADI_9_0,
        });
        bounds_group.addLayer(layer_KREJENGANJADI_9);
        map.addLayer(layer_KREJENGANJADI_9);

        function pop_BESUKJADI_10(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_BESUKJADI_10_0() {
            return {
                pane: 'pane_BESUKJADI_10',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(221,224,228,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_BESUKJADI_10');
        map.getPane('pane_BESUKJADI_10').style.zIndex = 410;
        map.getPane('pane_BESUKJADI_10').style['mix-blend-mode'] = 'normal';
        var layer_BESUKJADI_10 = new L.geoJson(json_BESUKJADI_10, {
            attribution: '',
            interactive: true,
            dataVar: 'json_BESUKJADI_10',
            layerName: 'layer_BESUKJADI_10',
            pane: 'pane_BESUKJADI_10',
            onEachFeature: pop_BESUKJADI_10,
            style: style_BESUKJADI_10_0,
        });
        bounds_group.addLayer(layer_BESUKJADI_10);
        map.addLayer(layer_BESUKJADI_10);

        function pop_KOTAANYARJADI_11(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_KOTAANYARJADI_11_0() {
            return {
                pane: 'pane_KOTAANYARJADI_11',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(221,224,228,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KOTAANYARJADI_11');
        map.getPane('pane_KOTAANYARJADI_11').style.zIndex = 411;
        map.getPane('pane_KOTAANYARJADI_11').style['mix-blend-mode'] = 'normal';
        var layer_KOTAANYARJADI_11 = new L.geoJson(json_KOTAANYARJADI_11, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KOTAANYARJADI_11',
            layerName: 'layer_KOTAANYARJADI_11',
            pane: 'pane_KOTAANYARJADI_11',
            onEachFeature: pop_KOTAANYARJADI_11,
            style: style_KOTAANYARJADI_11_0,
        });
        bounds_group.addLayer(layer_KOTAANYARJADI_11);
        map.addLayer(layer_KOTAANYARJADI_11);

        function pop_KRUCILJADI_12(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_KRUCILJADI_12_0() {
            return {
                pane: 'pane_KRUCILJADI_12',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(35,232,35,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KRUCILJADI_12');
        map.getPane('pane_KRUCILJADI_12').style.zIndex = 412;
        map.getPane('pane_KRUCILJADI_12').style['mix-blend-mode'] = 'normal';
        var layer_KRUCILJADI_12 = new L.geoJson(json_KRUCILJADI_12, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KRUCILJADI_12',
            layerName: 'layer_KRUCILJADI_12',
            pane: 'pane_KRUCILJADI_12',
            onEachFeature: pop_KRUCILJADI_12,
            style: style_KRUCILJADI_12_0,
        });
        bounds_group.addLayer(layer_KRUCILJADI_12);
        map.addLayer(layer_KRUCILJADI_12);

        function pop_GENDINGJADI_13(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_GENDINGJADI_13_0() {
            return {
                pane: 'pane_GENDINGJADI_13',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(35,232,35,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_GENDINGJADI_13');
        map.getPane('pane_GENDINGJADI_13').style.zIndex = 413;
        map.getPane('pane_GENDINGJADI_13').style['mix-blend-mode'] = 'normal';
        var layer_GENDINGJADI_13 = new L.geoJson(json_GENDINGJADI_13, {
            attribution: '',
            interactive: true,
            dataVar: 'json_GENDINGJADI_13',
            layerName: 'layer_GENDINGJADI_13',
            pane: 'pane_GENDINGJADI_13',
            onEachFeature: pop_GENDINGJADI_13,
            style: style_GENDINGJADI_13_0,
        });
        bounds_group.addLayer(layer_GENDINGJADI_13);
        map.addLayer(layer_GENDINGJADI_13);

        function pop_DRINGUJADI_14(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['RS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['RS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_DRINGUJADI_14_0() {
            return {
                pane: 'pane_DRINGUJADI_14',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(35,232,35,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_DRINGUJADI_14');
        map.getPane('pane_DRINGUJADI_14').style.zIndex = 414;
        map.getPane('pane_DRINGUJADI_14').style['mix-blend-mode'] = 'normal';
        var layer_DRINGUJADI_14 = new L.geoJson(json_DRINGUJADI_14, {
            attribution: '',
            interactive: true,
            dataVar: 'json_DRINGUJADI_14',
            layerName: 'layer_DRINGUJADI_14',
            pane: 'pane_DRINGUJADI_14',
            onEachFeature: pop_DRINGUJADI_14,
            style: style_DRINGUJADI_14_0,
        });
        bounds_group.addLayer(layer_DRINGUJADI_14);
        map.addLayer(layer_DRINGUJADI_14);

        function pop_TEGALSIWALANJADI_15(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_TEGALSIWALANJADI_15_0() {
            return {
                pane: 'pane_TEGALSIWALANJADI_15',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(35,232,35,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_TEGALSIWALANJADI_15');
        map.getPane('pane_TEGALSIWALANJADI_15').style.zIndex = 415;
        map.getPane('pane_TEGALSIWALANJADI_15').style['mix-blend-mode'] = 'normal';
        var layer_TEGALSIWALANJADI_15 = new L.geoJson(json_TEGALSIWALANJADI_15, {
            attribution: '',
            interactive: true,
            dataVar: 'json_TEGALSIWALANJADI_15',
            layerName: 'layer_TEGALSIWALANJADI_15',
            pane: 'pane_TEGALSIWALANJADI_15',
            onEachFeature: pop_TEGALSIWALANJADI_15,
            style: style_TEGALSIWALANJADI_15_0,
        });
        bounds_group.addLayer(layer_TEGALSIWALANJADI_15);
        map.addLayer(layer_TEGALSIWALANJADI_15);

        function pop_TONGASJADI_16(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['RS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['RS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_TONGASJADI_16_0() {
            return {
                pane: 'pane_TONGASJADI_16',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(35,232,35,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_TONGASJADI_16');
        map.getPane('pane_TONGASJADI_16').style.zIndex = 416;
        map.getPane('pane_TONGASJADI_16').style['mix-blend-mode'] = 'normal';
        var layer_TONGASJADI_16 = new L.geoJson(json_TONGASJADI_16, {
            attribution: '',
            interactive: true,
            dataVar: 'json_TONGASJADI_16',
            layerName: 'layer_TONGASJADI_16',
            pane: 'pane_TONGASJADI_16',
            onEachFeature: pop_TONGASJADI_16,
            style: style_TONGASJADI_16_0,
        });
        bounds_group.addLayer(layer_TONGASJADI_16);
        map.addLayer(layer_TONGASJADI_16);

        function pop_PAITONJADI_17(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['RS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['RS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_PAITONJADI_17_0() {
            return {
                pane: 'pane_PAITONJADI_17',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(35,232,35,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_PAITONJADI_17');
        map.getPane('pane_PAITONJADI_17').style.zIndex = 417;
        map.getPane('pane_PAITONJADI_17').style['mix-blend-mode'] = 'normal';
        var layer_PAITONJADI_17 = new L.geoJson(json_PAITONJADI_17, {
            attribution: '',
            interactive: true,
            dataVar: 'json_PAITONJADI_17',
            layerName: 'layer_PAITONJADI_17',
            pane: 'pane_PAITONJADI_17',
            onEachFeature: pop_PAITONJADI_17,
            style: style_PAITONJADI_17_0,
        });
        bounds_group.addLayer(layer_PAITONJADI_17);
        map.addLayer(layer_PAITONJADI_17);

        function pop_SUMBERJADI_18(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_SUMBERJADI_18_0() {
            return {
                pane: 'pane_SUMBERJADI_18',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(221,224,228,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_SUMBERJADI_18');
        map.getPane('pane_SUMBERJADI_18').style.zIndex = 418;
        map.getPane('pane_SUMBERJADI_18').style['mix-blend-mode'] = 'normal';
        var layer_SUMBERJADI_18 = new L.geoJson(json_SUMBERJADI_18, {
            attribution: '',
            interactive: true,
            dataVar: 'json_SUMBERJADI_18',
            layerName: 'layer_SUMBERJADI_18',
            pane: 'pane_SUMBERJADI_18',
            onEachFeature: pop_SUMBERJADI_18,
            style: style_SUMBERJADI_18_0,
        });
        bounds_group.addLayer(layer_SUMBERJADI_18);
        map.addLayer(layer_SUMBERJADI_18);

        function pop_KURIPANJADI_19(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_KURIPANJADI_19_0() {
            return {
                pane: 'pane_KURIPANJADI_19',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(221,224,228,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KURIPANJADI_19');
        map.getPane('pane_KURIPANJADI_19').style.zIndex = 419;
        map.getPane('pane_KURIPANJADI_19').style['mix-blend-mode'] = 'normal';
        var layer_KURIPANJADI_19 = new L.geoJson(json_KURIPANJADI_19, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KURIPANJADI_19',
            layerName: 'layer_KURIPANJADI_19',
            pane: 'pane_KURIPANJADI_19',
            onEachFeature: pop_KURIPANJADI_19,
            style: style_KURIPANJADI_19_0,
        });
        bounds_group.addLayer(layer_KURIPANJADI_19);
        map.addLayer(layer_KURIPANJADI_19);

        function pop_PKMBANYUANYAR_20(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_PKMBANYUANYAR_20_0() {
            return {
                pane: 'pane_PKMBANYUANYAR_20',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(213,180,60,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_PKMBANYUANYAR_20');
        map.getPane('pane_PKMBANYUANYAR_20').style.zIndex = 420;
        map.getPane('pane_PKMBANYUANYAR_20').style['mix-blend-mode'] = 'normal';
        var layer_PKMBANYUANYAR_20 = new L.geoJson(json_PKMBANYUANYAR_20, {
            attribution: '',
            interactive: true,
            dataVar: 'json_PKMBANYUANYAR_20',
            layerName: 'layer_PKMBANYUANYAR_20',
            pane: 'pane_PKMBANYUANYAR_20',
            onEachFeature: pop_PKMBANYUANYAR_20,
            style: style_PKMBANYUANYAR_20_0,
        });
        bounds_group.addLayer(layer_PKMBANYUANYAR_20);
        map.addLayer(layer_PKMBANYUANYAR_20);

        function pop_PKMKLENANGKIDUL_21(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_PKMKLENANGKIDUL_21_0() {
            return {
                pane: 'pane_PKMKLENANGKIDUL_21',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(145,82,45,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_PKMKLENANGKIDUL_21');
        map.getPane('pane_PKMKLENANGKIDUL_21').style.zIndex = 421;
        map.getPane('pane_PKMKLENANGKIDUL_21').style['mix-blend-mode'] = 'normal';
        var layer_PKMKLENANGKIDUL_21 = new L.geoJson(json_PKMKLENANGKIDUL_21, {
            attribution: '',
            interactive: true,
            dataVar: 'json_PKMKLENANGKIDUL_21',
            layerName: 'layer_PKMKLENANGKIDUL_21',
            pane: 'pane_PKMKLENANGKIDUL_21',
            onEachFeature: pop_PKMKLENANGKIDUL_21,
            style: style_PKMKLENANGKIDUL_21_0,
        });
        bounds_group.addLayer(layer_PKMKLENANGKIDUL_21);
        map.addLayer(layer_PKMKLENANGKIDUL_21);

        function pop_PKMTIRIS_22(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_PKMTIRIS_22_0() {
            return {
                pane: 'pane_PKMTIRIS_22',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(183,72,75,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_PKMTIRIS_22');
        map.getPane('pane_PKMTIRIS_22').style.zIndex = 422;
        map.getPane('pane_PKMTIRIS_22').style['mix-blend-mode'] = 'normal';
        var layer_PKMTIRIS_22 = new L.geoJson(json_PKMTIRIS_22, {
            attribution: '',
            interactive: true,
            dataVar: 'json_PKMTIRIS_22',
            layerName: 'layer_PKMTIRIS_22',
            pane: 'pane_PKMTIRIS_22',
            onEachFeature: pop_PKMTIRIS_22,
            style: style_PKMTIRIS_22_0,
        });
        bounds_group.addLayer(layer_PKMTIRIS_22);
        map.addLayer(layer_PKMTIRIS_22);

        function pop_PKMRANUGEDANG_23(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_PKMRANUGEDANG_23_0() {
            return {
                pane: 'pane_PKMRANUGEDANG_23',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(243,166,178,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_PKMRANUGEDANG_23');
        map.getPane('pane_PKMRANUGEDANG_23').style.zIndex = 423;
        map.getPane('pane_PKMRANUGEDANG_23').style['mix-blend-mode'] = 'normal';
        var layer_PKMRANUGEDANG_23 = new L.geoJson(json_PKMRANUGEDANG_23, {
            attribution: '',
            interactive: true,
            dataVar: 'json_PKMRANUGEDANG_23',
            layerName: 'layer_PKMRANUGEDANG_23',
            pane: 'pane_PKMRANUGEDANG_23',
            onEachFeature: pop_PKMRANUGEDANG_23,
            style: style_PKMRANUGEDANG_23_0,
        });
        bounds_group.addLayer(layer_PKMRANUGEDANG_23);
        map.addLayer(layer_PKMRANUGEDANG_23);

        function pop_PKMWANGKAL_24(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_PKMWANGKAL_24_0() {
            return {
                pane: 'pane_PKMWANGKAL_24',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(196,60,57,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_PKMWANGKAL_24');
        map.getPane('pane_PKMWANGKAL_24').style.zIndex = 424;
        map.getPane('pane_PKMWANGKAL_24').style['mix-blend-mode'] = 'normal';
        var layer_PKMWANGKAL_24 = new L.geoJson(json_PKMWANGKAL_24, {
            attribution: '',
            interactive: true,
            dataVar: 'json_PKMWANGKAL_24',
            layerName: 'layer_PKMWANGKAL_24',
            pane: 'pane_PKMWANGKAL_24',
            onEachFeature: pop_PKMWANGKAL_24,
            style: style_PKMWANGKAL_24_0,
        });
        bounds_group.addLayer(layer_PKMWANGKAL_24);
        map.addLayer(layer_PKMWANGKAL_24);

        function pop_PKMCONDONG_25(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_PKMCONDONG_25_0() {
            return {
                pane: 'pane_PKMCONDONG_25',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(231,113,72,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_PKMCONDONG_25');
        map.getPane('pane_PKMCONDONG_25').style.zIndex = 425;
        map.getPane('pane_PKMCONDONG_25').style['mix-blend-mode'] = 'normal';
        var layer_PKMCONDONG_25 = new L.geoJson(json_PKMCONDONG_25, {
            attribution: '',
            interactive: true,
            dataVar: 'json_PKMCONDONG_25',
            layerName: 'layer_PKMCONDONG_25',
            pane: 'pane_PKMCONDONG_25',
            onEachFeature: pop_PKMCONDONG_25,
            style: style_PKMCONDONG_25_0,
        });
        bounds_group.addLayer(layer_PKMCONDONG_25);
        map.addLayer(layer_PKMCONDONG_25);

        function pop_PKMSUKO_26(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_PKMSUKO_26_0() {
            return {
                pane: 'pane_PKMSUKO_26',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(213,180,60,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_PKMSUKO_26');
        map.getPane('pane_PKMSUKO_26').style.zIndex = 426;
        map.getPane('pane_PKMSUKO_26').style['mix-blend-mode'] = 'normal';
        var layer_PKMSUKO_26 = new L.geoJson(json_PKMSUKO_26, {
            attribution: '',
            interactive: true,
            dataVar: 'json_PKMSUKO_26',
            layerName: 'layer_PKMSUKO_26',
            pane: 'pane_PKMSUKO_26',
            onEachFeature: pop_PKMSUKO_26,
            style: style_PKMSUKO_26_0,
        });
        bounds_group.addLayer(layer_PKMSUKO_26);
        map.addLayer(layer_PKMSUKO_26);

        function pop_PKMMARON_27(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_PKMMARON_27_0() {
            return {
                pane: 'pane_PKMMARON_27',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(145,82,45,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_PKMMARON_27');
        map.getPane('pane_PKMMARON_27').style.zIndex = 427;
        map.getPane('pane_PKMMARON_27').style['mix-blend-mode'] = 'normal';
        var layer_PKMMARON_27 = new L.geoJson(json_PKMMARON_27, {
            attribution: '',
            interactive: true,
            dataVar: 'json_PKMMARON_27',
            layerName: 'layer_PKMMARON_27',
            pane: 'pane_PKMMARON_27',
            onEachFeature: pop_PKMMARON_27,
            style: style_PKMMARON_27_0,
        });
        bounds_group.addLayer(layer_PKMMARON_27);
        map.addLayer(layer_PKMMARON_27);

        function pop_PANTURA_28(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['osm_id'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['osm_id']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['code'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['code']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['fclass'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['fclass']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['name'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['name']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['ref'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['ref']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['oneway'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['oneway']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['maxspeed'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['maxspeed']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['layer'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['layer']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['bridge'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['bridge']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['tunnel'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['tunnel']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_PANTURA_28_0() {
            return {
                pane: 'pane_PANTURA_28',
                opacity: 1,
                color: 'rgba(207,28,204,1.0)',
                dashArray: '12.0,6.0',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 3.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_PANTURA_28');
        map.getPane('pane_PANTURA_28').style.zIndex = 428;
        map.getPane('pane_PANTURA_28').style['mix-blend-mode'] = 'normal';
        var layer_PANTURA_28 = new L.geoJson(json_PANTURA_28, {
            attribution: '',
            interactive: true,
            dataVar: 'json_PANTURA_28',
            layerName: 'layer_PANTURA_28',
            pane: 'pane_PANTURA_28',
            onEachFeature: pop_PANTURA_28,
            style: style_PANTURA_28_0,
        });
        bounds_group.addLayer(layer_PANTURA_28);
        map.addLayer(layer_PANTURA_28);

        function pop_PKMGLAGAH_29(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_PKMGLAGAH_29_0() {
            return {
                pane: 'pane_PKMGLAGAH_29',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(183,72,75,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_PKMGLAGAH_29');
        map.getPane('pane_PKMGLAGAH_29').style.zIndex = 429;
        map.getPane('pane_PKMGLAGAH_29').style['mix-blend-mode'] = 'normal';
        var layer_PKMGLAGAH_29 = new L.geoJson(json_PKMGLAGAH_29, {
            attribution: '',
            interactive: true,
            dataVar: 'json_PKMGLAGAH_29',
            layerName: 'layer_PKMGLAGAH_29',
            pane: 'pane_PKMGLAGAH_29',
            onEachFeature: pop_PKMGLAGAH_29,
            style: style_PKMGLAGAH_29_0,
        });
        bounds_group.addLayer(layer_PKMGLAGAH_29);
        map.addLayer(layer_PKMGLAGAH_29);

        function pop_PKMPAKUNIRANBENAR_30(feature, layer) {
            var popupContent = '<table>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['OBJECTID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['OBJECTID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['NAMOBJ']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['FCODE']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['REMARK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['METADATA']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['SRS_ID']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDBBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDBBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDCPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDCPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDEPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDEPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPBPS'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPBPS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPKAB'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPKAB']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['KDPPUM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['KDPPUM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUASWH'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['LUASWH']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['TIPADM'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['TIPADM']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WADMPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKC'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKC']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKK'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKK']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADPR'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADPR']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['WIADKD'] !== null ? autolinker
                .link(
                    String(
                        feature
                        .properties['WIADKD']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['UUPP'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['UUPP']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                            <tr>\
                                                <td colspan="2">' + (feature.properties['LUAS'] !== null ? autolinker.link(
                String(
                    feature
                    .properties['LUAS']).replace(/'/g, '\'').toLocaleString()) : '') + '</td>\
                                            </tr>\
                                        </table>';
            var content = removeEmptyRowsFromPopupContent(popupContent, feature);
            layer.on('popupopen', function(e) {
                addClassToPopupIfMedia(content, e.popup);
            });
            layer.bindPopup(content, {
                maxHeight: 400
            });
        }

        function style_PKMPAKUNIRANBENAR_30_0() {
            return {
                pane: 'pane_PKMPAKUNIRANBENAR_30',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(243,166,178,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_PKMPAKUNIRANBENAR_30');
        map.getPane('pane_PKMPAKUNIRANBENAR_30').style.zIndex = 430;
        map.getPane('pane_PKMPAKUNIRANBENAR_30').style['mix-blend-mode'] = 'normal';
        var layer_PKMPAKUNIRANBENAR_30 = new L.geoJson(json_PKMPAKUNIRANBENAR_30, {
            attribution: '',
            interactive: true,
            dataVar: 'json_PKMPAKUNIRANBENAR_30',
            layerName: 'layer_PKMPAKUNIRANBENAR_30',
            pane: 'pane_PKMPAKUNIRANBENAR_30',
            onEachFeature: pop_PKMPAKUNIRANBENAR_30,
            style: style_PKMPAKUNIRANBENAR_30_0,
        });
        bounds_group.addLayer(layer_PKMPAKUNIRANBENAR_30);
        map.addLayer(layer_PKMPAKUNIRANBENAR_30);
        setBounds();
        var i = 0;
        layer_KRAKSAANJADI_1.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((exp_label_KRAKSAANJADI_1_eval_expression(context) !== null ? String(
                '<div style="color: #323232; font-size: 10pt; font-family: \'Open Sans\', sans-serif;">' +
                exp_label_KRAKSAANJADI_1_eval_expression(context)) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_KRAKSAANJADI_1'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        var i = 0;
        layer_KRUCILJADI_12.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['WADMKC'] !== null ? String(
                '<div style="color: #323232; font-size: 10pt; font-family: \'Open Sans\', sans-serif;">' +
                layer.feature.properties['WADMKC']) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_KRUCILJADI_12'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        var i = 0;
        layer_GENDINGJADI_13.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['WADMKC'] !== null ? String(
                '<div style="color: #323232; font-size: 10pt; font-family: \'Open Sans\', sans-serif;">' +
                layer.feature.properties['WADMKC']) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_GENDINGJADI_13'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        var i = 0;
        layer_DRINGUJADI_14.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((exp_label_DRINGUJADI_14_eval_expression(context) !== null ? String(
                '<div style="color: #323232; font-size: 10pt; font-family: \'Open Sans\', sans-serif;">' +
                exp_label_DRINGUJADI_14_eval_expression(context)) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_DRINGUJADI_14'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        var i = 0;
        layer_TEGALSIWALANJADI_15.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['WADMKC'] !== null ? String(
                '<div style="color: #323232; font-size: 10pt; font-family: \'Open Sans\', sans-serif;">' +
                layer.feature.properties['WADMKC']) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_TEGALSIWALANJADI_15'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        var i = 0;
        layer_TONGASJADI_16.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((exp_label_TONGASJADI_16_eval_expression(context) !== null ? String(
                '<div style="color: #323232; font-size: 10pt; font-family: \'Open Sans\', sans-serif;">' +
                exp_label_TONGASJADI_16_eval_expression(context)) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_TONGASJADI_16'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        var i = 0;
        layer_PAITONJADI_17.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((exp_label_PAITONJADI_17_eval_expression(context) !== null ? String(
                '<div style="color: #323232; font-size: 10pt; font-family: \'Open Sans\', sans-serif;">' +
                exp_label_PAITONJADI_17_eval_expression(context)) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_PAITONJADI_17'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        var i = 0;
        layer_PKMBANYUANYAR_20.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['NAMOBJ'] !== null ? String(
                '<div style="color: #323232; font-size: 10pt; font-family: \'Open Sans\', sans-serif;">' +
                layer.feature.properties['NAMOBJ']) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_PKMBANYUANYAR_20'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        var i = 0;
        layer_PKMKLENANGKIDUL_21.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['NAMOBJ'] !== null ? String(
                '<div style="color: #323232; font-size: 10pt; font-family: \'Open Sans\', sans-serif;">' +
                layer.feature.properties['NAMOBJ']) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_PKMKLENANGKIDUL_21'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        var i = 0;
        layer_PKMTIRIS_22.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['NAMOBJ'] !== null ? String(
                '<div style="color: #323232; font-size: 10pt; font-family: \'Open Sans\', sans-serif;">' +
                layer.feature.properties['NAMOBJ']) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_PKMTIRIS_22'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        var i = 0;
        layer_PKMRANUGEDANG_23.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['NAMOBJ'] !== null ? String(
                '<div style="color: #323232; font-size: 10pt; font-family: \'Open Sans\', sans-serif;">' +
                layer.feature.properties['NAMOBJ']) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_PKMRANUGEDANG_23'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        var i = 0;
        layer_PKMWANGKAL_24.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['NAMOBJ'] !== null ? String(
                '<div style="color: #323232; font-size: 10pt; font-family: \'Open Sans\', sans-serif;">' +
                layer.feature.properties['NAMOBJ']) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_PKMWANGKAL_24'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        var i = 0;
        layer_PKMCONDONG_25.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['NAMOBJ'] !== null ? String(
                '<div style="color: #323232; font-size: 10pt; font-family: \'Open Sans\', sans-serif;">' +
                layer.feature.properties['NAMOBJ']) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_PKMCONDONG_25'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        var i = 0;
        layer_PKMSUKO_26.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['NAMOBJ'] !== null ? String(
                '<div style="color: #323232; font-size: 10pt; font-family: \'Open Sans\', sans-serif;">' +
                layer.feature.properties['NAMOBJ']) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_PKMSUKO_26'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        var i = 0;
        layer_PKMMARON_27.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['NAMOBJ'] !== null ? String(
                '<div style="color: #323232; font-size: 10pt; font-family: \'Open Sans\', sans-serif;">' +
                layer.feature.properties['NAMOBJ']) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_PKMMARON_27'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        resetLabels([layer_KRAKSAANJADI_1, layer_KRUCILJADI_12, layer_GENDINGJADI_13, layer_DRINGUJADI_14,
            layer_TEGALSIWALANJADI_15, layer_TONGASJADI_16, layer_PAITONJADI_17, layer_PKMBANYUANYAR_20,
            layer_PKMKLENANGKIDUL_21, layer_PKMTIRIS_22, layer_PKMRANUGEDANG_23, layer_PKMWANGKAL_24,
            layer_PKMCONDONG_25, layer_PKMSUKO_26, layer_PKMMARON_27
        ]);
        map.on("zoomend", function() {
            resetLabels([layer_KRAKSAANJADI_1, layer_KRUCILJADI_12, layer_GENDINGJADI_13, layer_DRINGUJADI_14,
                layer_TEGALSIWALANJADI_15, layer_TONGASJADI_16, layer_PAITONJADI_17, layer_PKMBANYUANYAR_20,
                layer_PKMKLENANGKIDUL_21, layer_PKMTIRIS_22, layer_PKMRANUGEDANG_23, layer_PKMWANGKAL_24,
                layer_PKMCONDONG_25, layer_PKMSUKO_26, layer_PKMMARON_27
            ]);
        });
        map.on("layeradd", function() {
            resetLabels([layer_KRAKSAANJADI_1, layer_KRUCILJADI_12, layer_GENDINGJADI_13, layer_DRINGUJADI_14,
                layer_TEGALSIWALANJADI_15, layer_TONGASJADI_16, layer_PAITONJADI_17, layer_PKMBANYUANYAR_20,
                layer_PKMKLENANGKIDUL_21, layer_PKMTIRIS_22, layer_PKMRANUGEDANG_23, layer_PKMWANGKAL_24,
                layer_PKMCONDONG_25, layer_PKMSUKO_26, layer_PKMMARON_27
            ]);
        });
        map.on("layerremove", function() {
            resetLabels([layer_KRAKSAANJADI_1, layer_KRUCILJADI_12, layer_GENDINGJADI_13, layer_DRINGUJADI_14,
                layer_TEGALSIWALANJADI_15, layer_TONGASJADI_16, layer_PAITONJADI_17, layer_PKMBANYUANYAR_20,
                layer_PKMKLENANGKIDUL_21, layer_PKMTIRIS_22, layer_PKMRANUGEDANG_23, layer_PKMWANGKAL_24,
                layer_PKMCONDONG_25, layer_PKMSUKO_26, layer_PKMMARON_27
            ]);
        });
    </script>


</body>

</html>
