<?php
ob_start();
$registrarC = new procesoEstudiantesC();
$registrarC->registroEstudiantesC();
ob_end_flush();
?>


<section class="pc-container">
    <div class="pcoded-content">
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Registrar Nuevo Estudiante</h5>
                    </div>
                    <div class="card-body">
                        <h5>Datos del Nuevo Estudiante</h5>
                        <hr>
                        
                        <form method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputNombre">Nombre</label>
                                    <input type="text" class="form-control" id="inputNombre" placeholder="Nombre" name="nombreRE">
                                    <small id="nombreHelp" class="form-text text-muted">No compartiremos tu nombre con nadie más.</small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputApellido">Apellido</label>
                                    <input type="text" class="form-control" id="inputApellido" placeholder="Apellido" name="apellidoRE">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputDNI">DNI</label>
                                    <input type="number" class="form-control" id="inputDNI" placeholder="DNI" name="dniRE">
                                    <small id="dniHelp" class="form-text text-muted">No compartiremos tu DNI con nadie más.</small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputGenero">Género</label>
                                    <select id="inputGenero" class="form-control" name="generoRE">
                                        <option selected>Seleccionar</option>
                                        <option>Masculino</option>
                                        <option>Femenino</option>
                                
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCelular">Celular</label>
                                    <input type="number" class="form-control" id="inputCelular" placeholder="Celular" name="celularRE">
                                    <small id="celularHelp" class="form-text text-muted">No compartiremos tu número de celular con nadie más.</small>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail">Email</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="inputEmail" placeholder="Email" name="emailRE">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">@gmail.com</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </form>

                    </div>
                </div>
            </div>

            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>


