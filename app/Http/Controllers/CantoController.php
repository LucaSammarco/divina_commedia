<?php

namespace App\Http\Controllers;

use App\Models\Canto;
use Inertia\Inertia;

class CantoController extends Controller
{
    // Mostra un singolo canto con tutti i suoi versi
    public function show($id)
    {
        // Recupera il canto con i versi associati utilizzando la relazione 'versi' e 'cantica'
        $canto = Canto::with(['versi', 'cantica'])->findOrFail($id);

        // Passa i dati alla vista Inertia per visualizzare il canto con i suoi versi
        return Inertia::render('Canto/Show', [
            'canto' => $canto,
            'cantica' => $canto->cantica,
        ]);
    }
}