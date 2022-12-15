<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pertsona extends Model
{
    use HasFactory;

    public function etxea() {
        return $this->belongsTo(etxea::class, 'etxea_id');
    }
}
