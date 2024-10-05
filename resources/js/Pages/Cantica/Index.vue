<script>
import { Link } from '@inertiajs/inertia-vue3'; // Importa il componente Link da Inertia

export default {
  name: 'CanticaList',
  components: {
    Link, // Registra Link come componente utilizzabile nel template
  },
  props: {
    cantiche: Array, // Riceve la lista delle cantiche come prop
  },
};
</script>

<template>
  <div>
    <h1>Lista delle Cantiche</h1>
    <ul>
      <li v-for="cantica in cantiche" :key="cantica.id">
        <!-- Usa il componente Link per navigare verso la singola cantica -->
        <Link :href="`/cantiche/${cantica.id}`">{{ cantica.nome }}</Link>
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
