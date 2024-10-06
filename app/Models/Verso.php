<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Verso extends Model
{
    // Specifica il nome corretto della tabella, che è 'verso' e non 'versos'
    protected $table = 'verso'; // Nome esatto della tabella nel database

    // Un verso appartiene a un canto
    public function canto()
    {
        return $this->belongsTo(Canto::class, 'id_canto'); // Relazione con il modello 'Canto'
    }
}