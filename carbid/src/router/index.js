import { createRouter, createWebHistory } from "vue-router";
//const HomeComponent={}
import HomeComponent from "@/views/home/HomeComponent.vue";
import ContactComponent from "@/views/contact/ContactComponent.vue";
import ProductSingleComponent from "@/views/products/ProductSingleComponent.vue";
import ProductComponent from "@/views/products/ProductComponent.vue";
import AboutComponent from "@/views/about/AboutComponent.vue";
const routes = [
    {path: '/',name:"index", component: HomeComponent},
    {path: '/contact' , name:"contact", component: ContactComponent},
    {path: '/product/show' , name:"product", component: ProductSingleComponent},
    {path: '/product' , name:"products", component: ProductComponent},
    {path: '/about' , name:"about", component: AboutComponent}
];

const router=createRouter({
    history:createWebHistory(),
    routes
})
export default router

