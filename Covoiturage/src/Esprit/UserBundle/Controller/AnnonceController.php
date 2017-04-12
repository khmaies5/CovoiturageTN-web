<?php

namespace Esprit\UserBundle\Controller;

use Esprit\UserBundle\Entity\Annonce;
use Esprit\UserBundle\Entity\Vehicule;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


/**
 * Annonce controller.
 *
 * @Route("annonce")
 */
class AnnonceController extends Controller
{
    /**
     * Lists all annonce entities.
     *
     * @Route("/", name="annonce_index")
     * @Method("GET")
     */
    public function ListTrajetsAction($page)
    {

        $em = $this->getDoctrine()->getManager();

        $annonces = $em->getRepository('EspritUserBundle:Annonce')->getAllAnnonces($page);
        $allannonces = $em->getRepository('EspritUserBundle:Annonce')->findAll();

        $limit = 5;
        $maxPages = ceil($annonces->count() / $limit);
        $thisPage = $page;
        // Pass through the 3 above variables to calculate pages in twig
        return $this->render('annonce/showAnnonces.html.twig', compact('allannonces' ,'annonces', 'maxPages', 'thisPage'));




    }

    public function MesAnnonceAction($page){

        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();

        $annonces = $em->getRepository('EspritUserBundle:Annonce')->getUserAnnonces($page,$user->getId());
        $limit = 5;
        $maxPages = ceil($annonces->count() / $limit);
        $thisPage = $page;
        return $this->render('annonce/showUserAnnonces.html.twig', compact('annonces', 'maxPages', 'thisPage'));
    }



    /**
     * Creates a new annonce entity.
     *
     * @Route("/new", name="annonce_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        if ($this->isGranted('ROLE_USER') == false) {
            return $this->redirectToRoute('fos_user_security_login');
        }
        $user = $this->get('security.token_storage')->getToken()->getUser();

        $annonce = new Annonce();
        $annonce->setIdUser($user);
        $form = $this->createForm('Esprit\UserBundle\Form\AnnonceType', $annonce);
        //var_dump($form->get('tripDate'));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($annonce);
            $em->flush($annonce);

            return $this->redirectToRoute('annonce_show', array('id' => $annonce->getIdAnnonce(),'veh'=>$user->getId()));
        }

        return $this->render('annonce/new.html.twig', array(
            'annonce' => $annonce,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a annonce entity.
     *
     * @Route("/{id}", name="annonce_show")
     * @Method("GET")
     */
    public function showAction(Annonce $annonce,$vehicule=1,Request $requete)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();

        $veh = $em->getRepository('EspritUserBundle:Vehicule')->getUserVeh($annonce->getIdUser());
        $deleteForm = $this->createDeleteForm($annonce);

        if ($requete->getMethod() == "POST") {
            $message = \Swift_Message::newInstance()
                ->setSubject('test')
                ->setFrom($requete->get("from"))
                ->setTo($requete->get("to"))
                ->setBody($requete->get("body").'this message was sent from :'.$requete->get("from"))
                /*
             * If you also want to include a plaintext version of the message
            ->addPart(
                $this->renderView(
                    'Emails/registration.txt.twig',
                    array('name' => $name)
                ),
                'text/plain'
            )
            */
            ;
            $this->get('mailer')->send($message);
        }
        return $this->render('annonce/show.html.twig', array(

            'user' => $user,
            'annonce' => $annonce,
            'veh'=>$veh,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing annonce entity.
     *
     * @Route("/{id}/edit", name="annonce_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Annonce $annonce)
    {
        if ($this->isGranted('ROLE_USER') == false) {
            return $this->redirectToRoute('fos_user_security_login');
        } else{
        $deleteForm = $this->createDeleteForm($annonce);
        $editForm = $this->createForm('Esprit\UserBundle\Form\AnnonceType', $annonce);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('annonce_show', array('id' => $annonce->getIdAnnonce(),'veh'=>$annonce->getIdUser()));

            //return $this->redirectToRoute('annonce_edit', array('id' => $annonce->getIdAnnonce()));
        }

        return $this->render('annonce/edit.html.twig', array(
            'annonce' => $annonce,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }}

    /**
     * Deletes a annonce entity.
     *
     * @Route("/{id}", name="annonce_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Annonce $annonce)
    {
        if ($this->isGranted('ROLE_USER') == false) {
            return $this->redirectToRoute('fos_user_security_login');
        }else {
        $form = $this->createDeleteForm($annonce);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($annonce);
            $em->flush($annonce);
        }

        return $this->redirectToRoute('annonce_index');
    }}

    /**
     * Creates a form to delete a annonce entity.
     *
     * @param Annonce $annonce The annonce entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Annonce $annonce)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('annonce_delete', array('id' => $annonce->getIdAnnonce())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
