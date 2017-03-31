<?php

namespace Esprit\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InvitationController extends Controller
{
    public function MesInvitationsAction()
    {
        return $this->render('EspritUserBundle:Invitations:listbyUser.html.twig');
    }
    }
