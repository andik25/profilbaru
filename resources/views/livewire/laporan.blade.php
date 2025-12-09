<div>
    <title>Laporan</title>

    <div class="py-2">

        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <div class="mb-1">
                    <label for="exampleInputEmail1" class="form-label">Tabel</label>
                    <select class="form-select form-select-sm" wire:model.live="tabels" wire:change="ubahtabels">
                        <option value="">silahkan pilih tabel</option>
                        @foreach ($master_tabels as $mt)
                            <option value="{{ $mt->id }}">{{ $mt->judul_tabel }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3 mb-lg-0">
                <div class="mb-1">
                    <label for="exampleInputEmail1" class="form-label">Periode 1</label>
                    <select class="form-select form-select-sm" wire:model.live="periode"
                        wire:change="updateKeempatOptions">
                        <option value="">Silahkan pilih periode</option>
                        <option value="1">Bulanan</option>
                        <option value="2">Triwulan</option>
                        <option value="3">Semester</option>
                        <option value="4">Tahunan</option>
                    </select>
                </div>
            </div>
            
            <div class="mb-3 mb-lg-0">
                <div class="mb-1">
                    <label for="exampleInputEmail1" class="form-label">Periode 2</label>
                    <select class="form-select form-select-sm" wire:model.live="keempat" wire:change="ubahkeempat">
                        <option value="">Open this select menu</option>
                        @foreach ($keempatOptions as $option)
                            <option value="{{ $option['id'] }}">{{ $option['name'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="mb-3 mb-lg-0">
                <div class="mb-1">
                    <label for="exampleInputEmail1" class="form-label">Tipe</label>
                    <select class="form-select form-select-sm" wire:model.live="jenis">
                        <option value="">Open this select menu</option>
                        <option value="1">Komulatif</option>
                        <option value="2">Non Komulatif</option>
                    </select>
                </div>
            </div>
        </div>
    </div>


    <!-- Header Section -->
    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            @if ($data)
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <div></div>
                    <div class="btn-group gap-2">
                        <button wire:click="export" id="downloadExcel" class="download-btn btn-sm btn-success">
                            <i class="fas fa-file-excel me-2"></i> Excel
                        </button>
                        <button id="downloadPdf" class="download-btn btn-sm btn-danger">
                            <i class="fas fa-file-pdf me-2"></i> PDF
                        </button>
                        <button id="downloadPrint" class="download-btn btn-sm btn-primary">
                            <i class="fas fa-print me-2"></i> Print
                        </button>
                    </div>
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        @if ($data)
                            <tr>
                                <th class="text-wrap text-center align-middle">No</th>
                                @canany(['pj_pkm', 'kecamatan', 'desa'])
                                    <th class="text-wrap text-center align-middle">Desa</th>
                                @endcanany
                                @canany(['admin', 'dinkes', 'pj_dinkes', 'super_admin'])
                                    <th class="text-wrap text-center align-middle">Puskesmas</th>
                                @endcanany
                                @foreach ($data as $item)
                                    <th class="text-wrap text-center align-middle">{{ $item->nama_kolom }}</th>
                                    {{-- <th>{{ $item->koldetail }}</th> --}}
                                @endforeach
                            </tr>
                        @else
                            <p>Tidak ada data yang ditemukan.</p>
                        @endif
                    </thead>
                    <tbody>
                        @include('livewire.tabel-isian')
                    </tbody>
                </table>
                <div class="mt-3">
                    {{-- {{ $pengguna->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
