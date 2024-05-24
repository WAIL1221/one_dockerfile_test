<template>
  <div >
    <center>
      <h1 style="padding-bottom: 100px">
      <router-link to="/etudiant" style="color:blue; font-weight: bold">>>Gestion des Étudiant</router-link><br><br>
      <router-link to="/prof" style="color:blue; font-weight: bold">>>Gestion des Prof</router-link>
      <router-view></router-view>
      </h1>
    </center>

  </div>
</template>
<script setup lang="ts">
</script>

