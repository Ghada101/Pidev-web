<?php

namespace App\Controller;

use App\Entity\Hotel;
use App\Form\HotelType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;



/**
 * @Route("/hotel")
 */
class HotelController extends AbstractController
{
    /**
     * @Route("/", name="app_hotel_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $hotels = $entityManager
            ->getRepository(Hotel::class)
            ->findAll();

        return $this->render('hotel/index.html.twig', [
            'hotels' => $hotels,
        ]);
    }

    /**
     * @Route("/indexFront", name="app_hotel_indexFront", methods={"GET"})
     */
    public function indexFront(Request $request,EntityManagerInterface $entityManager,PaginatorInterface $paginator): Response
    {
        $hotels = $entityManager
        ->getRepository(Hotel::class)
        ->findAll();

        $hotels=$paginator->paginate($hotels,$request->query->getInt('page',1),2);

    return $this->render('hotel/indexFront.html.twig', [
        'hotels' => $hotels,
    ]);
    }

    /**
     * @Route("/new", name="app_hotel_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $hotel = new Hotel();
        $form = $this->createForm(HotelType::class, $hotel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('hotelImg')->getData();
            $uploads_directory=$this->getParameter('uploads_directory');
            $file_name=md5(uniqid())    . '.'   . $file->guessExtension();
            $file->move(
                $uploads_directory,
                $file_name
            );
            $hotel->setHotelImg($file_name);
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($hotel);
            $entityManager->flush();
            $this->addFlash(
                'success',
                'Added Successfully!'
            );
            return $this->redirectToRoute('app_hotel_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('hotel/new.html.twig', [
            'hotel' => $hotel,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idHotel}", name="app_hotel_show", methods={"GET"})
     */
    public function show(Hotel $hotel): Response
    {
        return $this->render('hotel/show.html.twig', [
            'hotel' => $hotel,
        ]);
    }

    /**
     * @Route("/{idHotel}/edit", name="app_hotel_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Hotel $hotel, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(HotelType::class, $hotel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file= $request->files->get('hotel')['hotelImg'];

            $uploads_directory=$this->getParameter('uploads_directory');
            $file_name=md5(uniqid())    . '.'   . $file->guessExtension();
            $file->move(
                $uploads_directory,
                $file_name
            );
            $hotel->setHotelImg($file_name);
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->flush();

            $this->addFlash(
                'info',
                'Edited Successfully!'
            );          
        return $this->redirectToRoute('app_hotel_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('hotel/edit.html.twig', [
            'hotel' => $hotel,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idHotel}/delete", name="app_hotel_delete", methods={"GET","POST"})
     */
    public function delete(Request $request, Hotel $hotel, EntityManagerInterface $entityManager, $idHotel): Response
    {
        $hotel = $entityManager->getRepository(Hotel::class)->find($idHotel);
            $entityManager->remove($hotel);
            $entityManager->flush();
       
            $this->addFlash(
                'danger',
                'Deleted Successfully!'
            );
        return $this->redirectToRoute('app_hotel_index');
    }

}
