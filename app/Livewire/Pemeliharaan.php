<?php

namespace App\Livewire;

use App\Models\Kendaraan;
use App\Models\Pemeliharaan as ModelsPemeliharaan;
use Livewire\Component;
use Livewire\WithPagination;

class Pemeliharaan extends Component
{

    use WithPagination;

    public $idHapus, $edit = false, $idnya;

    public $form = [
        'kendaraan_id' => null,
        'nota' => null,
        'tgl' => null,
        'pengguna_kendaraan' => null,
        'user_id' => null,
    ];

    public function mount()
    {
        $this->ambilKendaraan();
    }

    public function ambilKendaraan()
    {
        return Kendaraan::all()->toArray();
    }

    public function getEdit($a)
    {
        $this->form = ModelsPemeliharaan::find($a)->only(['kendaraan_id', 'tgl', 'pengguna_kendaraan']);
        $this->idHapus = $a;
        $this->edit = true;
    }

    public function save()
    {
        if ($this->edit) {
            $this->storeUpdate();
        } else {
            $this->store();
        }

        $this->js(<<<'JS'
        Swal.fire({
            title: 'Good job!',
            text: 'You clicked the button!',
            icon: 'success',
          })
        JS);
    }

    public function store()
    {
        $this->form['nota'] = gen_nota();
        $this->form['user_id'] = auth()->user()->id;
        ModelsPemeliharaan::create($this->form);
        $this->reset();
    }

    public function delete($id)
    {
        $this->idHapus = $id;
        $this->js(<<<'JS'
        Swal.fire({
            title: 'Apakah Anda yakin?',
                text: "Apakah kamu ingin menghapus data ini? proses ini tidak dapat dikembalikan.",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus!',
                cancelButtonText: 'Batal'
          }).then((result) => {
            if (result.isConfirmed) {
                $wire.hapus()
            }
          })
        JS);
    }

    public function hapus()
    {
        ModelsPemeliharaan::destroy($this->idHapus);
        $this->js(<<<'JS'
        Swal.fire({
            title: 'Good job!',
            text: 'You clicked the button!',
            icon: 'success',
          })
        JS);
    }

    public function storeUpdate()
    {
        $this->form['user_id'] = auth()->user()->id;
        ModelsPemeliharaan::find($this->idHapus)->update($this->form);
        $this->reset();
        $this->edit = false;
    }


    public function batal()
    {
        $this->edit = false;
        $this->reset();
    }

    public function render()
    {
        $data = ModelsPemeliharaan::with(['kendaraan'])
            ->withSum('transaksi', 'jumlah')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('livewire.pemeliharaan', [
            'post' => $data,
            'listKendaraan' => $this->ambilKendaraan()
        ]);
    }
}
