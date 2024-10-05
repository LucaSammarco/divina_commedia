import './bootstrap';

// Importa funzioni e pacchetti necessari da Vue e Inertia
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';

// Configura l'applicazione Inertia
createInertiaApp({
  // Risolvi le pagine in base al nome (presumibilmente le tue pagine sono nella cartella "Pages")
  resolve: (name) => require(`./Pages/${name}`),

  // Setup dell'app Vue con il plugin di Inertia
  setup({ el, App, props, plugin }) {
    // Crea l'app Vue e monta l'elemento principale nella pagina
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el);
  },
});

// Inizializza InertiaProgress per mostrare una barra di caricamento quando si naviga tra le pagine
InertiaProgress.init();
