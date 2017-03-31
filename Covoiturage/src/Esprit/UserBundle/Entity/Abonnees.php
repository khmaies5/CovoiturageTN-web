<?php

namespace Esprit\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abonnees
 *
 * @ORM\Table(name="abonnees", indexes={@ORM\Index(name="id_user", columns={"id_user"}), @ORM\Index(name="id_groupe", columns={"id_groupe"})})
 * @ORM\Entity
 */
class Abonnees
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_abonnement", type="date", nullable=false)
     */
    private $dateAbonnement;

    /**
     * @var string
     *
     * @ORM\Column(name="role_user", type="string", length=50, nullable=false)
     */
    private $roleUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat_abonnement", type="integer", nullable=false)
     */
    private $etatAbonnement = '1';

    /**
     * @var \Groupe
     *
     * @ORM\ManyToOne(targetEntity="Groupe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_groupe", referencedColumnName="id")
     * })
     */
    private $idGroupe;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     * })
     */
    private $idUser;


}

