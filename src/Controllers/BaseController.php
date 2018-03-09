<?php
namespace App\Controllers;
use Slim\Container;
class BaseController
{
    protected $view;
    protected $logger;
   // protected $flash;
    protected $emb;  // Entities Manager
    protected $emp;  // Entities Manager
    protected $alq;
    public function __construct(Container $c)
    {
        $this->view = $c->get('view');
        $this->logger = $c->get('logger');
      //  $this->flash = $c->get('flash');
        $this->emb = $c->get('BicicletaDaoImpl');
         $this->emp = $c->get('PersonaDaoImpl');
         $this->alq = $c->get('AlquilerImpl');
    }
}