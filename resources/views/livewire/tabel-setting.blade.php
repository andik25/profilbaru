<div>
    <title>Pengaturan Tabel - Datinkes KabProb</title>
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
                {{-- <li class="breadcrumb-item"><a href="#">Tables</a></li> --}}
                {{-- <li class="breadcrumb-item active" aria-current="page">Bootstrap tables</li> --}}
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Pengaturan Tabel</h1>
            </div>
            <div>
                {{-- Modal Tambah Kategori Indikator --}}
                <button type="button" class="btn btn-block btn-primary mb-3" data-bs-toggle="modal"
                    data-bs-target="#modal-default">Tambah Tabel</button>

                <div wire:ignore.self class="modal fade" id="modal-default" tabindex="-1" role="dialog"
                    aria-labelledby="modal-default" aria-hidden="true" data-bs-backdrop="static">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="h6 modal-title">Tambah Tabel</h2>
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
                                    <input type="text" class="form-control form-control-sm" wire:model="nama_tabel">
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
                                    wire:click="simpanTabel">Simpan</button>
                                <button type="button" class="btn btn-link text-gray ms-auto" data-bs-dismiss="modal"
                                    wire:click="close">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- selesi modal tambah --}}

                {{-- Modal detail --}}
                <div wire:ignore.self class="modal fade" id="modal-detail" tabindex="-1" role="dialog"
                    aria-labelledby="modal-detail" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="card shadow border-0 text-center p-0">
                                <div class="card-body pb-5">
                                    <h4 class="h3">
                                        {{ $judul_tabel }}
                                    </h4>
                                    {{-- tabel tanggung jawab --}}
                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap mb-0 rounded">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="border-0 rounded-start">No</th>
                                                    <th class="border-0">Id Kolom</th>
                                                    <th class="border-0">Nama Kolom</th>
                                                    <th class="border-0">Isi</th>
                                                    <th class="border-0 rounded-end">#</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{-- @if ($role_program)
                                                    @foreach ($role_program as $rp) --}}
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                {{-- @endforeach
                                                @endif --}}
                                                @foreach ($items as $index => $item)
                                                    <!-- Item -->
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>
                                                            <input type="text" wire:model="id_kolom" />
                                                        </td>
                                                        <td>
                                                            <input type="hidden"
                                                                wire:model="items.{{ $index }}.user_id">
                                                            <input type="text" id="title"
                                                                wire:model.live="title" />
                                                        </td>
                                                        <td class="fw-bold d-flex align-items-center">
                                                            <input type="hidden"
                                                                wire:model="items.{{ $index }}.user_id">
                                                            <select class="form-select form-select-sm"
                                                                wire:model="items.{{ $index }}.id_kategori">
                                                                <option value="">pilih kategori (program)...
                                                                </option>
                                                                @foreach ($indikators as $mk)
                                                                    <option value="{{ $mk->id }}">
                                                                        {{ $mk->nama_indikator }}</option>
                                                                @endforeach

                                                            </select>


                                                        </td>
                                                        <td>
                                                            <button type="button"
                                                                wire:click="removeItem({{ $index }})"
                                                                class="btn btn-danger btn-sm">Remove</button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td>
                                                            @error("items.{{ $index }}.id_kategori")
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </td>
                                                        <td></td>
                                                    </tr>

                                                    <!-- End of Item -->
                                                @endforeach
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <button type="button" wire:click="addItem"
                                                            class="btn btn-primary">Adda
                                                            Item</button>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    {{-- tabel Tanggung Jawab --}}

                                </div>
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" wire:click="submit">Simpan</button>
                                <button type="button" class="btn btn-link text-gray ms-auto"
                                    data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- selesai modal detail --}}

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
                            <th class="border-0">Nama Tabel</th>
                            <th class="border-0">Judul Tabel</th>
                            <th class="border-0">Status</th>
                            <th class="border-0 rounded-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tas_set as $mas)
                            <!-- Item -->
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $mas->nama_tabel }}
                                </td>
                                <td>
                                    {{ $mas->judul_tabel }}
                                </td>
                                <td>
                                    {{ $mas->status == 1 ? 'Aktif' : 'Tidak Aktif' }}
                                </td>
                                <td class="text-success">
                                    <span class="btn badge bg-warning text-dark" data-bs-toggle="modal"
                                        data-bs-target="#modal-update"
                                        wire:click="MasIndi({{ $mas }})">Edit</span>
                                    <a href="tabel/{{ $mas->id }}"
                                        class="btn badge bg-success text-dark">Detail</a>
                                    <button class="btn badge bg-danger"
                                        wire:click="confirmDelete({{ $mas->id }})">Hapus</button>
                                </td>
                            </tr>
                            <!-- End of Item -->
                        @endforeach
                        {{-- Modal Konfirmasi --}}
                        @if ($tabelToDeleteId !== null)
                            <div
                                style="position: fixed; inset: 0; background: rgba(0,0,0,0.5); display: flex; justify-content: center; align-items: center; z-index: 1000;">
                                <div
                                    style="background: white; padding: 24px; border-radius: 8px; max-width: 400px; width: 90%;">
                                    <h2 style="margin-top: 0;">Konfirmasi Hapus</h2>
                                    <p>Apakah Anda yakin ingin menghapus
                                        <strong>{{ $tabelToDeleteName }}</strong>?
                                    </p>
                                    <div
                                        style="display: flex; justify-content: flex-end; gap: 12px; margin-top: 24px;">
                                        <button wire:click="cancelDelete"
                                            style="padding: 8px 16px; border: none; background: #6c757d; color: white; border-radius: 4px; cursor: pointer;">Batal</button>
                                        <button wire:click="delete"
                                            style="padding: 8px 16px; border: none; background: #dc3545; color: white; border-radius: 4px; cursor: pointer;">Hapus</button>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!-- Item -->
                        @if (session()->has('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session()->has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
