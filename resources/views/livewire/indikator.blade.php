   <div>
       <title>Pengaturan Indikator - Datinkes Kabprob</title>
       <div class="py-4">
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
                   <li class="breadcrumb-item"><a
                           href="{{ route('komponen-program', ['kom' => $program->id]) }}">{{ $program->nama_program }}</a>
                   </li>
                   <li class="breadcrumb-item"><a
                           href="{{ route('maskat', ['kom' => $program->id, 'komp' => $komponen->id]) }}">{{ $komponen->nama_komponen }}</a>
                   </li>
                   <li class="breadcrumb-item active" aria-current="page">{{ $kategorind->nama_kategori }}</li>
               </ol>
           </nav>
           <div class="d-flex justify-content-between w-100 flex-wrap">
               <div class="mb-1 mb-lg-0">
                   <h1 class="h4">Master Indikator</h1>
               </div>
               <div>
                   {{-- Modal Tambah Kategori Indikator --}}
                   <button type="button" class="btn btn-sm btn-block btn-primary mb-3" data-bs-toggle="modal"
                       data-bs-target="#modal-default">Tambah Indikator</button>
                   {{-- <a href="/kategori-indikator" type="button" class="btn btn-block btn-primary mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
                      </svg></a> --}}
                   <div wire:ignore.self class="modal fade" id="modal-default" tabindex="-1" role="dialog"
                       aria-labelledby="modal-default" aria-hidden="true">
                       <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                               <div class="modal-header">
                                   <h2 class="h6 modal-title">Tambah Indikator</h2>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal"
                                       aria-label="Close"></button>
                               </div>
                               <div class="modal-body">
                                   <div class="mb-3">
                                       <label for="exampleInputEmail1" class="form-label">Nama Indikator</label>
                                       <input type="text" class="form-control form-control-sm"
                                           wire:model="nama_indikator">
                                       @error('nama_indikator')
                                           <div class="invalid-feedback">
                                               {{ $message }}
                                           </div>
                                       @enderror
                                   </div>
                                   <div class="mb-3">
                                       <label class="my-1 me-2" for="country">Tipe Indikator</label>
                                       <select class="form-select form-select-sm" wire:model="tipe">
                                           <option value="">silahkan pilih tipe...</option>

                                           @foreach ($tipe_indikator as $tp)
                                               <option value="{{ $tp->id }}">{{ $tp->tipe }}</option>
                                           @endforeach
                                       </select>
                                       @error('tipe')
                                           <div class="invalid-feedback">
                                               {{ $message }}
                                           </div>
                                       @enderror
                                   </div>
                                   <div class="mb-3">
                                       <label for="exampleInputEmail1" class="form-label">Gender</label>
                                       <div
                                           class="inline-block relative mr-2 w-10 align-middle transition duration-200 ease-in select-none">
                                           <input wire:model="gender" value="false" type="checkbox">
                                           <label for="01"
                                               class="block overflow-hidden h-6 bg-gray-300 rounded-full cursor-pointer toggle-label"></label>
                                       </div>
                                   </div>
                               </div>
                               <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary"
                                       wire:click="simpanIndikator">Simpan</button>
                                   <button type="button" class="btn btn-link text-gray ms-auto"
                                       data-bs-dismiss="modal">Tutup</button>
                               </div>
                           </div>
                       </div>
                   </div>
                   {{-- selesi modal tambah --}}

                   {{-- Modal edit --}}
                   <div wire:ignore.self class="modal fade" id="modal-update" tabindex="-1" role="dialog"
                       aria-labelledby="modal-update" aria-hidden="true">
                       <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                               <div class="modal-header">
                                   <h2 class="h6 modal-title">Tambah Kategori Indikator</h2>
                                   <button type="button" class="btn-close" data-bs-dismiss="modal"
                                       aria-label="Close"></button>
                               </div>
                               <div class="modal-body">
                                   <div class="mb-3">
                                       <label for="exampleInputEmail1" class="form-label">Nama Indikator</label>
                                       <input type="text" class="form-control form-control-sm"
                                           wire:model="nama_indikator">
                                       @error('nama_indikator')
                                           <div class="invalid-feedback">
                                               {{ $message }}
                                           </div>
                                       @enderror
                                   </div>
                                   <div class="mb-3">
                                       <label class="my-1 me-2" for="country">Kategori Indikator</label>
                                       <select class="form-select form-select-sm" wire:model="kategori_indikator">
                                           <option value="">pilih kategori (program)...</option>
                                           @foreach ($kator as $mk)
                                               <option value="{{ $mk->id }}">{{ $mk->nama_kategori }}
                                               </option>
                                           @endforeach

                                       </select>
                                       @error('kategori_indikator')
                                           <div class="invalid-feedback">
                                               {{ $message }}
                                           </div>
                                       @enderror
                                   </div>
                                   <div class="mb-3">
                                       <label class="my-1 me-2" for="country">Tipe Indikator</label>
                                       <select class="form-select form-select-sm" wire:model="tipe">
                                           <option value="">silahkan pilih tipe...</option>
                                           @foreach ($tipe_indikator as $tp)
                                               <option value="{{ $tp->id }}">{{ $tp->tipe }}</option>
                                           @endforeach
                                       </select>
                                       @error('tipe')
                                           <div class="invalid-feedback">
                                               {{ $message }}
                                           </div>
                                       @enderror
                                   </div>
                               </div>
                               <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary"
                                       wire:click="Masindiupdate">Simpan</button>
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
                               <th class="border-0 rounded-start">#</th>
                               <th class="border-0">Nama Indikator</th>
                               <th class="border-0">Tipe</th>
                               <th class="border-0 rounded-end">Aksi</th>
                           </tr>
                       </thead>
                       <tbody>
                           @foreach ($mas_in as $mas)
                               <!-- Item -->
                               <tr>
                                   <td>{{ $loop->iteration }}</td>
                                   <td>
                                       {{ $mas->nama_indikator }}
                                   </td>
                                   <td>
                                       {{ $mas->tipeindikator->tipe }}
                                   </td>
                                   <td class="text-success">
                                       <span class="btn badge bg-warning text-dark" data-bs-toggle="modal"
                                           data-bs-target="#modal-update"
                                           wire:click="MasIndi({{ $mas }})">Edit</span>
                                       <button class="btn badge bg-danger"
                                           wire:click="confirmDelete({{ $mas->id }})">Hapus</button>

                                   </td>
                               </tr>
                               <!-- End of Item -->
                           @endforeach
                           {{-- Modal Konfirmasi --}}
                           @if ($indikatorToDeleteId !== null)
                               <div
                                   style="position: fixed; inset: 0; background: rgba(0,0,0,0.5); display: flex; justify-content: center; align-items: center; z-index: 1000;">
                                   <div
                                       style="background: white; padding: 24px; border-radius: 8px; max-width: 400px; width: 90%;">
                                       <h2 style="margin-top: 0;">Konfirmasi Hapus</h2>
                                       <p>Apakah Anda yakin ingin menghapus
                                           <strong>{{ $indikatorToDeleteName }}</strong>?
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
