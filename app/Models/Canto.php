<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Canto extends Model
{
    protected $table = 'canto'; // La tabella associata a questo modello

    // Un canto appartiene a una cantica
    public function cantica()
    {
        return $this->belongsTo(Cantica::class, 'id_cantica'); // Relazione con il modello Cantica
    }

    // Un canto ha molti versi
    public function versi()
    {
        return $this->hasMany(Verso::class, 'id_canto'); // Relazione con il modello Verso
    }
}