<?php

namespace App\Controller;

use App\Entity\Agency;
use App\Entity\Car;
use App\Repository\AgencyRepository;
use App\Repository\CarRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Twilio\Rest\Client;


class CarMobileController extends AbstractController
{
    /**
     * @Route("/car/mobile", name="app_car_mobile")
     */
    public function index(): Response
    {
        return $this->render('car_mobile/index.html.twig', [
            'controller_name' => 'CarMobileController',
        ]);
    }

    /**
     * @Route("/mobile/addCar/{idAgency}", name="mobile_add_car")
     */
    public function new(Request $request, AgencyRepository $agencyRepository,CarRepository $carRepository,$idAgency, NormalizerInterface $normalizer): Response
    {
        $car = new Car();
        $em = $this->getDoctrine()->getManager();
        $agency = $em->getRepository(Agency::class)->find($idAgency);
        $car->setCarbrand($request->get('carbrand'));
        $car->setCarcolor($request->get('carcolor'));
        $car->setCarnumber($request->get('carnumber'));
        $car->setCarimage($request->get('carimage'));
        $car->setDescription($request->get('description'));
        $car->setNamecar($request->get('namecar'));
        $car->setFkAgency($agency);
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

        $json= $normalizer->normalize($car, "json" ,["groups"=>"Car"]);
        return new Response(json_encode($json));
    }

    /**
     * @Route("/mobile/getCars/{idAgency}", name="mobile_get_cars")
     */
    public function GetCars($idAgency,Request $request, NormalizerInterface $normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $cars = $em->getRepository(Car::class)->findBy(['fkAgency' => $idAgency]);
        $json = $normalizer->normalize($cars, "json",["groups"=>"Car"]);
        return new Response(json_encode($json));
    }


//    /**
//     * @Route("/mobile/deleteCar", name="mobile_delete_cars")
//     */
//    public function deleteCar($idCar,Request $request, NormalizerInterface $normalizer): Response
//    {
//
//        $rep=$this->getDoctrine()->getRepository(Car::class);
//        $em=$this->getDoctrine()->getManager();
//        $car=$rep->find($request->get("idCar"));
//        $em->remove($car);
//        $em->flush();
//        $json = $normalizer->normalize($car, "json",["groups"=>"Car"]);
//        return new Response(json_encode($json));
//    }




    /**
     * @Route("/mobile/deleteCar", name="mobile_delete_cars")
     * @Method("DELETE")
     */

    public function deleteCar(Request $request , SerializerInterface $normalizerInterface) {
       $id = $request->get("idCar");

        $em = $this->getDoctrine()->getManager();
        $car = $em->getRepository(Car::class)->find($id);
        if($car!=null ) {
            $em->remove($car);
            $em->flush();

            //$serialize = new Serializer([new ObjectNormalizer()]);
            $json=$normalizerInterface->normalize("Car Deleted", "json", ["groups"=>"Car"]);
            // $formatted = $serialize->normalize("Agence a ete supprimee avec success.");
            return new JsonResponse("deleted!".json_encode($json));
        }else{
            return new JsonResponse("id car invalide.");}
    }





    /**
     * @Route("/mobile/carUpdate/{idCar}", name="mobile_update_cars")
     */
    public function updateCar(Request $request , NormalizerInterface $normalizerInterface,$idCar){
        $em = $this->getDoctrine()->getManager();
        $car = $em->getRepository(Car::class)->find($idCar);
        $car->setNamecar($request->get('namecar'));
        $car->setCarnumber($request->get('carnumber'));
        $car->setDescription($request->get('description'));
        $car->setCarcolor($request->get('carcolor'));
        $car->setCarbrand($request->get('carbrand'));
        $car->setCarimage($request->get('carimage'));
        $em->persist($car);
        $em->flush();
//        $json=$normalizerInterface->normalize($car, "json", ["groups"=>"Car"]);
//        return new JsonResponse(json_encode($json));
        return new Response("Done");
    }
    /**
     * @Route("/mobile/uploadImg", name="uploadImg")
     */
    public function uploadImg(Request $request, NormalizerInterface $normalizer){
        //houni uploadi image
        if (isset($_FILES['file']["name"])){
            $img=file_get_contents($_FILES["file"]["tmp_name"]);
            $fp=fopen("upload\\images\\".$_FILES['file']["name"],"w");
            fwrite($fp,$img);
            fclose($fp);

        }

        return new Response('json_encode($_FILES)');
    }
}
