import { createApp } from 'vue'
import App from './App.vue'
import { createRouter, createWebHistory } from 'vue-router'

import Home from './components/Home.vue';
// import the missing components
import About from './components/About.vue';
import ProductList from './components/ProductList.vue';
import CreateProduct from './components/CreateProduct.vue';

const routes = [
    { path: '/', component: Home },
    // add the missing routes
    { path: '/about', component: About },
    { path: '/products', component: ProductList },
    { path: '/create', component: CreateProduct },
];

const router = createRouter({
    "history": createWebHistory(),
    routes
})

const app = createApp(App);
app.use(router);
app.mount('#app');