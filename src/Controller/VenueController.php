<?php

namespace App\Controller;

use App\Entity\Venue;
use App\Form\VenueType;
use App\Repository\VenueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/venue")
 */
class VenueController extends AbstractController
{
    /**
     * @Route("/", name="app_venue_index", methods={"GET"})
     */
    public function index(VenueRepository $venueRepository): Response
    {
        return $this->render('venue/index.html.twig', [
            'venues' => $venueRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_venue_new", methods={"GET", "POST"})
     */
    public function new(Request $request, VenueRepository $venueRepository): Response
    {
        $venue = new Venue();
        $form = $this->createForm(VenueType::class, $venue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $venueRepository->add($venue);
            return $this->redirectToRoute('app_venue_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('venue/new.html.twig', [
            'venue' => $venue,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_venue_show", methods={"GET"})
     */
    public function show(Venue $venue): Response
    {
        return $this->render('venue/show.html.twig', [
            'venue' => $venue,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_venue_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Venue $venue, VenueRepository $venueRepository): Response
    {
        $form = $this->createForm(VenueType::class, $venue);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $venueRepository->add($venue);
            return $this->redirectToRoute('app_venue_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('venue/edit.html.twig', [
            'venue' => $venue,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_venue_delete", methods={"POST"})
     */
    public function delete(Request $request, Venue $venue, VenueRepository $venueRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$venue->getId(), $request->request->get('_token'))) {
            $venueRepository->remove($venue);
        }

        return $this->redirectToRoute('app_venue_index', [], Response::HTTP_SEE_OTHER);
    }
}
