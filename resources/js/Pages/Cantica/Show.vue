<script>
export default {
  props: {
    cantica: Object, // Riceve la cantica con i canti come prop
  },
};
</script>



<template>
    <div>
      <h1>{{ cantica.nome }}</h1>
      <h2>Elenco dei Canti</h2>
      <ul>
        <li v-for="canto in cantica.canti" :key="canto.id">
          <inertia-link :href="route('canti.show', canto.id)">{{ canto.titolo }}</inertia-link>
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
