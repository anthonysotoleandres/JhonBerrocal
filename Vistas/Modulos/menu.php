<?php
ob_start(); // Habilitar almacenamiento en búfer de salida 
	$adminC = new AdminC();
    ob_start(); // Habilitar almacenamiento en búfer de salida 
?>

<?php if($adminC->sesionIniciadaC()):?>

<?php if (isset($_SESSION['perfil']) && $_SESSION['perfil'] === 'administrador'): ?>
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ Mobile header ] start -->
	<div class="pc-mob-header pc-header">
		<div class="pcm-logo">
			<img src="Vistas\assets\images\logo.svg" alt="" class="logo logo-lg">
		</div>
		<div class="pcm-toolbar">
			<a href="#!" class="pc-head-link" id="mobile-collapse">
				<div class="hamburger hamburger--arrowturn">
					<div class="hamburger-box">
						<div class="hamburger-inner"></div>
					</div>
				</div>
				<!-- <i data-feather="menu"></i> -->
			</a>
			<a href="#!" class="pc-head-link" id="headerdrp-collapse">
				<i data-feather="align-right"></i>
			</a>
			<a href="#!" class="pc-head-link" id="header-collapse">
				<i data-feather="more-vertical"></i>
			</a>
		</div>
	</div>
	<!-- [ Mobile header ] End -->

	<!-- [ navigation menu ] start -->
	<nav class="pc-sidebar">
		<div class="navbar-wrapper">
			<div class="m-header">
				<a href="index.html" class="b-brand">
					<!-- ========   change your logo hear   ============ -->
					<img src="Vistas\assets\images\toscana-removebg.png" alt="" class="logo logo-lg">
				</a>
			</div>
			<div class="navbar-content">
				<ul class="pc-navbar">
					<li class="pc-item pc-caption">
						<label>Navigations</label>
					</li>
					<li class="pc-item">
						<a href="index.html" class="pc-link "><span class="pc-micon"><i data-feather="home"></i></span><span class="pc-mtext">Dashboard</span></a>
					</li>
					<li class="pc-item pc-caption">
						<label>Elements</label>
						<span>UI Components</span>
					</li>
					<!-- ---------------------------------------------------------------- -->
					<!-- ---------------------------------------------------------------- -->
					<!-- REGSITRAR ESTUDIANTES -->
					
					<!-- RGESTIONAR ESTUDIANTES -->
					<li class="pc-item pc-hasmenu">
						<a href="#!" class="pc-link "><span class="pc-micon"><i data-feather="layout"></i></span><span class="pc-mtext">Gestionar Registro</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item">
								<a href="index.php?ruta=registro_estudiantes" class="pc-link "><span class="pc-micon"><i data-feather="feather"></i></span><span class="pc-mtext">Nuevo Estudiante</span></a>
							</li>
							<li class="pc-item">
								<a href="index.php?ruta=reporte_estudiantes_registrados" class="pc-link "><span class="pc-micon"><i data-feather="feather"></i></span><span class="pc-mtext">Mostrar Estudiantes</span></a>
							</li>
						</ul>
					</li>
					<!-- RGESTIONAR MATRICULAS -->
					<li class="pc-item pc-hasmenu">
						<a href="#!" class="pc-link "><span class="pc-micon"><i data-feather="layout"></i></span><span class="pc-mtext">Gestionar Matriculas</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item">
								<a href="index.php?ruta=realizar_nueva_matricula" class="pc-link "><span class="pc-micon"><i data-feather="feather"></i></span><span class="pc-mtext">Nueva Matricula</span></a>
							</li>
							<li class="pc-item">
								<a href="index.php?ruta=realizar_matricula" class="pc-link "><span class="pc-micon"><i data-feather="feather"></i></span><span class="pc-mtext">Realizar Matricula</span></a>
							</li>
						</ul>
					</li>
					<!-- ESTUDIANTES MATRICULADOS-->
					<li class="pc-item pc-hasmenu">
						<a href="#!" class="pc-link "><span class="pc-micon"><i data-feather="layout"></i></span><span class="pc-mtext">Gestionar Estudiantes</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">

							<li class="pc-item">
								<a href="index.php?ruta=reporte_estudiantesI" class="pc-link "><span class="pc-micon"><i data-feather="feather"></i></span><span class="pc-mtext">Ciclo I</span></a>
							</li>

							<li class="pc-item">
								<a href="index.php?ruta=realizar_matricula" class="pc-link "><span class="pc-micon"><i data-feather="feather"></i></span><span class="pc-mtext">Ciclo II</span></a>
							</li>

							<li class="pc-item">
								<a href="index.php?ruta=realizar_matricula" class="pc-link "><span class="pc-micon"><i data-feather="feather"></i></span><span class="pc-mtext">Ciclo III</span></a>
							</li>

							<li class="pc-item">
								<a href="index.php?ruta=realizar_matricula" class="pc-link "><span class="pc-micon"><i data-feather="feather"></i></span><span class="pc-mtext">Ciclo VI</span></a>
							</li>
							<li class="pc-item">
								<a href="index.php?ruta=realizar_matricula" class="pc-link "><span class="pc-micon"><i data-feather="feather"></i></span><span class="pc-mtext">Ciclo V</span></a>
							</li>
							<li class="pc-item">
								<a href="index.php?ruta=realizar_matricula" class="pc-link "><span class="pc-micon"><i data-feather="feather"></i></span><span class="pc-mtext">Ciclo VI</span></a>
							</li>
						</ul>
					</li>
					<!-- ..............-->
					<li class="pc-item">
						<a href="icon-feather.html" class="pc-link "><span class="pc-micon"><i data-feather="feather"></i></span><span class="pc-mtext">Icons</span></a>
					</li>
					<!-- ---------------------------------------------------------------- -->
					<!-- ---------------------------------------------------------------- -->
					<li class="pc-item pc-caption">
						<label>Forms</label>
						<span>40+ Ready to Use From plugins</span>
					</li>
					<li class="pc-item pc-hasmenu">
						<a href="#!" class="pc-link "><span class="pc-micon"><i data-feather="layout"></i></span><span class="pc-mtext">Forms Elements</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href="form_elements.html">Form Basic</a></li>
							<li class="pc-item"><a class="pc-link" href="form2_basic.html">Form Options</a></li>
							<li class="pc-item"><a class="pc-link" href="form2_input_group.html">Input Groups</a></li>
							<li class="pc-item"><a class="pc-link" href="form2_checkbox.html">Checkbox</a></li>
							<li class="pc-item"><a class="pc-link" href="form2_radio.html">Radio</a></li>
						</ul>
					</li>
					<li class="pc-item pc-caption">
						<label>table</label>
						<span>Advance Datatable Integrated</span>
					</li>
					<li class="pc-item">
						<a href="tbl_bootstrap.html" class="pc-link "><span class="pc-micon"><i data-feather="grid"></i></span><span class="pc-mtext">Bootstrap table</span></a>
					</li>
					<li class="pc-item pc-caption">
						<label>Chart & Maps</label>
						<span>Tones of readymade charts</span>
					</li>
					<li class="pc-item">
						<a href="chart-apex.html" class="pc-link "><span class="pc-micon"><i data-feather="pie-chart"></i></span><span class="pc-mtext">Chart</span></a>
					</li>
					<li class="pc-item">
						<a href="map-google.html" class="pc-link "><span class="pc-micon"><i data-feather="map"></i></span><span class="pc-mtext">Maps</span></a>
					</li>
					<li class="pc-item pc-caption">
						<label>Pages</label>
						<span>15+ Redymade Pages</span>
					</li>
					<li class="pc-item pc-hasmenu">
						<a href="#!" class="pc-link"><span class="pc-micon"><i data-feather="lock"></i></span><span class="pc-mtext">Authentication</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href="auth-signup.html" target="_blank">Sign up</a></li>
							<li class="pc-item"><a class="pc-link" href="auth-signin.html" target="_blank">Sign in</a></li>
						</ul>
					</li>
					<li class="pc-item pc-caption">
						<label>Other</label>
						<span>Extra more things</span>
					</li>
					<li class="pc-item pc-hasmenu">
						<a href="#!" class="pc-link"><span class="pc-micon"><i data-feather="menu"></i></span><span class="pc-mtext">Menu levels</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
						<ul class="pc-submenu">
							<li class="pc-item"><a class="pc-link" href="#!">Menu Level 2.1</a></li>
							<li class="pc-item pc-hasmenu">
								<a href="#!" class="pc-link">Menu level 2.2<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
								<ul class="pc-submenu">
									<li class="pc-item"><a class="pc-link" href="#!">Menu level 3.1</a></li>
									<li class="pc-item"><a class="pc-link" href="#!">Menu level 3.2</a></li>
								</ul>
							</li>
							<li class="pc-item pc-hasmenu">
							<li class="pc-item pc-hasmenu">
								<a href="#!" class="pc-link">Menu level 2.3<span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
								<ul class="pc-submenu">
									<li class="pc-item"><a class="pc-link" href="#!">Menu level 3.1</a></li>
									<li class="pc-item"><a class="pc-link" href="#!">Menu level 3.2</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="pc-item"><a href="sample-page.html" class="pc-link "><span class="pc-micon"><i data-feather="sidebar"></i></span><span class="pc-mtext">Sample page</span></a></li>

				</ul>
				
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="pc-header ">
		<div class="header-wrapper">
			
			<div class="ml-auto">
				<ul class="list-unstyled">
					
					<li class="dropdown pc-h-item">
						<a class="pc-head-link dropdown-toggle arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
							<img src="Vistas\assets\images\user.png" alt="user-image" class="user-avtar">
							<span>
								<span class="user-name">Joseph William</span>
								<span class="user-desc">Administrator</span>
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right pc-h-dropdown">
							<div class=" dropdown-header">
								<h6 class="text-overflow m-0">Bienvenido</h6>
							</div>
							<a href="#!" class="dropdown-item">
								<i data-feather="user"></i>
								<span>My Account</span>
							</a>
							<a href="#!" class="dropdown-item">
								<i data-feather="settings"></i>
								<span>Settings</span>
							</a>
							<a href="#!" class="dropdown-item">
								<i data-feather="life-buoy"></i>
								<span>Support</span>
							</a>
							<a href="#!" class="dropdown-item">
								<i data-feather="lock"></i>
								<span>Lock Screen</span>
							</a>
							<a href="index.php?ruta=salir" class="dropdown-item">
								<i data-feather="power"></i>
								<span>Logout</span>
							</a>
						</div>
					</li>
				</ul>
			</div>

		</div>
	</header>
	<!-- [ Header ] end -->

<!-- [ Main Content ] start ------------------------>

<!-- [ Main Content ] end -->
</div>
<?php else: ?>
                <!-- Mostrar elementos del menú para otros perfiles o un menú básico si no se ha identificado el perfil -->
                <!-- ... Código para un menú básico o elementos del menú para otros perfiles ... -->
<?php endif; ?>

<?php else: ?>
                <!-- Mostrar elementos del menú para otros perfiles o un menú básico si no se ha identificado el perfil -->
                <!-- ... Código para un menú básico o elementos del menú para otros perfiles ... -->
<?php endif; ?>