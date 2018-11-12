<?php


include("casopaciente.php");





class CasoPacientesModelo {

  public function Obtenerpacientecasos($id)
  {
    try 
    {
      $stm = Database::tenerconex()
      ->prepare("SELECT * FROM paciente as p, caso as c, paciente_caso as pc WHERE id_paciente = ? and pc.id_caso=c.id_caso and pc.id_paciente=p.id_paciente");
      

      $stm->execute(array($id));
      $r = $stm->fetch(PDO::FETCH_OBJ);

      $caspac = new CasoPaciente();

      $caspac->__SET('id_caso', $r->id_caso);
      $caspac->__SET('numero_caso', $r->numero_caso);
      $caspac->__SET('origen', $r->origen);
      $caspac->__SET('muerte', $r->muerte);
      $caspac->__SET('recaida', $r->recaida);
      $caspac->__SET('origen_parroquia', $r->origen_parroquia);
      $caspac->__SET('clasificacion_caso', $r->clasificacion_caso);
      $caspac->__SET('id_paciente', $r->id_paciente);
      $caspac->__SET('numero_paciente', $r->numero_paciente);
      $caspac->__SET('nombre_paciente', $r->nombre_paciente);
      $caspac->__SET('apellido_paciente', $r->apellido_paciente);
      $caspac->__SET('cedula_paciente', $r->cedula_paciente);
      $caspac->__SET('nacionalidad_paciente', $r->nacionalidad_paciente);
      $caspac->__SET('fecha_nacimiento', $r->fecha_nacimiento);
      $caspac->__SET('direccion_paciente', $r->direccion_paciente);
      $caspac->__SET('sexo_paciente', $r->sexo_paciente);
      $caspac->__SET('telefono_paciente', $r->telefono_paciente);
      $caspac->__SET('etnia_paciente', $r->etnia_paciente);
      $caspac->__SET('id_municipio', $r->id_municipio);
      $caspac->__SET('id_parroquia', $r->id_parroquia);
      $caspac->__SET('id_estado', $r->id_estado);
      $caspac->__SET('id_usuario_sistema', $r->id_usuario_sistema);
      $caspac->__SET('email_paciente', $r->email_paciente);
      $caspac->__SET('estadocivil_paciente', $r->estadocivil_paciente);
      
      
      
      

      return $caspac;
    } catch (Exception $e) 
    {
      die($e->getMessage());
    }
    
  }



  public function Listarpacientescasos()
  {
    try
    {
      $result = array();

      $stm = Database::tenerconex()->prepare("SELECT * FROM paciente as p, caso as c, paciente_caso as pc WHERE pc.id_caso=c.id_caso and pc.id_paciente=p.id_paciente");
      
      $stm->execute();

      foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
      {
       $caspac = new CasoPaciente();

       $caspac->__SET('id_caso', $r->id_caso);
       $caspac->__SET('numero_caso', $r->numero_caso);
       $caspac->__SET('origen', $r->origen);
       $caspac->__SET('muerte', $r->muerte);
       $caspac->__SET('recaida', $r->recaida);
       $caspac->__SET('origen_parroquia', $r->origen_parroquia);
       $caspac->__SET('clasificacion_caso', $r->clasificacion_caso);
       $caspac->__SET('id_paciente', $r->id_paciente);
       $caspac->__SET('numero_paciente', $r->numero_paciente);
       $caspac->__SET('nombre_paciente', $r->nombre_paciente);
       $caspac->__SET('apellido_paciente', $r->apellido_paciente);
       $caspac->__SET('cedula_paciente', $r->cedula_paciente);
       $caspac->__SET('nacionalidad_paciente', $r->nacionalidad_paciente);
       $caspac->__SET('fecha_nacimiento', $r->fecha_nacimiento);
       $caspac->__SET('direccion_paciente', $r->direccion_paciente);
       $caspac->__SET('sexo_paciente', $r->sexo_paciente);
       $caspac->__SET('telefono_paciente', $r->telefono_paciente);
       $caspac->__SET('etnia_paciente', $r->etnia_paciente);
       $caspac->__SET('id_municipio', $r->id_municipio);
       $caspac->__SET('id_parroquia', $r->id_parroquia);
       $caspac->__SET('id_estado', $r->id_estado);
       $caspac->__SET('id_usuario_sistema', $r->id_usuario_sistema);
       $caspac->__SET('email_paciente', $r->email_paciente);
       $caspac->__SET('estadocivil_paciente', $r->estadocivil_paciente);
       
       

       $result[] = $caspac;
     }

     return $result;
   }
   catch(Exception $e)
   {
    die($e->getMessage());
  }
}


}



