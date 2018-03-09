<?php
namespace App\Services;
use App\Dao\BicicletaDaoImpl as BicicletaDaoImpl;
use App\Dao\PersonaDaoImpl as PersonaDaoImpl;
use App\Services\AlquilerFactory as AlquilerFactory;
class AlquilerImpl {
    private $alq;

    public static  function RentaBici($id,$p,$b,$tipo,$cantidad,$descuento){
  		try{
            $alq = AlquilerFactory::getAlquiler($tipo);

            $alq->setId($id);
            $alq->setBike((new BicicletaDaoImpl())->get($b));
            $alq->setCliente((new PersonaDaoImpl())->get($p));
            

            $alq->setType($tipo);
            $alq->setTime($cantidad);
            $alq->setDescuento($descuento);
            $alq->setImporte($alq->getImporteType());
            $alq->setImporteOrigin($alq->getImporteType());
            
            return  $alq;
        } catch (\Exception $e) {
        echo $e->getMessage();
        die;
        }
       
    }
}