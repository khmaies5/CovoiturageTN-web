<?php

namespace Esprit\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SignalisationController extends Controller
{
    public function listAction()
    {
        return $this->render('EspritAdminBundle:Signalisation:list.html.twig');
    }
    public function listAttenteAction()
    {
        return $this->render('EspritAdminBundle:Signalisation:listAttente.html.twig');
    }
}
