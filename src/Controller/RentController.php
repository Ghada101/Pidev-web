<?php

namespace App\Controller;

use App\Entity\Rent;
use App\Form\RentType;
use App\Repository\RentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/rent")
 */
class RentController extends AbstractController
{
    /**
     * @Route("/", name="app_rent_index", methods={"GET"})
     */
    public function index(RentRepository $rentRepository): Response
    {
        return $this->render('Frontoffice/car/index.html.twig', [
            'rents' => $rentRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_rent_new", methods={"GET", "POST"})
     */
    public function new(Request $request, RentRepository $rentRepository): Response
    {
            $rent = new Rent();
        $form = $this->createForm(RentType::class, $rent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $sStart=$rent->getStartDate()->format('Y-m-d');
            $sEnd=$rent->getEndDate()->format('Y-m-d');
            $rent->setStartDate($sStart);
            $rent->setEndDate($sEnd);
            $rentRepository->add($rent);
            return $this->redirectToRoute('app_rent_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Frontoffice/rent/new.html.twig', [
            'rent' => $rent,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idrent}", name="app_rent_show", methods={"GET"})
     */
    public function show(Rent $rent): Response
    {
        return $this->render('rent/show.html.twig', [
            'rent' => $rent,
        ]);
    }

    /**
     * @Route("/{idrent}/edit", name="app_rent_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Rent $rent, RentRepository $rentRepository): Response
    {
        $form = $this->createForm(RentType::class, $rent);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $rentRepository->add($rent);
            return $this->redirectToRoute('app_rent_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('rent/edit.html.twig', [
            'rent' => $rent,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idrent}", name="app_rent_delete", methods={"POST"})
     */
    public function delete(Request $request, Rent $rent, RentRepository $rentRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$rent->getIdrent(), $request->request->get('_token'))) {
            $rentRepository->remove($rent);
        }

        return $this->redirectToRoute('app_rent_index', [], Response::HTTP_SEE_OTHER);
    }
}
