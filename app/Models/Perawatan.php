<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perawatan extends Model
{
    use HasFactory;

    public $guarded = [];

    public function scopeCari($filter, $value)
    {
      if ($value) {
        return $this->where('nama', 'like', "%$value%");
      }

    }

}
