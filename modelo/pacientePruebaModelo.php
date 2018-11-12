<?php

include "pacientePrueba.php";

class PacientePruebaModelo
{

    public function Listar()
    {
        try
        {
            $result = array();

            $stm = Database::tenerconex()->prepare("SELECT *
                FROM 
                public.paciente pa, 
                public.paciente_pruebas pp, 
                public.pruebas pr
                WHERE 
                pa.id_paciente = pp.id_paciente AND
                pr.id_pruebas = pp.id_pruebas");
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
                $pru = new Prueba();

                $pru->__SET('id_pruebas', $r->id_pruebas);
                $pru->__SET('tipo_prueba', $r->tipo_prueba);
                $pru->__SET('codigo_notificacion', $r->codigo_notificacion);
                $pru->__SET('numero_lamina_pdrm', $r->numero_lamina_pdrm);
                $pru->__SET('tipo_busqueda', $r->tipo_busqueda);
                $pru->__SET('especie_plasmodium', $r->especie_plasmodium);
                $pru->__SET('fecha_inicio_fiebre', $r->fecha_inicio_fiebre);
                $pru->__SET('fecha_toma_lamina', $r->fecha_toma_lamina);
                $pru->__SET('lugar_toma_lamina', $r->lugar_toma_lamina);


                $result[] = $pru;
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
            ->prepare("SELECT *
                FROM 
                public.paciente pa, 
                public.paciente_pruebas pp, 
                public.pruebas pr
                WHERE 
                pa.id_paciente = pp.id_paciente AND
                pr.id_pruebas = pp.id_pruebas AND 
                pa.id = ?");

            $stm->execute(array($id));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            $pru = new Prueba();

            $pru->__SET('id_pruebas', $r->id_pruebas);
            $pru->__SET('tipo_prueba', $r->tipo_prueba);
            $pru->__SET('codigo_notificacion', $r->codigo_notificacion);
            $pru->__SET('numero_lamina_pdrm', $r->numero_lamina_pdrm);
            $pru->__SET('tipo_busqueda', $r->tipo_busqueda);
            $pru->__SET('especie_plasmodium', $r->especie_plasmodium);
            $pru->__SET('fecha_inicio_fiebre', $r->fecha_inicio_fiebre);
            $pru->__SET('fecha_toma_lamina', $r->fecha_toma_lamina);
            $pru->__SET('lugar_toma_lamina', $r->lugar_toma_lamina);


            return $pru;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($id)
    {
        try
        {
            $stm = Database::tenerconex()
            ->prepare("DELETE FROM pruebas WHERE id_pruebas = ?");

            $stm->execute(array($id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar(pruebas $data)
    {
        try
        {
            $sql = "UPDATE pruebas SET

            tipo_prueba        = ?,
            codigo_notificacion      = ?,
            numero_lamina_pdrm        = ?,
            tipo_busqueda      = ?,
            especie_plasmodium        = ?,
            fecha_inicio_fiebre         = ?,
            fecha_toma_lamina       = ?,
            lugar_toma_lamina        = ?

            WHERE id_pruebas = ?";

            Database::tenerconex()->prepare($sql)
            ->execute(
                array(
                    $data->__GET('tipo_prueba'),
                    $data->__GET('codigo_notificacion'),
                    $data->__GET('numero_lamina_pdrm'),
                    $data->__GET('tipo_busqueda'),
                    $data->__GET('especie_plasmodium'),
                    $data->__GET('fecha_inicio_fiebre'),
                    $data->__GET('fecha_toma_lamina'),
                    $data->__GET('lugar_toma_lamina'),
                    $data->__GET('id_pruebas')
                )
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(Prueba $data)
    {

        try
        {
            $sql = "INSERT INTO pruebas (
            tipo_prueba,
            codigo_notificacion,
            numero_lamina_pdrm,
            tipo_busqueda,
            especie_plasmodium,
            fecha_inicio_fiebre,
            fecha_toma_lamina,
            lugar_toma_lamina,
            parroquia_id
            )
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

            Database::tenerconex()->prepare($sql)
            ->execute(
                array(
                    $data->__GET('tipo_prueba'),
                    $data->__GET('codigo_notificacion'),
                    $data->__GET('numero_lamina_pdrm'),
                    $data->__GET('tipo_busqueda'),
                    $data->__GET('especie_plasmodium'),
                    $data->__GET('fecha_inicio_fiebre'),
                    $data->__GET('fecha_toma_lamina'),
                    $data->__GET('lugar_toma_lamina'),
                    $data->__GET('parroquia_id')
                ));









        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

