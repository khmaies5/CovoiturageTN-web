<?php

namespace Esprit\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlerteController extends Controller
{
    public function affichageAction()
    {
        return $this->render('EspritAdminBundle:Alerte:list.html.twig');
    }

}
