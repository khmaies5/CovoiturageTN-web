<?php

namespace Esprit\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VoitureController extends Controller
{
    public function listAction()
    {
        return $this->render('EspritAdminBundle:Voiture:list.html.twig');
    }
}
