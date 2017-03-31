<?php

namespace Esprit\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PayementController extends Controller
{
    public function listAction()
    {
        return $this->render('EspritAdminBundle:Payement:list.html.twig');
    }
    public function listAttenteAction()
    {
        return $this->render('EspritAdminBundle:Payement:listAttente.html.twig');
    }
}
