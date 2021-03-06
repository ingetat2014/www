<?php

namespace Fdr\AdminBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ManutentionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ManutentionRepository extends EntityRepository
{
    public function fdrsChauff($idChauff)
     {
         $qb=$this->createQueryBuilder('m');
            $qb->select('m')
                ->where('m.chauffeur = :idChauff')
                ->setParameter('idChauff',$idChauff);
            return $qb->getQuery()->getResult();
     }
}
