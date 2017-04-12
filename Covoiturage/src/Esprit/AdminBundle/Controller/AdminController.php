<?php

namespace Esprit\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function profilAction()
{
    if ($this->isGranted('ROLE_ADMIN') == false) {
        return $this->redirectToRoute('profil_page');
    }
    return $this->render('EspritAdminBundle:Profil:profil.html.twig');
}

    public function deconnexionAction()
    {

    }
}
