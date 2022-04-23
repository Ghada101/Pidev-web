<?php

namespace App\Controller;
use App\Entity\Agency;
use App\Entity\Car;
use App\Entity\Rent;
use App\Entity\User;
use App\Form\RentType;
use App\Repository\RentRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
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
        return $this->render('Frontoffice/rent/new.html.twig', [
            'rents' => $rentRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new/{idAgency}/{idCar}", name="app_rent_new", methods={"GET", "POST"})
     */
    public function new(Request $request, RentRepository $rentRepository,$idAgency,$idCar): Response
    {
        $em = $this->getDoctrine()->getManager();
        $rentList = $em->getRepository(Rent::class)->findBy(['idcar'=>$idCar]);
        $rent = new Rent();
        $form = $this->createForm(RentType::class, $rent);
        $form->handleRequest($request);
        $user = $em->getRepository(User::class)->find(90);
        $car=$em->getRepository(Car::class)->find($idCar);
        $agency=$em->getRepository(Agency::class)->find($idAgency);

        if ($form->isSubmitted() && $form->isValid()) {
            foreach ($rentList as $rents) {
                if ($rents->getStartDate() <= $rent->getStartDate() && $rent->getStartDate() <= $rents->getEndDate()) {
                    $this->addFlash('danger', 'Cette date est déjà réservée');
                    return $this->redirectToRoute('app_rent_new', ['idAgency'=>$idAgency,'idCar'=>$idCar]);
                }
             elseif ($rents->getStartDate() <= $rent->getEndDate() && $rent->getEndDate() <= $rents->getEndDate()) {
                    $this->addFlash('danger', 'Cette date est déjà réservée');
                    return $this->redirectToRoute('app_rent_new', ['idAgency'=>$idAgency,'idCar'=>$idCar]);
                }
                elseif ($rents->getStartDate() <= $rent->getStartDate() && $rent->getEndDate() <= $rents->getEndDate()) {
                    $this->addFlash('danger', 'Cette date est déjà réservée');
                    return $this->redirectToRoute('app_rent_new', ['idAgency'=>$idAgency,'idCar'=>$idCar]);
                }
                elseif ($rents->getStartDate() <= $rent->getStartDate() && $rent->getStartDate() <= $rents->getEndDate()) {
                    $this->addFlash('danger', 'Cette date est déjà réservée');
                    return $this->redirectToRoute('app_rent_new', ['idAgency'=>$idAgency,'idCar'=>$idCar]);
                }
                else{
                    $rent->setIduser($user);
                    $rent->setIdcar($car);
                    $rent->setIdagency($agency);
                    $rentRepository->add($rent);
                    return $this->redirectToRoute('app_rent_new', ['idAgency'=>$idAgency,'idCar'=>$idCar,'rentList'=>$rentList]);
                }
            }
                }
        return $this->render('Frontoffice/rent/new.html.twig', [
            'rent' => $rent,
            'form' => $form->createView(),
            'rentList'=>$rentList,
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
     * @Route("/edit/{idrent}/{idAgency}/{idCar}", name="app_rent_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Rent $rent, RentRepository $rentRepository,$idCar,$idAgency): Response
    {
        $rentUpdate = $rent;
        dd($rentUpdate);
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(RentType::class, $rent);
        $form->handleRequest($request);
        $carUpadted=$em->getRepository(Car::class)->findOneBy(['idCar'=>$idCar]);
        $userUpdated = $em->getRepository(User::class)->findOneBy(['id' => 90]);
        $agencyUpdated=$em->getRepository(Agency::class)->findOneBy(['idAgency'=>$idAgency]);
        if ($form->isSubmitted() && $form->isValid()) {
            $rent->setIduser($userUpdated);
            $rent->setIdcar($carUpadted);
            $rent->setIdagency($agencyUpdated);
            $rentRepository->add($rent);
            $em->flush();
            return $this->redirectToRoute('app_rent_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('Frontoffice/rent/edit.html.twig', [
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
