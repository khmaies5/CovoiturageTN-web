<?php

namespace Esprit\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function profilAction()
    {
        return $this->render('EspritUserBundle:User:profil.html.twig');
    }
  }
