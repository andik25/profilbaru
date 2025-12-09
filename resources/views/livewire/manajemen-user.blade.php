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
                <h1 class="h4">Manajemen User</h1>
            </div>
            <div>
                <div class="d-flex align-items-center">
                    {{-- Modal Tambah Kategori Indikator --}}
                    <button type="button" class="btn btn-sm btn-block btn-primary mx-1" data-bs-toggle="modal"
                        data-bs-target="#modal-default"><svg class="icon icon-xs me-2" fill="none"
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
                <div wire:ignore.self class="modal fade" id="modal-default" tabindex="-1" role="dialog"
                    aria-labelledby="modal-default" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="h6 modal-title">Tambah Pengguna</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama User</label>
                                    <input type="text" class="form-control form-control-sm" wire:model="nama_user">
                                    @error('nama_user')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="text" class="form-control form-control-sm" wire:model="email">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Password</label>
                                    <input type="password" class="form-control form-control-sm" wire:model="password">
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                @can('kecamatan')
                                    <div class="mb-3">
                                        <label class="my-1 me-2" for="country">Tipe User</label>
                                        <select class="form-select form-select-sm" wire:model="tingkat">
                                            <option value="">silahkan pilih tingkat...</option>
                                            <option value="pjpkm">PJ Program Puskesmas</option>
                                        </select>
                                        @error('tingkat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                @endcan
                                @can('super_admin')
                                    <div class="mb-3">
                                        <label class="my-1 me-2" for="country">Tipe User</label>
                                        <select class="form-select form-select-sm" wire:model="tingkat">
                                            <option value="">silahkan pilih tingkat...</option>

                                            @foreach ($tingkat_users as $tp)
                                                <option value="{{ $tp->id }}">{{ $tp->posisi }}</option>
                                            @endforeach
                                        </select>
                                        @error('tingkat')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                @endcan

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    wire:click="simpanTambahUser">Simpan</button>
                                <button type="button" class="btn btn-link text-gray ms-auto"
                                    data-bs-dismiss="modal">Tutup</button>
                            </div>
                            @if (session()->has('message'))
                                <div>{{ session('message') }}</div>
                            @endif
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
                                <h2 class="h6 modal-title">Edit Pengguna</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Pengguna</label>
                                    <input type="text" class="form-control form-control-sm"
                                        wire:model="nama_user">
                                    @error('nama_user')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="text" class="form-control form-control-sm" wire:model="email">
                                    @error('email')
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

                {{-- Modal reset --}}
                {{-- Modal Reset Password --}}
                <div wire:ignore.self class="modal fade" id="modal-reset" tabindex="-1" role="dialog"
                    aria-labelledby="modal-reset" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="h6 modal-title">Reset Password</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control form-control-sm" id="password"
                                        wire:model="password" required>
                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                    <input type="password" class="form-control form-control-sm"
                                        id="password_confirmation" wire:model="password_confirmation" required>
                                    @error('password_confirmation')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" wire:click="resetPassword"
                                    wire:loading.attr="disabled">Simpan</button>
                                <button type="button" class="btn btn-link text-gray ms-auto"
                                    data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Selesai Modal Reset Password --}}
                {{-- selesai modal reset --}}

                {{-- Modal detail --}}
                <div wire:ignore.self class="modal fade" id="modal-detail" tabindex="-1" role="dialog"
                    aria-labelledby="modal-detail" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="card shadow border-0 text-center p-0">
                                <div class="card-body pb-5">
                                    <img src="../assets/img/team/profile-picture-1.jpg"
                                        class="avatar-xl rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                                    <h4 class="h3">
                                        {{ $nama_user }}
                                    </h4>
                                    <h5 class="fw-normal">{{ $tingkat }}</h5>
                                    <p class="text-gray mb-4">{{ $email }}</p>

                                    {{-- tabel tanggung jawab --}}


                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap mb-0 rounded">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="border-0 rounded-start">No</th>
                                                    <th class="border-0">Puskesmas</th>
                                                    <th class="border-0 rounded-end">#</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($role_program)
                                                    @foreach ($role_program as $rp)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $rp->pus->puskesmas }}</td>
                                                            <td>hapus</td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                @foreach ($items as $index => $item)
                                                    <!-- Item -->
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td class="fw-bold d-flex align-items-center">
                                                            <input type="hidden"
                                                                wire:model="items.{{ $index }}.user_id">
                                                            <select class="form-select form-select-sm"
                                                                wire:model="items.{{ $index }}.id_kec">
                                                                <option value="">pilih puskesmas...
                                                                </option>
                                                                @foreach ($master_kategori as $mk)
                                                                    <option value="{{ $mk->id }}">
                                                                        {{ $mk->puskesmas }}</option>
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
                                                            @error("items.$index.id_kec")
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

                {{-- Modal program --}}
                <div wire:ignore.self class="modal fade" id="modal-program" tabindex="-1" role="dialog"
                    aria-labelledby="modal-detail" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="card shadow border-0 text-center p-0">
                                <div class="card-body pb-5">
                                    <h4 class="h3">
                                        {{ $nama_user }}
                                    </h4>
                                    <h5 class="fw-normal">{{ $tingkat }}</h5>
                                    <p class="text-gray mb-4">{{ $email }}</p>

                                    {{-- tabel tanggung jawab --}}


                                    <div class="table-responsive">
                                        <table class="table table-centered table-nowrap mb-0 rounded">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th class="border-0 rounded-start">No</th>
                                                    <th class="border-0">Program</th>
                                                    <th class="border-0">Komponen</th>
                                                    <th class="border-0">Kategori</th>
                                                    <th class="border-0 rounded-end">#</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($role_program)
                                                    @foreach ($role_program as $rp)
                                                        <tr>
                                                            <td>{{ $loop->iteration }}</td>
                                                            <td>{{ $rp->pus->puskesmas }}</td>
                                                            <td>hapus</td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                @foreach ($butirs as $index => $butir)
                                                    <!-- Item -->
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td class="fw-bold d-flex align-items-center">
                                                            <select class="form-select form-select-sm"
                                                                wire:model.live="butirs.{{ $index }}.program">
                                                                <option value="">pilih program...
                                                                </option>
                                                                @foreach ($programs as $mk)
                                                                    <option value="{{ $mk->id }}">
                                                                        {{ $mk->nama_program }}</option>
                                                                @endforeach
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-select form-select-sm"
                                                                wire:model.live="butirs.{{ $index }}.komponen">
                                                                <option value="">pilih komponen...
                                                                </option>
                                                                @if (!empty($butir['komponens']))
                                                                    @foreach ($butir['komponens'] as $komponen)
                                                                        <option value="{{ $komponen->id }}">
                                                                            {{ $komponen->nama_komponen }}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <select class="form-select form-select-sm"
                                                                wire:model="butirs.{{ $index }}.kategori">
                                                                <option value="">pilih kategori...
                                                                </option>
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
                                                            @error("items.$index.id_kec")
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
                                                        <button type="button" wire:click="addButir"
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
                {{-- selesai modal program --}}

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
                            <th class="border-0">Nama Pengguna</th>
                            <th class="border-0">Email Pengguna</th>
                            <th class="border-0">Tipe</th>
                            <th class="border-0 rounded-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pengguna as $index => $peng)
                            <!-- Item -->
                            <tr>
                                <td>{{ $pengguna->firstItem() + $index }}</td>
                                <td>
                                    {{ $peng->name }}
                                </td>
                                <td>{{ $peng->email }}
                                </td>
                                <td>{{ $peng->ting->posisi }}
                                </td>
                                @can('super_admin')
                                    <td class="text-success">
                                        <span class="btn badge bg-warning text-dark" data-bs-toggle="modal"
                                            data-bs-target="#modal-update"
                                            wire:click="MasIndi({{ $peng }})">Edit</span>
                                        <span class="btn badge bg-danger">Hapus</span>
                                        @if ($peng->tingkat == 5)
                                            <span class="btn badge bg-success text-dark" data-bs-toggle="modal"
                                                data-bs-target="#modal-detail"
                                                wire:click="MasIndi({{ $peng }})">Detail</span>
                                        @endif
                                        @if ($peng->tingkat == 5 || $peng->tingkat == 6)
                                            <a href="{{ route('user-program', $peng->id) }}"
                                                class="btn badge bg-primary">Program</a>
                                        @endif
                                    </td>
                                @endcan
                                @can('kecamatan')
                                    <td>
                                        <span class="btn badge bg-success text-dark" data-bs-toggle="modal"
                                            data-bs-target="#modal-update"
                                            wire:click="MasIndi({{ $peng }})">Edit</span>
                                        <span class="btn badge bg-warning text-dark" data-bs-toggle="modal"
                                            data-bs-target="#modal-reset" wire:click="MasIndi({{ $peng }})">Reset
                                            Password</span>
                                        @if ($peng->tingkat == 5)
                                            <a href="{{ route('user-program', $peng->id) }}"
                                                class="btn badge bg-primary">Program</a>
                                        @endif
                                    </td>
                                @endcan
                            </tr>
                            <!-- End of Item -->
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-3">
                    {{ $pengguna->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
