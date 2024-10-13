<script>
import Header from '@/Components/Header.vue';
import Jumbo from '@/Components/Jumbo.vue';

export default {
  name: 'Layout',
  components: {
    Header,
    Jumbo
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
    <!-- <Jumbo /> --> <!-- Rimuovi il componente Jumbo -->
    <main>
      <slot></slot>
    </main>

  </div>
</template>


<style scoped>

</style>
