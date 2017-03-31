<?php

namespace Esprit\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StatistiqueController extends Controller
{
    public function affichageAction()
    {
        return $this->render('EspritAdminBundle:Statistique:Affichage.html.twig');
    }
}
