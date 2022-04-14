<?php

namespace App\Controller;

use App\Entity\Book;
use App\Entity\Room;
use App\Form\BookType;
use App\Form\RoomType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/** 
 * @Route("/book")
 */
class BookController extends AbstractController
{
    /**
     * @Route("/", name="app_book_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    { 
        $books = $entityManager
            ->getRepository(Book::class)
            ->findAll();

        return $this->render('book/index.html.twig', [
            'books' => $books,
        ]);
    }

    /**
     * @Route("/new/{idroom}", name="app_book_new", methods={"GET", "POST"})
     */
    public function new( Request $request, EntityManagerInterface $entityManager ,$idroom): Response
    {
        $book = new Book();
        // $book->idRoom = 44;
        //dd($book);
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        $room = $entityManager->getRepository(Room::class)->find($idroom);

        if ($form->isSubmitted() && $form->isValid()) {

             //$book->setIdRoom($book->getIdroom());
            //$book->setIdRoom($test);
            $book->setIdroom($room);
            $entityManager->persist($book);
            $entityManager->flush();

            return $this->redirectToRoute('app_book_index');
        }
        return $this->render('book/new.html.twig', [
            'book' => $book,
            'room' => $room,
            'idRoom' => $idroom,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idbook}", name="app_book_show", methods={"GET"})
     */
    public function show(Book $book): Response
    {
        return $this->render('book/show.html.twig', [
            'book' => $book,
        ]);
    }

    /**
     * @Route("/{idbook}/edit", name="app_book_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Book $book, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_book_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('book/edit.html.twig', [
            'book' => $book,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idbook}", name="app_book_delete", methods={"POST"})
     */
    public function delete(Request $request, Book $book, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$book->getIdbook(), $request->request->get('_token'))) {
            $entityManager->remove($book);
            $entityManager->flush();
            $this->addFlash(
                'danger',
                'Deleted Successfully!'
            );
        }

        return $this->redirectToRoute('app_book_index', [], Response::HTTP_SEE_OTHER);
    }
}
