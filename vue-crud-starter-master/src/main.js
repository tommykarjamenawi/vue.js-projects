import { createApp } from 'vue'
import App from './App.vue'
import { createRouter, createWebHistory } from 'vue-router'

import Home from './components/Home.vue';
import ProductList from './components/products/ProductList.vue';
import CreateProduct from './components/products/CreateProduct.vue';
import EditProduct from './components/products/EditProduct.vue';


const routes = [
    { path: '/', component: Home },
    { path: '/products', component: ProductList },
    { path: '/createproduct', component: CreateProduct },
    { path: '/editproduct/:id', component: EditProduct, props: true  }
];

const router = createRouter({
    "history": createWebHistory(),
    routes
})

const app = createApp(App);
app.use(router);
app.mount('#app');