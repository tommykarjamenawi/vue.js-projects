<template>
  <h1>Stock list</h1>
  <div class="row">
    <!-- Individual stocks -->
    <div class="col-md-4 mt-4" v-for="stock in stocks" :key="stock.name">
      <div class="card">
        <div class="card-body">
          <td>{{ stock.name }}</td>
          <span
            :class="{
              down: stock.price < stock.previousPrice,
              up: stock.price > stock.previousPrice,
            }"
            >{{ stock.currency }} {{ stock.price.toFixed(4) }}</span
          >
        </div>
      </div>
    </div>
    <!-- End of individual stocks -->
  </div>
</template>

<script>
export default {
  name: "StockItem",
  props: {
      name: String,
      currency: String,
      price: Number,
      previousPrice: Number,
  }
};
</script>

<style scoped>
.up {
  color: green;
}
.down {
  color: red;
}
</style>