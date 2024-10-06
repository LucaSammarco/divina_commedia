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
      <img :src="$getImageUrl('Jumbo/Domenico_di_Michelino_-_Dante_Alighieri_holding_his_poem_the_Divine_Comedy_Near_by_him_hell_and_the_city_-_(MeisterDrucke-996509).jpg')"
           alt="Dante Alighieri e la Divina Commedia"
           class="jumbo-image" />
      <div class="content">

      </div>
    </div>
  </template>

  <style scoped>
  .jumbotron {
    position: relative;
    height: 80vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    overflow: hidden; /* Nasconde l'eventuale parte di immagine eccedente */
  }

  .jumbo-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Assicura che l'immagine riempia tutto lo spazio del Jumbotron mantenendo le proporzioni */
    z-index: -1; /* Posiziona l'immagine dietro il contenuto */
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
