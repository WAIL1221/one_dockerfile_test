<template>
  <div>
    <Header />
    <div class="content">
      <router-view />
    </div>
    <Footer />
  </div>
</template>

<script>
import Header from './components/header.vue';
import Footer from './components/footer.vue';

export default {
  name: 'App',
  components: {
    Header,
    Footer
  }
}
</script>

<style>
#app {
  flex-direction: column;
  min-height: 100vh;
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  align-content: center;
  align-items: center;
  color: #2c3e50;
}
.content {
  flex: 1;
  padding-top: 150px; /* Adjust based on the header's height */
  margin-bottom: 30px; /* Adjust if necessary for the footer */
}
</style>
