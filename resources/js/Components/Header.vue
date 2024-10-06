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
  <header>
    <nav>
      <ul>
        <!-- <li>
          <Link href="/">
            <!-- Usa il metodo globale $getImageUrl per ottenere il percorso dell'immagine -->
            <!-- <img :src="$getImageUrl('logo.png')" alt="Logo Home" class="logo"/>
          </Link>
        </li> -->
        <li v-for="cantica in cantiche" :key="cantica.id">
          <Link :href="`/cantiche/${cantica.id}`">{{ cantica.nome }}</Link>
        </li>
      </ul>
    </nav>
  </header>
</template>

<style scoped>
/* Stili rimangono invariati */
</style>


<style scoped>




</style>
