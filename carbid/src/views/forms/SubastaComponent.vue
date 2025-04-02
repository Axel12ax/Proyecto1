<template>

    <!-- Spinner Start -->
   <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
     Spinner End -->

<TopbarComponent/>
<HeaderComponent/>
   <!-- Add Vehicle Form -->
<!-- Create Auction Form -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="bg-light rounded p-5 shadow">
                    <h2 class="mb-4">Crear Nueva Subasta</h2>
                    <form id="createAuctionForm">
                        <!-- Sección de Información Básica -->
                        <div class="mb-4">
                            <h4 class="mb-3 border-bottom pb-2">Datos de la Subasta</h4>
                            
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <label for="nombre" class="form-label">Nombre de la Subasta</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="precio_inicial" class="form-label">Precio Inicial ($)</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" class="form-control" id="precio_inicial" 
                                               name="precio_inicial" min="0" step="0.01" required>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="precio_final" class="form-label">Precio de Reserva ($)</label>
                                    <div class="input-group">
                                        <span class="input-group-text">$</span>
                                        <input type="number" class="form-control" id="precio_final" 
                                               name="precio_final" min="0" step="0.01" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Sección de Fechas -->
                        <div class="mb-4">
                            <h4 class="mb-3 border-bottom pb-2">Tiempo de la Subasta</h4>
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
                                    <input type="datetime-local" class="form-control" id="fecha_inicio" 
                                           name="fecha_inicio" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="fecha_fin" class="form-label">Fecha de Cierre</label>
                                    <input type="datetime-local" class="form-control" id="fecha_fin" 
                                           name="fecha_fin" required>
                                </div>
                            </div>
                        </div>

                        <!-- Sección de Vehículo y Estado -->
                        <div class="mb-4">
                            <h4 class="mb-3 border-bottom pb-2">Configuraciones Adicionales</h4>
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="id_vehiculo" class="form-label">Vehículo a Subastar</label>
                                    <select class="form-select" id="id_vehiculo" name="id_vehiculo" required>
                                        <option value="">Seleccionar Vehículo</option>
                                        <!-- Opciones dinámicas desde backend -->
                                        <option value="1">Toyota Corolla 2022</option>
                                        <option value="2">Honda Civic 2021</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="estado" class="form-label">Estado Inicial</label>
                                    <select class="form-select" id="estado" name="estado" required>
                                        <option value="pendiente">Pendiente</option>
                                        <option value="activa">Activa</option>
                                        <option value="finalizada">Finalizada</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Campo Oculto para ID de Usuario -->
                        <input type="hidden" id="id_user" name="id_user" value="<!-- ID del usuario autenticado -->">

                        <!-- Botones de Acción -->
                        <div class="d-flex justify-content-end gap-2 mt-4">
                            <button type="reset" class="btn btn-secondary px-4">Limpiar</button>
                            <button type="submit" class="btn btn-primary px-4">Crear Subasta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<FooterComponent/>

    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

    


</template>
<script>
import HeaderComponent from '@/shared/HeaderComponent.vue';
import FooterComponent from '@/shared/FooterComponent.vue';
import TopbarComponent from '@/shared/TopbarComponent.vue';

export default{
name:'HomeComponent',
components:{
    HeaderComponent,
    FooterComponent,
    TopbarComponent
}
}

</script>