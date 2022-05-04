<?php

namespace App\Controller;

use App\Entity\Agency;
use App\Entity\Agencylove;
use App\Entity\User;
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
     * @Route("/new/{idAgency}", name="app_agencylove_new", methods={"GET", "POST"})
     * @param Request $request
     * @param AgencyloveRepository $agencyloveRepository
     * @param $idAgency
     * @return Response
     */
    public function new(Request $request, AgencyloveRepository $agencyloveRepository, $idAgency): Response
    {
        $agencylove = new Agencylove();
        $em = $this->getDoctrine()->getManager();
        $agency = $em->getRepository(Agency::class)->find($idAgency);
        $user = $em->getRepository(User::class)->find(83);
        $agencyExistsLikeByUser = $agencyloveRepository->findBy(['idagency' => $agency->getIdAgency(), 'iduser' => $user->getId()]);
        if (!$agencyExistsLikeByUser) {
            $agencylove->setIdagency($agency);
            $agencylove->setIduser($user);
            $agency->setNbrlike($agency->getNbrlike() + 1);
            $agencyloveRepository->add($agencylove);
            $em->flush();
            return $this->redirectToRoute('app_agency_frontindex', [
                'agencylove' => $agencylove,
            ]);
        } else {
            $classroom = $agencyloveRepository->find($agencyExistsLikeByUser[0]->getIdagencylove());
            $agency->setNbrlike($agency->getNbrlike() - 1);
            $em->remove($classroom);
            $em->flush();

            return $this->redirectToRoute('app_agency_frontindex', [
                'agencylove' => $agencylove,
            ]);
        }
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
     * @Route("/count", name="app_agencylove_count")
     */
    public function countLove(AgencyloveRepository $agencyloveRepository, $idAgency)
    {
        $em = $this->getDoctrine()->getManager();
        $agency = $em->getRepository(Agency::class)->find($idAgency);
        $agencylove = $agencyloveRepository->findBy(['idagency' => $agency->getIdAgency()]);
        $count = count($agencylove);
    }

}
