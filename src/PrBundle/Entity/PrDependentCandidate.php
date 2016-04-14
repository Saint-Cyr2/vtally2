<?php

namespace PrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrDependentCandidate
 *
 * @ORM\Table(name="pr_dependent_candidate")
 * @ORM\Entity(repositoryClass="PrBundle\Repository\PrDependentCandidateRepository")
 */
class PrDependentCandidate
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
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dob", type="datetime", nullable=true)
     */
    private $dob;

    /**
     * @var int
     *
     * @ORM\Column(name="candidacyNumber", type="integer")
     */
    private $candidacyNumber;
    
    /**
     * @ORM\OneToMany(targetEntity="PrBundle\Entity\PrVoteCast", mappedBy="prDependentCandidate", cascade={"remove"})
     */
    private $prVoteCasts;
    
    /**
     * @ORM\OneToOne(targetEntity="PrBundle\Entity\PrParty", inversedBy="prDependentCandidate")
     * @ORM\JoinColumn(nullable=false)
     */
    private $prParty;

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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return PrDependentCandidate
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return PrDependentCandidate
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set dob
     *
     * @param \DateTime $dob
     *
     * @return PrDependentCandidate
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return \DateTime
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set candidacyNumber
     *
     * @param integer $candidacyNumber
     *
     * @return PrDependentCandidate
     */
    public function setCandidacyNumber($candidacyNumber)
    {
        $this->candidacyNumber = $candidacyNumber;

        return $this;
    }

    /**
     * Get candidacyNumber
     *
     * @return int
     */
    public function getCandidacyNumber()
    {
        return $this->candidacyNumber;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->prVoteCasts = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add prVoteCast
     *
     * @param \PrBundle\Entity\PrVoteCast $prVoteCast
     *
     * @return PrDependentCandidate
     */
    public function addPrVoteCast(\PrBundle\Entity\PrVoteCast $prVoteCast)
    {
        $this->prVoteCasts[] = $prVoteCast;

        return $this;
    }

    /**
     * Remove prVoteCast
     *
     * @param \PrBundle\Entity\PrVoteCast $prVoteCast
     */
    public function removePrVoteCast(\PrBundle\Entity\PrVoteCast $prVoteCast)
    {
        $this->prVoteCasts->removeElement($prVoteCast);
    }

    /**
     * Get prVoteCasts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPrVoteCasts()
    {
        return $this->prVoteCasts;
    }

    /**
     * Set prParty
     *
     * @param \PrBundle\Entity\PrParty $prParty
     *
     * @return PrDependentCandidate
     */
    public function setPrParty(\PrBundle\Entity\PrParty $prParty)
    {
        $this->prParty = $prParty;

        return $this;
    }

    /**
     * Get prParty
     *
     * @return \PrBundle\Entity\PrParty
     */
    public function getPrParty()
    {
        return $this->prParty;
    }
}
