<?php

namespace Esprit\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function profilAction()
{
    return $this->render('EspritAdminBundle:Profil:profil.html.twig');
}

    public function deconnexionAction()
    {

    }
}
