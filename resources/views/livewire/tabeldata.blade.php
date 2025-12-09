<div>
    <title>Volt Laravel Dashboard - Bootstrap tables</title>
    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bootstrap tables</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Master Indikator</h1>
                <p class="mb-0">Indikator Profil Kesehatan</p>
            </div>
            <div>
                {{-- Modal Tambah Kategori Indikator --}}
                <button type="button" class="btn btn-block btn-primary mb-3" data-bs-toggle="modal"
                    data-bs-target="#modal-default">Tambah Data Tabel</button>
                <div wire:ignore.self class="modal fade" id="modal-default" tabindex="-1" role="dialog"
                    aria-labelledby="modal-default" aria-hidden="true" data-bs-backdrop="static">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="h6 modal-title">Tambah Data Tabel</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    wire:click="close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Data Tabel</label>
                                    <input type="email" class="form-control form-control-sm" wire:model="data_tabel">
                                    @error('data_tabel')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Master Tabel</label>
                                    <select class="form-select form-select-sm" wire:model="id_master_tabel">
                                        <option value="">Open this select menu</option>
                                        @foreach ($mas_tab as $mt)
                                            <option value="{{ $mt->id }}">{{ $mt->id_master_tabel }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_master_tabel')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="my-1 me-2" for="country">Master Indikator</label>
                                    <select class="form-select form-select-sm" wire:model="id_master_indikator">
                                        <option value="">Open this select menu</option>
                                        @foreach ($mas_indi as $mi)
                                            <option value="{{ $mi->id }}">{{ $mi->id_master_indikator }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_master_indikator')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tahun</label>
                                    <input wire:model="tahun" type="text" class="form-control form-control-sm">
                                    @error('tahun')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    wire:click="simpanTabel">Simpan</button>
                                <button type="button" class="btn btn-link text-gray ms-auto" data-bs-dismiss="modal"
                                    wire:click="close">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- selesi modal tambah --}}

                {{-- Modal edit --}}
                <div wire:ignore.self class="modal fade" id="modal-update" tabindex="-1" role="dialog"
                    aria-labelledby="modal-update" aria-hidden="true" data-bs-backdrop="static">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="h6 modal-title">Update Tabel</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    wire:click="close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Master Tabel</label>
                                    <input type="email" class="form-control form-control-sm"
                                        wire:model="master_tabel">
                                    @error('master_tabel')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Tabel</label>
                                    <input type="text" class="form-control form-control-sm"
                                        wire:model="nama_tabel">
                                    @error('nama_tabel')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="my-1 me-2" for="country">Alias</label>
                                    <input type="text" class="form-control form-control-sm" wire:model="alias">
                                    @error('alias')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Judul Tabel</label>
                                    <textarea wire:model="judul_tabel" type="text" class="form-control form-control-sm"></textarea>
                                    @error('judul_tabel')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Satus</label>
                                    <select class="form-select form-select-sm" wire:model="status">
                                        <option value="">Open this select menu</option>
                                        <option value="1">Aktif</option>
                                        <option value="0">Tidak Aktif</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    wire:click="Tabindiupdate">Simpan</button>
                                <button type="button" class="btn btn-link text-gray ms-auto" data-bs-dismiss="modal"
                                    wire:click="close">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- selesai modal edit --}}

            </div>
        </div>
    </div>

    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">#</th>
                            <th class="border-0">Data Tabel</th>
                            <th class="border-0">Master Tabel</th>
                            <th class="border-0">Master Indikator</th>
                            <th class="border-0">Tahun</th>
                            <th class="border-0 rounded-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tab_dat as $mas)
                            <!-- Item -->
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="fw-bold d-flex align-items-center">
                                    {{ $mas->id_data_tabel }}
                                </td>
                                <td>
                                    {{ $mas->masta->id_master_tabel }}
                                </td>
                                <td>
                                    {{ $mas->masdi->id_master_indikator }}
                                </td>
                                <td>
                                    {{ $mas->tahun }}
                                </td>
                                <td class="text-success">
                                    <span class="btn badge bg-warning text-dark" data-bs-toggle="modal"
                                        data-bs-target="#modal-update"
                                        wire:click="MasIndi({{ $mas }})">Edit</span>
                                    <span class="btn badge bg-danger">Hapus</span>
                                </td>
                            </tr>
                            <!-- End of Item -->
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
