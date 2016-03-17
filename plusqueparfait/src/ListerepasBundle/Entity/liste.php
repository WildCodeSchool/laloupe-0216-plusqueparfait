<?php

namespace ListerepasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * liste
 */
class liste
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nomRepas;

    /**
     * @var string
     */
    private $dateRepas;

    /**
     * @var string
     */
    private $descriptionRepas;

    /**
     * @var string
     */
    private $inviteRepas;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomRepas
     *
     * @param string $nomRepas
     * @return liste
     */
    public function setNomRepas($nomRepas)
    {
        $this->nomRepas = $nomRepas;

        return $this;
    }

    /**
     * Get nomRepas
     *
     * @return string 
     */
    public function getNomRepas()
    {
        return $this->nomRepas;
    }

    /**
     * Set dateRepas
     *
     * @param string $dateRepas
     * @return liste
     */
    public function setDateRepas($dateRepas)
    {
        $this->dateRepas = $dateRepas;

        return $this;
    }

    /**
     * Get dateRepas
     *
     * @return string 
     */
    public function getDateRepas()
    {
        return $this->dateRepas;
    }

    /**
     * Set descriptionRepas
     *
     * @param string $descriptionRepas
     * @return liste
     */
    public function setDescriptionRepas($descriptionRepas)
    {
        $this->descriptionRepas = $descriptionRepas;

        return $this;
    }

    /**
     * Get descriptionRepas
     *
     * @return string 
     */
    public function getDescriptionRepas()
    {
        return $this->descriptionRepas;
    }

    /**
     * Set inviteRepas
     *
     * @param string $inviteRepas
     * @return liste
     */
    public function setInviteRepas($inviteRepas)
    {
        $this->inviteRepas = $inviteRepas;

        return $this;
    }

    /**
     * Get inviteRepas
     *
     * @return string 
     */
    public function getInviteRepas()
    {
        return $this->inviteRepas;
    }
}
