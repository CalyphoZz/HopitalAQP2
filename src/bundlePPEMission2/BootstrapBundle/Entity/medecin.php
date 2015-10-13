<?php

namespace bundlePPEMission2\BootstrapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * medecin
 */
class medecin
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $noTel;


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
     * Set nom
     *
     * @param string $nom
     * @return medecin
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
     * Set noTel
     *
     * @param string $noTel
     * @return medecin
     */
    public function setNoTel($noTel)
    {
        $this->noTel = $noTel;
    
        return $this;
    }

    /**
     * Get noTel
     *
     * @return string 
     */
    public function getNoTel()
    {
        return $this->noTel;
    }
}
