<template>
  <header>
    <div class="container">
      <h2 style="font-weight: bold; font-family: Arial Black, serif">
        Welcome to Wail Hadad App !!<br>
      </h2>
      <nav>
        <router-link to="/">Page d'accueil</router-link>
        <a href="https://github.com/WAIL1221" target="_blank">about me</a>
      </nav>
    </div>
  </header>
</template>

<script>
export default {
  name: 'HeaderApp'
}
</script>

<style scoped>
header {
  background: linear-gradient(135deg, #8787e0, #f944ff);
  color: rgb(253, 3, 153);
  font-weight: bold;
  padding: 10px 0;
  text-align: center;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  position: fixed;
  width: 100%;
  top: 0;
  z-index: 1000;
}
.container {
  max-width: 1200px;
  margin: 0 auto;
}
nav {
  display: block;
  margin-top: 0;
}
nav a {
  color: #ffffff;
  padding: 10px 15px;
  text-decoration: none;
  font-size: 18px;
  transition: background-color 0.3s;
}
nav a:hover {
  background-color: #6654f1;
}
</style>
