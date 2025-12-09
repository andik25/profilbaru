<?php

namespace App\Livewire;

use Log;
use App\Models\desa;
use App\Models\Dusun;
use Livewire\Component;
use App\Models\Validasi;
use App\Models\Kecamatan;
use App\Models\RoleProgram;
use Livewire\WithPagination;
use App\Models\DataIndikator;
use App\Models\ValidasiDinkes;
use App\Models\KomponenProgram;
use App\Models\MasterIndikator;
use App\Models\ProgramKesehatan;
use Livewire\Attributes\Session;
use Livewire\WithoutUrlPagination;
use Illuminate\Support\Facades\Gate;
use App\Models\MasterKategoriIndikator;
use Illuminate\Validation\ValidationException;

class Fasyankes extends Component
{

    public $iki;
    public $isiwes = [];
    public $tarik;
    public array $intro;
    public $guide;
    public $indro = [];
    public $head;
    public array $active;
    public $kom;
    public $komp;
    public $kategori;
    public $authorvalidasi;
    public $bulanvalidasi;
    use WithPagination, WithoutUrlPagination;
    public $validasi;
    public $validation_reason = '';
    public $totals = [];

    // protected $rules = [
    //     'intro.*.male' => 'required|numeric|min:0',
    //     'intro.*.female' => 'required|numeric|min:0',
    //     'intro.*' => 'required|numeric|min:0',

    // ];

    #[Session(key: 'thn')]
    public $tahuna;

    #[Session(key: 'bln')]
    public $bln;

     // Method untuk mengganti bulan (dipanggil dari modal)
    public function gantiBulan()
    {
        return $this->redirect('/datinkes/' . $this->kom . '/' . $this->komp . '/' . $this->iki);
    }

    public function updatedValidasi($value)
    {
        $this->validasi = $value;
        // Clear reason if validated to approved
        if ($value == 1) {
            $this->validation_reason = '';
        }
    }

    // Di dalam class Fasyankes
    public function updatedPage($page)
    {
        // Tidak perlu logika khusus di sini, cukup trigger re-render
        $this->dispatch('refresh-tooltips'); // Opsional: dispatch event custom
    }

    public function mount($kom, $komp, $id)
    {
        $this->kom = $kom;
        $this->komp = $komp;
        $this->iki = $id;
        $this->kategori = MasterKategoriIndikator::find($id);
        $this->head = MasterIndikator::where('id_kategori_indikator', $this->iki)->get();
        foreach ($this->head as $indicator) {
            if ($indicator->gender == 1) {
                $this->intro[$indicator->id]['male'] = '';
                $this->intro[$indicator->id]['female'] = '';
            } else {
                $this->intro[$indicator->id] = '';
            }
        }
        if (Gate::allows('pj_pkm')) {
            if ($this->kategori->proy == 1) {
                $this->active = Validasi::where('id_kategori', $this->iki)
                    ->where('bulan', 0)
                    ->where('tahun', session('thn'))
                    ->pluck('is_active', 'id_author')
                    ->map(function ($value) {
                        return $value == 1; // Mengubah 1 menjadi true dan 0 menjadi false
                    })
                    ->toArray();
            } else {
                $this->active = Validasi::where('id_kategori', $this->iki)
                    ->where('bulan', session('bln'))
                    ->where('tahun', session('thn'))
                    ->pluck('is_active', 'id_author')
                    ->map(function ($value) {
                        return $value == 1; // Mengubah 1 menjadi true dan 0 menjadi false
                    })
                    ->toArray();
            }
        } elseif (Gate::allows('pj_dinkes')) {
            if ($this->kategori->proy == 1) {
                $this->active = ValidasiDinkes::where('id_kategori', $this->iki)
                    ->where('bulan', 0)
                    ->where('tahun', session('thn'))
                    ->pluck('is_active', 'id_author')
                    ->map(function ($value) {
                        return $value == 1; // Mengubah 1 menjadi true dan 0 menjadi false
                    })
                    ->toArray();
            } else {
                $this->active = ValidasiDinkes::where('id_kategori', $this->iki)
                    ->where('bulan', session('bln'))
                    ->where('tahun', session('thn'))
                    ->pluck('is_active', 'id_author')
                    ->map(function ($value) {
                        return $value == 1; // Mengubah 1 menjadi true dan 0 menjadi false
                    })
                    ->toArray();
            }
        } 
    }

    protected function rules()
    {
        $rules = [];
        foreach ($this->head as $indicator) {
            if ($indicator->gender == 1) {
                $rules["intro.{$indicator->id}.male"] = 'required|numeric';
                $rules["intro.{$indicator->id}.female"] = 'required|numeric';
            } else {
                $rules["intro.{$indicator->id}"] = 'required|numeric';
            }
        }
        return $rules;
    }

    protected function messages()
    {
        $messages = [];
        foreach ($this->head as $indicator) {
            if ($indicator->gender == 1) {
                $messages["intro.{$indicator->id}.male.required"] = "{$indicator->nama_indikator} (Male) wajib diisi.";
                $messages["intro.{$indicator->id}.male.numeric"] = "{$indicator->nama_indikator} (Male) harus berupa angka.";
                $messages["intro.{$indicator->id}.female.required"] = "{$indicator->nama_indikator} (Female) wajib diisi.";
                $messages["intro.{$indicator->id}.female.numeric"] = "{$indicator->nama_indikator} (Female) harus berupa angka.";
            } else {
                $messages["intro.{$indicator->id}.required"] = "{$indicator->nama_indikator} wajib diisi.";
                $messages["intro.{$indicator->id}.numeric"] = "{$indicator->nama_indikator} harus berupa angka.";
            }
        }
        return $messages;
    }

    public function render()
    {
        $iyo = $this->iki;
        if (Gate::allows('desa')) {
            if ($this->kategori->proy == 1) {
                $isian = desa::with(['isi' => function ($query) {
                    $query->where('bulan', 0)->wherein('id_master_indikator', $this->head->pluck('id'));
                }, 'valid' => function ($query) use ($iyo) {
                    $query->where('id_kategori', $iyo)->where('bulan', 0);
                }, 'isi.indi'])->where('user_id', auth()->user()->id)->first();
                $valdasi = Validasi::where('id_kategori', $iyo)->where('bulan', 0)->where('tahun', session('thn'))->where('id_author', desa::where('user_id', auth()->user()->id)->first()->id)->first();
            } else {
                $isian = desa::with(['isi' => function ($query) {
                    $query->where('bulan', session('bln'))->wherein('id_master_indikator', $this->head->pluck('id'));
                }, 'valid' => function ($query) use ($iyo) {
                    $query->where('id_kategori', $iyo)->where('bulan', session('bln'));
                }, 'isi.indi'])->where('user_id', auth()->user()->id)->first();
                $valdasi = Validasi::where('id_kategori', $iyo)->where('bulan', session('bln'))->where('tahun', session('thn'))->where('id_author', desa::where('user_id', auth()->user()->id)->first()->id)->first();
            }
        } elseif (Gate::allows('kecamatan')) {
            $kec = Kecamatan::where('user_id', auth()->user()->id)->first();
            $valdasi = '';
            // $isian = desa::where('id_kec', $kec->id)->get();
            if ($this->kategori->proy == 1) {
                $isian = desa::with(['isi' => function ($query) {
                    $query->where('bulan', 0)->wherein('id_master_indikator', $this->head->pluck('id'));
                }, 'isi.indi'])->where('id_kec', $kec->id)->get();
            } else {
                $isian = desa::with(['isi' => function ($query) {
                    $query->where('bulan', session('bln'))->wherein('id_master_indikator', $this->head->pluck('id'));
                }, 'isi.indi'])->where('id_kec', $kec->id)->get();
            }
        } elseif (Gate::allows('pj_pkm')) {
            $kec = RoleProgram::where('user_id', auth()->user()->id)->first();
            // $isian = desa::where('id_kec', $kec->id)->get();
            if ($this->kategori->proy == 1) {
                $intan = desa::with(['isi' => function ($query) {
                    $query->where('bulan', 0)->wherein('id_master_indikator', $this->head->pluck('id'));
                }, 'valid' => function ($query) use ($iyo) {
                    $query->where('id_kategori', $iyo)->where('bulan', 0);
                }, 'valid_din' => function ($query) use ($iyo) {
                    $query->where('id_kategori', $iyo)->where('bulan', 0);
                }, 'isi.indi'])->where('id_kec', $kec->id_kec);
                $isian = $intan->get();
                $valdasi = ValidasiDinkes::where('id_kategori', $iyo)->where('bulan', 0)->where('tahun', session('thn'))->where('id_author', $kec->id_kec)->first();
            } else {
                $isian = desa::with(['isi' => function ($query) {
                    $query->where('bulan', session('bln'))->wherein('id_master_indikator', $this->head->pluck('id'));
                }, 'valid' => function ($query) use ($iyo) {
                    $query->where('id_kategori', $iyo)->where('bulan', session('bln'));
                }, 'valid_din' => function ($query) use ($iyo) {
                    $query->where('id_kategori', $iyo)->where('bulan', session('bln'));
                }, 'isi.indi'])->where('id_kec', $kec->id_kec)->get();
                $valdasi = ValidasiDinkes::where('id_kategori', $iyo)->where('bulan', session('bln'))->where('tahun', session('thn'))->where('id_author', $kec->id_kec)->first();
            }
        } elseif (Gate::allows('dinkes')) {
            // jikan berperan sebagai penginput data
            if (auth()->user()->tingkat == $this->kategori->jenis || $this->kategori->jenis == '1') {
                $isian = Kecamatan::with(['isi' => function ($query) {
                    $query->wherein('id_master_indikator', $this->head->pluck('id'));
                }])->get();
            } else {
                if ($this->kategori->proy == 1) {
                    $isian = Kecamatan::with(['isi' => function ($query) {
                        $query->selectRaw('id_master_indikator, SUM(nilai_male) AS nilai_male, SUM(nilai_female) AS nilai_female, `desas`.`id_kec` as `laravel_through_key`')->wherein('id_master_indikator', $this->head->pluck('id'))->where('bulan', 0)->groupBy('id_master_indikator', 'laravel_through_key');
                    }, 'isi.indi'])->get();
                    $valdasi = '';
                } else {
                    $isian = Kecamatan::with(['isi' => function ($query) {
                        $query->selectRaw('id_master_indikator, SUM(nilai_male) AS nilai_male, SUM(nilai_female) AS nilai_female, `desas`.`id_kec` as `laravel_through_key`')->wherein('id_master_indikator', $this->head->pluck('id'))->where('bulan', session('bln'))->groupBy('id_master_indikator', 'laravel_through_key');
                    }, 'isi.indi'])->get();
                    $valdasi = '';
                }
            }
        } elseif (Gate::allows('pj_dinkes')) {
            if ($this->kategori->proy == 1) {
                $isian = Kecamatan::with(['isi' => function ($query) {
                    $query->selectRaw('id_master_indikator, SUM(nilai_male) AS nilai_male, SUM(nilai_female) AS nilai_female, `desas`.`id_kec` as `laravel_through_key`')->wherein('id_master_indikator', $this->head->pluck('id'))->where('bulan', 0)->groupBy('id_master_indikator', 'laravel_through_key');
                }, 'valid' => function ($query) use ($iyo) {
                    $query->where('id_kategori', $iyo)->where('bulan', 0);
                }, 'desa', 'isi.indi'])->get();
                 $valdasi = '';
            } else {
                $indikator_ids = $this->head->pluck('id');

                $isian = Kecamatan::with(['isi' => function ($query) use ($indikator_ids) {
                    $query->selectRaw('id_master_indikator, SUM(nilai_male) AS nilai_male, SUM(nilai_female) AS nilai_female, `desas`.`id_kec` as `laravel_through_key`')->wherein('id_master_indikator', $indikator_ids)->where('bulan', session('bln'))->groupBy('id_master_indikator', 'laravel_through_key');
                }, 'valid' => function ($query) use ($iyo) {
                    $query->where('id_kategori', $iyo)->where('bulan', session('bln'));
                }, 'valid_dinas_kesehatan' => function ($query) use ($iyo) {
                    $query->where('id_kategori', $iyo)->where('bulan', session('bln'));
                }, 'desa', 'isi.indi'])->get();
                $valdasi = '';
            }
        } elseif (Gate::allows('super_admin')) {
            // jikan berperan sebagai penginput data
            if (auth()->user()->tingkat == $this->kategori->jenis || $this->kategori->jenis == '1') {
                $isian = Kecamatan::with(['isi' => function ($query) {
                    $query->wherein('id_master_indikator', $this->head->pluck('id'));
                }])->get();
                $valdasi = '';
            } else {
                if ($this->kategori->proy == 1) {
                    $isian = Kecamatan::with(['isi' => function ($query) {
                        $query->selectRaw('id_master_indikator, SUM(nilai_male) AS nilai_male, SUM(nilai_female) AS nilai_female, `desas`.`id_kec` as `laravel_through_key`')->wherein('id_master_indikator', $this->head->pluck('id'))->where('bulan', 0)->groupBy('id_master_indikator', 'laravel_through_key');
                    }, 'valid' => function ($query) use ($iyo) {
                        $query->where('id_kategori', $iyo)->where('bulan', 0);
                    }, 'valid_suad' => function ($query) use ($iyo) {
                        $query->where('id_kategori', $iyo)->where('bulan', 0);
                    }, 'desa', 'isi.indi'])->get();
                    $valdasi = '';
                } else {
                    $isian = Kecamatan::get();
                    $isian->load(['isi' => function ($query) {
                        $query->selectRaw('id_master_indikator, SUM(nilai_male) AS nilai_male, SUM(nilai_female) AS nilai_female, `desas`.`id_kec` as `laravel_through_key`')->whereIn('id_master_indikator', $this->head->pluck('id'))->where('bulan', session('bln'))->groupBy('id_master_indikator', 'laravel_through_key');
                    }, 'valid' => function ($query) use ($iyo) {
                        $query->where('id_kategori', $iyo)->where('bulan', session('bln'));
                    }, 'valid_suad' => function ($query) use ($iyo) {
                        $query->where('id_kategori', $iyo)->where('bulan', session('bln'));
                    }, 'desa', 'isi.indi']);
                    $valdasi = '';
                }
            }
        }

        return view('livewire.fasyankes', [
            'program' => ProgramKesehatan::find($this->kom),
            'komponen' => KomponenProgram::find($this->komp),
            'iyo' => $iyo,
            'head' => $this->head,
            'kategori' => $this->kategori,
            'isian' => $isian,
            'kevalidan' => $valdasi
        ]);
    }

    public function toggleIsActive(int $id_author): void
    {
        $kategori = MasterKategoriIndikator::find($this->iki);
        $tahu = [
            'is_active' => $this->active[$id_author] ? 1 : 0,
        ];
        if (Gate::allows('pj_pkm')) {
            $kec = RoleProgram::where('user_id', auth()->user()->id)->first();
            // cek validasi dinkes
            $apakah_validasi_dinkes = ValidasiDinkes::where('id_kategori', $this->iki)->where('id_author', $kec->id_kec)->where('bulan', $kategori->proy == 1 ? 0 : session('bln'))->where('tahun', session('thn'))->first();
            if (($apakah_validasi_dinkes->is_active ?? 0) == 1) {
            } else {
                Validasi::updateOrCreate(
                    [
                        'id_kategori' => $this->iki,
                        'id_author' => $id_author,
                        'bulan' => $kategori->proy == 1 ? 0 : session('bln'),
                        'tahun' => session('thn')
                    ],
                    $tahu
                );
            }
        } elseif (Gate::allows('pj_dinkes')) {
            ValidasiDinkes::updateOrCreate(
                [
                    'id_kategori' => $this->iki,
                    'id_author' => $id_author,
                    'bulan' => $kategori->proy == 1 ? 0 : session('bln'),
                    'tahun' => session('thn')
                ],
                $tahu
            );
        }
    }

    public function Isiupdate()
    {

        $kategori = MasterKategoriIndikator::find($this->iki);
        $data = $this->intro;
        // dd($data);
        $this->validate();
        $pengisi = desa::where('user_id', auth()->user()->id)->first();
        $indo = MasterIndikator::where('id_kategori_indikator', $this->iki)->get();
        $apakah_validasi_pkm = Validasi::where('id_kategori', $this->iki)->where('id_author', $pengisi->id)->where('bulan', $kategori->proy == 1 ? 0 : session('bln'))->where('tahun', session('thn'))->first();
        if (($apakah_validasi_pkm->is_active ?? 0) == 1) {
        } else {
            foreach ($indo as $key) {
                if ($key->gender == 1) {
                    $tahu = [
                        'nilai_male' => $data[$key->id]['male'],
                        'nilai_female' => $data[$key->id]['female'],
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),

                    ];
                } else {
                    $tahu = [
                        'nilai_male' => $data[$key->id],
                        'nilai_female' => 0,
                        'created_at' => date('Y-m-d H:i:s'),
                        'updated_at' => date('Y-m-d H:i:s'),

                    ];
                }
                DataIndikator::updateOrCreate(
                    [
                        'id_master_indikator' => $key->id,
                        'id_author' => $this->tarik,
                        'bulan' => $kategori->proy == 1 ? 0 : session('bln'),
                        'tahun' => session('thn')
                    ],
                    $tahu
                );
            }

            return $this->redirect('/datinkes/' . $this->kom . '/' . $this->komp . '/' . $this->iki);
        }
    }

    public function CekValidasi($idauthor)
    {
        $kategori = MasterKategoriIndikator::find($this->iki);
        if (Gate::allows('pj_pkm')) {
            $valdas = Validasi::where('id_kategori', $this->iki)->where('id_author', $idauthor)->where('bulan', $kategori->proy == 1 ? 0 : session('bln'))->where('tahun', session('thn'))->first();
        } elseif (Gate::allows('pj_dinkes')) {
            $valdas = ValidasiDinkes::where('id_kategori', $this->iki)->where('id_author', $idauthor)->where('bulan', $kategori->proy == 1 ? 0 : session('bln'))->where('tahun', session('thn'))->first();
        }
        $this->validasi = $valdas->is_active ?? '';
        $this->validation_reason = $valdas->alasan ?? '';
        $this->authorvalidasi = $idauthor;
        $this->bulanvalidasi = $kategori->proy == 1 ? 0 : session('bln');
    }

    public function KirimValidasi()
    {
        if ($this->validasi == 0) {
            $this->validate([
                'validation_reason' => 'required',
            ]);
        }
        if (Gate::allows('pj_pkm')) {
            Validasi::updateOrCreate(
                [
                    'id_kategori' => $this->iki,
                    'id_author' => $this->authorvalidasi,
                    'bulan' => $this->bulanvalidasi,
                    'tahun' => session('thn')
                ],
                [
                    'is_active' => $this->validasi,
                    'alasan' => $this->validation_reason
                ]
            );
        } elseif (Gate::allows('pj_dinkes')) {
            ValidasiDinkes::updateOrCreate(
                [
                    'id_kategori' => $this->iki,
                    'id_author' => $this->authorvalidasi,
                    'bulan' => $this->bulanvalidasi,
                    'tahun' => session('thn')
                ],
                [
                    'is_active' => $this->validasi,
                    'alasan' => $this->validation_reason
                ]
            );
        }

        return $this->redirect('/datinkes/' . $this->kom . '/' . $this->komp . '/' . $this->iki);
    }

    public function MasIndi($id_kategori, $torok)
    {
        $kategori = MasterKategoriIndikator::find($this->iki);
        $indro[] = '';
        $head = MasterIndikator::with(['isi' => function ($query) use ($torok, $kategori) {
            $query->where('bulan', $kategori->proy == 1 ? 0 : session('bln'))->where('id_author', $torok);
        }])->where('id_kategori_indikator', $id_kategori)->get();
        foreach ($head as $key) {
            if ($key->gender == 1) {
                foreach ($key->isi as $kis) {
                    $indro[$key->id]['male'] = $kis->nilai_male;
                    $indro[$key->id]['female'] = $kis->nilai_female;
                }
            } else {
                foreach ($key->isi as $kis) {
                    $indro[$key->id] = $kis->nilai_male;
                }
            }
        }
        $this->intro = $indro;
        $this->tarik = $torok;
    }

    // public function MasIndi($id_kategori, $torok)
    // {
    //     $this->indro[] = ['nilai_male' => '', 'id_author' => $torok];
    //     dd($this->indro);
    // }
}
