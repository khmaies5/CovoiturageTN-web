<?php

namespace Esprit\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce", indexes={@ORM\Index(name="id_user", columns={"id_user"})})
 * @ORM\Entity(repositoryClass="AnnonceRepository")
 */
class Annonce
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_annonce", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAnnonce;

    /**
     * @return int
     */
    public function getIdAnnonce()
    {
        return $this->idAnnonce;
    }

    /**
     * @param int $idAnnonce
     */
    public function setIdAnnonce($idAnnonce)
    {
        $this->idAnnonce = $idAnnonce;
    }

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="trip_date", type="datetime", nullable=false)
     */
    private $tripDate;

    /**
     * @return \DateTime
     */
    public function getTripDate()
    {
        return $this->tripDate;
    }

    /**
     * @param \DateTime $tripDate
     */
    public function setTripDate($tripDate)
    {
        $this->tripDate = $tripDate;

    }

    /**
     * @return \DateTime
     */
    public function getAnnonceDate()
    {
        return $this->annonceDate;
    }

    /**
     * @param \DateTime $annonceDate
     */
    public function setAnnonceDate($annonceDate)
    {
        $this->annonceDate = $annonceDate;
    }

    /**
     * @return string
     */
    public function getLieuDepart()
    {
        return $this->lieuDepart;
    }

    /**
     * @param string $lieuDepart
     */
    public function setLieuDepart($lieuDepart)
    {
        $this->lieuDepart = $lieuDepart;
    }

    /**
     * @return string
     */
    public function getLieuArrive()
    {
        return $this->lieuArrive;
    }

    /**
     * @param string $lieuArrive
     */
    public function setLieuArrive($lieuArrive)
    {
        $this->lieuArrive = $lieuArrive;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getNbrPersonne()
    {
        return $this->nbrPersonne;
    }

    /**
     * @param int $nbrPersonne
     */
    public function setNbrPersonne($nbrPersonne)
    {
        $this->nbrPersonne = $nbrPersonne;
    }

    /**
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param string $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return string
     */
    public function getCritere()
    {
        return $this->critere;
    }

    /**
     * @param string $critere
     */
    public function setCritere($critere)
    {
        $this->critere = $critere;
    }

    /**
     * @return string
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * @param string $distance
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;
    }

    /**
     * @return \User
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param \User $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="annonce_date", type="datetime", nullable=false)
     */
    private $annonceDate ;

    public function __construct()
    {
        $this->annonceDate = new \DateTime();
    }

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_depart", type="string", length=200, nullable=false)
     */
    private $lieuDepart;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_arrive", type="string", length=200, nullable=false)
     */
    private $lieuArrive;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=100, nullable=true)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_personne", type="integer", nullable=false)
     */
    private $nbrPersonne;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="string", length=1000, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="critere", type="string", length=200, nullable=false)
     */
    private $critere;

    /**
     * @var string
     *
     * @ORM\Column(name="distance", type="string", length=200, nullable=false)
     */
    private $distance;

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

