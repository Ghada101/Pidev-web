<?php

namespace App\Controller;

use App\Entity\Agency;
use App\Form\AgencyType;
use App\Repository\AgencyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

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
    public function Frontindex(AgencyRepository $agencyRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $em = $this->getDoctrine()->getManager();

        $agencies = $em->getRepository(Agency::class)->findAll();
        //$agenciesTest=$em->getRepository(Agency::class)->findBy();

        $agencies = $paginator->paginate(
            $agencies,
            $request->query->getInt('page', 1), 6
        );


        return $this->render('Frontoffice/agency/show.html.twig', [
            'agencies' => $agencies
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
        $rep = $this->getDoctrine()->getRepository(Agency::class);
        $em = $this->getDoctrine()->getManager();
        $classroom = $rep->find($idAgency);
        $em->remove($classroom);
        $em->flush();
        return $this->redirectToRoute('app_agency_index');
    }


    /**
     * @Route("/search/{nameagency}/{pageNumber}", name="app_agency_findByname"), methods={"GET"})
     */
    public function findByName($nameagency,$pageNumber): Response
    {
        $rep = $this->getDoctrine()->getRepository(Agency::class);
        $response = new JsonResponse();
        if ($nameagency != "") {
            $agencies = $rep->findByName($nameagency,$pageNumber);
            $response->setData(($agencies));
        } else {
            $response->setData([]);
        }
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }


    /**
     * @Route("/SearchAll/{pageNumber}", name="app_agency_findall"), methods={"GET"})
     */
    public function searchAllAgencies(PaginatorInterface $paginator, Request $request,$pageNumber):Response
    {

        $rep = $this->getDoctrine()->getRepository(Agency::class);
        $agencies = $rep->findAllAgencies($pageNumber);



        $response = new JsonResponse();
        $response->setData($agencies);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }


}
