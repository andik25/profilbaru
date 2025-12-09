<div>
    <title>Kategori - Datinkes KabProb</title>
    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="{{ route('profil') }}">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a
                        href="{{ route('datinkes-komponen', $program->id) }}">{{ $program->nama_program }}</a></li>
                <li class="breadcrumb-item"><a
                        href="{{ route('datinkes-kategori', [$program->id, $komponen->id]) }}">{{ $komponen->nama_komponen }}</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{ $kategori->nama_kategori }}</li>
            </ol>
        </nav>
        {{-- Modal ganti bulan --}}
        <div wire:ignore.self class="modal fade" id="modal-bulan" tabindex="-1" role="dialog"
            aria-labelledby="modal-bulan" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-body">
                        <div class="card border-0 shadow">
                            <div class="card-body">
                                <div class="row d-block d-xl-flex align-items-center">
                                    <label class="my-1 me-2" for="country">Tahun</label>
                                    <select class="form-select" id="country" aria-label="Default select example"
                                        wire:model.change="tahuna">
                                        <option value="2025">2025</option>
                                    </select>
                                </div>
                                <div class="row d-block d-xl-flex align-items-center mt-3">
                                    <label class="my-1 me-2" for="country">Bulan</label>
                                    <select class="form-select" id="country" aria-label="Default select example"
                                        wire:model.change="bln">
                                        <option value="01">Januari</option>
                                        <option value="02">Februari</option>
                                        <option value="03">Maret</option>
                                        <option value="04">April</option>
                                        <option value="05">Mei</option>
                                        <option value="06">Juni</option>
                                        <option value="07">Juli</option>
                                        <option value="08">Agustus</option>
                                        <option value="09">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="gantiBulan">Masuk</button>

                    </div>
                </div>
            </div>
        </div>
        {{-- selesai modal edit --}}
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">{{ $kategori->nama_kategori }}
                    @if ($kevalidan)
                        @if ($kevalidan->is_active == 0)
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading">Revisi!</h4>
                                <p>Pesan dari verifikator "{{ $kevalidan->alasan }}"</p>
                                <hr>
                            </div>

                            {{-- <svg data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="{{ $kevalidan->alasan }}" xmlns="http://www.w3.org/2000/svg"
                                width="20" height="20" fill="#dc3545" class="bi bi-envelope-exclamation-fill"
                                viewBox="0 0 20 20">
                                <path
                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.026A2 2 0 0 0 2 14h6.256A4.5 4.5 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586zM16 4.697v4.974A4.5 4.5 0 0 0 12.5 8a4.5 4.5 0 0 0-1.965.45l-.338-.207z" />
                                <path
                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1.5a.5.5 0 0 1-1 0V11a.5.5 0 0 1 1 0m0 3a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0" />
                            </svg> --}}
                        @endif
                    @endif
                </h1>
            </div>
            <div>
                {{-- Modal edit --}}
                <div wire:ignore.self class="modal fade" id="modal-update" tabindex="-1" role="dialog"
                    aria-labelledby="modal-update" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="h6 modal-title">Silahkan Diisi !</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                {{-- pull indikator --}}
                                @foreach ($head as $inka)
                                    @if ($inka->gender == 1)
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1"
                                                class="form-label">{{ $inka->nama_indikator }} -L</label>
                                            <input type="hidden" wire:model="tarik">
                                            <input type="text"
                                                class="form-control @error('intro.' . $inka->id . '.male') is-invalid @enderror"
                                                wire:model="intro.{{ $inka->id }}.male">
                                            @error('intro.' . $inka->id . '.male')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1"
                                                class="form-label">{{ $inka->nama_indikator }} -p</label>
                                            <input type="hidden" wire:model="tarik">
                                            <input type="text"
                                                class="form-control @error('intro.' . $inka->id . '.female') is-invalid @enderror"
                                                wire:model="intro.{{ $inka->id }}.female">
                                            @error('intro.' . $inka->id . '.female')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    @else
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1"
                                                class="form-label">{{ $inka->nama_indikator }}</label>
                                            <input type="numeric"
                                                class="form-control @error('intro.' . $inka->id) is-invalid @enderror"
                                                wire:model="intro.{{ $inka->id }}">
                                            @error('intro.' . $inka->id)
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" wire:click="Isiupdate">Simpan</button>
                                <button type="button" class="btn btn-link text-gray ms-auto"
                                    data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- selesai modal edit --}}

                <script>
                    Livewire.on('validation-failed', (errors) => {
                        console.log('Validasi gagal:', errors);
                    });
                </script>
            </div>
        </div>
    </div>

    <!-- Modal Validasi -->
    <div wire:ignore.self class="modal fade" id="modalNotification" tabindex="-1" role="dialog"
        aria-labelledby="modalTitleNotify" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title" id="modalTitleNotify"></p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="py-3 text-center">
                        <svg class="icon icon-xl text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                            </path>
                        </svg>
                        <h2 class="h4 modal-title my-3">Validasi</h2>
                        <fieldset>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="validasi" id="validasi1"
                                    value="1" wire:model.live="validasi">
                                <label class="form-check-label" for="validasi1">
                                    Setujui
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="validasi" id="validasi2"
                                    value="0" wire:model.live="validasi">
                                <label class="form-check-label" for="validasi2">
                                    Ditolak
                                </label>
                            </div>

                            @if ($validasi == 0)
                                <div class="mt-2">
                                    <textarea type="text" class="form-control" wire:model="validation_reason" placeholder="Masukkan alasan penolakan"
                                        aria-label="Alasan penolakan"></textarea>
                                    @error('validation_reason')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            @endif
                            <!-- End of Radio -->
                        </fieldset>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" wire:click="KirimValidasi">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal Content validasi -->

    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            @canany(['kecamatan', 'dinkes', 'super_admin', 'pj_dinkes', 'pj_pkm'])
                                <th class="align-middle sticky-col">No</th>
                            @endcan
                            @canany(['desa', 'kecamatan', 'pj_pkm'])
                                <th class="align-middle">Desa</th>
                            @endcan
                            @canany(['admin', 'dinkes', 'pj_dinkes', 'super_admin'])
                                <th class="text-wrap text-center align-middle sticky-col">Puskesmas</th>
                            @endcanany
                            @foreach ($head as $h)
                                @if ($h->gender == 1)
                                    <th class="text-wrap text-center align-middle">{{ $h->nama_indikator }}-L</th>
                                    <th class="text-wrap text-center align-middle">{{ $h->nama_indikator }}-P</th>
                                    <th class="text-wrap text-center align-middle">{{ $h->nama_indikator }}(L+P)</th>
                                @else
                                    <th class="text-wrap text-center align-middle">{{ $h->nama_indikator }}</th>
                                @endif
                            @endforeach
                            @canany(['pj_pkm', 'pj_dinkes', 'super_admin'])
                                <th class="text-center align-middle">Validasi</th>
                            @endcanany
                            @can('desa')
                                <th class="text-center align-middle">Aksi</th>
                            @endcan

                        </tr>
                    </thead>
                    {{-- Tambahkan ini di awal, sebelum <tbody> --}}
                    @php
                        // Inisialisasi array total berdasarkan $head
                        $totals = [];
                        foreach ($head as $h) {
                            if ($h->gender == 1) {
                                $totals[$h->id]['male'] = 0;
                                $totals[$h->id]['female'] = 0;
                                $totals[$h->id]['total'] = 0;
                            } else {
                                $totals[$h->id]['value'] = 0;
                            }
                        }
                    @endphp
                    <tbody>
                        <!-- Desa -->
                        @can('desa')
                            <tr>

                                <td>{{ $isian->desa }}</td>
                                @foreach ($head as $h)
                                    {{-- Cari $iso yang cocok dengan $h->id --}}
                                    @php
                                        $matchingIso = collect($isian->isi)->firstWhere('id_master_indikator', $h->id);
                                    @endphp
                                    @if ($h->gender == 1)
                                        <td class="text-center">{{ $matchingIso ? $matchingIso->nilai_male : 0 }}</td>
                                        <td class="text-center">{{ $matchingIso ? $matchingIso->nilai_female : 0 }}
                                        </td>
                                        <td class="text-center">
                                            {{ $matchingIso ? $matchingIso->nilai_male + $matchingIso->nilai_female : 0 }}
                                        </td>
                                        {{-- Akumulasi total --}}
                                        @php
                                            $totals[$h->id]['male'] += (int) ($matchingIso
                                                ? $matchingIso->nilai_male
                                                : 0);
                                            $totals[$h->id]['female'] += (int) ($matchingIso
                                                ? $matchingIso->nilai_female
                                                : 0);
                                            $totals[$h->id]['total'] += (int) ($matchingIso
                                                ? $matchingIso->nilai_male + $matchingIso->nilai_female
                                                : 0);
                                        @endphp
                                    @else
                                        <td class="text-center">{{ $matchingIso ? $matchingIso->nilai_male : 0 }}</td>
                                        {{-- Akumulasi total --}}
                                        @php
                                            $totals[$h->id]['value'] += (int) ($matchingIso
                                                ? $matchingIso->nilai_male
                                                : 0);
                                        @endphp
                                    @endif
                                @endforeach
                                @if (auth()->user()->tingkat == $kategori->jenis)
                                    <td class="text-wrap text-center align-middle">
                                        @if (($isian->valid->first()->is_active ?? '0') == 1)
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2" />
                                            </svg>
                                        @else
                                            @if ($head->isNotEmpty())
                                                <span class="btn badge bg-warning text-dark" data-bs-toggle="modal"
                                                    data-bs-target="#modal-update"
                                                    wire:click="MasIndi({{ $kategori->id }}, {{ $isian->id }})">Detail</span>
                                            @else
                                                <span class="btn badge bg-warning text-dark" data-bs-toggle="modal"
                                                    data-bs-target="#modal-update">Detail</span>
                                            @endif
                                        @endif
                                    </td>
                                @endif
                            </tr>
                        @endcan
                        {{-- Puskesmas --}}
                        @canany(['kecamatan', 'pj_pkm'])
                            @foreach ($isian as $index => $is)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $is->desa }}</td>
                                    @foreach ($head as $h)
                                        {{-- Cari $iso yang cocok dengan $h->id --}}
                                        @php
                                            $matchingIso = collect($is->isi)->firstWhere('id_master_indikator', $h->id);
                                        @endphp
                                        @if ($h->gender == 1)
                                            <td class="text-center">{{ $matchingIso ? $matchingIso->nilai_male : 0 }}</td>
                                            <td class="text-center">{{ $matchingIso ? $matchingIso->nilai_female : 0 }}
                                            </td>
                                            <td class="text-center">
                                                {{ $matchingIso ? $matchingIso->nilai_male + $matchingIso->nilai_female : 0 }}
                                            </td>
                                            {{-- Akumulasi total --}}
                                            @php
                                                $totals[$h->id]['male'] += (int) ($matchingIso
                                                    ? $matchingIso->nilai_male
                                                    : 0);
                                                $totals[$h->id]['female'] += (int) ($matchingIso
                                                    ? $matchingIso->nilai_female
                                                    : 0);
                                                $totals[$h->id]['total'] += (int) ($matchingIso
                                                    ? $matchingIso->nilai_male + $matchingIso->nilai_female
                                                    : 0);
                                            @endphp
                                        @else
                                            <td class="text-center">{{ $matchingIso ? $matchingIso->nilai_male : 0 }}</td>
                                            {{-- Akumulasi total --}}
                                            @php
                                                $totals[$h->id]['value'] += (int) ($matchingIso
                                                    ? $matchingIso->nilai_male
                                                    : 0);
                                            @endphp
                                        @endif
                                    @endforeach


                                    {{-- usulan untuk pkm bisa mengingatkan pj pkm --}}
                                    @if (auth()->user()->tingkat == 2)
                                    
                                    @endif


                                    @if (auth()->user()->tingkat == 5)
                                        <td>
                                            @if (($is->valid_din->is_active ?? 0) == 1)
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2" />
                                                </svg>
                                            @else
                                                @if (($is->valid->first()->is_active ?? 0) == 1)
                                                    <svg data-bs-toggle="modal" data-bs-target="#modalNotification"
                                                        wire:click="CekValidasi({{ $is->id }})"
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-check2-square"
                                                        viewBox="0 0 16 16">
                                                        <path
                                                            d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5z" />
                                                        <path
                                                            d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0" />
                                                    </svg>
                                                @else
                                                    <svg data-bs-toggle="modal" data-bs-target="#modalNotification"
                                                        wire:click="CekValidasi({{ $is->id }})"
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-app" viewBox="0 0 16 16">
                                                        <path
                                                            d="M11 2a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4z" />
                                                    </svg>

                                                    {{-- jika ada alasan ditolal --}}
                                                    @if (isset($is->valid->first()->alasan))
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="#FF0000"
                                                            class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                            <path
                                                                d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                        </svg>
                                                    @endif
                                                @endif
                                            @endif
                                        </td>
                                    @else
                                    @endif
                                </tr>
                            @endforeach
                        @endcanany
                        {{-- Dinkes --}}
                        @canany(['dinkes', 'super_admin', 'pj_dinkes'])
                            {{-- jikan berperan sebagai penginput data --}}
                            @if (auth()->user()->tingkat == $kategori->jenis)
                                @foreach ($isian as $index => $is)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="text-wrap text-center align-middle">{{ $is->puskesmas }}s</td>


                                        @foreach ($head as $h)
                                            {{-- Cari $iso yang cocok dengan $h->id --}}
                                            @php
                                                $matchingIso = collect($is->isi)->firstWhere(
                                                    'id_master_indikator',
                                                    $h->id,
                                                );
                                            @endphp
                                            @if ($h->gender == 1)
                                                <td class="text-center">{{ $matchingIso ? $matchingIso->nilai_male : 0 }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $matchingIso ? $matchingIso->nilai_female : 0 }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $matchingIso ? $matchingIso->nilai_male + $matchingIso->nilai_female : 0 }}
                                                </td>
                                                {{-- Akumulasi total --}}
                                                @php
                                                    $totals[$h->id]['male'] += (int) ($matchingIso
                                                        ? $matchingIso->nilai_male
                                                        : 0);
                                                    $totals[$h->id]['female'] += (int) ($matchingIso
                                                        ? $matchingIso->nilai_female
                                                        : 0);
                                                    $totals[$h->id]['total'] += (int) ($matchingIso
                                                        ? $matchingIso->nilai_male + $matchingIso->nilai_female
                                                        : 0);
                                                @endphp
                                            @else
                                                <td class="text-center">{{ $matchingIso ? $matchingIso->nilai_male : 0 }}a
                                                </td>
                                                {{-- Akumulasi total --}}
                                                @php
                                                    $totals[$h->id]['value'] += (int) ($matchingIso
                                                        ? $matchingIso->nilai_male
                                                        : 0);
                                                @endphp
                                            @endif
                                        @endforeach


                                        <td>
                                            @if ($head->isNotEmpty())
                                                <span class="btn badge bg-warning text-dark" data-bs-toggle="modal"
                                                    data-bs-target="#modal-update"
                                                    wire:click="MasIndi({{ $iyo }}, {{ $is->id }})">Detail</span>
                                            @else
                                                <span class="btn badge bg-warning text-dark" data-bs-toggle="modal"
                                                    data-bs-target="#modal-update">Detail</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                {{-- jika pj dinkes --}}

                                @foreach ($isian as $index => $is)
                                    <tr>
                                        <td class="align-middle sticky-col">{{ $loop->iteration }}</td>
                                        <td class="align-middle sticky-col">{{ $is->puskesmas }}</td>
                                        @foreach ($head as $h)
                                            {{-- Cari $iso yang cocok dengan $h->id --}}
                                            @php
                                                $matchingIso = collect($is->isi)->firstWhere(
                                                    'id_master_indikator',
                                                    $h->id,
                                                );
                                            @endphp
                                            @if ($h->gender == 1)
                                                <td class="text-center">{{ $matchingIso ? $matchingIso->nilai_male : 0 }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $matchingIso ? $matchingIso->nilai_female : 0 }}
                                                </td>
                                                <td class="text-center">
                                                    {{ $matchingIso ? $matchingIso->nilai_male + $matchingIso->nilai_female : 0 }}
                                                </td>
                                                {{-- Akumulasi total --}}
                                                @php
                                                    $totals[$h->id]['male'] += (int) ($matchingIso
                                                        ? $matchingIso->nilai_male
                                                        : 0);
                                                    $totals[$h->id]['female'] += (int) ($matchingIso
                                                        ? $matchingIso->nilai_female
                                                        : 0);
                                                    $totals[$h->id]['total'] += (int) ($matchingIso
                                                        ? $matchingIso->nilai_male + $matchingIso->nilai_female
                                                        : 0);
                                                @endphp
                                            @else
                                                <td class="text-center">{{ $matchingIso ? $matchingIso->nilai_male : 0 }}
                                                </td>
                                                {{-- Akumulasi total --}}
                                                @php
                                                    $totals[$h->id]['value'] += (int) ($matchingIso
                                                        ? $matchingIso->nilai_male
                                                        : 0);
                                                @endphp
                                            @endif
                                        @endforeach
                                        @can('pj_dinkes')
                                            <td>
                                                <div class="form-check dashboard-check" style="display: inline-block; ">
                                                    {{-- tampilan validasi pkm --}}
                                                    @if ($is->desa->count('id') - $is->valid->sum('is_active') > 0)
                                                        {{-- belum divalidasi --}}
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-app" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="{{ $is->desa->count('id') - $is->valid->sum('is_active') > 0 ? '- ' . $is->desa->count('id') - $is->valid->sum('is_active') . ' desa belum divalidasi' : 'semua desa tervalidasi' }}"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M11 2a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4z" />
                                                        </svg>
                                                    @else
                                                        {{-- sudah divalidasi --}}
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-check2-square"
                                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="{{ $is->desa->count('id') - $is->valid->sum('is_active') > 0 ? '- ' . $is->desa->count('id') - $is->valid->sum('is_active') . ' desa belum divalidasicok' : 'semua desa tervalidasi' }}"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5z" />
                                                            <path
                                                                d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0" />
                                                        </svg>
                                                    @endif
                                                    {{-- selesai tampilan validasi pkm --}}
                                                    @if ($is->desa->count('id') - $is->valid->sum('is_active') > 0)
                                                        {{-- belum bisa divalidasi --}}
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="currentColor" class="bi bi-app" viewBox="0 0 16 16">
                                                            <path
                                                                d="M11 2a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4z" />
                                                        </svg>
                                                    @else
                                                        {{-- sudah bisa divalidasi --}}
                                                        @php
                                                            $dinkesas = $is->valid_dinas_kesehatan->first() ?? null;
                                                        @endphp
                                                        @if ($dinkesas && $dinkesas->is_active)
                                                            {{-- jika sudah divalidasi --}}
                                                            <svg data-bs-toggle="modal" data-bs-target="#modalNotification"
                                                                wire:click="CekValidasi({{ $is->id }})"
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-check2-square" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5z" />
                                                                <path
                                                                    d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0" />
                                                            </svg>
                                                        @else
                                                            {{-- jika belum divalidasi --}}
                                                            <svg data-bs-toggle="modal" data-bs-target="#modalNotification"
                                                                wire:click="CekValidasi({{ $is->id }})"
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-app"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M11 2a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4z" />
                                                            </svg>
                                                        @endif
                                                    @endif
                                                    {{-- jikan ditolak ada alasan oleh dinkes --}}
                                                    @if ($is->valid_dinas_kesehatan->first() && $is->valid_dinas_kesehatan->first()->is_active == 0)
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                            fill="#FF0000" class="bi bi-exclamation-circle"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                                            <path
                                                                d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                                                        </svg>
                                                    @else
                                                    @endif
                                                </div>
                                            </td>
                                        @endcan
                                        @can('super_admin')
                                            <td class="text-wrap text-center align-middle">
                                                <div class="checkbox-container">
                                                    <div class="form-check dashboard-check" style="display: inline-block; ">
                                                        @php
                                                            $cobasaja =
                                                                $is->desa->count('id') - $is->valid->sum('is_active');
                                                        @endphp
                                                        @if ($cobasaja > 0)
                                                            <input disabled data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip"
                                                                data-bs-title="belum tervalidasi semua" type="checkbox"
                                                                id="checkbox" class="toggle-checkbox" />
                                                            <label for="checkbox" class="toggle-label"></label>
                                                        @else
                                                            <input disabled data-bs-toggle="tooltip" data-bs-placement="top"
                                                                data-bs-custom-class="custom-tooltip"
                                                                data-bs-title="sudah tervalidasi semua" type="checkbox"
                                                                id="checkbox" class="toggle-checkbox" checked />
                                                            <label for="checkbox" class="toggle-label"></label>
                                                        @endif
                                                    </div>
                                                    <div class="form-check dashboard-check" style="display: inline-block; ">
                                                        <input disabled data-bs-toggle="tooltip" data-bs-placement="top"
                                                            data-bs-custom-class="custom-tooltip"
                                                            data-bs-title="{{ ($is->valid_suad->first()->is_active ?? 0) == 1 ? 'PJ Program Dinkes sudah melakukan validasi' : 'PJ Program Dinkes belum melakukan validasi' }}"
                                                            type="checkbox" id="checkbox1" class="toggle-checkbox"
                                                            {{ ($is->valid_suad->first()->is_active ?? 0) == 1 ? 'checked' : '' }} />
                                                        <label for="checkbox1" class="toggle-label"></label>
                                                    </div>
                                                    <div class="form-check dashboard-check" style="display: inline-block; ">
                                                        <input
                                                            {{ $is->desa->count('id') - $is->valid->sum('is_active') > 0 ? 'disabled' : '' }}
                                                            wire:model="active.{{ $is->id }}"
                                                            wire:click="toggleIsActive({{ $is->id }})" type="checkbox"
                                                            name="toggle" id="toggle-{{ $is->id }}"
                                                            class="block absolute w-6 h-6 bg-white rounded-full border-4 appearance-none cursor-pointer focus:outline-none toggle-checkbox" />
                                                        <label for="checkbox2" class="toggle-label"></label>
                                                    </div>
                                                </div>
                                            </td>
                                        @endcan
                                    </tr>
                                @endforeach
                            @endif
                        @endcanany
                        {{-- Baris Total di akhir <tbody> --}}
                        <tr class="table-info font-weight-bold">
                            @canany(['admin', 'dinkes', 'kecamatan', 'pj_dinkes', 'pj_pkm', 'super_admin'])
                                <td></td> {{-- Kosong untuk No --}}

                                <td>Total</td> {{-- Label Total --}}
                                @foreach ($head as $h)
                                    @if ($h->gender == 1)
                                        <td class="text-center">{{ $totals[$h->id]['male'] ?? 0 }}</td>
                                        <td class="text-center">{{ $totals[$h->id]['female'] ?? 0 }}</td>
                                        <td class="text-center">{{ $totals[$h->id]['total'] ?? 0 }}</td>
                                    @else
                                        <td class="text-center">{{ $totals[$h->id]['value'] ?? 0 }}</td>
                                    @endif
                                @endforeach
                            @endcanany
                            @canany(['pj_dinkes', 'pj_pkm'])
                                <td></td> {{-- Kosong untuk Validasi/Aksi --}}
                            @endcanany
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
