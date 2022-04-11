<?php

namespace App\Controller;

use App\Entity\Likee;
use App\Form\LikeeType;
use App\Repository\LikeeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/likee")
 */
class LikeeController extends AbstractController
{
    /**
     * @Route("/", name="app_likee_index", methods={"GET"})
     */
    public function index(LikeeRepository $likeeRepository): Response
    {
        return $this->render('likee/index.html.twig', [
            'likees' => $likeeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_likee_new", methods={"GET", "POST"})
     */
    public function new(Request $request, LikeeRepository $likeeRepository): Response
    {
        $likee = new Likee();
        $form = $this->createForm(LikeeType::class, $likee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $likeeRepository->add($likee);
            return $this->redirectToRoute('app_likee_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('likee/new.html.twig', [
            'likee' => $likee,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{likeid}", name="app_likee_show", methods={"GET"})
     */
    public function show(Likee $likee): Response
    {
        return $this->render('likee/show.html.twig', [
            'likee' => $likee,
        ]);
    }

    /**
     * @Route("/{likeid}/edit", name="app_likee_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Likee $likee, LikeeRepository $likeeRepository): Response
    {
        $form = $this->createForm(LikeeType::class, $likee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $likeeRepository->add($likee);
            return $this->redirectToRoute('app_likee_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('likee/edit.html.twig', [
            'likee' => $likee,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{likeid}", name="app_likee_delete", methods={"POST"})
     */
    public function delete(Request $request, Likee $likee, LikeeRepository $likeeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$likee->getLikeid(), $request->request->get('_token'))) {
            $likeeRepository->remove($likee);
        }

        return $this->redirectToRoute('app_likee_index', [], Response::HTTP_SEE_OTHER);
    }
}
