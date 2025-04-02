
<template>

       
        <!-- Topbar Start -->
        <TopbarComponent/>
        <!-- Topbar End -->

     <HeaderComponent/>

        <!-- Vehicle Detail Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <!-- Main Vehicle Info -->
        <div class="row g-5">
            <!-- Image Gallery -->
            <div class="col-lg-7">
                <div class="vehicle-gallery">
                    <div id="vehicleCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner rounded">
                            <div class="carousel-item active">
                                <img src="@/plantilla/img/car-1.png" class="d-block w-100" alt="Vehículo">
                            </div>
                            <div class="carousel-item">
                                <img src="@/plantilla/img/car-1.png" class="d-block w-100" alt="Interior">
                            </div>
                            <div class="carousel-item">
                                <img src="@/plantilla/img/car-1.png" class="d-block w-100" alt="Motor">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#vehicleCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#vehicleCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                    <div class="row g-2 mt-2">
                        <div class="col-3">
                            <img src="@/plantilla/img/car-1.png" class="img-thumbnail" onclick="changeSlide(0)" style="cursor: pointer">
                        </div>
                        <div class="col-3">
                            <img src="@/plantilla/img/car-1.png" class="img-thumbnail" onclick="changeSlide(1)" style="cursor: pointer">
                        </div>
                        <div class="col-3">
                            <img src="@/plantilla/img/car-1.png" class="img-thumbnail" onclick="changeSlide(2)" style="cursor: pointer">
                        </div>
                        <div class="col-3">
                            <img src="@/plantilla/img/car-1.png" class="img-thumbnail" onclick="changeSlide(3)" style="cursor: pointer">
                        </div>
                    </div>
                </div>

                <!-- Specifications -->
                <div class="mt-5">
                    <h3 class="mb-4">Especificaciones Técnicas</h3>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Marca</th>
                                    <td>Toyota</td>
                                    <th>Modelo</th>
                                    <td>Corolla</td>
                                </tr>
                                <tr>
                                    <th>Año</th>
                                    <td>2022</td>
                                    <th>Kilometraje</th>
                                    <td>25,000 km</td>
                                </tr>
                                <tr>
                                    <th>Transmisión</th>
                                    <td>Automática</td>
                                    <th>Combustible</th>
                                    <td>Híbrido</td>
                                </tr>
                                <tr>
                                    <th>Color</th>
                                    <td>Blanco Perlado</td>
                                    <th>Puertas</th>
                                    <td>4</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Vehicle Details -->
            <div class="col-lg-5">
                <div class="vehicle-details bg-light p-4 rounded">
                    <h1 class="mb-3">Toyota Corolla 2022</h1>
                    <div class="d-flex align-items-center mb-4">
                        <h2 class="text-success me-3">$25,999</h2>
                        <del class="text-muted">$27,500</del>
                    </div>

                    <!-- Key Features -->
                    <div class="mb-4">
                        <h4 class="mb-3">Características Principales</h4>
                        <div class="row">
                            <div class="col-6 mb-2">
                                <i class="fa fa-check text-success me-2"></i> Cámara de reversa
                            </div>
                            <div class="col-6 mb-2">
                                <i class="fa fa-check text-success me-2"></i> Control crucero
                            </div>
                            <div class="col-6 mb-2">
                                <i class="fa fa-check text-success me-2"></i> Bluetooth
                            </div>
                            <div class="col-6 mb-2">
                                <i class="fa fa-check text-success me-2"></i> Airbags laterales
                            </div>
                            <div class="col-6 mb-2">
                                <i class="fa fa-check text-success me-2"></i> Aire acondicionado
                            </div>
                            <div class="col-6 mb-2">
                                <i class="fa fa-check text-success me-2"></i> Sensores de estacionamiento
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="contact-form">
                        <h4 class="mb-3">Solicitar Información</h4>
                        <form id="vehicleContactForm">
                            <div class="mb-3">
                                <input type="text" class="form-control" placeholder="Nombre completo" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Correo electrónico" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control" placeholder="Teléfono" required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" rows="4" placeholder="Mensaje" required></textarea>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="newsletterCheck">
                                <label class="form-check-label" for="newsletterCheck">Deseo recibir ofertas especiales</label>
                            </div>
                            <button type="submit" class="btn btn-success w-100 py-2">Enviar Consulta</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Info -->
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="mb-4">Descripción Detallada</h3>
                <p class="lead">Este Toyota Corolla 2022 en excelente estado cuenta con:</p>
                <ul class="list-unstyled">
                    <li><i class="fa fa-check text-success me-2"></i> Mantenimiento al día en agencia autorizada</li>
                    <li><i class="fa fa-check text-success me-2"></i> Único dueño</li>
                    <li><i class="fa fa-check text-success me-2"></i> Garantía extendida de 12 meses</li>
                    <li><i class="fa fa-check text-success me-2"></i> Llantas nuevas</li>
                    <li><i class="fa fa-check text-success me-2"></i> Historial de servicio completo</li>
                </ul>
            </div>
        </div>

        <!-- Technical Specifications -->
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="mb-4">Especificaciones Técnicas Completas</h3>
                <div class="row">
                    <div class="col-md-6">
                        <div class="spec-item mb-3">
                            <h5>Motor</h5>
                            <p>1.8L 4 cilindros híbrido - 121 HP</p>
                        </div>
                        <div class="spec-item mb-3">
                            <h5>Consumo de Combustible</h5>
                            <p>22 km/L (ciudad) - 25 km/L (carretera)</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="spec-item mb-3">
                            <h5>Seguridad</h5>
                            <p>Sistema Toyota Safety Sense 2.0</p>
                        </div>
                        <div class="spec-item mb-3">
                            <h5>Dimensiones</h5>
                            <p>Largo: 4,630mm - Ancho: 1,780mm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Promotional Banner -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="promo-banner bg-success text-white p-5 rounded text-center">
                    <h2 class="mb-3">¡Financiamiento Disponible!</h2>
                    <p class="mb-4">Desde $1,200/mes con enganche del 20%</p>
                    <button class="btn btn-light btn-lg">Calcular Cuota</button>
                </div>
            </div>
        </div>

        <!-- Related Vehicles -->
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="mb-4">Vehículos Similares</h3>
                <div class="row g-4">
                    <!-- Related Vehicle Items (repetir según necesario) -->
                    <div class="col-md-4">
                        <div class="related-vehicle card h-100">
                            <img src="@/plantilla/img/car-1.png" class="card-img-top" alt="Vehículo relacionado">
                            <div class="card-body">
                                <h5 class="card-title">Honda Civic 2021</h5>
                                <p class="card-text">$23,999</p>
                                <a href="#" class="btn btn-outline-success">Ver Detalles</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vehicle Detail End -->

     <FooterComponent/>
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->
</template>

<script>
import HeaderComponent from '@/shared/HeaderComponent.vue';
import FooterComponent from '@/shared/FooterComponent.vue';
import TopbarComponent from '@/shared/TopbarComponent.vue';
export default {
name: 'ProductSingleComponent',
components: {
    HeaderComponent,
    FooterComponent,
    TopbarComponent
}

}
</script>