<?php

namespace Esprit\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PubFavController extends Controller
{
    public function listAction()
    {
        return $this->render('EspritUserBundle:PubFav:listbyUser.html.twig');
    }
  }
