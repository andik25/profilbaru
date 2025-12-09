<div>
    <title>Volt Laravel Dashboard - Bootstrap tables</title>
    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="{{ route('manajemen-user') }}">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">User Program</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">{{ $user->name }}</h1>
            </div>
            <div>
                <div class="d-flex align-items-center">
                    {{-- Modal Tambah Kategori Indikator --}}
                    <button type="button" class="btn btn-sm btn-block btn-primary mx-1" data-bs-toggle="modal"
                        data-bs-target="#modal-programpj"><svg class="icon icon-xs me-2" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg></button>
                    <div class="input-group input-group-merge search-bar">
                        <span class="input-group-text" id="topbar-addon"><svg class="icon icon-xs"
                                x-description="Heroicon name: solid/search" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg></span>
                        <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search"
                            aria-label="Search" aria-describedby="topbar-addon" wire:model.live="search">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Tambah program penanggungjawab --}}
    <div wire:ignore.self wire:model="showModal" class="modal fade" id="modal-programpj" tabindex="-1" role="dialog"
        aria-labelledby="modal-programpj" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="h6 modal-title">Tambah Kategori Penanggungjawab</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        wire:click="close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Program</label>
                        <select class="form-select form-select-sm" wire:model.live="programer">
                            <option value="">Silahkan pilih program ....</option>
                            @foreach ($programs as $pr)
                                <option value="{{ $pr->id }}">{{ $pr->nama_program }}</option>
                            @endforeach
                        </select>
                        @error('programer')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Komponen</label>
                        <select class="form-select form-select-sm" wire:model.live="komponens">
                            <option value="">Silahkan pilih komponen ....</option>
                            @if ($komponen)
                                @foreach ($komponen as $ko)
                                    <option value="{{ $ko->id }}">{{ $ko->nama_komponen }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('komponens')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kategori</label>
                        <select class="form-select form-select-sm" wire:model="kategoripj">
                            <option value="">Silahkan pilih komponen ....</option>
                            @if ($kategoripjs)
                                @foreach ($kategoripjs as $ketpj)
                                    <option value="{{ $ketpj->id }}">{{ $ketpj->nama_kategori }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('kategoripj')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="simpanProgrampj">Simpan</button>
                    <button type="button" class="btn btn-link text-gray ms-auto" data-bs-dismiss="modal"
                        wire:click="close">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    {{-- selesai tambah programpj --}}

    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">#</th>
                            <th class="border-0">Program</th>
                            <th class="border-0">Komponen</th>
                            <th class="border-0">Kategori</th>
                            <th class="border-0 rounded-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach ($pjprogramer as $pjp)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pjp->progr->nama_program ?? '#Nan' }}</td>
                                    <td>{{ $pjp->kompon->nama_komponen ?? '#Nan' }}</td>
                                    <td>{{ $pjp->kateg->nama_kategori ?? '#Nan' }}</td>
                                    <td>
                                        <span class="btn badge bg-danger" wire:click="confirmDelete({{ $pjp->id }})">hapus</span>
                                        <span class="btn badge bg-success">edit</span>
                                    </td>
                                </tr>
                            @endforeach
                            {{-- Modal Konfirmasi --}}
                           @if ($programToDeleteId !== null)
                               <div
                                   style="position: fixed; inset: 0; background: rgba(0,0,0,0.5); display: flex; justify-content: center; align-items: center; z-index: 1000;">
                                   <div
                                       style="background: white; padding: 24px; border-radius: 8px; max-width: 400px; width: 90%;">
                                       <h2 style="margin-top: 0;">Konfirmasi Hapus</h2>
                                       <p>Apakah Anda yakin ingin menghapus
                                           <strong>{{ $programToDeleteName }}</strong>?
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
                <div class="mt-3">
                </div>
            </div>
        </div>
    </div>
</div>
