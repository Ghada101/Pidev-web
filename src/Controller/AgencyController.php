<?php

namespace App\Controller;

use App\Entity\Agency;
use App\Form\AgencyType;
use App\Repository\AgencyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/agency")
 */
class AgencyController extends AbstractController
{
    /**
     * @Route("/show", name="app_agency_index", methods={"GET"})
     */
    public function index(AgencyRepository $agencyRepository): Response
    {
        return $this->render('Backoffice/agency/show.html.twig', [
            'agencies' => $agencyRepository->findAll(),
        ]);
    }
    /**
     * @Route("/front", name="app_agency_frontindex", methods={"GET"})
     */
    public function Frontindex(AgencyRepository $agencyRepository): Response
    {
        return $this->render('Frontoffice/agency/show.html.twig', [
            'agencies' => $agencyRepository->findAll(),
        ]);
    }

    /**
     * @Route("/back", name="app_agency_index_back", methods={"GET"})
     */
    public function defaultBack(AgencyRepository $agencyRepository): Response
    {
        return $this->render('Backoffice/basebackfinal.html.twig', [
        ]);
    }

    /**
     * @Route("/new", name="app_agency_new", methods={"GET", "POST"})
     */
    public function new(Request $request, AgencyRepository $agencyRepository): Response
    {
        $agency = new Agency();
        $form = $this->createForm(AgencyType::class, $agency);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $agencyRepository->add($agency);
            return $this->redirectToRoute('app_agency_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('BackOffice/agency/new.html.twig', [
            'agency' => $agency,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idAgency}/details", name="app_agency_show", methods={"GET"})
     */
    public function show(Agency $agency): Response
    {
        return $this->render('agency/show.html.twig', [
            'agency' => $agency,
        ]);
    }

    /**
     * @Route("/{idAgency}/edit", name="app_agency_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Agency $agency, AgencyRepository $agencyRepository): Response
    {
        $form = $this->createForm(AgencyType::class, $agency);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $agencyRepository->add($agency);
            return $this->redirectToRoute('app_agency_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('BackOffice/agency/edit.html.twig', [
            'agency' => $agency,
            'form' => $form->createView(),
        ]);
    }

   /* /**
     * @Route("/{idAgency}/delete", name="app_agency_delete")
     */
   /* public function delete(Request $request, Agency $agency, AgencyRepository $agencyRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$agency->getIdAgency(), $request->request->get('_token'))) {
            $agencyRepository->remove($agency);
        }
        return $this->redirectToRoute('app_agency_index',[], Response::HTTP_SEE_OTHER);
}*/

    /**
     * @Route("/{idAgency}/delete", name="app_agency_delete")
     */
    public function deleteAgency($idAgency): Response
    {
        $rep=$this->getDoctrine()->getRepository(Agency::class);
        $em=$this->getDoctrine()->getManager();
        $classroom=$rep->find($idAgency);
        $em->remove($classroom);
        $em->flush();
        return $this->redirectToRoute('app_agency_index');
    }

}
