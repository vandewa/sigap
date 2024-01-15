<?php

namespace App\Livewire;

use App\Models\Kendaraan;
use App\Models\Pemeliharaan;
use Livewire\Component;

class Dashboard extends Component
{

    public $startDate;
    public $endDate;
    public $data;

    public function mount()
    {
        $this->data = Kendaraan::withCount('pemeliharaan')
        ->get();

        // dd($this->data);
    }

    public function updated($property)
    {
        if ($property == 'startDate' && $property == 'endDate' ) {
            dd('asu');
        }
    }


    public function render()
    {
        // $this->data = Kendaraan::whereHas('pemeliharaan', function ($a) {
        //     $a->whereBetween('tgl',[$this->startDate, $this->endDate]);
        // })
        // ->withCount('pemeliharaan')
        // ->get();

        return view('livewire.dashboard');
    }
}
