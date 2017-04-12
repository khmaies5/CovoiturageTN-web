<?php

namespace Esprit\UserBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */


    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=true)
     */
    private $prenom;



    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=100, nullable=true)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="photo_profil", type="string", length=100, nullable=true)
     */
    private $photoProfil;



    /**
     * @var integer
     *
     * @ORM\Column(name="etat_compte", type="integer", nullable=true)
     */
    private $etatCompte;

    /**
     * @var string
     *
     * @ORM\Column(name="niv_experience", type="string", length=100, nullable=true)
     */
    private $nivExperience;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_signalisation", type="integer", nullable=true)
     */
    private $nbrSignalisation;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_recommendation", type="integer", nullable=true)
     */
    private $nbrRecommendation;

    /**
     * @var string
     *
     * @ORM\Column(name="travail", type="string", length=100, nullable=true)
     */
    private $travail;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=100, nullable=true)
     */
    private $sexe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=100, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="gouvernerat", type="string", length=100, nullable=true)
     */
    private $gouvernerat;

    /**
     * @var integer
     *
     * @ORM\Column(name="role", type="integer", nullable=true)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=20, nullable=true)
     */
    private $login;

    /**
     * @var integer
     *
     * @ORM\Column(name="actif", type="integer", nullable=true)
     */
    private $actif;

    /**
     * @return string
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param string $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    /**
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * @param \DateTime $dateNaissance
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    /**
     * @return int
     */
    public function getActif()
    {
        return $this->actif;
    }

    /**
     * @param int $actif
     */
    public function setActif($actif)
    {
        $this->actif = $actif;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getPhotoProfil()
    {
        return $this->photoProfil;
    }

    /**
     * @param string $photoProfil
     */
    public function setPhotoProfil($photoProfil)
    {
        $this->photoProfil = $photoProfil;
    }

    /**
     * @return int
     */
    public function getEtatCompte()
    {
        return $this->etatCompte;
    }

    /**
     * @param int $etatCompte
     */
    public function setEtatCompte($etatCompte)
    {
        $this->etatCompte = $etatCompte;
    }

    /**
     * @return string
     */
    public function getTravail()
    {
        return $this->travail;
    }

    /**
     * @param string $travail
     */
    public function setTravail($travail)
    {
        $this->travail = $travail;
    }

    /**
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param string $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return string
     */
    public function getGouvernerat()
    {
        return $this->gouvernerat;
    }

    /**
     * @param string $gouvernerat
     */
    public function setGouvernerat($gouvernerat)
    {
        $this->gouvernerat = $gouvernerat;
    }

    /**
     * @return string
     */
    public function getNivExperience()
    {
        return $this->nivExperience;
    }

    /**
     * @param string $nivExperience
     */
    public function setNivExperience($nivExperience)
    {
        $this->nivExperience = $nivExperience;
    }

    /**
     * @return int
     */
    public function getNbrSignalisation()
    {
        return $this->nbrSignalisation;
    }

    /**
     * @param int $nbrSignalisation
     */
    public function setNbrSignalisation($nbrSignalisation)
    {
        $this->nbrSignalisation = $nbrSignalisation;
    }

    /**
     * @return int
     */
    public function getNbrRecommendation()
    {
        return $this->nbrRecommendation;
    }

    /**
     * @param int $nbrRecommendation
     */
    public function setNbrRecommendation($nbrRecommendation)
    {
        $this->nbrRecommendation = $nbrRecommendation;
    }



    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}

