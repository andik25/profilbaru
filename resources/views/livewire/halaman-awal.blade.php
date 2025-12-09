    <div class="d-flex flex-column min-vh-100 map-ataslagi">
        <!-- Main Content -->
        <div class="container my-2">
            <div class="d-flex gap-2">
                <a href="{{ route('login') }}" class="btn btn-primary">
                    <i class="fas fa-sign-in-alt me-2"></i>Profilkes
                </a>
                <a href="#" class="btn btn-primary">
                    <i class="fas fa-sign-in-alt me-2"></i>Mojang
                </a>
                <a href="#" class="btn btn-primary">
                    <i class="fas fa-sign-in-alt me-2"></i>Simpus EVO
                </a>
                <a href="#" class="btn btn-primary">
                    <i class="fas fa-sign-in-alt me-2"></i>SIPD - Perencanaan
                </a>
                <a href="#" class="btn btn-primary">
                    <i class="fas fa-sign-in-alt me-2"></i>SIPD - Penatausahaan
                </a>
                
            </div>
        </div>
        <main class="container my-2 flex-grow-1 map-atas">

            <!-- Map Container -->
            <div class="bg-white p-3 rounded shadow mb-4 map">
                <div id="map">

                </div>
            </div>

        </main>
        {{-- mulai map --}}

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

        {{-- selesai map --}}
    </div>
