<template>
  <TopbarComponent/>
  <HeaderComponent/>

  <div class="container-fluid py-5" v-if="product!=null">
    <div class="container py-5">
      <!-- Auction Alert Banner -->
      <div class="alert alert-danger d-flex align-items-center mb-4">
        <i class="fas fa-gavel fa-2x me-3"></i>
        <div>
          <h4 class="alert-heading mb-1">¡SUBASTA ACTIVA!</h4>
          <p class="mb-0">Tiempo restante: 
            <span class="fw-bold">
             
            </span>
          </p>
        </div>
      </div>

      <div class="row g-4">
        <!-- Left Column - Vehicle Images -->
        <div class="col-lg-7">
          <!-- Main Image Carousel -->
          <div class="auction-gallery mb-4">
            <div id="auctionCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner rounded-3">
                <div class="carousel-item active">
                  <img :src="url+'img_V/'+product .vehiculo.img" 
                       class="d-block w-100 main-image" />
            
                </div>
                <!-- Additional images would go here -->
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#auctionCarousel">
                <span class="carousel-control-prev-icon"></span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#auctionCarousel">
                <span class="carousel-control-next-icon"></span>
              </button>
            </div>
            
            <!-- Thumbnail Navigation -->
            <div class="row g-2 mt-2">
              <div class="col-3" >
                <img src="" 
                     class="img-thumbnail" 
                     />
              </div>
            </div>
          </div>

          <!-- Vehicle Details Card -->
          <div class="card mb-4 border-primary">
            <div class="card-header bg-primary text-white">
              <h5 class="mb-0">
                <i class="fas fa-car me-2"></i>Detalles del Vehículo
              </h5>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <dl class="row">
                    <dt class="col-sm-5">Marca/Modelo</dt>
                    <dd class="col-sm-7">{{ product.vehiculo.marca.name }}</dd>
                    <dt class="col-sm-5">Modelo</dt>
                    <dd class="col-sm-7">{{ product.vehiculo.modelo }}</dd>
                    <dt class="col-sm-5">Año</dt>
                    <dd class="col-sm-7">{{ product.vehiculo.año }}</dd>
                    <dt class="col-sm-5">Kilometraje</dt>
                    <dd class="col-sm-7"> km</dd>
                  </dl>
                </div>
                <div class="col-md-6">
                  <dl class="row">
                    <dt class="col-sm-5">Transmisión</dt>
                    <dd class="col-sm-7"></dd>
                    <dt class="col-sm-5">Combustible</dt>
                    <dd class="col-sm-7"></dd>
                    <dt class="col-sm-5">Color</dt>
                    <dd class="col-sm-7">{{ product.vehiculo.color }}</dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>

          <!-- Description Card -->
          <div class="card mb-4">
            <div class="card-header bg-light">
              <h5 class="mb-0">
                <i class="fas fa-align-left me-2"></i>Descripción
              </h5>
            </div>
            <div class="card-body">
              <p>{{product.vehiculo.descripcion}}</p>
            </div>
          </div>
        </div>

        <!-- Right Column - Auction Info -->
        <div class="col-lg-5">
          <div class="auction-sidebar" style="top: 20px;">
            <!-- Bidding Card -->
            <div class="card mb-4 border-danger">
              <div class="card-header bg-danger text-white">
                <h5 class="mb-0">
                  <i class="fas fa-gavel me-2"></i>Realizar Puja
                </h5>
              </div>
              <div class="card-body">
                <div class="bid-info mb-4">
                  <div class="row">
                    <div class="col-md-6">
                      <h6 class="text-muted mb-1">Puja actual</h6>
                      <h3 class="text-danger">${{product.precio_base}}</h3>
                    </div>
                    <div class="col-md-6">
                      <h6 class="text-muted mb-1">Puja mínima</h6>
                      <h4>${{product.precio_minimo}}</h4>
                    </div>
                  </div>
                </div>

                <div class="bid-form">
                  <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="number" 
                           class="form-control" 
                           v-model="bidAmount"
                          >
                    <button class="btn btn-danger" 
                            type="button" 
                            @click="placeBid">
                      Pujar
                    </button>
                  </div>
                  
                  <div class="quick-bids text-center mb-3">
                    <button class="btn btn-outline-danger me-2" 
                          >
                      +500
                    </button>
                    <button class="btn btn-outline-danger me-2" 
                           >
                      +1,000
                    </button>
                    <button class="btn btn-outline-danger" 
                            >
                      +5,000
                    </button>
                  </div>
                </div>

                <div class="alert alert-warning small">
                  <i class="fas fa-exclamation-circle me-2"></i>
                  Al pujar, aceptas nuestros <a href="#" class="alert-link">Términos y Condiciones</a>
                </div>
              </div>
            </div>

            <!-- Auction Details Card -->
            <div class="card mb-4">
              <div class="card-header bg-light">
                <h5 class="mb-0">
                  <i class="fas fa-info-circle me-2"></i>Información de la Subasta
                </h5>
              </div>
              <div class="card-body">
                <ul class="list-unstyled">
                  <li class="mb-2">
                    <i class="fas fa-calendar-alt text-danger me-2"></i>
                    <strong>Inicio: {{product.fecha_inicio}}</strong>
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-clock text-danger me-2"></i>
                    <strong>Finaliza: {{product.fecha_fin}}</strong>
                  </li>
                  <li class="mb-2">
                    <i class="fas fa-user-tie text-danger me-2"></i>
                    <strong>Vendedor:</strong>  {{product.user.name}}
                  </li>
                </ul>
              </div>
            </div>

            <!-- Bid History Card -->
            <div class="card">
              <div class="card-header bg-light">
                <h5 class="mb-0">
                  <i class="fas fa-history me-2"></i>Historial de Pujas
                </h5>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-hover mb-0">
                    <thead>
                      <tr>
                        <th>Usuario</th>
                        <th>Monto</th>
                        <th>Hora</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr >
                        <td colspan="3" class="text-center text-muted py-3">
                          No hay pujas aún
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <FooterComponent/>
</template>

<script>
import TopbarComponent from '@/shared/TopbarComponent.vue';
import HeaderComponent from '@/shared/HeaderComponent.vue';
import FooterComponent from '@/shared/FooterComponent.vue';
import axios from 'axios';
import {useRoute} from 'vue-router';



export default{ 
    name: 'SubastaProductComponent',  
    components: {
        HeaderComponent,
        FooterComponent,
        TopbarComponent
    },
    data() {
        return {
            url: 'http://localhost:8000/',
            product: null,
            id:0,
        };
      },
    mounted() {
        const route = useRoute();
        this.id = route.params.id;
        this.fetchProduct();
      },
      methods:{
        async fetchProduct() {
            try {
               axios.get(`products/${this.id}/`).then(response=>{
                this.product = response.data.data;
                console.log('Product fetched:', this.product);
               }); 
            } catch (error) {
                console.error('Error fetching product:', error);
            }
        },
        placeBid() {
            // Logic to place a bid
            console.log('Bid placed:', this.bidAmount);
        }
      }
    }

</script>