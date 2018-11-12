<?php

include "caso.php";

class CasoModelo
{

    public function Listar()
    {
        try
        {
            $result = array();

            $stm = Database::tenerconex()->prepare("SELECT * FROM caso");
            $stm->execute();

            foreach ($stm->fetchAll(PDO::FETCH_OBJ) as $r) {
                $cas = new Caso();

                $cas->__SET('id_caso', $r->id_caso);
                $cas->__SET('numero_caso', $r->numero_caso);
                $cas->__SET('origen', $r->origen);
                $cas->__SET('muerte', $r->muerte);
                $cas->__SET('recaida', $r->recaida);
                $cas->__SET('origen_parroquia', $r->origen_parroquia);
                $cas->__SET('clasificacion_caso', $r->clasificacion_caso);

                $result[] = $cas;
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
                ->prepare("SELECT * FROM caso WHERE id_caso = ?");

            $stm->execute(array($id));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            $cas = new Caso();

            $cas->__SET('id_caso', $r->id_caso);
            $cas->__SET('numero_caso', $r->numero_caso);
            $cas->__SET('origen', $r->origen);
            $cas->__SET('muerte', $r->muerte);
            $cas->__SET('recaida', $r->recaida);
            $cas->__SET('origen_parroquia', $r->origen_parroquia);
            $cas->__SET('clasificacion_caso', $r->clasificacion_caso);

            return $cas;
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}


