<!-- Home.vue: Pagina Home -->
<script>
import Layout from '@/Layouts/Layout.vue';
import Jumbo from '@/Components/Jumbo.vue';

export default {
  name: 'Home',
  components: {
    Layout,
    Jumbo,
  },
};
</script>

<template>
  <Layout>
    <Jumbo />
    <div>
      <h1>Benvenuti nella Divina Commedia</h1>
      <p>Esplora l'Inferno, il Purgatorio e il Paradiso attraverso i canti di Dante.</p>
    </div>
  </Layout>
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
