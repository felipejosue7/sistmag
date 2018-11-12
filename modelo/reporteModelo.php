<?php

include "reporte.php";
include "paciente.php";
include "prueba.php";
include "estado.php";
include "municipio.php";
include "parroquia.php";

class ReporteModelo
{

    public function Listar($fecha)
    {
        try
        {
            $result = array();

            $stm = Database::tenerconex()->prepare("SELECT *, pa.nombre as nombreparroquia, mu.nombre as nombremunicipio, es.nombre as nombreestado FROM paciente p 
                INNER JOIN paciente_pruebas pp ON p.id_paciente=pp.id_paciente
                INNER JOIN pruebas pr on pr.id_pruebas=pp.id_pruebas
                INNER JOIN parroquia pa ON pr.parroquia_id=pa.id_parroquia
                INNER JOIN municipio mu ON pa.municipio_id=mu.id_municipio
                INNER JOIN estado es ON mu.estado_id=es.id_estado                
                ");
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $r) {



                $result[] = $r;

            }

            return $result;


        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ListarTratamientoDiario($fecha)
    {
        try
        {
            $result = array();

            $stm = Database::tenerconex()->prepare("SELECT *  FROM paciente p 
                INNER JOIN paciente_tratamiento pt ON p.id_paciente=pt.id_paciente
                INNER JOIN tratamiento tr on pt.id_tratamiento=tr.id_tratamiento
                
                WHERE p.fecha_creado="."'$fecha'");
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $r) {



                $result[] = $r;

            }

            return $result;


        } catch (Exception $e) {
            die($e->getMessage());
        }
    }



    public function Listarfechas($fechaini,$fechafin)
    {
        try
        {
            $result = array();

            $stm = Database::tenerconex()->prepare("SELECT *, pa.nombre as nombreparroquia, mu.nombre as nombremunicipio, es.nombre as nombreestado FROM paciente p 
                INNER JOIN paciente_pruebas pp ON p.id_paciente=pp.id_paciente
                INNER JOIN pruebas pr on pr.id_pruebas=pp.id_pruebas
                INNER JOIN parroquia pa ON pr.parroquia_id=pa.id_parroquia
                INNER JOIN municipio mu ON pa.municipio_id=mu.id_municipio
                INNER JOIN estado es ON mu.estado_id=es.id_estado
                ");



            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $r) {



                $result[] = $r;

            }

            return $result;


        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function ListarTratamientofechas($fechaini,$fechafin)
    {
        try
        {
            $result = array();

            $stm = Database::tenerconex()->prepare("SELECT *  FROM paciente p 
                INNER JOIN paciente_tratamiento pt ON p.id_paciente=pt.id_paciente
                INNER JOIN tratamiento tr on pt.id_tratamiento=tr.id_tratamiento
                
                WHERE  p.fecha_creado between "."'$fechaini' and '$fechafin'");
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $r) {



                $result[] = $r;

            }

            return $result;


        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ListarPruebaMes($mesini1,$mesfin1)
    {
        try
        {
            $result = array();

            $stm = Database::tenerconex()->prepare("SELECT *, pa.nombre as nombreparroquia, mu.nombre as nombremunicipio, es.nombre as nombreestado FROM paciente p 
                INNER JOIN paciente_pruebas pp ON p.id_paciente=pp.id_paciente
                INNER JOIN pruebas pr on pr.id_pruebas=pp.id_pruebas
                INNER JOIN parroquia pa ON pr.parroquia_id=pa.id_parroquia
                INNER JOIN municipio mu ON pa.municipio_id=mu.id_municipio
                INNER JOIN estado es ON mu.estado_id=es.id_estado
                ");
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $r) {



                $result[] = $r;

            }

            return $result;


        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function ListarTratamientoMes($mesini,$mesfin)
    {
        try
        {
            $result = array();

            $stm = Database::tenerconex()->prepare("SELECT *  FROM paciente p 
                INNER JOIN paciente_tratamiento pt ON p.id_paciente=pt.id_paciente
                INNER JOIN tratamiento tr on pt.id_tratamiento=tr.id_tratamiento
                
                WHERE  p.fecha_creado between "."'$mesini' and '$mesfin'");
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_ASSOC) as $r) {



                $result[] = $r;

            }

            return $result;


        } catch (Exception $e) {
            die($e->getMessage());
        }
    }



    public function Obtener($id)
    {
        try
        {
            $stm = Database::tenerconex()
            ->prepare("SELECT * FROM paciente WHERE id_paciente = ?");

            $stm->execute(array($id));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            $pac = new Paciente();

            $pac->__SET('id_paciente', $r->id_paciente);
            $pac->__SET('numero_paciente', $r->numero_paciente);
            $pac->__SET('nombre_paciente', $r->nombre_paciente);
            $pac->__SET('apellido_paciente', $r->apellido_paciente);
            $pac->__SET('cedula_paciente', $r->cedula_paciente);
            $pac->__SET('nacionalidad_paciente', $r->nacionalidad_paciente);
            $pac->__SET('fecha_nacimiento', $r->fecha_nacimiento);
            $pac->__SET('direccion_paciente', $r->direccion_paciente);
            $pac->__SET('sexo_paciente', $r->sexo_paciente);
            $pac->__SET('telefono_paciente', $r->telefono_paciente);
            $pac->__SET('etnia_paciente', $r->etnia_paciente);

            $pac->__SET('id_parroquia', $r->id_parroquia);

            $pac->__SET('id_usuario_sistema', $r->id_usuario_sistema);
            $pac->__SET('email_paciente', $r->email_paciente);
            $pac->__SET('estadocivil_paciente', $r->estadocivil_paciente);
            $pac->__SET('peso_paciente', $r->peso_paciente);
            $pac->__SET('ocupacion', $r->ocupacion);

            return $pac;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {
        try
        {
            $stm = Database::tenerconex()
            ->prepare("DELETE FROM paciente WHERE id_paciente = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    

    
}
