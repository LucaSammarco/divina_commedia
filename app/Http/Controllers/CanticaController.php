<?php

namespace App\Http\Controllers;

use App\Models\Cantica;
use Inertia\Inertia;

class CanticaController extends Controller
{
    // Mostra tutte le cantiche
    public function index()
    {
        // Recupera tutte le cantiche dal database
        $cantiche = Cantica::all();

        // Passa i dati alla vista Inertia per visualizzare la lista delle cantiche
        return Inertia::render('Cantica/Index', [
            'cantiche' => $cantiche,
        ]);
    }

    // Mostra una singola cantica con i suoi canti
    public function show($id)
    {
        // Recupera la cantica con tutti i suoi canti utilizzando la relazione 'canti'
        $cantica = Cantica::with('canti')->findOrFail($id);

        // Passa i dati alla vista Inertia per visualizzare la cantica con i suoi canti
        return Inertia::render('Cantica/Show', [
            'cantica' => $cantica,
        ]);
    }
}