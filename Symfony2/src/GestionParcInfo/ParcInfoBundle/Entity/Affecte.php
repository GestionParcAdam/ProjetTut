<?php

namespace GestionParcInfo\ParcInfoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Affecte
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GestionParcInfo\ParcInfoBundle\Repository\AffecteRepository")
 */
class Affecte
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
     *
     * @ORM\ManyToOne(targetEntity="GestionParcInfo\ParcInfoBundle\Entity\Utilisateur", cascade={"persist","remove"})
     * @ORM\JoinColumn(nullable=false) 
     */
    private $numUser;

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
     * Set numUser
     *
     * @param \GestionParcInfo\ParcInfoBundle\Entity\Utilisateur $numUser
     * @return Affecte
     */
    public function setNumUser(\GestionParcInfo\ParcInfoBundle\Entity\Utilisateur $numUser)
    {
        $this->numUser = $numUser;

        return $this;
    }

    /**
     * Get numUser
     *
     * @return \GestionParcInfo\ParcInfoBundle\Entity\Utilisateur 
     */
    public function getNumUser()
    {
        return $this->numUser;
    }

}
