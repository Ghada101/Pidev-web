<?php

namespace App\Repository;

use App\Entity\Agency;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use http\Env\Response;

/**
 * @method Agency|null find($id, $lockMode = null, $lockVersion = null)
 * @method Agency|null findOneBy(array $criteria, array $orderBy = null)
 * @method Agency[]    findAll()
 * @method Agency[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgencyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Agency::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Agency $entity, bool $flush = true): void
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
    public function remove(Agency $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }


    /**
     * @return Agency[] Returns an array of Agency objects
     */
    public function findByName(string $nameagency,$page)
    {
        $query= $this->createQueryBuilder('a')
            ->where('a.nameagency LIKE :nameagency')
            ->setParameter('nameagency', '%'.$nameagency.'%')
            ->setFirstResult(4 * ($page-1)) // set the offset
            ->setMaxResults(4)
            ->getQuery();
        $em = $this->getEntityManager();
        $count= $em->createQuery('SELECT COUNT(a.idAgency) FROM App\Entity\Agency a where a.nameagency LIKE :nameagency')
            ->setParameter('nameagency', '%'.$nameagency.'%')
            ->getSingleScalarResult();
        $count=ceil($count/4);
        $agencies=$query->getArrayResult();
        array_push($agencies,$count);
        return $agencies;
    }


    /**
     * @return Agency[] Returns an array of Agency objects
     */
    public function findAllAgencies($page)
    {
        $query= $this->createQueryBuilder('a')
            ->setFirstResult(4 * ($page-1)) // set the offset
            ->setMaxResults(4) // set the limit
            ->getQuery();
        $agencies=$query->getArrayResult();
        $em = $this->getEntityManager();
        $count= $em->createQuery('SELECT COUNT(a.idAgency) FROM App\Entity\Agency a')
            ->getSingleScalarResult();
        $count=ceil($count/4);
        array_push($agencies,$count);
        return $agencies;
    }





    // /**
    //  * @return Agency[] Returns an array of Agency objects
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
    public function findOneBySomeField($value): ?Agency
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
