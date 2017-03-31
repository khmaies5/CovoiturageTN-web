<?php

namespace Esprit\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Signalisation
 *
 * @ORM\Table(name="signalisation", indexes={@ORM\Index(name="idClient", columns={"idClient"}), @ORM\Index(name="idAnnonce", columns={"idAnnonce"}), @ORM\Index(name="idClientSignaler", columns={"idClientSignaler"}), @ORM\Index(name="idCommentaire", columns={"idCommentaire"})})
 * @ORM\Entity
 */
class Signalisation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idSignalisation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsignalisation;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClient", referencedColumnName="id")
     * })
     */
    private $idclient;

    /**
     * @var \Annonce
     *
     * @ORM\ManyToOne(targetEntity="Annonce")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAnnonce", referencedColumnName="id_annonce")
     * })
     */
    private $idannonce;

    /**
     * @var \Annonce
     *
     * @ORM\ManyToOne(targetEntity="Esprit\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idClientSignaler", referencedColumnName="id")
     * })
     */
    private $idclientsignaler;

    /**
     * @var \Commentaire
     *
     * @ORM\ManyToOne(targetEntity="Commentaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCommentaire", referencedColumnName="idCommentaire")
     * })
     */
    private $idcommentaire;


}

