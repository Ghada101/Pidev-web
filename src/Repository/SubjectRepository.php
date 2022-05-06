<?php

namespace App\Repository;

use App\Entity\Subject;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use PhpParser\Node\Scalar\String_;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * @method Subject|null find($id, $lockMode = null, $lockVersion = null)
 * @method Subject|null findOneBy(array $criteria, array $orderBy = null)
 * @method Subject[]    findAll()
 * @method Subject[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubjectRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Subject::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Subject $entity, bool $flush = true): void
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
    public function remove(Subject $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    public function findByidtopic(int $value) : array
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.topic = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult()
            ;
    }
    public function findNextSubject(int $value) : array
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.subjectId = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult()
            ;
    }
    public function findPreviousSubject(int $value) : array
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.subjectId = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getResult()
            ;
    }

    public function translate(TranslatorInterface $translator,String $value) : String
    {
        return $translator->trans($value);
    }




    public function findByidtopicNext(int $value) : array
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'WITH CTE as (
                  SELECT
                    RN = ROW_NUMBER() OVER (ORDER BY EmployeeID),
                    *
                  FROM HumanResources.Employee
                )
                SELECT
                  [Previous Row].*,
                  [Current Row].*,
                  [Next Row].*
                FROM CTE [Current Row]
                LEFT JOIN CTE [Previous Row] ON
                  [Previous Row].RN = [Current Row].RN - 1
                LEFT JOIN CTE [Next Row] ON
                  [Next Row].RN = [Current Row].RN + 1
                WHERE
                  [Current Row].EmployeeID = 5 '

        )->setParameter('val', $value);
        return  $query->getResult();

    }


    // /**
    //  * @return Subject[] Returns an array of Subject objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Subject
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
