<script>
import { Link } from '@inertiajs/inertia-vue3';

export default {
  name: 'Header',
  components: {
    Link,
  },
  props: {
    cantiche: Array,
  },
};
</script>

<template>
    <div class="jumbotron">
      <!-- Usa direttamente il plugin $getImageUrl() per il binding dell'immagine -->
      <img :src="$getImageUrl('Jumbo/02.-inferno-schema.png')"
           alt="Dante Alighieri e la Divina Commedia"
           class="jumbo-image" />
      <div class="content">

      </div>
    </div>
  </template>

  <style scoped>
  .jumbotron {
  position: relative;
  height: calc(100vh - 0px); /* Altezza del Jumbotron meno l'altezza dell'header */
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  overflow: hidden;
}

.jumbo-image {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: contain ;
  object-position: center;
}



  .content {
    position: relative;
    z-index: 1; /* Assicura che il contenuto sia sopra l'immagine */
    background-color: rgba(0, 0, 0, 0.5); /* Sfondo semi-trasparente per migliorare la leggibilità del testo */
    padding: 20px;
    border-radius: 10px;
    color: white; /* Colore del testo per risaltare sull'immagine di sfondo */
  }
  </style>
