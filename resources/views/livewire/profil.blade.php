<div>
    <title>Datinkes Kab. Probolinggo</title>
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
                {{-- <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bootstrap tables</li> --}}
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Program Kesehatan</h1>
            </div>
        </div>
    </div>
    <div>
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


    </div>
    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            {{-- <th class="border-0 rounded-start">Nama Program</th> --}}
                            {{-- <th class="border-0">JUMLAH INDIKATOR</th>
                            <th class="border-0 rounded-end">KETERISIAN INDIKATOR</th> --}}
                            {{-- <th class="border-0 rounded-end">#</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        {{-- menu baru --}}
                        <div class="container">
                            <div class="row g-2 text-center">
                                @foreach ($program as $m)
                                    <div class="col-md-2 col-6">
                                        <div class="col-12 col-md-12 p-1 bg-custom rounded">
                                            <div class="menu-title">{{ $m->nama_program }}</div>
                                            <a href="datinkes/{{ $m->id }}">
                                                <div class="menu-card bg-white">
                                                    <i class="fi {{ $m->icon }} menu-icon" data-percent="75"></i>
                                                </div>
                                            </a>
                                            <div class="percentage">Terisi 75% - Verifikasi 50%</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- menu baru selesai --}}
                        {{-- @foreach ($program as $m)
                            <tr> --}}




                        {{-- <div class="progress-wrapper">
                                    <div class="progress-info">
                                        <a href="datinkes/{{ $m->id }}"
                                            class="h4 progress-tooltip bg-tertiary">{{ $m->nama_program }}</a>
                                        <div class="progress-percentage">
                                            <span>Pengisian 40% - Validasi 30 %</span>
                                        </div>
                                    </div>
                                    <div class="progress progress-xl">
                                        <div class="progress-bar bg-tertiary" role="progressbar" style="width: 40%;"
                                            aria-valuenow="40" aria-valuemin="0"></div>
                                    </div>
                                </div> --}}



                        {{-- <td class="fw-bold d-flex align-items-center">

                                </td>
                                <td>
                                </td> --}}
                        {{-- <td>
                                    <a class="btn badge bg-warning text-dark"
                                        href="datinkes/{{ $m->id }}">Detail</a>
                                </td> --}}
                        {{-- </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
