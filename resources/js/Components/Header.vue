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
  <header class="bg-light py-3">
    <nav class="container">
      <ul class="d-flex justify-content-center align-items-center list-unstyled mb-0">
        <li class="me-4">
          <Link href="/" class="text-decoration-none text-dark fw-bold">Home</Link>
        </li>
        <li v-for="cantica in cantiche" :key="cantica.id" class="me-3">
          <Link :href="`/cantiche/${cantica.id}`" class="text-decoration-none text-dark">{{ cantica.nome }}</Link>
        </li>
      </ul>
    </nav>
  </header>
</template>

<style scoped>
li:last-child {
  margin-right: 0;
}
</style>
