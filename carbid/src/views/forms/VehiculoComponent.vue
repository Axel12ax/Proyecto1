<template>
    <TopbarComponent/>
    <HeaderComponent/>

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="bg-light rounded p-5 shadow">
                        <h2 class="mb-4 text-center">Publicar Vehículo</h2>
                        
                        <!-- Selector de Tipo de Venta -->
                        <div class="mb-4 text-center">
                            <h4 class="mb-3">Seleccione el tipo de publicación</h4>
                            <div class="btn-group btn-group-toggle" role="group">
                                <input type="radio" class="btn-check" name="tipo" id="subasta" 
                                       v-model="tipoPublicacion" value="subasta" autocomplete="off">
                                <label class="btn btn-outline-danger rounded-start" for="subasta">
                                    <i class="fas fa-gavel me-2"></i>Subasta
                                </label>

                                <input type="radio" class="btn-check" name="tipo" id="venta" 
                                       v-model="tipoPublicacion" value="venta" autocomplete="off">
                                <label class="btn btn-outline-success rounded-end" for="venta">
                                    <i class="fas fa-tag me-2"></i>Venta Directa
                                </label>
                            </div>
                        </div>

                        <!-- Formulario Principal -->
                        <form id="addVehicleForm" enctype="multipart/form-data">
                            <!-- Sección de Datos Básicos -->
                            <div class="card mb-4 border-primary">
                                <div class="card-header bg-secondary text-white">
                                    <h5 class="mb-0"><i class="fas fa-car me-2"></i>Información Básica</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="nserie" class="form-label">Número de Serie (VIN)</label>
                                            <input type="text" class="form-control" id="nserie" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="marca" class="form-label">Marca</label>
                                            <input type="text" class="form-control" id="marca" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="modelo" class="form-label">Modelo</label>
                                            <input type="text" class="form-control" id="modelo" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="color" class="form-label">Color</label>
                                            <input type="color" class="form-control form-control-color" id="color" value="#563d7c">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="anio" class="form-label">Año</label>
                                            <input type="number" class="form-control" id="anio" min="1900" max="2024" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="kilometros" class="form-label">Kilómetros</label>
                                            <input type="number" class="form-control" id="kilometros" min="0" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="combustible" class="form-label">Combustible</label>
                                            <select class="form-select" id="combustible">
                                                <option>Gasolina</option>
                                                <option>Diésel</option>
                                                <option>Eléctrico</option>
                                                <option>Híbrido</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Sección de Detalles Específicos -->
                            <div class="card mb-4" :class="tipoPublicacion === 'subasta' ? 'border-danger' : 'border-success'">
                                <div class="card-header text-white" :class="tipoPublicacion === 'subasta' ? 'bg-danger' : 'bg-success'">
                                    <h5 class="mb-0">
                                        <i :class="tipoPublicacion === 'subasta' ? 'fas fa-gavel' : 'fas fa-tag'" class="me-2"></i>
                                        {{ tipoPublicacion === 'subasta' ? 'Detalles de Subasta' : 'Detalles de Venta' }}
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <!-- Subasta -->
                                    <div v-if="tipoPublicacion === 'subasta'">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="fechaInicio" class="form-label">Fecha de Inicio</label>
                                                <input type="datetime-local" class="form-control" id="fechaInicio" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="fechaFin" class="form-label">Fecha de Cierre</label>
                                                <input type="datetime-local" class="form-control" id="fechaFin" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="pujaInicial" class="form-label">Puja Inicial (USD)</label>
                                                <input type="number" class="form-control" id="pujaInicial" min="0" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="precioReserva" class="form-label">Precio de Reserva</label>
                                                <input type="number" class="form-control" id="precioReserva" min="0">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="incremento" class="form-label">Incremento Mínimo</label>
                                                <input type="number" class="form-control" id="incremento" min="1" value="100" required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!-- Venta Directa -->
                                    <div v-if="tipoPublicacion === 'venta'">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="precioVenta" class="form-label">Precio de Venta</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">$</span>
                                                    <input type="number" class="form-control" id="precioVenta" min="0" step="0.01" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="precioEspecial" class="form-label">Precio Promocional</label>
                                                <div class="input-group">
                                                    <span class="input-group-text">$</span>
                                                    <input type="number" class="form-control" id="precioEspecial" min="0" step="0.01">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="incluyeEnvio">
                                                    <label class="form-check-label" for="incluyeEnvio">
                                                        Incluir envío gratuito
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Sección de Detalles Adicionales -->
                            <div class="card mb-4 border-secondary">
                                <div class="card-header bg-secondary text-white">
                                    <h5 class="mb-0"><i class="fas fa-list-alt me-2"></i>Detalles Adicionales</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="transmision" class="form-label">Transmisión</label>
                                            <select class="form-select" id="transmision">
                                                <option>Automática</option>
                                                <option>Manual</option>
                                                <option>CVT</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="puertas" class="form-label">Número de Puertas</label>
                                            <input type="number" class="form-control" id="puertas" min="2" max="6">
                                        </div>
                                        <div class="col-12">
                                            <label for="caracteristicas" class="form-label">Características</label>
                                            <div class="row">
                                                <div class="col-md-3" v-for="(feature, index) in features" :key="index">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" :id="'feature'+index">
                                                        <label class="form-check-label" :for="'feature'+index">
                                                            {{ feature }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="descripcion" class="form-label">Descripción</label>
                                            <textarea class="form-control" id="descripcion" rows="4" maxlength="500" required></textarea>
                                        </div>
                                        <div class="col-12">
                                            <label for="imagenes" class="form-label">Imágenes (Máx. 5)</label>
                                            <input type="file" class="form-control" id="imagenes" multiple accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Botones de Acción -->
                            <div class="d-flex justify-content-center gap-3 mt-4">
                                <button type="reset" class="btn btn-outline-secondary rounded-pill px-4 py-2">
                                    <i class="fas fa-eraser me-2"></i>Limpiar
                                </button>
                                <button type="button" class="btn btn-outline-primary rounded-pill px-4 py-2">
                                    <i class="fas fa-eye me-2"></i>Vista Previa
                                </button>
                                <button type="submit" class="btn btn-primary rounded-pill px-4 py-2">
                                    <i class="fas fa-save me-2"></i>Publicar Vehículo
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <FooterComponent/>
</template>

<script>
import HeaderComponent from '@/shared/HeaderComponent.vue';
import FooterComponent from '@/shared/FooterComponent.vue';
import TopbarComponent from '@/shared/TopbarComponent.vue';

export default {
    name: 'AddVehicleComponent',
    components: {
        HeaderComponent,
        FooterComponent,
        TopbarComponent
    },
    data() {
        return {
            tipoPublicacion: 'venta',
            features: [
                'Aire acondicionado',
                'Vidrios eléctricos',
                'Bluetooth',
                'Cámara de reversa',
                'Sensores de estacionamiento',
                'Control crucero',
                'Asientos de cuero',
                'Sunroof',
                'Sistema de navegación',
                'Airbags laterales'
            ]
        }
    }
}
</script>
