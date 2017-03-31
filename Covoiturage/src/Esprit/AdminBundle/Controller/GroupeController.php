<?php

namespace Esprit\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GroupeController extends Controller
{
    public function listAllAction()
    {
        return $this->render('EspritAdminBundle:Groupe:list.html.twig');
    }
    public function listAttenteAction()
    {
        return $this->render('EspritAdminBundle:Groupe:listAttente.html.twig');
    }
}
