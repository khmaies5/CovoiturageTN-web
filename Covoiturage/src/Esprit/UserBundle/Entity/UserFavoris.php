<?php

namespace Esprit\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserFavoris
 *
 * @ORM\Table(name="user_favoris", indexes={@ORM\Index(name="id_userconnect", columns={"id_userconnect"}), @ORM\Index(name="iduser_recommendes", columns={"iduser_recommendes"})})
 * @ORM\Entity
 */
class UserFavoris
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
     * @ORM\Column(name="date_enregistrement", type="datetime", nullable=false)
     */
    private $dateEnregistrement = 'CURRENT_TIMESTAMP';

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_userconnect", referencedColumnName="id")
     * })
     */
    private $idUserconnect;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser_recommendes", referencedColumnName="id")
     * })
     */
    private $iduserRecommendes;


}

