<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    public $guarded = [];

    protected $primaryKey = 'nopol';
    // protected $primaryKey = 'com_cd';
    public $incrementing = false;
    protected $keyType = 'string';

}
