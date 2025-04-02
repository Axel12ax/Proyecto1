<template>

        <!-- Spinner Start -->
       <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
         Spinner End -->

        <!-- Topbar Start -->
        <TopbarComponent/>
        <!-- Topbar End -->
<HeaderComponent/>
       
       
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Vehículos en <span class="text-danger">Subasta</span></h1>
            <p class="mb-0">Oferta por los mejores vehículos disponibles en nuestra subasta en línea. ¡Encuentra tu próximo auto a un precio excepcional!</p>
        </div>
        <div class="row g-4">
        </div>
    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" v-for="producto in subastas" :key="producto.id">
        <div class="categories-item p-4 border-2 border-light shadow-sm" 
             style="border-radius: 12px; border-color: #e9ecef !important;">
            <div class="categories-item-inner">
                <div class="categories-img rounded-top position-relative overflow-hidden">
                    <img :src="url+'img_V/'+producto.vehiculo.img" 
                         class="img-fluid w-100 rounded-top hover-zoom"
                         :alt="producto.vehiculo.marca.name + ' ' + producto.vehiculo.modelo">
                    <div class="auction-badge bg-danger text-white position-absolute top-0 start-0 p-2 px-3" 
                         style="border-radius: 0 0 8px 0;">
                        <i class="fas fa-gavel me-1"></i> ¡En Subasta!
                    </div>
                </div>
                
                <div class="categories-content rounded-bottom p-4 border-top-0" 
                     style="border: 1px solid #e9ecef; border-top: none !important; border-radius: 0 0 12px 12px;">
                     
                    <h4 class="mb-3 fw-bold">{{producto.vehiculo.marca.name}} {{producto.vehiculo.modelo}} 
                        <span class="badge bg-primary ms-2">{{producto.vehiculo.categoria.name}}</span>
                    </h4>
                    
                    <div class="auction-info mb-4 p-3 bg-light rounded" 
                         style="border: 1px dashed #dc3545;">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="text-danger mb-1">Oferta Actual:</h5>
                                <h4 class="text-dark mb-0">${{producto.precio_base.toLocaleString()}}</h4>
                            </div>
                            <div class="text-end">
                                <h5 class="text-muted mb-1">Termina el:</h5>
                                <div class="countdown-timer text-danger fw-bold">
                                    <i class="fa fa-clock me-2"></i>
                                    {{producto.fecha_fin  }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-2 gx-0 text-center mb-4 border rounded py-2 mx-0" 
                         style="border-color: #dee2e6 !important;">
                        <div class="col-4 border-end">
                            <i class="fa fa-tachometer-alt text-dark"></i>
                            <span class="text-body ms-1">{{ producto.vehiculo.kilometros }} km</span>
                        </div>
                        <div class="col-4 border-end">
                            <i class="fa fa-calendar-alt text-dark"></i>
                            <span class="text-body ms-1">{{ producto.vehiculo.año }}</span>
                        </div>
                        <div class="col-4">
                            <i class="fa fa-hammer text-dark"></i>
                            <span class="text-body ms-1">15 Ofertas</span>
                        </div>
                    </div>

                    <div class="bid-section">
                        <router-link :to="'/subasta/show/'+producto.id" class="btn btn-danger w-100 py-2 rounded-pill fw-bold" 
                                style="border: none; box-shadow: 0 2px 8px rgba(220, 53, 69, 0.3);">
                            <i class="fas fa-hand-holding-usd me-2"></i> Realizar Oferta
                        </router-link>
                        
                        <div class="bid-form mt-3 p-3 bg-light rounded" 
                             style="border: 1px solid #e9ecef; display: none;">
                            <div class="input-group">
                                <span class="input-group-text bg-white border-end-0">$</span>
                                <input type="number" class="form-control border-start-0" 
                                       placeholder="Ingrese su oferta">
                                <button class="btn btn-danger" type="button">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                            <small class="text-muted mt-2 d-block">
                                <i class="fas fa-info-circle text-danger"></i> Precio mínimo: ${{(producto.precio_base + 500).toLocaleString()}}
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        <!-- Vehicles for Sale Start -->
<div class="container-fluid categories pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Vehículos en <span class="text-success">Venta</span></h1>
            <p class="mb-0">Encuentra el vehículo perfecto para ti. Precios competitivos y financiamiento disponible.</p>
        </div>
        <div class="row g-4" >
         

            <!-- Vehicle Item 2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s"  v-for="producto in ventas" :key="producto.id">
                <div class="categories-item p-4">
                    <div class="categories-item-inner">
                        <div class="categories-img rounded-top position-relative">
                            <img :src="url+'img_V/'+producto.vehiculo.img" class="img-fluid w-100 rounded-top" alt="Vehículo 2">
                            <div class="sale-badge bg-success text-white position-absolute top-0 start-0 p-2">
                                ¡Oferta!
                            </div>
                        </div>
                        <div class="categories-content rounded-bottom p-4">
                            <h4 class="mb-3">{{ producto.vehiculo.marca.name}} {{producto.vehiculo.modelo }} {{ producto.vehiculo.categoria.name }}</h4>
                            
                            <div class="price-info mb-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="text-success">Precio:</h5>
                                        <div class="d-flex align-items-baseline">
                                            <h4 class="text-dark me-2">${{ producto.precio }}</h4>
                                            <del class="text-muted">$24,999</del>
                                        </div>
                                    </div>
                                    <div class="text-end">
                                        <h5 class="text-muted">Kilometraje:</h5>
                                        <div class="mileage">
                                            {{ producto.vehiculo.kilometros }} km
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row gy-2 gx-0 text-center mb-4">
                                <div class="col-4 border-end">
                                    <i class="fa fa-calendar-alt text-dark"></i>
                                    <span class="text-body ms-1">{{producto.vehiculo.año}}  </span>
                                </div>
                                <div class="col-4 border-end">
                                    <i class="fa fa-gas-pump text-dark"></i>
                                    <span class="text-body ms-1">Gasolina</span>
                                </div>
                                <div class="col-4">
                                    <i class="fa fa-tachometer-alt text-dark"></i>
                                    <span class="text-body ms-1">Automático</span>
                                </div>
                            </div>

                            <div class="features-list mb-4">
                                <p class="mb-2"><i class="fa fa-check text-success me-2"></i>Garantía extendida</p>
                                <p class="mb-2"><i class="fa fa-check text-success me-2"></i>Llantas nuevas</p>
                                <p class="mb-0"><i class="fa fa-check text-success me-2"></i>Certificado usado</p>
                            </div>

                            <div class="d-flex gap-2">
                                <button class="btn btn-success w-100 py-2" onclick="showContactForm(this)">
                                    <i class="fa fa-phone me-2"></i>Contactar
                                </button>
                                <button class="btn btn-outline-success w-100 py-2" onclick="scheduleTestDrive(this)">
                                    <i class="fa fa-car me-2"></i>Ver detalles
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Add more vehicle items as needed -->
        </div>
    </div>
</div>
<!-- Vehicles for Sale End -->

    </div>

    <FooterComponent/>

        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        


</template>
<script>
import HeaderComponent from '@/shared/HeaderComponent.vue';
import FooterComponent from '@/shared/FooterComponent.vue';
import TopbarComponent from '@/shared/TopbarComponent.vue';
import axios from 'axios';

export default{
    name:'HomeComponent',
    components:{
        HeaderComponent,
        FooterComponent,
        TopbarComponent
    },
    data:()=>{
        return{
            ultimos:[],
            categorias:[],
            subastas:[],
            marca:[],
            puja:[],
            ventas:[],
            loaded:false,
            url:'http://localhost:8000/'
        }

    },
    methods:{
        refresh(){
            this.loaded = false;
            axios.get('index').then((response)=>{
                console.log("Respuesta desde el backend",response.data);
                console.log(response.data.subasta);
                console.log(response.data.marcas);
                console.log(response.data.pujas);
                console.log(response.data.ventas);
                this.ultimos = response.data.ultimos;
                this.categorias = response.data.categorias;
                this.subastas = response.data.subasta;
                this.marcas = response.data.marcas;
                this.puja = response.data.pujas;
                this.ventas = response.data.venta;
            }).catch((error)=>{
                console.log("Error en la petición",error);
            }).finally(()=>{
                this.loaded = true;
            });
        }
    },
    mounted(){
        this.refresh();
    },
}

</script>