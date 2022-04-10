<?php

namespace App\Controller;

use App\Entity\Hotelchain;
use App\Form\HotelchainType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
 
/**
 * @Route("/hotelchain")
 */
class HotelchainController extends AbstractController
{
    /**
     * @Route("/", name="app_hotelchain_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $hotelchains = $entityManager
            ->getRepository(Hotelchain::class)
            ->findAll();

        return $this->render('hotelchain/index.html.twig', [
            'hotelchains' => $hotelchains,
        ]);
    }

    /**
     * @Route("/new", name="app_hotelchain_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $hotelchain = new Hotelchain();
        $form = $this->createForm(HotelchainType::class, $hotelchain);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($hotelchain);
            $entityManager->flush();
            $this->addFlash(
                'success',
                'Added Successfully!'
            );
            return $this->redirectToRoute('app_hotelchain_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('hotelchain/new.html.twig', [
            'hotelchain' => $hotelchain,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idHotelchain}", name="app_hotelchain_show", methods={"GET"})
     */
    public function show(Hotelchain $hotelchain): Response
    {
        return $this->render('hotelchain/show.html.twig', [
            'hotelchain' => $hotelchain,
        ]);
    }

    /**
     * @Route("/{idHotelchain}/edit", name="app_hotelchain_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Hotelchain $hotelchain, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(HotelchainType::class, $hotelchain);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash(
                'info',
                'Edited Successfully!'
            );

            return $this->redirectToRoute('app_hotelchain_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('hotelchain/edit.html.twig', [
            'hotelchain' => $hotelchain,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idHotelchain}", name="app_hotelchain_delete", methods={"GET","POST"})
     */
    public function delete($idHotelchain, Request $request, Hotelchain $hotelchain, EntityManagerInterface $entityManager): Response
    {
        $hotelchain = $entityManager->getRepository(Hotelchain::class)->find($idHotelchain);
            $entityManager->remove($hotelchain);
            $entityManager->flush();
        
            $this->addFlash(
                'danger',
                'Deleted Successfully!'
            );
        return $this->redirectToRoute('app_hotelchain_index');
    }

    
}
