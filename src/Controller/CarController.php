<?php

namespace App\Controller;

use App\Entity\Car;
use App\Form\CarType;
use App\Repository\AgencyRepository;
use App\Repository\CarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twilio\Rest\Client;
use Symfony\Component\HttpClient\HttpClient;


/**
 * @Route("/car")
 */
class CarController extends AbstractController
{
    /**
     * @Route("/{idAgency}", name="app_car_index", methods={"GET"})
     */
    public function index(CarRepository $carRepository,$idAgency): Response
    {
        return $this->render('Backoffice/car/index.html.twig', [
            'cars' => $carRepository->findBy(['fkAgency' => $idAgency]),
            'idAgency' => $idAgency
        ]);
    }

    /**
     * @Route("/front/{idAgency}", name="app_car_front_index", methods={"GET"})
     */
    public function Frontindex(CarRepository $carRepository,$idAgency): Response
    {
        return $this->render('Frontoffice/car/index.html.twig', [
            'cars' => $carRepository->findBy(['fkAgency' => $idAgency]),
            'idAgency' => $idAgency
        ]);
    }
    /**
     * @Route("/new/{idAgency}", name="app_car_new", methods={"GET", "POST"})
     */
    public function new(Request $request, AgencyRepository $agencyRepository,CarRepository $carRepository,$idAgency): Response
    {
        $car = new Car();
        $form = $this->createForm(CarType::class, $car);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $carRepository->add($car);
            $twillioAccountSid = 'ACeca3581c5bb96d40c3a37ddfcec48d79';
            $twillioAuthToken = '5f643dc34c625e424881e92f9795ea04';
            $fromNumber = '+17622429912';
            $toNumber = '+21692294022';
            $client = new Client($twillioAccountSid, $twillioAuthToken);

            $client->messages->create(
                $toNumber,
                array(

                    'from' => $fromNumber,
                    'body' => 'New car added to your agency : '.$car->getFkAgency()->getNameagency().' with number :'.$car->getCarnumber()
                )
            );
            return $this->redirectToRoute('app_car_index',['idAgency' => $idAgency]);
        }
        return $this->render('Backoffice/car/new.html.twig', [
            'car' => $car,
            'formC' => $form->createView(),
            'idagency' => $idAgency,
        ]);
    }

    /**
     * @Route("/{idCar}", name="app_car_show", methods={"GET"})
     */
    public function show(Car $car): Response
    {
        return $this->render('Backoffice/car/show.html.twig', [
            'car' => $car,
        ]);
    }

    /**
     * @Route("/{idCar}/edit", name="app_car_edit")
     */
    public function edit(Request $request, Car $car, CarRepository $carRepository): Response
    {
        $form = $this->createForm(CarType::class, $car);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $carRepository->add($car);
            return $this->redirectToRoute('app_car_index', ['idAgency'=>$car->getFkAgency()->getIdAgency()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('backoffice/car/edit.html.twig', [
            'car' => $car,
            'formC' => $form->createView(),

        ]);
    }

    /**
     * @Route("/{idCar}/delete", name="app_car_delete")
     */
    public function deleteCar($idCar): Response
    {
        $rep=$this->getDoctrine()->getRepository(Car::class);
        $em=$this->getDoctrine()->getManager();
        $car=$rep->find($idCar);
        $em->remove($car);
        $em->flush();
        return $this->redirectToRoute('app_car_index', ['idAgency'=>$car->getFkAgency()->getIdAgency()], Response::HTTP_SEE_OTHER);
    }


}


