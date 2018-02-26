<?php

namespace AK\ImmobilierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrat
 *
 * @ORM\Table(name="contrat")
 * @ORM\Entity(repositoryClass="AK\ImmobilierBundle\Repository\ContratRepository")
 */
class Contrat
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_contrat", type="date")
     */
    private $dateContrat;

    /**
     * @var int
     *
     * @ORM\Column(name="caution", type="integer")
     */
    private $caution;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=25)
     */
    private $duree;
     // …
       /**

   * @ORM\OneToMany(targetEntity = "AK\ImmobilierBundle\Entity\Paiement", mappedBy = "contrat")
   */

  private $paiements;
       /**

   * @ORM\ManyToOne(targetEntity="AK\ImmobilierBundle\Entity\Client", inversedBy="contrats")

   * @ORM\JoinColumn(name = "id_client", referencedColumnName = "id")

   */

  private $client;
        /**

   * @ORM\ManyToOne(targetEntity="AK\ImmobilierBundle\Entity\Bien" , inversedBy="contrats")

   * @ORM\JoinColumn(name = "id_bien", referencedColumnName = "id")

   */

  private $bien;


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
     * Set dateContrat
     *
     * @param \DateTime $dateContrat
     *
     * @return Contrat
     */
    public function setDateContrat($dateContrat)
    {
        $this->dateContrat = $dateContrat;

        return $this;
    }

    /**
     * Get dateContrat
     *
     * @return \DateTime
     */
    public function getDateContrat()
    {
        return $this->dateContrat;
    }

    /**
     * Set caution
     *
     * @param integer $caution
     *
     * @return Contrat
     */
    public function setCaution($caution)
    {
        $this->caution = $caution;

        return $this;
    }

    /**
     * Get caution
     *
     * @return int
     */
    public function getCaution()
    {
        return $this->caution;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return Contrat
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set client
     *
     * @param \AK\ImmobilierBundle\Entity\Client $client
     *
     * @return Contrat
     */
    public function setClient(\AK\ImmobilierBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \AK\ImmobilierBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set bien
     *
     * @param \AK\ImmobilierBundle\Entity\Bien $bien
     *
     * @return Contrat
     */
    public function setBien(\AK\ImmobilierBundle\Entity\Bien $bien = null)
    {
        $this->bien = $bien;

        return $this;
    }

    /**
     * Get bien
     *
     * @return \AK\ImmobilierBundle\Entity\Bien
     */
    public function getBien()
    {
        return $this->bien;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->paiements = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add paiement
     *
     * @param \AK\ImmobilierBundle\Entity\Contrat $paiement
     *
     * @return Contrat
     */
    public function addPaiement(\AK\ImmobilierBundle\Entity\Contrat $paiement)
    {
        $this->paiements[] = $paiement;

        return $this;
    }

    /**
     * Remove paiement
     *
     * @param \AK\ImmobilierBundle\Entity\Contrat $paiement
     */
    public function removePaiement(\AK\ImmobilierBundle\Entity\Contrat $paiement)
    {
        $this->paiements->removeElement($paiement);
    }

    /**
     * Get paiements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPaiements()
    {
        return $this->paiements;
    }
}
