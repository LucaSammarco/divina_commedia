import './bootstrap';

// Importa funzioni e pacchetti necessari da Vue e Inertia
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';

// Configura l'applicazione Inertia
createInertiaApp({
  // Usa l'import dinamico per caricare i componenti Vue
  resolve: (name) => import(`./Pages/${name}.vue`),

  // Setup dell'app Vue con il plugin di Inertia
  setup({ el, App, props, plugin }) {
    // Crea l'app Vue e monta l'elemento principale nella pagina
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el);
  },
});
