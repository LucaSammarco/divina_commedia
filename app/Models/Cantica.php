<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cantica extends Model
{
    protected $table = 'cantica'; // La tabella associata a questo modello

    // Una cantica ha molti canti
    public function canti() // Nota: plurale per chiarezza
    {
        return $this->hasMany(Canto::class, 'id_cantica'); // Relazione con il modello Canto
    }
}