<?php

namespace bundlePPEMission2\BootstrapBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * service
 */
class service
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $libelle;

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
     * Set libelle
     *
     * @param string $libelle
     * @return service
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set noTel
     *
     * @param string $noTel
     * @return service
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
