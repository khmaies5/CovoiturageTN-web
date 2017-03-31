<?php

namespace Esprit\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlerteController extends Controller
{
    public function MesAlertesAction()
    {
        return $this->render('EspritUserBundle:Alertes:listbyUser.html.twig');
    }
   }
