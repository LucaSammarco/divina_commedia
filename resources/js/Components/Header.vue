<!-- Header.vue: Header come componente riutilizzabile -->
<script>
import { Link } from '@inertiajs/inertia-vue3';

export default {
  name: 'Header',
  components: {
    Link, // Importa e registra il componente Link
  },
  props: {
    cantiche: Array, // Ricevi le cantiche come prop dal controller
  },
  mounted() {
    // Log per verificare se le cantiche vengono passate correttamente
    console.log('Cantiche ricevute dal controller:', this.cantiche);
  },
  watch: {
    cantiche(newVal) {
      // Log per verificare eventuali cambiamenti nelle cantiche
      console.log('Cantiche aggiornate:', newVal);
    },
  },
};
</script>

<template>
  <header>
    <nav>
      <ul>
        <li><Link href="/">Home</Link></li>
        <li v-for="cantica in cantiche" :key="cantica.id">
          <Link :href="`/cantiche/${cantica.id}`">{{ cantica.nome }}</Link>
        </li>
      </ul>
    </nav>
  </header>
</template>

<style scoped>
header {
  background-color: #333;
  color: #fff;
  padding: 1rem;
}
nav ul {
  list-style-type: none;
  display: flex;
  gap: 1rem;
}
nav ul li {
  cursor: pointer;
}
</style>
