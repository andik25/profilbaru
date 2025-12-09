<div>
    <title>Pengaturan Program - Datinkes KabProb</title>
    <div class="py-3">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="{{ route('program-kesehatan') }}">
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
                <h1 class="h4">Program Kesehatan</h1>
                {{-- <p class="mb-0">Kategori Indikator Profil Kesehatan</p> --}}
            </div>
            <div>
                {{-- Modal Tambah Kategori Indikator --}}
                <button type="button" class="btn btn-sm btn-block btn-primary mb-3" data-bs-toggle="modal"
                    data-bs-target="#modal-default">Tambah Program</button>
                <div wire:ignore.self class="modal fade" id="modal-default" tabindex="-1" role="dialog"
                    aria-labelledby="modal-default" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="h6 modal-title">Tambah Program</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Program</label>
                                    <input type="text"
                                        class="form-control @error('nama_program')
                                        is-invalid
                                    @enderror"
                                        wire:model="nama_program">
                                    @error('nama_program')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" wire:click="simpan">Simpan</button>
                                <button type="button" class="btn btn-link text-gray ms-auto"
                                    data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- selesai tambah kategori --}}

                {{-- Modal edit --}}
                <div wire:ignore.self class="modal fade" id="modal-update" tabindex="-1" role="dialog"
                    aria-labelledby="modal-update" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="h6 modal-title">Edit Program</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Program</label>
                                    <input type="text"
                                        class="form-control @error('nama_program')
                                        is-invalid
                                    @enderror"
                                        wire:model="nama_program">
                                    @error('nama_program')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    wire:click="ProgramUpdate">Simpan</button>
                                <button type="button" class="btn btn-link text-gray ms-auto"
                                    data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- selesai modal edit --}}

                {{-- Modal icon --}}
                <div wire:ignore.self class="modal fade" id="modal-icon" tabindex="-1" role="dialog"
                    aria-labelledby="modal-icon" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="h6 modal-title">Edit Program</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                {{-- pilih icon --}}
                                <div class="d-flex justify-content-between w-100 flex-wrap">
                                    <div class="mb-3 mb-lg-0">
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center mb-3">

                                            <div class="input-group input-group-merge search-bar">
                                                <span class="input-group-text" id="topbar-addon"><svg
                                                        class="icon icon-xs"
                                                        x-description="Heroicon name: solid/search"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                        fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                            clip-rule="evenodd"></path>
                                                    </svg></span>
                                                <input type="text" class="form-control" id="topbarInputIconLeft"
                                                    placeholder="Search" aria-label="Search"
                                                    aria-describedby="topbar-addon" wire:model.live="search">
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                                    @foreach ($ikonstol as $ikon)
                                                        <div class="col-md-2 col-6">
                                                            <div class="col-12 col-md-12 p-1 bg-custom rounded">
                                                                <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1" wire:model="icon" value="{{ $ikon->nama_icon }}">
                                                                <div class="menu-title">{{ $ikon->sebutan }}</div>
                                                                <div class="menu-card-pilih bg-white">
                                                                    <i
                                                                        class="fi {{ $ikon->nama_icon }} menu-icon-pilih"></i>
                                                                </div>
                                                                <div class="percentage"></div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                        </tbody>
                                    </table>
                                </div>
                                {{-- selesai pilih icon --}}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    wire:click="ikonSimpan">Simpan</button>
                                <button type="button" class="btn btn-link text-gray ms-auto"
                                    data-bs-dismiss="modal">Tutup</button>
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
                            <th class="border-0 rounded-start">No</th>
                            <th class="border-0 rounded-end">Nama Program</th>
                            <th class="border-0 rounded-end">Status</th>
                            <th class="border-0 rounded-end">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pro as $m)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $m->nama_program }}
                                </td>
                                <td>
                                    {{ $m->status == 0 ? 'tidak aktif' : 'aktif' }}
                                </td>
                                <td>
                                    <span class="btn badge bg-warning text-dark" data-bs-toggle="modal"
                                        data-bs-target="#modal-icon"
                                        wire:click="ProgramEdit({{ $m }})">Icon</span>
                                    <span class="btn badge bg-warning text-dark" data-bs-toggle="modal"
                                        data-bs-target="#modal-update"
                                        wire:click="ProgramEdit({{ $m }})">Edit</span>
                                    <a href="{{ route('komponen-program', $m->id) }}"
                                        class="btn badge bg-primary">Detail</a>
                                    {{-- <span class="btn badge bg-danger">Hapusa</span> --}}
                                    <button class="btn badge bg-danger"
                                        wire:click="confirmDelete({{ $m->id }})">Hapus</button>
                                </td>

                            </tr>
                            <!-- End of Item -->
                        @endforeach

                        {{-- Modal Konfirmasi --}}
                        @if ($programToDeleteId !== null)
                            <div
                                style="position: fixed; inset: 0; background: rgba(0,0,0,0.5); display: flex; justify-content: center; align-items: center; z-index: 1000;">
                                <div
                                    style="background: white; padding: 24px; border-radius: 8px; max-width: 400px; width: 90%;">
                                    <h2 style="margin-top: 0;">Konfirmasi Hapus</h2>
                                    <p>Apakah Anda yakin ingin menghapus <strong>{{ $programToDeleteName }}</strong>?
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
