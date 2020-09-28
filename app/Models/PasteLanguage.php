<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pastelanguage extends Model
{
    use HasFactory;

    public function paste()
    {
        return $this->belongsTo(Paste::class, 'pastelanguage_id');
    }
}
