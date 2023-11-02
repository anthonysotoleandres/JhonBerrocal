<!DOCTYPE html>
<html lang="en">
<head>
    <title>La Toscana</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />

    <!-- Favicon icon -->
    <link rel="icon" href="Vistas\assets\images\logotoscona.png" type="image/x-icon">

    <!-- font css -->
    <link rel="stylesheet" href="Vistas\assets/fonts/font-awsome-pro/css/pro.min.css">
    <link rel="stylesheet" href="Vistas\assets/fonts/feather.css">
    <link rel="stylesheet" href="Vistas\assets/fonts/fontawesome.css">

    <!-- vendor css -->
    <link rel="stylesheet" href="Vistas\assets\css\style.css">
    <link rel="stylesheet" href="Vistas/assets/css/customizer.css">

</head>
<body class="">

    <?php
		include 'Modulos/menu.php';
	?>
<div class="">
		<?php
			$rutasC = new RutasC();
			$modulo = $rutasC->procesaRutasC();
			include $modulo;
		?>
 </div> 

    <!-- Required Js -->
    <script src="Vistas\assets/js/vendor-all.min.js"></script>

   
    <script src="Vistas\assets/js/plugins/bootstrap.min.js"></script>
    <script src="Vistas\assets/js/plugins/feather.min.js"></script>
    <script src="Vistas\assets/js/pcoded.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    <script src="Vistas\assets/js/plugins/clipboard.min.js"></script>
    <script src="Vistas\assets/js/uikit.min.js"></script>

<!-- Apex Chart -->
<script src="Vistas\assets/js/plugins/apexcharts.min.js"></script>

<!-- custom-chart js -->
<script src="Vistas\assets/js/pages/dashboard-sale.js"></script>



    <!-- Page level plugins -->
    <script src="Vistas\assets\datatables\jquery.dataTables.min.js"></script>
    <script src="Vistas\vendor\datatables\dataTables.bootstrap4.js"></script>
    <!-- Page level custom scripts -->
    <script src="Vistas\assets\js\demo\datatables-demo.js"></script>

</body>
</html>