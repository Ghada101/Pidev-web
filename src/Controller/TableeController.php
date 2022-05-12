<?php

namespace App\Controller;
use App\Entity\Restaurant;
use App\Entity\Tablee;
use App\Form\RestaurantType;
use App\Form\TableeType;
use App\Repository\TableeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/tablee")
 */
class TableeController extends AbstractController
{
    /**
     * @Route("/", name="app_tablee_index", methods={"GET"})
     */
    public function index(TableeRepository $tableeRepository): Response
    {
        return $this->render('Backoffice/tablee/index.html.twig', [
            'tablee' => $tableeRepository->findAll(),
        ]);
    }
    
    public function indexFronttable($idRestau,Request $request,EntityManagerInterface $entityManager): Response
    {
        $tables=$entityManager
              ->getRepository(Tablee::class)
              ->findBy(['idRestau' => $idRestau]);
        return $this->render('BackOffice/tablee/indexFronttable.html.twig', [
            'tables' => $tables,
            'idRestau'=> $idRestau,
        ]);
    }

    /**
     * @Route("/new", name="app_new", methods={"GET", "POST"})
     */
    public function new(Request $request, TableeRepository $tableeRepository): Response
    {
        $tablee = new Tablee();
        $form = $this->createForm(TableeType::class, $tablee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

                  

            $entityManager->persist($tablee);
            $entityManager->flush();
            $this->addFlash(
                'success',
                'Added Successfully!'
            );
            return $this->redirectToRoute('app_tablee_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Backoffice/tablee/new.html.twig', [
            'tablee' => $tablee,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idTable}", name="app_tablee_show", methods={"GET"})
     */
    public function show(Tablee $tablee): Response
    {
        return $this->render('Backoffice/tablee/show.html.twig', [
            'tablee' => $tablee,
        ]);
    }

    /**
     * @Route("/{idTable}/edit", name="app_tablee_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Tablee $tablee, TableeRepository $tableeRepository): Response
    {
        $form = $this->createForm(TableeType::class, $tablee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->flush();

            $this->addFlash(
                'success',
                'Edited Successfully!'
            ); 
            return $this->redirectToRoute('app_tablee_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Backoffice/tablee/edit.html.twig', [
            'tablee' => $tablee,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idTable}/delete", name="app_tablee_delete", methods={"POST"})
     */
    public function delete(Request $request, Tablee $tablee, TableeRepository $tableeRepository, EntityManagerInterface $em , $idTable): Response
    {
        $tablee = $em->getRepository(Tablee::class)->find($idTable);
                $em->remove($tablee);
                $em->flush();

        

        return $this->redirectToRoute('app_tablee_index', [], Response::HTTP_SEE_OTHER);
    }
}
