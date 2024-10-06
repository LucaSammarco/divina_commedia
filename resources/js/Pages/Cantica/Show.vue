<script>
import { Link } from '@inertiajs/inertia-vue3'; // Importa Link da Inertia.js
import Layout from '@/Layouts/Layout.vue'; // Importa il layout comune

export default {
  props: {
    cantica: Object, // Riceve la cantica con i suoi canti come prop
  },
  components: {
    Link, // Usa Link come componente per la navigazione Inertia
  },
  layout: Layout, // Specifica che questa pagina utilizza il layout globale
};
</script>

<template>
  <div>
    <h1>{{ cantica.nome }}</h1>
    <h2>Elenco dei Canti</h2>
    <ul v-if="cantica.canti && cantica.canti.length">
      <li v-for="canto in cantica.canti" :key="canto.id">
        <!-- Costruisci manualmente l'URL per il link -->
        <Link :href="`/canto/${canto.id}`">{{ canto.titolo }}</Link>
      </li>
    </ul>
    <p v-else>Nessun canto disponibile per questa cantica.</p>
  </div>
</template>

<style scoped>
h1 {
  font-size: 2rem;
  margin-bottom: 1rem;
}
h2 {
  font-size: 1.5rem;
  margin-bottom: 0.75rem;
}
p {
  font-size: 1.2rem;
  margin-top: 1rem;
}
</style>
