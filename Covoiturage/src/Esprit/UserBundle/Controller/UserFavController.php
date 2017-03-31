<?php

namespace Esprit\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserFavController extends Controller
{
    public function listAction()
    {
        return $this->render('EspritUserBundle:UserFav:listbyUser.html.twig');
    }
   }
