<?php

namespace AK\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bien
 *
 * @ORM\Table(name="bien")
 * @ORM\Entity(repositoryClass="AK\ImmobilierBundle\Repository\BienRepository")
 */
class Bien
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
     * @var string
     *
     * @ORM\Column(name="nombien", type="string", length=50)
     */
    private $nombien;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**
     * @var int
     *
     * @ORM\Column(name="prixlocation", type="integer")
     */
    private $prixlocation;
     // …
       /**

   * @ORM\OneToMany(targetEntity = "AK\ImmobilierBundle\Entity\Contrat", mappedBy = "bien")
   */

  private $contrats;
        /**

   * @ORM\OneToMany(targetEntity = "AK\ImmobilierBundle\Entity\Client", mappedBy = "bien")
   */

  private $clients;


  // …
       /**

   * @ORM\OneToMany(targetEntity = "AK\ImmobilierBundle\Entity\Reservation", mappedBy = "bien")
   */

  private $reservations;


  // …
       /**

   * @ORM\ManyToOne(targetEntity="AK\ImmobilierBundle\Entity\Bien", inversedBy="biens")

   * @ORM\JoinColumn(name = "id_parentbien", referencedColumnName = "id")
 
   */
  private $idParentBien;
  
      /**

   * @ORM\ManyToOne(targetEntity="AK\ImmobilierBundle\Entity\Localite", inversedBy="biens")

   * @ORM\JoinColumn(name = "localite_id", referencedColumnName = "id", nullable=true)

   */

  private $localite;
      /**

   * @ORM\ManyToOne(targetEntity="AK\ImmobilierBundle\Entity\Typebien", inversedBy="biens")

   * @ORM\JoinColumn(name = "typebien_id", referencedColumnName = "id")

   */

  private $typebien;


  
     /**

   * @ORM\OneToMany(targetEntity = "AK\ImmobilierBundle\Entity\Image", mappedBy = "bien")
   */

  private $images;


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
     * Set nombien
     *
     * @param string $nombien
     *
     * @return Bien
     */
    public function setNombien($nombien)
    {
        $this->nombien = $nombien;

        return $this;
    }

    /**
     * Get nombien
     *
     * @return string
     */
    public function getNombien()
    {
        return $this->nombien;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Bien
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Bien
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return bool
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set prixlocation
     *
     * @param integer $prixlocation
     *
     * @return Bien
     */
    public function setPrixlocation($prixlocation)
    {
        $this->prixlocation = $prixlocation;

        return $this;
    }

    /**
     * Get prixlocation
     *
     * @return int
     */
    public function getPrixlocation()
    {
        return $this->prixlocation;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add image
     *
     * @param \AK\ImmobilierBundle\Entity\Image $image
     *
     * @return Bien
     */
    public function addImage(\AK\ImmobilierBundle\Entity\Image $image)
    {
        $this->images[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \AK\ImmobilierBundle\Entity\Image $image
     */
    public function removeImage(\AK\ImmobilierBundle\Entity\Image $image)
    {
        $this->images->removeElement($image);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set typebien
     *
     * @param \AK\ImmobilierBundle\Entity\Typebien $typebien
     *
     * @return Bien
     */
    public function setTypebien(\AK\ImmobilierBundle\Entity\Typebien $typebien = null)
    {
        $this->typebien = $typebien;

        return $this;
    }

    /**
     * Get typebien
     *
     * @return \AK\ImmobilierBundle\Entity\Typebien
     */
    public function getTypebien()
    {
        return $this->typebien;
    }

    /**
     * Set localite
     *
     * @param \AK\ImmobilierBundle\Entity\Localite $localite
     *
     * @return Bien
     */
    public function setLocalite(\AK\ImmobilierBundle\Entity\Localite $localite = null)
    {
        $this->localite = $localite;

        return $this;
    }

    /**
     * Get localite
     *
     * @return \AK\ImmobilierBundle\Entity\Localite
     */
    public function getLocalite()
    {
        return $this->localite;
    }

    /**
     * Set idParentBien
     *
     * @param \AK\ImmobilierBundle\Entity\Bien $idParentBien
     *
     * @return Bien
     */
    public function setIdParentBien(\AK\ImmobilierBundle\Entity\Bien $idParentBien = null)
    {
        $this->idParentBien = $idParentBien;

        return $this;
    }

    /**
     * Get idParentBien
     *
     * @return \AK\ImmobilierBundle\Entity\Bien
     */
    public function getIdParentBien()
    {
        return $this->idParentBien;
    }

    /**
     * Add contrat
     *
     * @param \AK\ImmobilierBundle\Entity\Bien $contrat
     *
     * @return Bien
     */
    public function addContrat(\AK\ImmobilierBundle\Entity\Bien $contrat)
    {
        $this->contrats[] = $contrat;

        return $this;
    }

    /**
     * Remove contrat
     *
     * @param \AK\ImmobilierBundle\Entity\Bien $contrat
     */
    public function removeContrat(\AK\ImmobilierBundle\Entity\Bien $contrat)
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

    /**
     * Add client
     *
     * @param \AK\ImmobilierBundle\Entity\Bien $client
     *
     * @return Bien
     */
    public function addClient(\AK\ImmobilierBundle\Entity\Bien $client)
    {
        $this->clients[] = $client;

        return $this;
    }

    /**
     * Remove client
     *
     * @param \AK\ImmobilierBundle\Entity\Bien $client
     */
    public function removeClient(\AK\ImmobilierBundle\Entity\Bien $client)
    {
        $this->clients->removeElement($client);
    }

    /**
     * Get clients
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClients()
    {
        return $this->clients;
    }

    /**
     * Add reservation
     *
     * @param \AK\ImmobilierBundle\Entity\Bien $reservation
     *
     * @return Bien
     */
    public function addReservation(\AK\ImmobilierBundle\Entity\Bien $reservation)
    {
        $this->reservations[] = $reservation;

        return $this;
    }

    /**
     * Remove reservation
     *
     * @param \AK\ImmobilierBundle\Entity\Bien $reservation
     */
    public function removeReservation(\AK\ImmobilierBundle\Entity\Bien $reservation)
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
    //  public function __toString()
    // {
    //     return $this->nombien;
    // }
}
 