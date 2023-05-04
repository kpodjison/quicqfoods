import './bootstrap';
import axios from 'axios';

// import { createApp } from "vue";

import { createApp } from "vue/dist/vue.esm-bundler";
let id = 0;
let App = {
    data() {
        return {
            name: "emmanuel",
            selectedProductID: null,
            selectedProduct: [{id: "", name: "", price: "", desc: "",cat_id:"",image:"",status:"",created_by:"",updated_by:""}],
            products: [
                {id: 1, name: "mango", price: 124.6, desc: "mango  Esse ut error qui animi incidunt itaque dignissimos. Aut placeat et voluptatem aut necessitatibus error"},
                {id: 2, name: "apple", price: 124.6, desc: "apple  Esse ut error qui animi incidunt itaque dignissimos. Aut placeat et voluptatem aut necessitatibus errore"},
                {id: 3, name: "pineapple", price: 124.6, desc: "pineapple  Esse ut error qui animi incidunt itaque dignissimos. Aut placeat et voluptatem aut necessitatibus error "},
                {id: 4, name: "orange", price: 124.6, desc: "orange  Esse ut error qui animi incidunt itaque dignissimos. Aut placeat et voluptatem aut necessitatibus error"}
            ]

        }


    },
    methods: {
        getId(e) {
            let outer_this = this;
            let productId = e.target.id;
            let offCanvas = document.getElementById("itemCanvas")
            let targetClass = offCanvas.classList;
            if (productId) {
                if(targetClass.contains("showing"))
                {
                    //Read data from DB
                   this.getSingleProduct(productId)        
                }
            }

        },
        getSingleProduct(id){
            let url = '/product/'+id;
            let vueInstance = this;
            axios.get(url)
            .then(response=>{
                // vu.selectedProduct = null;
                vueInstance.selectedProduct2 = response.data

                vueInstance.selectedProduct[0].id = response.data.id
                vueInstance.selectedProduct[0].name = response.data.name
                vueInstance.selectedProduct[0].price = response.data.price
                vueInstance.selectedProduct[0].desc = response.data.description
                vueInstance.selectedProduct[0].image = response.data.image
                vueInstance.selectedProduct[0].status = response.data.status
                
            })
            .catch(error=>console.log.apply(error))

        }
    },
    mounted() {

}
}

createApp(App).mount("#app");
