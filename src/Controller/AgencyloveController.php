<?php

namespace App\Controller;

use App\Entity\Agencylove;
use App\Form\AgencyloveType;
use App\Repository\AgencyloveRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/agencylove")
 */
class AgencyloveController extends AbstractController
{
    /**
     * @Route("/", name="app_agencylove_index", methods={"GET"})
     */
    public function index(AgencyloveRepository $agencyloveRepository): Response
    {
        return $this->render('agencylove/index.html.twig', [
            'agencyloves' => $agencyloveRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_agencylove_new", methods={"GET", "POST"})
     */
    public function new(Request $request, AgencyloveRepository $agencyloveRepository): Response
    {
        $agencylove = new Agencylove();
        $form = $this->createForm(AgencyloveType::class, $agencylove);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $agencyloveRepository->add($agencylove);
            return $this->redirectToRoute('app_agencylove_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('agencylove/new.html.twig', [
            'agencylove' => $agencylove,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idagencylove}", name="app_agencylove_show", methods={"GET"})
     */
    public function show(Agencylove $agencylove): Response
    {
        return $this->render('agencylove/show.html.twig', [
            'agencylove' => $agencylove,
        ]);
    }

    /**
     * @Route("/{idagencylove}/edit", name="app_agencylove_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Agencylove $agencylove, AgencyloveRepository $agencyloveRepository): Response
    {
        $form = $this->createForm(AgencyloveType::class, $agencylove);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $agencyloveRepository->add($agencylove);
            return $this->redirectToRoute('app_agencylove_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('agencylove/edit.html.twig', [
            'agencylove' => $agencylove,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idagencylove}", name="app_agencylove_delete", methods={"POST"})
     */
    public function delete(Request $request, Agencylove $agencylove, AgencyloveRepository $agencyloveRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$agencylove->getIdagencylove(), $request->request->get('_token'))) {
            $agencyloveRepository->remove($agencylove);
        }

        return $this->redirectToRoute('app_agencylove_index', [], Response::HTTP_SEE_OTHER);
    }
}
