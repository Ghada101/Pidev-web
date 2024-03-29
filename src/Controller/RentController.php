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
    public function new(Request $request, RentRepository $rentRepository, $idAgency, $idCar, \Swift_Mailer $mailer): Response
    {
        $em = $this->getDoctrine()->getManager();
        $rentList = $em->getRepository(Rent::class)->findBy(['idcar' => $idCar]);
        $rent = new Rent();
        $form = $this->createForm(RentType::class, $rent);
        $form->handleRequest($request);

        $user = $this->getUser()->getId();
        $user1 = $em->getRepository(User::class)->find($user);

        // $user = $em->getRepository(User::class)->find(90);
        $car = $em->getRepository(Car::class)->find($idCar);
        $agency = $em->getRepository(Agency::class)->find($idAgency);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($rentList == null) {
                $rent->setIduser($user1);
                $rent->setIdcar($car);
                $rent->setIdagency($agency);
                $message = (new \Swift_Message('Rent Confirmation'))
                    ->setFrom('aymenkhiari99@gmail.com')
                    ->setTo('khiari.aymen@esprit.tn')
                    ->setBody(
                        $this->renderView(
                            'Frontoffice/rent/mail.html.twig',
                            ['name' => $user1->getName(), 'car' => $car->getCarnumber(), 'agency' => $agency->getNameagency(), 'phone' => $agency->getAgencyphonenumber(), 'startdate' => $form->get('startdate')->getData(), 'enddate' => $form->get('enddate')->getData()]
                        ),
                        'text/html'
                    );
                $mailer->send($message);
                $rentRepository->add($rent);
                return $this->redirectToRoute('app_rent_new', ['idAgency' => $idAgency, 'idCar' => $idCar, 'rentList' => $rentList]);
            } else {
                $i = 0;
                while ($i < count($rentList)) {
                    $startdate = $rentList[$i]->getStartdate();
                    $enddate = $rentList[$i]->getEnddate();
                    $startdate1 = $form->get('startdate')->getData();
                    $enddate1 = $form->get('enddate')->getData();
                    if ($startdate1 >= $startdate && $startdate1 <= $enddate || $enddate1 >= $startdate && $enddate1 <= $enddate) {
                        $this->addFlash('danger', 'This car is already rented');
                        return $this->redirectToRoute('app_rent_new', ['idAgency' => $idAgency, 'idCar' => $idCar, 'rentList' => $rentList]);
                    }
                    $i++;
                }
                $rent->setIduser($user1);
                $rent->setIdcar($car);
                $rent->setIdagency($agency);
                $message = (new \Swift_Message('Rent Confirmation'))
                    ->setFrom('aymenkhiari99@gmail.com')
                    ->setTo('khiari.aymen@esprit.tn')
                    ->setBody(
                        $this->renderView(
                            'Frontoffice/rent/mail.html.twig',
                            ['name' => $user1->getName(), 'car' => $car->getCarnumber(), 'agency' => $agency->getNameagency(), 'phone' => $agency->getAgencyphonenumber(), 'startdate' => $form->get('startdate')->getData(), 'enddate' => $form->get('enddate')->getData()]
                        ),
                        'text/html'
                    );
                $mailer->send($message);
                $rentRepository->add($rent);
                return $this->redirectToRoute('app_rent_new', ['idAgency' => $idAgency, 'idCar' => $idCar, 'rentList' => $rentList]);

            }
        }
        return $this->render('Frontoffice/rent/new.html.twig', [
            'rent' => $rent,
            'form' => $form->createView(),
            'rentList' => $rentList,
            'idAgency' => $idAgency,
            'idCar' => $idCar,
            'rentList' => $rentList
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
    public function edit(Request $request, Rent $rent, RentRepository $rentRepository, $idCar, $idAgency): Response
    {
        $rentUpdate = $rent;
        dd($rentUpdate);
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(RentType::class, $rent);
        $form->handleRequest($request);
        $carUpadted = $em->getRepository(Car::class)->findOneBy(['idCar' => $idCar]);
        $userUpdated = $em->getRepository(User::class)->findOneBy(['id' => 90]);
        $agencyUpdated = $em->getRepository(Agency::class)->findOneBy(['idAgency' => $idAgency]);
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
        if ($this->isCsrfTokenValid('delete' . $rent->getIdrent(), $request->request->get('_token'))) {
            $rentRepository->remove($rent);
        }

        return $this->redirectToRoute('app_rent_index', [], Response::HTTP_SEE_OTHER);
    }

}
