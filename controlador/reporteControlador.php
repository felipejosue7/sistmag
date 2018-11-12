<?php
require_once 'modelo/reporteModelo.php';

$reportediario= new ReporteModelo();


$tipo = $_GET["tipo"];

if ($tipo=="diariotra") {

	$fecha = $_GET["fecha"];


	//$datosreportedia=$reportediario-> Listar($fecha);
	$datosreportediatra=$reportediario-> ListarTratamientoDiario($fecha);

//var_dump($datosreportedia);
	require_once "vista/cabecera.php";

	require_once 'vista/reporteDiariotra.php';

	
}

if ($tipo=="fechastra") {

	$fechasini = $_GET["fechasini"];
	$fechasfin = $_GET["fechasfin"];

	//$datosreportedia=$reportediario-> Listarfechas($fechasini,$fechasfin);

	$datosreportesemanatra=$reportediario-> ListarTratamientofechas($fechasini,$fechasfin);

//var_dump($datosreportedia);
	require_once "vista/cabecera.php";

	require_once 'vista/reporteSemanaltra.php';	
}

if ($tipo=="mestra") {

	$mesini = $_GET["mesini"];

	$mesfin = $_GET["mesfin"];

	//$datosreportemes=$reportediario-> ListarPruebaMes($mesini,$mesfin);

	$datosreportemestra=$reportediario-> ListarTratamientoMes($mesini,$mesfin);

//var_dump($datosreportedia);
	require_once "vista/cabecera.php";

	require_once 'vista/reporteMestra.php';	
}

// Inicio controlador de Pruebas Diarias, Semanales y Mensuales
//Pruebas diarias
if ($tipo=="diariopru") {

	$fecha = $_GET["fecha"];


	$datosreportediapru=$reportediario-> Listar($fecha);
	//$datosreportediatra=$reportediario-> ListarTratamientoDiario($fecha);

//var_dump($datosreportedia);
	require_once "vista/cabecera.php";

	require_once 'vista/reporteDiariopru.php';

	
}
// Fin Pruebas Diarias

//Inicio PRuebas Semanales
if ($tipo=="fechaspru") {

	$fechasini = $_GET["fechasini"];
	$fechasfin = $_GET["fechasfin"];

	$datosreportesemanapru=$reportediario-> Listarfechas($fechasini,$fechasfin);

	//$datosreportediatra=$reportediario-> ListarTratamientofechas($fechasini,$fechasfin);

//var_dump($datosreportedia);
	require_once "vista/cabecera.php";

	require_once 'vista/reporteSemanalpru.php';	
}
// Fin Pruebas Semanales


//Inicio PRuebas Mensuales
if ($tipo=="mespru") {

	$mesini1 = $_GET["mesini1"];

	$mesfin1 = $_GET["mesfin1"];

	$datosreportemespru=$reportediario-> ListarPruebaMes($mesini1,$mesfin1);

	//$datosreportemestra=$reportediario-> ListarTratamientoMes($mesini,$mesfin);

//var_dump($datosreportedia);
	require_once "vista/cabecera.php";

	require_once 'vista/reporteMespru.php';	
}
//Fin Pruebas MEnsuales

// Fin Controlador de Pruebas Diarias, Semanales y Mensuales

//Inicio Controlador Origen PRobable de infeccion por Estado, Municipio y Parroquia
if ($tipo=="diario") {

	$fecha = $_GET["fecha"];


	//$datosreportedia=$reportediario-> Listar($fecha);
	//$datosreportediatra=$reportediario-> ListarTratamientoDiario($fecha);

//var_dump($datosreportedia);
	require_once "vista/cabecera.php";

	require_once 'vista/reporteDiario.php';

	
}

if ($tipo=="fechas") {

	$fechasini = $_GET["fechasini"];
	$fechasfin = $_GET["fechasfin"];

	//$datosreportedia=$reportediario-> Listarfechas($fechasini,$fechasfin);

	//$datosreportediatra=$reportediario-> ListarTratamientofechas($fechasini,$fechasfin);

//var_dump($datosreportedia);
	require_once "vista/cabecera.php";

	require_once 'vista/reporteSemanal.php';	
}

if ($tipo=="mes") {

	$mesini = $_GET["mesini1"];

	$mesfin = $_GET["mesfin1"];

	//$datosreportemes=$reportediario-> ListarPruebaMes($mesini,$mesfin);

	//$datosreportemestra=$reportediario-> ListarTratamientoMes($mesini,$mesfin);

//var_dump($datosreportedia);
	require_once "vista/cabecera.php";

	require_once 'vista/reporteMes.php';	
}



?>


