<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etxea extends Model
{
    use HasFactory;
    public function pertsona() {
        return $this->hasMany(pertsona::class, 'etxea_id', 'id');
    }
}
