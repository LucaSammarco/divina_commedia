// resources/js/plugins/imagePlugin.js

export default {
    install(app) {
      // Aggiungi una proprietà globale chiamata $getImageUrl disponibile in tutti i componenti
      app.config.globalProperties.$getImageUrl = (imageName) => {
        return `/images/${imageName}`; // Questo è il percorso relativo dalla cartella public di Laravel
      };
    },
  };
