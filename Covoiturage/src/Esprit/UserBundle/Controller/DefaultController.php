<?php

namespace Esprit\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritUserBundle:Default:index.html.twig');
    }
    public function CommentCaMarcheAction()
    {
        return $this->render('EspritUserBundle:Default:CommentCaMarche.html.twig');
    }
    public function QuiSommesNousAction()
    {
        return $this->render('EspritUserBundle:Default:QuiSommesNous.html.twig');
    }
    public function NousContacterAction()
    {
        return $this->render('EspritUserBundle:Default:NousContacter.html.twig');
    }
    public function redirectIfAlreadyLoggedInAction()
    {
        /** @var AuthorizationCheckerInterface $authChecker */
        $authChecker = $this->get('security.authorization_checker');

        if ( $authChecker->isGranted('ROLE_USER') && $authChecker->isGranted('ROLE_ADMIN')===false ) {
            return $this->redirect($this->generateUrl('fos_user_profile_show'));
        }
        else if ($authChecker->isGranted('ROLE_ADMIN')&& $authChecker->isGranted('ROLE_USER') ) {
            return $this->redirect($this->generateUrl('profil_pageadmin'));
        }


        return null;
    }

}
