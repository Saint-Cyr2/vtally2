<?php

namespace PaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaFootPrint
 *
 * @ORM\Table(name="pa_foot_print")
 * @ORM\Entity(repositoryClass="PaBundle\Repository\PaFootPrintRepository")
 */
class PaFootPrint
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
     * @ORM\Column(name="who", type="string", length=255)
     */
    private $who;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="moment", type="datetime")
     */
    private $moment;

    /**
     * @var string
     *
     * @ORM\Column(name="place", type="string", length=255, nullable=true)
     */
    private $place;

    /**
     * @var string
     *
     * @ORM\Column(name="what", type="string", length=255)
     */
    private $what;

    public function __construct() 
    {
        $this->setMoment(new \DateTime("now"));
    }
    
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
     * Set who
     *
     * @param string $who
     *
     * @return PaFootPrint
     */
    public function setWho($who)
    {
        $this->who = $who;

        return $this;
    }

    /**
     * Get who
     *
     * @return string
     */
    public function getWho()
    {
        return $this->who;
    }

    /**
     * Set moment
     *
     * @param \DateTime $moment
     *
     * @return PaFootPrint
     */
    public function setMoment($moment)
    {
        $this->moment = $moment;

        return $this;
    }

    /**
     * Get moment
     *
     * @return \DateTime
     */
    public function getMoment()
    {
        return $this->moment;
    }

    /**
     * Set place
     *
     * @param string $place
     *
     * @return PaFootPrint
     */
    public function setPlace($place)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return string
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set what
     *
     * @param string $what
     *
     * @return PaFootPrint
     */
    public function setWhat($what)
    {
        $this->what = $what;

        return $this;
    }

    /**
     * Get what
     *
     * @return string
     */
    public function getWhat()
    {
        return $this->what;
    }
}
