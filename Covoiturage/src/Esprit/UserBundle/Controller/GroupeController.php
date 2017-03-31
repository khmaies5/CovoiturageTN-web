<?php

namespace Esprit\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GroupeController extends Controller
{
    public function listGroupesAction()
    {

        return $this->render('EspritUserBundle:Groupes:list.html.twig');
    }
    public function MesGroupesAction()
    {

        return $this->render('EspritUserBundle:Groupes:listbyUser.html.twig');
    }
}
