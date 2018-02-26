<?php

namespace AK\ImmobilierBundle\Entity;

//use FOS\UserBundle\Model\Client as FosUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="AK\ImmobilierBundle\Repository\ClientRepository")
 */
class Client     
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="numpiece", type="integer", unique=true)
     */
    private $numpiece;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50)
     */
    private $adresse;

    /**
     * @var int
     *
     * @ORM\Column(name="phone", type="integer", unique=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=50, unique=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=50, unique=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;
        /**

   * @ORM\OneToMany(targetEntity = "AK\ImmobilierBundle\Entity\Contrat", mappedBy = "client")
   */

  private $contrats;


  // …

       /**

   * @ORM\OneToMany(targetEntity = "AK\ImmobilierBundle\Entity\Reservation", mappedBy = "client")
   */

  private $reservations;


  // …


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numpiece
     *
     * @param integer $numpiece
     *
     * @return Client
     */
    public function setNumpiece($numpiece)
    {
        $this->numpiece = $numpiece;

        return $this;
    }

    /**
     * Get numpiece
     *
     * @return int
     */
    public function getNumpiece()
    {
        return $this->numpiece;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Client
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Client
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     *
     * @return Client
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return int
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return Client
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Client
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Client
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reservations = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add reservation
     *
     * @param \AK\ImmobilierBundle\Entity\Reservation $reservation
     *
     * @return Client
     */
    public function addReservation(\AK\ImmobilierBundle\Entity\Reservation $reservation)
    {
        $this->reservations[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \AK\ImmobilierBundle\Entity\Reservation $reservation
     */
    public function removeReservation(\AK\ImmobilierBundle\Entity\Reservation $reservation)
    {
        $this->reservations->removeElement($reservation);
    }

    /**
     * Get reservations
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getReservations()
    {
        return $this->reservations;
    }

    /**
     * Add contrat
     *
     * @param \AK\ImmobilierBundle\Entity\Contrat $contrat
     *
     * @return Client
     */
    public function addContrat(\AK\ImmobilierBundle\Entity\Contrat $contrat)
    {
        $this->contrats[] = $contrat;

        return $this;
    }

    /**
     * Remove contrat
     *
     * @param \AK\ImmobilierBundle\Entity\Contrat $contrat
     */
    public function removeContrat(\AK\ImmobilierBundle\Entity\Contrat $contrat)
    {
        $this->contrats->removeElement($contrat);
    }

    /**
     * Get contrats
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContrats()
    {
        return $this->contrats;
    }
    public function __toString()
    {
        return $this->nom;
    }
}
