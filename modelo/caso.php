<?php 
class Caso
{
    private	$id_caso = "";
	private $numero_caso = "";	
	private	$origen = "";
	private	$muerte = "";
	private	$recaida = "";
	private	$origen_parroquia = "";
	private	$clasificacion_caso = "";
	
	
	

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}