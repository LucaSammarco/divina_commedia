<?php

namespace App\Http\Middleware;

use App\Models\Cantica;
use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * Questo indica quale template viene caricato quando si visita la pagina per la prima volta.
     * In questo caso, il template utilizzato è 'app', che è probabilmente il layout principale.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * Questo metodo serve per determinare la versione corrente degli asset. È utile per la cache busting,
     * ovvero per forzare il caricamento di nuove versioni degli asset (CSS, JS) quando vengono aggiornati.
     * In questo esempio, richiama la versione gestita dal middleware padre.
     *
     * @see https://inertiajs.com/asset-versioning
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * Questo metodo definisce i dati (props) che vengono condivisi di default in tutte le pagine.
     * Ad esempio, i dati dell'utente autenticato o altre informazioni che devono essere sempre disponibili.
     * In questo caso, vengono aggiunte le cantiche per renderle disponibili globalmente.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            // Condividi le cantiche globalmente per tutte le pagine
            'cantiche' => Cantica::all(),
        ]);
    }
}