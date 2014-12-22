<?php

namespace GestionParcInfo\ParcInfoBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * MaterielRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MaterielRepository extends EntityRepository
{
    public function getMaterielsHS()
    {
        $query = $this->getEntityManager()
                    ->createQuery('SELECT m FROM ParcInfoBundle:Materiel m WHERE m.numEtat = :num')
                    ->setParameter('num', 4);
        
        $materielsHS = $query->getResult();
        
        return $materielsHS;
    }
}
