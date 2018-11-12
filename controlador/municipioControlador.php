<?php
require_once 'modelo/municipioModelo.php';

$municipio= new MunicipioModelo();

$estado_id = $_GET["elegido"];


$datosmunicipios=$municipio-> Listar($estado_id);

echo $datosmunicipios;

?>