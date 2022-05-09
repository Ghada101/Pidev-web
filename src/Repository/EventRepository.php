<?php

namespace App\Repository;

use App\Controller\SearchController;
use App\Entity\Event;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @method Event|null find($id, $lockMode = null, $lockVersion = null)
 * @method Event|null findOneBy(array $criteria, array $orderBy = null)
 * @method Event[]    findAll()
 * @method Event[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EventRepository extends ServiceEntityRepository
{
    /**
     * @var PaginatorInterface
     */
    private $paginator;

    public function __construct(ManagerRegistry $registry, PaginatorInterface $paginator)
    {
        parent::__construct($registry, Event::class);
        $this->paginator = $paginator;
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Event $entity, bool $flush = true): void
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
    public function remove(Event $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }
/**
 * @return \Knp\Component\Pager\Pagination\PaginationInterface
 */
public function findSearch(SearchController $search): \Knp\Component\Pager\Pagination\PaginationInterface
{
    $query = $this->createQueryBuilder('e');
    if(!empty($search->q)){
        $query = $query
            ->andWhere('e.title LIKE :q')
            ->setParameter('q','%'.$search->q.'%');
    }
    if(!empty($search->min)){
        $query = $query
            ->andWhere('e.price >=  :min')
            ->setParameter('min',$search->min);
    }
    if(!empty($search->max)){
        $query = $query
            ->andWhere('e.price <=  :max')
            ->setParameter('max',$search->max);
    }
    if(!empty($search->categories)){
        $query = $query
            ->andWhere('e.category LIKE :categories')
            ->setParameter('categories',$search->categories);
    }
    $query=$query->getQuery();
        return $this->paginator->paginate(
          $query,
          $search->page,
          6
        );

}

    // /**
    //  * @return Event[] Returns an array of Event objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Event
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
