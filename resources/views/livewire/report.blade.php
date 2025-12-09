<div>
    <title>Report</title>

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
                    <label for="exampleInputEmail1" class="form-label">Periode</label>
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
                    <label for="exampleInputEmail1" class="form-label">ketiga</label>
                    <select class="form-select form-select-sm" wire:model.live="jenis" wire:change="ubahjenis">
                        <option value="">Open this select menu</option>
                        <option value="1">Komulatif</option>
                        <option value="2">Non Komulatif</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 mb-lg-0">
                <div class="mb-1">
                    <label for="exampleInputEmail1" class="form-label">keempat</label>
                    <select class="form-select form-select-sm" wire:model.live="keempat">
                        <option value="">Open this select menu</option>
                        @foreach ($keempatOptions as $option)
                            <option value="{{ $option['id'] }}">{{ $option['name'] }}</option>
                        @endforeach
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
                        <button id="downloadExcel" class="download-btn btn-sm btn-success">
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
                                <th class="text-wrap text-center align-middle">Fasyankes</th>
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
                        @if ($isi)
                            @foreach ($isi as $is)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    @canany(['super_admin', 'admin', 'dinkes', 'pj_dinkes'])
                                        <td>{{ $is->puskesmas }}</td>
                                    @endcan
                                    @canany(['kecamatan', 'pj_pkm'])
                                        <td>{{ $is->desa }}</td>
                                    @endcan
                                    @foreach ($data as $item)
                                        @php
                                            $nilai_pembilang = 0;
                                            $nilai_penyebut = 0;
                                            $pembilang = '';
                                            $penyebut = '';
                                            $hasil = 0;
                                        @endphp
                                        @if ($item->tipe == 1)
                                            @foreach ($item->koldetail as $ik)
                                                @if ($ik->operator == 1)
                                                    @php
                                                        $pembilang = $ik->id_indikator;
                                                    @endphp
                                                @endif
                                                @if ($ik->operator == 2)
                                                    @php
                                                        $penyebut = $ik->id_indikator;
                                                    @endphp
                                                @endif
                                            @endforeach
                                            @foreach ($is->isi as $tr)
                                                @if ($tr->id_master_indikator == $pembilang)
                                                    @php
                                                        $nilai_pembilang = $tr->nilai_male + $tr->nilai_female;
                                                    @endphp
                                                @endif
                                                @if ($tr->id_master_indikator == $penyebut)
                                                    @php
                                                        $nilai_penyebut = $tr->nilai_male + $tr->nilai_female;
                                                    @endphp
                                                @endif
                                            @endforeach
                                            @php
                                                $hasil =
                                                    $nilai_penyebut > 0
                                                        ? ($nilai_pembilang / $nilai_penyebut) * 100
                                                        : 0;
                                            @endphp
                                            <td>{{ number_format($hasil, 1) }} %</td>
                                        @elseif ($item->tipe == 2)
                                            @foreach ($item->koldetail as $ik)
                                                @foreach ($is->isi as $tr)
                                                    @if ($tr->id_master_indikator == $ik->id_indikator)
                                                        @php
                                                            $hasil += $tr->nilai_male;
                                                        @endphp
                                                    @endif
                                                @endforeach
                                            @endforeach
                                            <td>{{ $hasil }}</td>
                                        @elseif ($item->tipe == 4)
                                            @foreach ($item->koldetail as $ik)
                                                {{-- {{ $ik }} --}}
                                                @if ($ik->operator == 7)
                                                    @php
                                                        $pembilang = $ik->id_indikator;
                                                    @endphp
                                                @endif
                                                @if ($ik->operator == 8)
                                                    @php
                                                        $penyebut = $ik->id_indikator;
                                                    @endphp
                                                @endif
                                            @endforeach
                                            @foreach ($is->isi as $tr)
                                                @if ($tr->id_master_indikator == $pembilang)
                                                    @php
                                                        $nilai_pembilang = $tr->nilai_male + $tr->nilai_female;
                                                    @endphp
                                                @else
                                                    @php
                                                        $nilai_pembilang = 0;
                                                    @endphp
                                                @endif
                                                @if ($tr->id_master_indikator == $penyebut)
                                                    @php
                                                        $nilai_penyebut = $tr->nilai_male + $tr->nilai_female;
                                                    @endphp
                                                @else
                                                    @php
                                                        $nilai_penyebut = $penyebut;
                                                    @endphp
                                                @endif
                                            @endforeach
                                            @php
                                                $hasil = $nilai_penyebut > 0 ? $nilai_pembilang / $nilai_penyebut : 0;
                                            @endphp
                                            <td>{{ number_format($hasil) }} </td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                <div class="mt-3">
                    {{-- {{ $pengguna->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>