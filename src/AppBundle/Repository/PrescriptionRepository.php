<?php

namespace AppBundle\Repository;

/**
 * PrescriptionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PrescriptionRepository extends \Doctrine\ORM\EntityRepository
{
    public function getPrescriptionByReferenceQueryBuilder($reference)
    {
        return $this
            ->createQueryBuilder('p')
            ->where('p.reference = :reference')
            ->setParameter('reference', $reference)
            ;
    }


    public function searchPrescriptions($term, $role, $user) {
        $query = $this->createQueryBuilder('p')
            ->where('p.'.$role.' = '.$user)
            ->andWhere('p.reference LIKE :searchTerm OR p.dateAdd LIKE :searchTerm OR ph.namePharmacy LIKE :searchTerm OR up.firstName LIKE :searchTerm OR up.name LIKE :searchTerm OR ud.firstName LIKE :searchTerm OR ud.name LIKE :searchTerm')
            ->join('p.pharmacy','ph')
            ->join('p.patient','pa')
            ->join('pa.user','up')
            ->join('p.doctor','dc')
            ->join('dc.user','ud')

            ->setParameters(
                array(
                    'searchTerm' => '%'.$term.'%',
                )
            )
            ->getQuery();
        return $query->getResult();
    }
}
