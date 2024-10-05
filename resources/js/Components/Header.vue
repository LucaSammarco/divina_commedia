<!-- Header.vue: Header come componente riutilizzabile -->
<script>
export default {
  name: 'Header',
};
</script>

<template>
  <header>
    <nav>
      <ul>
        <li><inertia-link href="/">Home</inertia-link></li>
        <li><inertia-link href="/cantica/inferno">Inferno</inertia-link></li>
        <li><inertia-link href="/cantica/purgatorio">Purgatorio</inertia-link></li>
        <li><inertia-link href="/cantica/paradiso">Paradiso</inertia-link></li>
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
