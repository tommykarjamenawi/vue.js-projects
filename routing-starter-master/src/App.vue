<template>
  <navigation />
  <!-- Add a router view -->
  <transition name="fadeUp" mode="out-in">
    <router-view></router-view>
  </transition>
</template>

<script>
import Navigation from "./components/Navigation.vue";

export default {
  name: "App",
  components: {
    Navigation,
  },
};
</script>

<style>
</style>
