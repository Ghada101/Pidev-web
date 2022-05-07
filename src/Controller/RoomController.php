<?php

namespace App\Controller;

use App\Entity\Room;
use App\Entity\Hotel;
use App\Form\RoomType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
/**   
 * @Route("/room")
 */
class RoomController extends AbstractController
{
    /**
     * @Route("/", name="app_room_index", methods={"GET"})
     */
    public function index(Request $request, EntityManagerInterface $entityManager, PaginatorInterface $paginator): Response
    {
        $rooms = $entityManager
            ->getRepository(Room::class)
            ->findAll();
    
        $rooms=$paginator->paginate($rooms, $request->query->getInt('page', 1), 1);

        return $this->render('backOffice/room/index.html.twig', [
            'rooms' => $rooms,
        ]); 
    } 

    public function indexFront($idHotel, Request $request,EntityManagerInterface $entityManager,PaginatorInterface $paginator): Response
    {
        $rooms = $entityManager
            ->getRepository(Room::class)
            ->findBy(['fkHotel' => $idHotel]); 
            //dd($rooms);
        $rooms=$paginator->paginate($rooms,$request->query->getInt('page',1),2);

        return $this->render('frontOffice/room/indexFront.html.twig', [
            'rooms' => $rooms,
            'idHotel' => $idHotel,
        ]);
    }

    /**
     * @Route("/new", name="app_room_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $room = new Room();
        $form = $this->createForm(RoomType::class, $room);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('image')->getData();
            $uploads_directory=$this->getParameter('uploads_directory');
            $file_name=md5(uniqid())    . '.'   . $file->guessExtension();
            $file->move(
                $uploads_directory,
                $file_name
            );
            $room->setImage($file_name);
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($room);
            $entityManager->flush();
            $this->addFlash(
                'success',
                'Added Successfully!'
            );
            return $this->redirectToRoute('app_room_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('backOffice/room/new.html.twig', [
            'room' => $room,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idRoom}", name="app_room_show", methods={"GET"})
     */
    public function show(Room $room): Response
    {
        return $this->render('backOffice/room/show.html.twig', [
            'room' => $room,
        ]);
    }

    /**
     * @Route("/{idRoom}/edit", name="app_room_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Room $room, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RoomType::class, $room);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash(
                'info',
                'Edited Successfully!'
            );
            return $this->redirectToRoute('app_room_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('backOffice/room/edit.html.twig', [
            'room' => $room,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idRoom}", name="app_room_delete", methods={"POST"})
     */
    public function delete($idRoom, Request $request, Room $room, EntityManagerInterface $entityManager): Response
    {
        $room = $entityManager->getRepository(Room::class)->find($idRoom);
            $entityManager->remove($room);
            $entityManager->flush();
            $this->addFlash(
                'danger',
                'Deleted Successfully!'
            );
        return $this->redirectToRoute('app_room_index');
    }
}
