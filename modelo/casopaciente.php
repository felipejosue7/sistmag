<?php 
class CasoPaciente
{
    private	$id_caso = "";
	private $numero_caso = "";	
	private	$origen = "";
	private	$muerte = "";
	private	$recaida = "";
	private	$origen_parroquia = "";
	private	$clasificacion_caso = "";
	private	$id_paciente = "";
	private	$numero_paciente = "";
	private $nombre_paciente = "";	
	private	$apellido_paciente = "";
	private	$cedula_paciente = "";
	private	$nacionalidad_paciente = "";
	private	$fecha_nacimiento = "";
	private	$direccion_paciente = "";
	private	$sexo_paciente = "";
	private $telefono_paciente = "";
	private $etnia_paciente = "";
	private $id_municipio = "";
	private $id_parroquia = "";
	private $id_estado = "";
	private $id_usuario_sistema = "";
	private $email_paciente ="";
	private $estadocivil_paciente ="";
	

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}