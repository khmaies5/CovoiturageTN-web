<?php

namespace Esprit\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReservationController extends Controller
{
    public function MesReservationsAction()
    {

        return $this->render('EspritUserBundle:Reservations:listbyUser.html.twig');
    }

}
