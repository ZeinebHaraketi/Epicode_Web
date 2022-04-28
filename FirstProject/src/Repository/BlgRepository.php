<?php

namespace App\Repository;

use App\Entity\Blg;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Blg|null find($id, $lockMode = null, $lockVersion = null)
 * @method Blg|null findOneBy(array $criteria, array $orderBy = null)
 * @method Blg[]    findAll()
 * @method Blg[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlgRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Blg::class);
    }








    //using query builder
    public function rechercheAvance($str) {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT B
                FROM App\Entity\Blg B
                WHERE B.auteur LIKE :str'
            )
            ->setParameter('str', '%'.$str.'%')
            ->getResult();

    }

}