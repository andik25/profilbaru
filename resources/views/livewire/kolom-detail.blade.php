<div>
    <title>Pengaturan Detail Kolom - Datinkes KabProb</title>
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
                <li class="breadcrumb-item"><a href="{{ route('tabel-setting') }}">Pengaturan Tabel</a></li>
                <li class="breadcrumb-item"><a
                        href="{{ route('kolom-tabel', ['id' => $mastables->id]) }}">{{ $mastables->judul_tabel }}</a>
                </li>
                {{-- <li class="breadcrumb-item active" aria-current="page">Bootstrap tables</li> --}}
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">{{ $namatabel->judul_tabel ?? '' }}</h1>
                <p class="mb-0">Pengaturan Kolom pada {{ $namatabel->judul_tabel ?? '' }}</p>
            </div>
            <div>
                {{-- Modal Tambah Kategori Indikator --}}
                <button type="button" class="btn btn-block btn-primary mb-3" data-bs-toggle="modal"
                    data-bs-target="#modal-default">Tambah Indikator</button>

                <div wire:ignore.self class="modal fade" id="modal-default" tabindex="-1" role="dialog"
                    aria-labelledby="modal-default" aria-hidden="true" data-bs-backdrop="static">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="h6 modal-title">Tambah Kolom</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    wire:click="close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tipe</label>
                                    <select class="form-select form-select-sm" wire:model="operator">
                                        <option value="">Open this select menu</option>
                                        @foreach ($operatora as $op)
                                            <option value="{{ $op->id }}">{{ $op->nama_operator }}</option>
                                        @endforeach
                                    </select>
                                    @error('operator')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Sumber Data</label>
                                    <select class="form-select form-select-sm" wire:model.live="sumberdata">
                                        <option value="">Pilih ...</option>
                                        <option value="1">Ambil dari Kolom Lain</option>
                                        <option value="2">Ambil dari Indikator</option>

                                    </select>
                                    @error('sumberdata')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                @if ($showForm1)
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">memilih dari kolom
                                            lain</label>
                                        <select class="form-select form-select-sm" wire:model.live="sumberdata">
                                            <option value="">Pilih ...</option>
                                            <option value="1">Ambil dari Kolom Lain</option>
                                            <option value="2">Ambil dari Indikator</option>

                                        </select>
                                        @error('sumberdata')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                @endif

                                @if ($showForm2)

                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                        <select class="form-select form-select-sm" wire:model.live="kategoriId">
                                            <option value="">Open this select menu</option>
                                            <option value="0">Custom</option>
                                            @foreach ($kategori as $kt)
                                                <option value="{{ $kt->id }}">{{ $kt->nama_kategori }}</option>
                                            @endforeach
                                        </select>
                                        @error('kategoriId')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>


                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Indikator</label>
                                        @if ($kategoriId == 0)
                                            <input type="text" class="form-control form-control-sm"
                                                wire:model="idindikators">
                                        @else
                                            <select
                                                class="form-select form-select-sm @error('idindikators')
                                        is-invalid
                                    @enderror"
                                                wire:model="idindikators">
                                                <option value="">Open this select menu</option>
                                                @foreach ($indikators as $indikator)
                                                    <option value="{{ $indikator->id }}">
                                                        {{ $indikator->nama_indikator }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        @endif
                                        @error('idindikators')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                @endif
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    wire:click="simpanKolom">Simpan</button>
                                <button type="button" class="btn btn-link text-gray ms-auto" data-bs-dismiss="modal"
                                    wire:click="close">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- selesi modal tambah --}}



                {{-- modalupdate --}}
                <div wire:ignore.self class="modal fade" id="modal-update" tabindex="-1" role="dialog"
                    aria-labelledby="modal-update" aria-hidden="true" data-bs-backdrop="static">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="h6 modal-title">Tambah Kolom</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                    wire:click="close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tipe</label>
                                    <select class="form-select form-select-sm" wire:model="operator">
                                        <option value="">Open this select menu</option>
                                        @foreach ($operatora as $op)
                                            <option value="{{ $op->id }}">{{ $op->nama_operator }}</option>
                                        @endforeach
                                    </select>
                                    @error('operator')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Kategori</label>
                                    <select class="form-select form-select-sm" wire:model.live="kategoriIda">
                                        <option value="">Open this select menu</option>
                                        <option value="0">Custom</option>
                                        @foreach ($kategori as $kt)
                                            <option value="{{ $kt->id }}">{{ $kt->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                    @error('kategoriId')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Indikator</label>
                                    @if ($kategoriId == 0)
                                        <input type="text" class="form-control form-control-sm"
                                            wire:model="idindikators">
                                    @else
                                        <select
                                            class="form-select form-select-sm @error('idindikators')
                                        is-invalid
                                    @enderror"
                                            wire:model="idindikators">
                                            <option value="">Open this select menu</option>
                                            @foreach ($indikators as $indikator)
                                                <option value="{{ $indikator->id }}">{{ $indikator->nama_indikator }}
                                                </option>
                                            @endforeach
                                        </select>
                                    @endif
                                    @error('idindikators')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    wire:click="simpanKolom">Simpan</button>
                                <button type="button" class="btn btn-link text-gray ms-auto" data-bs-dismiss="modal"
                                    wire:click="close">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- selesi modal update --}}


            </div>
        </div>
    </div>

    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">Operator</th>
                            <th class="border-0">Kategori</th>
                            <th class="border-0">Indikator</th>
                            <th class="border-0 rounded-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kolom_details as $kd)
                            <tr>
                                <td>{{ $kd->opr->nama_operator }}</td>
                                <td>{{ $kd->kateg->nama_kategori ?? 'Custom' }}</td>
                                <td>{{ $kd->indik->nama_indikator ?? 'Custom' }}</td>
                                <td>
                                    <span class="btn badge bg-warning text-dark" data-bs-toggle="modal"
                                        data-bs-target="#modal-update"
                                        wire:click="MasIndi({{ $kd }})">Edit</span>
                                    <button class="btn badge bg-danger"
                                        wire:click="confirmDelete({{ $kd->id }})">Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                        {{-- Modal Konfirmasi --}}
                        @if ($koldetToDeleteId !== null)
                            <div
                                style="position: fixed; inset: 0; background: rgba(0,0,0,0.5); display: flex; justify-content: center; align-items: center; z-index: 1000;">
                                <div
                                    style="background: white; padding: 24px; border-radius: 8px; max-width: 400px; width: 90%;">
                                    <h2 style="margin-top: 0;">Konfirmasi Hapus</h2>
                                    <p>Apakah Anda yakin ingin menghapus
                                        <strong>{{ $koldetToDeleteName }}</strong>?
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
