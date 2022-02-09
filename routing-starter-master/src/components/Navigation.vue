<template>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <!-- Add a router link to the homepage (don't use the a tag!) -->
          <!-- <a class="nav-link" active-class="active" href="#">Home</a> -->
          <router-link to="/" class="nav-link">Home</router-link>
        </li>
        <li class="nav-item">
          <!-- Add a router link to the create product page (don't use the a tag!) -->
          <!-- <a class="nav-link" active-class="active" href="#">Create product</a> -->
          <router-link to="/create" class="nav-link">Create</router-link>
        </li>
        <li class="nav-item">
          <!-- add a router link to the products page (don't use the a tag!) -->
          <!-- <a class="nav-link" active-class="active" href="#">Products</a> -->
          <router-link to="/products" class="nav-link">Products</router-link>
        </li>
        <li class="nav-item">
          <!-- add a router link to the products page (don't use the a tag!) -->
          <!-- <a class="nav-link" active-class="active" href="#">Products</a> -->
          <router-link to="/about" class="nav-link">About</router-link>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
export default {
  name: "Navigation",
};
</script>

<style>
</style>