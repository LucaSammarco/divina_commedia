// resources/js/app.js

import './bootstrap';
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import '../sass/app.scss';

// Importa il plugin `imagePlugin`
import imagePlugin from './plugins/imagePlugin';

// Mappa statica dei componenti Vue
const pages = {
  'Home': () => import('./Pages/Home.vue'),
  'Cantica/Index': () => import('./Pages/Cantica/Index.vue'),
  'Cantica/Show': () => import('./Pages/Cantica/Show.vue'),
  'Canto/Show': () => import('./Pages/Canto/Show.vue'), // Aggiungi qui la tua pagina Canto/Show
  // Aggiungi altre pagine qui
};

// Configura l'applicazione Inertia
createInertiaApp({
  // Usa la mappa per risolvere i componenti Vue
  async resolve(name) {
    const page = pages[name];
    if (page) {
      return (await page()).default; // Attendi che il componente venga risolto
    } else {
      return (await pages['Home']()).default; // Fallback alla home
    }
  },

  // Setup dell'app Vue con il plugin di Inertia
  setup({ el, App, props, plugin }) {
    // Crea l'app Vue e registra il plugin `imagePlugin`, poi monta l'elemento principale
    createApp({ render: () => h(App, props) })
      .use(plugin)       // Registra il plugin di Inertia
      .use(imagePlugin)  // Registra il plugin per le immagini
      .mount(el);
  },
});
