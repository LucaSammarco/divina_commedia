<script>
// Importa il layout
import Layout from '@/Layouts/Layout.vue';

export default {
  props: {
    canto: Object, // Riceve il canto con i versi come prop
  },
  // Definisci il layout come proprietà del componente
  layout: Layout,
};
</script>


<template>
    <div>
      <h1>{{ canto.titolo }}</h1>
      <h2>Versi del Canto</h2>
      <ul>
        <li v-for="verso in canto.versi" :key="verso.id">
          <p>{{ verso.numero }} - {{ verso.testo }}</p>
        </li>
      </ul>
    </div>
  </template>



  <style scoped>
  h1 {
    font-size: 2rem;
    margin-bottom: 1rem;
  }
  p {
    font-size: 1.2rem;
  }
  </style>
