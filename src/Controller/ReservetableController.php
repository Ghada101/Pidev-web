<?php

namespace App\Controller;

use App\Entity\Reservetable;
use App\Entity\Tablee;
use App\Form\ReservetableType;
use App\Form\TableeType;
use App\Repository\TableeRepository;
use App\Repository\ReservetableRepository;
use SebastianBergmann\Environment\Console;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reservetable")
 */
class ReservetableController extends AbstractController
{
    /**
     * @Route("/", name="app_reservetable_index", methods={"GET"})
     */
    public function index( EntityManagerInterface $entityManager): Response
    { 
        $reservation = $entityManager
              ->getRepository(Reservetable::class)
              ->findAll();
            return $this->render('reservetable/index.html.twig', [
            'reservation' =>$reservation,
        ]);
    }

    /**
     * @Route("/new/{idTable}", name="app_reservetable_new", methods={"GET", "POST"})
     */
    public function new(Request $request,TableeRepository $TableeRepository,ReservetableRepository $reservetableRepository, EntityManagerInterface $entityManager, $idTable): Response
    {
        $reservetableList = $entityManager->getRepository(Reservetable::class)->findBy(['idTable'=>$idTable]);
        $reservetable = new Reservetable();
        $form = $this->createForm(ReservetableType::class, $reservetable);
        $form->handleRequest($request);
        // $user = $entityManager->getRepository(User::class)->find(90);
        $table = $entityManager->getRepository(Tablee::class)->findOneBy(['idTable'=>$idTable]);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($reservetableList==nul){
                $reservetable->SetIdTable($table);
                $reservetableRepository->add($reservetable);
                return $this->redirectToRoute('app_reservetable_new', ['idTable'=>$idTable, 'reservetableList'=>$reservetableList]);
            }else {
                for ($i = 0; $i <count($reservetableList); $i++){
                    if ($form->get('startdate')->getData() == $reservetableList[$i]->getStartdate() && $form->get('startdate')->getData() < $reservetableList[$i]->getEnddate()) {
                        $this->addFlash('danger', 'Table is already reserved at this date');
                        return $this->redirectToRoute('app_reservetable_new', [ 'idTable' => $idTable, 'reservetableList' => $reservetableList]);
                    } elseif ($form->get('startdate')->getData() == $reservetableList[$i]->getStartdate() && $form->get('startdate')->getData() == $reservetableList[$i]->getEnddate()) {
                        $this->addFlash('danger', 'Table is already reserved at this date');
                        return $this->redirectToRoute('app_reservetable_new', ['idTable' => $idTable, 'reservetableList' => $reservetableList]);
                    } elseif ($form->get('enddate')->getData() == $reservetableList[$i]->getEnddate() && $form->get('startdate')->getData() > $reservetableList[$i]->getStartdate()) {
                        $this->addFlash('danger', 'Table is already reserved at this date');
                        return $this->redirectToRoute('app_reservetable_new', ['idTable' => $idTable, 'reservetableList' => $reservetableList]);
                    } elseif ($form->get('startdate')->getData() == $reservetableList[$i]->getStartdate() && $form->get('startdate')->getData() > $reservetableList[$i]->getEnddate()) {
                        $this->addFlash('danger', 'Table is already reserved at this date');
                        return $this->redirectToRoute('app_reservetable_new', ['idTable' => $idTable, 'reservetableList' => $reservetableList]);
                    } elseif ($form->get('enddate')->getData() == $reservetableList[$i]->getEnddate() && $form->get('enddate')->getData() < $reservetableList[$i]->getStartdate()) {
                        $this->addFlash('danger', 'Table is already reserved  at this date');
                        return $this->redirectToRoute('app_reservetable_new', ['idTable' => $idTable, 'reservetableList' => $reservetableList]);
                    } elseif ($form->get('startdate')->getData() < $reservetableList[$i]->getStartdate() && $form->get('enddate')->getData() > $reservetableList[$i]->getEnddate()) {
                        $this->addFlash('danger', 'Table is already reserved at this date');
                        return $this->redirectToRoute('app_reservetable_new', ['idTable' => $idTable, 'reservetableList' => $reservetableList]);
                    } elseif ($form->get('startdate')->getData() < $reservetableList[$i]->getStartdate() && $form->get('startdate')->getData() > $reservetableList[$i]->getEnddate()) {
                        $this->addFlash('danger', 'Table is already reserved at this date');
                        return $this->redirectToRoute('app_reservetable_new', ['idTable' => $idTable, 'reservetableList' => $reservetableList]);
                    } elseif ($form->get('enddate')->getData() < $reservetableList[$i]->getEnddate() && $form->get('enddate')->getData() > $reservetableList[$i]->getStartdate()) {
                        $this->addFlash('danger', 'Table is already reserved  at this date');
                        return $this->redirectToRoute('app_reservetable_new', ['idTable' => $idTable, 'reservetableList' => $reservetableList]);
                    } elseif ($form->get('startdate')->getData() < $reservetableList[$i]->getStartdate() && $form->get('enddate')->getData() < $reservetableList[$i]->getEnddate()) {
                        $this->addFlash('danger', 'Table is already reserved  at this date');
                        return $this->redirectToRoute('app_reservetable_new', ['idTable' => $idTable, 'reservetableListist' => $reservetableList]);
                    } else {
                        $reservetable->setIdTable($table);
                        $reservetableRepository->add($reservetable);
                        return $this->redirectToRoute('app_reservetable_new' , ['idTable' => $idTable, 'reservetableListist' => $reservetableList]);
                    }
                }
            }
            }
            
        return $this->render('reservetable/new.html.twig', [
            'reservetable' => $reservetable,
            'table'=> $table,
            'form' => $form->createView(),
            'reservetableList'=>$reservetableList,
        ]);
    }
    /**
     * @Route("/calendar", name="app_reservetable_calendar", methods={"GET"})
     */

    public function calendar(): Response
    {
        return $this->render('reservetable/calendar.html.twig');
    }

    /**
     * @Route("/{idreserve}", name="app_reservetable_show", methods={"GET"})
     */
    public function show(Reservetable $reservetable): Response
    {
        return $this->render('reservetable/show.html.twig', [
            'reservetable' => $reservetable,
        ]);
    }

    /**
     * @Route("/{idreserve}/edit", name="app_reservetable_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Reservetable $reservetable, ReservetableRepository $reservetableRepository): Response
    {
        $form = $this->createForm(ReservetableType::class, $reservetable);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            
            return $this->redirectToRoute('app_reservetable_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('reservetable/edit.html.twig', [
            'reservetable' => $reservetable,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idreserve}", name="app_reservetable_delete", methods={"POST"})
     */
    public function delete(Request $request, Reservetable $reservetable, ReservetableRepository $reservetableRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservetable->getIdreserve(), $request->request->get('_token'))) {
            $reservetableRepository->remove($reservetable);
        }

        return $this->redirectToRoute('app_reservetable_index', [], Response::HTTP_SEE_OTHER);
    }
     
}
