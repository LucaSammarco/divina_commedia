<script>
// Importa il layout
import Layout from '@/Layouts/Layout.vue';

export default {
  props: {
    canto: Object,
  },
  layout: Layout,
  computed: {
    terzine() {
      const terzine = [];
      const versi = this.canto.versi;
      for (let i = 0; i < versi.length - (versi.length % 3); i += 3) {
        terzine.push(versi.slice(i, i + 3));
      }
      return terzine;
    },
    ultimoVerso() {
      const versi = this.canto.versi;
      return versi.length % 3 === 0 ? null : versi.slice(-1)[0];
    },
  },
};
</script>

<template>
  <div class="canto-container">
    <h1>{{ canto.cantica.nome }}</h1>
    <h2>{{ canto.titolo }}</h2>
    <div class="terzine-container">
      <div v-for="(terzina, index) in terzine" :key="index" class="terzina">
  <p v-for="(verso, vIndex) in terzina" :key="verso.id" class="verso">
    {{ verso.testo }} <span class="verso-numero" v-if="vIndex === terzina.length - 1 && index !== terzine.length - 1">{{ verso.numero }}</span>
  </p>
  <p v-if="index === terzine.length - 1 && ultimoVerso" class="verso ultimo-verso">
    {{ ultimoVerso.testo }} <span class="verso-numero">{{ ultimoVerso.numero }}</span>
  </p>
</div>
    </div>

  </div>
</template>

<style lang="scss" scoped>
.canto-container {
  margin: 2rem auto;
  max-width: 800px; /* Limita la larghezza per una migliore leggibilità */
  display: flex;
  flex-direction: column;
  align-items: center; /* Centra tutti gli elementi all'interno del container */
}

h1 {
  font-size: 2rem;
  margin-bottom: 1rem;
}

h2 {
  font-size: 1.5rem;
  margin-bottom: 1.5rem;
}

.terzine-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 0 auto; /* Centra il contenitore delle terzine nel layout */
}

.terzina {
  width: 100%;
  max-width: 600px;
  margin-bottom: 1rem;
  padding-left: 2rem;
  position: relative;
}

.verso {
  font-size: 1.2rem;
  text-align: left;
  position: relative;
  margin-bottom: 0;
  margin-right: 4rem;
  white-space: nowrap;
}

.ultimo-verso {
  margin-top: 1rem; /* Aggiunge margine superiore per distanziare l'ultimo verso come tra le altre terzine */
}

.verso-numero {
  position: absolute;
  right: -3rem;
}
</style>
