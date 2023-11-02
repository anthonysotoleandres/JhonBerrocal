<?php
$adminC = new AdminC();
$resultado = $adminC->IngresoC();
?>


<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
						<img src="Vistas\assets\images\toscana-removebg.png" alt="" class="img-fluid mb-4">
						<h4 class="mb-3 f-w-400">Iniciar Sesion</h4>
                        <form class="user"method="post">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i data-feather="mail"></i></span>
                                </div>
                                <input type="number" class="form-control" name="usuarioI" placeholder="Usuario">
                            </div>
                            <div class="input-group mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i data-feather="lock"></i></span>
                                </div>
                                <input type="password" class="form-control" name="contraseñaI" placeholder="Contraseña">
                            </div>
                            <div class="input-group mb-4">
                                        <select class="form-control "  name="perfilI" >
                                                <option value="administrador">Administrador</option>
                                                <option value="estudiante">Docente</option>
                                                <option value="estudiante">Estudiante</option>

                                        </select>
                            </div>
                            <!-- <div class="form-group text-left mt-2">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input input-primary" id="customCheckdefh2" checked="">
                                    <label class="custom-control-label" for="customCheckdefh2">Save credentials</label>
                                </div>
                            </div> -->
                            <button type="submit" class="btn btn-block btn-primary mb-4">Ingresar</button>
                            <p class="mb-0 text-muted">¿Olvidastes tu contraseña? <a href="auth-signup.html" class="f-w-400">Click Aqui</a></p>

                        </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->