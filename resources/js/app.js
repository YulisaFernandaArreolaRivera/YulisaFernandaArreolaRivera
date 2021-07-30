require('./bootstrap');

window.Vue = require('vue').default;
//Referencia al paquete que instaló
const Vuex = require('vuex'); 

window.store = new Vuex.Store({
    state:{
        productsCount: 0
    },
    mutations:{
        increment(state){
            return state.productsCount++
        },
        set(state,value){
            return state.productsCount = value
        }
    }

    
})

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('products-component', require('./components/products/ProductsComponent.vue').default);
Vue.component('product-card-component', require('./components/products/ProductCardComponent.vue').default);


Vue.component('ofertas-component', require('./components/ofertas/OfertasComponent.vue').default);
Vue.component('oferta-card-component', require('./components/ofertas/OfertaCardComponent.vue').default);

const app = new Vue({
    el: '#app',
});