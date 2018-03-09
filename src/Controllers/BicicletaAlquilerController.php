<?php

namespace App\Controllers;
use App\Helpers\ArrayList as ArrayList;
use Interop\Container\ContainerInterface;

final class BicicletaAlquilerController extends BaseController
{
    public function home($request, $response, $args) {
        $this->logger->info("View post using Doctrine with Slim 3");
        $a = new ArrayList();
        $arreglo = array();
        $dni = 0;
        try {
            $a->add($this->alq::RentaBici(1,0, 0, "week", 1,30));
            $a->add($this->alq::RentaBici(2,1, 1, "day", 4,30));
            $a->add($this->alq::RentaBici(3,0, 2, "hour", 12,30));
            $a->add($this->alq::RentaBici(4,0, 3, "day", 2,30));
            foreach ($a as $key => $va) {
                 
           $dni =$va->getCliente()->getDni();
           $arreglo[$dni]= $arreglo[$dni]+1;
               
            }
            $dni = 0;
            $cont= 0;
            foreach ($a as  $al) {
                $dni = $al->getCliente()->getDni();

                $cont= $arreglo[$dni];   

                if($cont>=3)
                {
                    $al->aplicaDescuento();
                }
            }
            foreach ($a as  $al) {
                $post[]=$al->toString();
                }
        } catch (\Exception $e) {
            echo $e->getMessage();
            die;
        }
        $this->view->render($response, 'post.twig', ['post' => $post]);
        return $response;
    }
}