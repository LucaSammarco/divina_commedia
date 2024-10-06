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
        <li>
          <Link href="/">
            <!-- Usa il metodo globale $getImageUrl per ottenere il percorso dell'immagine -->
            <img :src="$getImageUrl('logo.png')" alt="Logo Home" class="logo"/>
          </Link>
        </li>
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
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

header {
    background: #55BAB9;
    width: 100%;
    padding: 20px 0; /* Padding per l'header, così non occupa tutto lo schermo */
    display: flex;
    align-items: center;
    justify-content: center;
    .logo {
        width: 20px;
        height: 20px;

    }
}

nav {
    background: #fff;
    border-radius: 50px;
    padding: 10px 20px;
    box-shadow: 0 25px 20px -20px rgba(0, 0, 0, 0.4);
}

nav ul {
    display: flex; /* Assicura che gli elementi della lista siano allineati in orizzontale */
    list-style: none; /* Rimuove i pallini dagli elementi della lista */
    padding: 0; /* Rimuove il padding extra */
}

nav ul li {
    margin: 0 15px; /* Aggiungi spazio tra i link */
    position: relative;
    z-index: 1; /* Assicurati che il testo sia sopra il pulsante */
    cursor: pointer;
    transition: color 0.5s;
}

nav ul li a {
    text-decoration: none; /* Rimuove la sottolineatura dai link */
    font-size: 18px;
    font-weight: 500;
    color: #777;
}

nav ul li::after {
    content: '';
    background-color: #19978F;
    width: 100%;
    height: 100%;
    border-radius: 30px;
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: -1;
    opacity: 0;
    transition: top 0.5s, opacity 0.5s;
}

nav ul li:hover {
    color: #fff;
}

nav ul li:hover::after {
    top: 50%;
    opacity: 1;
}

</style>
