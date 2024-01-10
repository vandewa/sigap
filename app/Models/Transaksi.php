<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    public $guarded = [];

    public function perawatan()
    {
        return $this->belongsTo(Perawatan::class, 'perawatan_id');
    }

}
