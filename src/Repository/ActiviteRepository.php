<?php

namespace App\Repository;

use App\Entity\Activite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Activite|null find($id, $lockMode = null, $lockVersion = null)
 * @method Activite|null findOneBy(array $criteria, array $orderBy = null)
 * @method Activite[]    findAll()
 * @method Activite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ActiviteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Activite::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Activite $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Activite $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return Activite[] Returns an array of Activite objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Activite
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function searchNom($Nom_a)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.Nom_a LIKE :ncl')
            ->setParameter('ncl', $Nom_a.'%')
            ->getQuery()
            ->execute();
    }

    public function rechercher($data)
    {
        return $this->createQueryBuilder('a')
            ->Where('a.type LIKE  :data')->orWhere('a.cat_age LIKE :data')->orWhere('a.id_a  LIKE :data')
            ->setParameter('data', '%'.$data.'%')
            ->getQuery()->getResult();
    }
    public function orderByNom()
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.nomA', 'ASC')
            ->getQuery()->getResult();
    }
       
       public function sortType()
       {
        return $this->createQueryBuilder('a')
        ->orderBy('a.type' , 'ASC')
        ->getQuery()
        ->getResult();
       }

       //using query builder
    public function rechercheAvance($str) {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT B
                FROM App\Entity\Activite B
                WHERE B.nomA LIKE :str'
            )
            ->setParameter('str', '%'.$str.'%')
            ->getResult();

    }

}
