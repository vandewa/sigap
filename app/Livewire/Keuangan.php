<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pemeliharaan as ModelsPemeliharaan;
use App\Models\Saldo;
use App\Models\Transaksi;
use Livewire\WithPagination;



class Keuangan extends Component
{
    use WithPagination;

    public function render()
    {
        $data = ModelsPemeliharaan::with(['kendaraan'])
            ->withSum('transaksi', 'jumlah')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        $saldo = Saldo::where('tahun', date('Y'))->first()->saldo ?? "0";

        $pengeluaran = Transaksi::whereHas('pemeliharaan', function ($a) {
            $a->whereYear('tgl', date('Y'));
        })->sum('jumlah');

        $sisa = $saldo - $pengeluaran;

        return view('livewire.keuangan', [
            'post' => $data,
            'saldo' => $saldo,
            'pengeluaran' => $pengeluaran,
            'sisa' => $sisa,
        ]);
    }
}
