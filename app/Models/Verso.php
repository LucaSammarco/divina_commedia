<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verso extends Model
{
    use HasFactory;

    public function canto()
    {
        return $this->belongsTo(Canto::class, 'id_canto'); // Relazione con il modello Canto
    }
}