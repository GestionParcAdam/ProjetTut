<?php

namespace GestionParcInfo\ParcInfoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaracteristiqueRes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GestionParcInfo\ParcInfoBundle\Repository\CaracteristiqueResRepository")
 */
class CaracteristiqueRes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="adressIp", type="string", length=40)
     */
    private $adressIp;

    /**
     * @var string
     *
     * @ORM\Column(name="adressMac", type="string", length=40)
     */
    private $adressMac;


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
     * Set adressIp
     *
     * @param string $adressIp
     * @return CaracteristiqueRes
     */
    public function setAdressIp($adressIp)
    {
        $this->adressIp = $adressIp;

        return $this;
    }

    /**
     * Get adressIp
     *
     * @return string 
     */
    public function getAdressIp()
    {
        return $this->adressIp;
    }

    /**
     * Set adressMac
     *
     * @param string $adressMac
     * @return CaracteristiqueRes
     */
    public function setAdressMac($adressMac)
    {
        $this->adressMac = $adressMac;

        return $this;
    }

    /**
     * Get adressMac
     *
     * @return string 
     */
    public function getAdressMac()
    {
        return $this->adressMac;
    }
}
