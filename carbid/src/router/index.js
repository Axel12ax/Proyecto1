import { createRouter, createWebHistory } from "vue-router";
//const HomeComponent={}
import HomeComponent from "@/views/home/HomeComponent.vue";
import ContactComponent from "@/views/contact/ContactComponent.vue";
import ProductSingleComponent from "@/views/products/ProductSingleComponent.vue";
import ProductComponent from "@/views/products/ProductComponent.vue";
import AboutComponent from "@/views/about/AboutComponent.vue";
import VehiculoComponent from "@/views/forms/VehiculoComponent.vue";
import SubastaComponent from "@/views/forms/SubastaComponent.vue";
import SubastaProductComponent from "@/views/products/SubastaProductComponent.vue";

const routes = [
    {path: '/',name:"index", component: HomeComponent},
    {path: '/contact' , name:"contact", component: ContactComponent},
    {path: '/product/show' , name:"product", component: ProductSingleComponent},
    {path: '/product' , name:"products", component: ProductComponent},
    {path: '/about' , name:"about", component: AboutComponent},
    {path: '/vehiculo' , name:"vehiculo", component: VehiculoComponent},
    {path: '/subasta' , name:"subasta", component: SubastaComponent},
    {path: '/subasta/show/:id' , name:"subastaProduct", component: SubastaProductComponent},
];

const router=createRouter({
    history:createWebHistory(),
    routes
})
export default router

