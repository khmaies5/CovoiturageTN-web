<?php

namespace Esprit\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse", indexes={@ORM\Index(name="id_sujet", columns={"id_sujet"}), @ORM\Index(name="id_userAB", columns={"id_userAB"})})
 * @ORM\Entity
 */
class Reponse
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
     * @ORM\Column(name="date_reponse", type="datetime", nullable=false)
     */
    private $dateReponse = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="reponse_sujet", type="text", length=65535, nullable=false)
     */
    private $reponseSujet;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat_reponse", type="integer", nullable=false)
     */
    private $etatReponse = '1';

    /**
     * @var \Sujet
     *
     * @ORM\ManyToOne(targetEntity="Sujet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_sujet", referencedColumnName="id")
     * })
     */
    private $idSujet;

    /**
     * @var \Abonnees
     *
     * @ORM\ManyToOne(targetEntity="Abonnees")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_userAB", referencedColumnName="id")
     * })
     */
    private $idUserab;


}

