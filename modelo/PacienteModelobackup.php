<?php
//include("modelo/conexion.php");
class Paciente {
	
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
	
		
 

	public function __construct(){
		
		$this->numero_paciente = "";
		$this->nombre_paciente = "";
		$this->apellido_paciente = "";
		$this->cedula_paciente = "";
		$this->nacionalidad_paciente = "";
		$this->fecha_nacimiento = "";
		$this->direccion_paciente = "";
		$this->sexo_paciente ="";
		$this->telefono_paciente = "";
		$this->etnia_paciente = "";
		$this->id_municipio = "";
		$this->id_parroquia = "";
		$this->id_estado = "";
		$this->id_usuario_sistema = "";
		$this->email_paciente = "";
		$this->estadocivil_paciente ="";
	}



	public function agregarPaciente(){
		
		$sql = "insert into paciente (
		numero_paciente,
		nombre_paciente,
		apellido_paciente,
		cedula_paciente,
		nacionalidad_paciente,
		fecha_nacimiento,
		direccion_paciente,
		sexo_paciente,
		telefono_paciente,
		etnia_paciente,
		id_municipio,
		id_parroquia,
		id_estado,
		id_usuario_sistema,
		email_paciente
	) ";

		$sql .= "value (null,
		\"$this->numero_paciente\",
		\"$this->nombre_paciente\",
		\"$this->apellido_paciente\",
		\"$this->cedula_paciente\",
		\"$this->nacionalidad_paciente\",
		\"fecha_nacimiento\",
		\"direccion_paciente\",
		\"sexo_paciente\",
		\"telefono_paciente\",
		\"etnia_paciente\",
		\"id_municipio\",
		\"id_parroquia\",
		\"id_estado\",
		\"id_usuario_sistema\",
		\"$this->email_paciente\",
		\"$this->estadocivil_paciente\"
	)";


		$sql = "insert into paciente (cedula_paciente) ";
		$sql .= "value (:cedula)";

$sentencia = Database::tenerconex()->prepare("$sql");
$sentencia->bindParam(':cedula', $this->cedula_paciente);

 
// insertar una fila

$sentencia->execute();		
 
 }

	

	public function borrarporId($id){
        try {
            $sql = $this->dbh->prepare('delete from usuaria where id = ?');
            $sql->bindParam(1, $id);
            $sql->execute();
            $this->dbh = null;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
		
	
	public function borrar(){
		try {
  		$sql = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
  		$sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
  		$sentencia = $sql->prepare('DELETE FROM someTable WHERE id = :id');
  		$sentencia->bindParam(':id', $id); // this time, we'll use the bindParam method
  		$sentencia->execute();
   
  		echo $sentencia->rowCount(); // 1
		} catch(PDOException $e) {
  		echo 'Error: ' . $e->getMessage();
		}
		
	}

// partiendo de que ya tenemos creado un objeto usuaria previamente utilizamos el contexto
	public function update_active(){
		$sql = "update set creado=NOW() where id=$this->id";
		
	}


	public function update(){
        try {
  		$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $uuario, $password);
  		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
  		$stmt = $pdo->prepare('UPDATE someTable SET name = :name WHERE id = :id');
  		$stmt->execute(array(
    	':id'   => $id,
    	':name' => $nombre
  		));
   
  		echo $stmt->rowCount(); // 1
		} catch(PDOException $e) {
  		echo 'Error: ' . $e->getMessage();
    }
    }

	public static function getById($id){
		$sql = "select * from usuaria where id=$id";
		
		return Model::one($query[0],new UsuariaModelo());
	}


	public static function obtenerUsuarios(){
		$sql = "select * from usuario_sistema order by creado desc ";
		
		$sentencia = Database::tenerconex()->prepare($sql);
		//$sentencia->bindParam("%$texto_buscado%");
		$sentencia->execute();
		$resultados=$sentencia->fetchAll();


		return $resultados;
	}

	public static function getAllActive(){
		$sql = "select * from usuaria where last_active_at>=date_sub(NOW(),interval 3 second)";
		
		return Model::many($query[0],new UsuariaModelo());
	}

	public static function getAllUnActive(){
		$sql = "select * from usuaria where last_active_at<=date_sub(NOW(),interval 3 second)";
		
		return Model::many($query[0],new UsuariaModelo());
	}


	public function getUnreads(){ return MessageData::getUnreadsByClientId($this->id); }


	public static function getLike($q){
		$sql = "select * from usuaria where title like '%$q%' or email like '%$q%'";
		
		return Model::many($query[0],new UsuariaModelo());
	}


} 

?>