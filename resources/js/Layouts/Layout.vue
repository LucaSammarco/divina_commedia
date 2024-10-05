<script>
import Header from '@/Components/Header.vue';

export default {
  name: 'Layout',
  components: {
    Header,
  },
  computed: {
    cantiche() {
      return this.$page.props.cantiche || [];
    },
  },
};
</script>

<template>
  <div>
    <!-- Passa le cantiche all'Header -->
    <Header :cantiche="cantiche" />
    <main>
      <slot></slot>
    </main>
    <footer>
      <p>Divina Commedia - Un progetto di studio</p>
    </footer>
  </div>
</template>

<style scoped>
/* Styles */
</style>


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
main {
  padding: 2rem;
}
footer {
  text-align: center;
  margin-top: 2rem;
  padding: 1rem;
  background-color: #f1f1f1;
}
</style>
