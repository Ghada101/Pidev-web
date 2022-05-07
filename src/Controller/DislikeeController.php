<?php

namespace App\Controller;

use App\Entity\Dislikee;
use App\Form\DislikeeType;
use App\Repository\DislikeeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/dislikee")
 */
class DislikeeController extends AbstractController
{
    /**
     * @Route("/", name="app_dislikee_index", methods={"GET"})
     */
    public function index(DislikeeRepository $dislikeeRepository): Response
    {
        return $this->render('dislikee/index.html.twig', [
            'dislikees' => $dislikeeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_dislikee_new", methods={"GET", "POST"})
     */
    public function new(Request $request, DislikeeRepository $dislikeeRepository): Response
    {
        $dislikee = new Dislikee();
        $form = $this->createForm(DislikeeType::class, $dislikee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dislikeeRepository->add($dislikee);
            return $this->redirectToRoute('app_dislikee_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('dislikee/new.html.twig', [
            'dislikee' => $dislikee,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{dislikeid}", name="app_dislikee_show", methods={"GET"})
     */
    public function show(Dislikee $dislikee): Response
    {
        return $this->render('dislikee/show.html.twig', [
            'dislikee' => $dislikee,
        ]);
    }

    /**
     * @Route("/{dislikeid}/edit", name="app_dislikee_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Dislikee $dislikee, DislikeeRepository $dislikeeRepository): Response
    {
        $form = $this->createForm(DislikeeType::class, $dislikee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dislikeeRepository->add($dislikee);
            return $this->redirectToRoute('app_dislikee_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('dislikee/edit.html.twig', [
            'dislikee' => $dislikee,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{dislikeid}", name="app_dislikee_delete", methods={"POST"})
     */
    public function delete(Request $request, Dislikee $dislikee, DislikeeRepository $dislikeeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$dislikee->getDislikeid(), $request->request->get('_token'))) {
            $dislikeeRepository->remove($dislikee);
        }

        return $this->redirectToRoute('app_dislikee_index', [], Response::HTTP_SEE_OTHER);
    }
}
