<?php

namespace App\Controller;

use App\Entity\Hotel;
use App\Form\HotelType;
use App\Form\HotelSearchType;
use App\Repository\HotelRepository;
use App\Repository\HotelchainRepository;
use Doctrine\ORM\EntityManagerInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
// Include PhpSpreadsheet required namespaces
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\SerializerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/hotel")
 */
class HotelController extends AbstractController
{
    /**
     * @Route("/", name="app_hotel_index", methods={"GET"})
     */
    public function index(HotelRepository $hotelRepository, Request $request, EntityManagerInterface $entityManager, PaginatorInterface $paginator): Response
    {
        $form = $this->createForm(HotelSearchType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $term = $form['idHotel']->getData();
            //$description = $form['Pays']->getData();
            $allhotel= $hotelRepository->search($term);
        } else {
            $allhotel= $hotelRepository->findAll();
        }
        $hotels=$paginator->paginate($allhotel, $request->query->getInt('page', 1), 3);
        
        return $this->render('backOffice/hotel/index.html.twig', [
            'hotels' => $hotels,
            'form' => $form->createView()
            ]);
    }

    /**
     * @Route("/indexFront", name="app_hotel_indexFront", methods={"GET"})
     */
    public function indexFront(Request $request, EntityManagerInterface $entityManager, PaginatorInterface $paginator): Response
    {
        $hotels = $entityManager
        ->getRepository(Hotel::class)
        ->findAll();

        $hotels=$paginator->paginate($hotels, $request->query->getInt('page', 1), 1);

        return $this->render('frontOffice/hotel/indexFront.html.twig', [
        'hotels' => $hotels,
    ]);
    }

/**
     * @Route("/mobile/liste", name="app_hotel_indexjson")
     */
    public function listeJson(NormalizerInterface $normalizerInterface) {
       
       $repository = $this->getDoctrine()->getRepository(Hotel::class);
       $hotel = $repository->findAll();
       
       $json= $normalizerInterface->normalize($hotel,'json',['groups'=>'post:read']);
      // return $this->render

       return new Response(json_encode($json));
    }


    /**
     * @Route("/new", name="app_hotel_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $hotel = new Hotel();
        $form = $this->createForm(HotelType::class, $hotel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $form->get('hotelImg')->getData();
            $uploads_directory=$this->getParameter('uploads_directory');
            $file_name=md5(uniqid())    . '.'   . $file->guessExtension();
            $file->move(
                $uploads_directory,
                $file_name
            );
            $hotel->setHotelImg($file_name);
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($hotel);
            $entityManager->flush();
            $this->addFlash(
                'success',
                'Added Successfully!'
            );
            return $this->redirectToRoute('app_hotel_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('backOffice/hotel/new.html.twig', [
            'hotel' => $hotel,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/add" , name="add_Hotel_Json")
     */
    public function addHotelJson (HotelchainRepository $hotelchainRepository, Request $request , SerializerInterface $serializerInterface , EntityManagerInterface $entityManager){
        $entityManager = $this->getDoctrine()->getManager();
        $h = new Hotel();
        $h->setHotelName($request->get('hotelName'));
        $h->setHotelStaff($request->get('hotelStaff'));
        $h->setHotelLocation($request->get('hotelLocation'));
        $h->setHotelPhone($request->get('hotelPhone')); 
        $h->setHotelDescription($request->get('hotelDescription')); 
        $a= $hotelchainRepository->find($request->get('fkHotelchain'));
        $h->setFkHotelchain($a);
        $h->setHotelImg($request->get('hotelImg'));
        $entityManager->persist($h);
        $entityManager->flush();
        $jsoncontent= $serializerInterface->serialize($h, 'json', ['groups'=>'post:read']);
        return new Response(json_encode($jsoncontent));
        
    }

    /**
     * @Route("/{idHotel}", name="app_hotel_show", methods={"GET"})
     */
    public function show(Hotel $hotel): Response
    {
        return $this->render('backOffice/hotel/show.html.twig', [
            'hotel' => $hotel,
        ]);
    }

    /**
     * @Route("/show/{idHotel}", name="showJson")
     */
    public function showJson ($idHotel,Request $request , SerializerInterface $serializerInterface) {
        $entityManager = $this->getDoctrine()->getManager();
        $hc=$entityManager->getRepository(Hotel::class)->find($idHotel);
        $jsoncontent = $serializerInterface->serialize($hc,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsoncontent));
    }

    /**
     * @Route("/{idHotel}/edit", name="app_hotel_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Hotel $hotel, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(HotelType::class, $hotel);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $file= $request->files->get('hotel')['hotelImg'];

            $uploads_directory=$this->getParameter('uploads_directory');
            $file_name=md5(uniqid())    . '.'   . $file->guessExtension();
            $file->move(
                $uploads_directory,
                $file_name
            );
            $hotel->setHotelImg($file_name);
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->flush();

            $this->addFlash(
                'info',
                'Edited Successfully!'
            );
            return $this->redirectToRoute('app_hotel_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('backOffice/hotel/edit.html.twig', [
            'hotel' => $hotel,
            'form' => $form->createView(),
        ]);
    }
 /**
     * @Route("/update/{idHotel}", name="updateJson")
    */
    public function updateJson (EntityManagerInterface $em,$idHotel, Request $request, SerializerInterface $serializerInterface) {
        $em=$this->getDoctrine()->getManager();
       $hotel=$em->getRepository(Hotel::class)->find($idHotel);
          $em->flush();
       return new Response("updated".json_encode($hotel));
   }

    
     /**
      * @Route("/mod", name="app_hotelchain_update")
     */
   /*  public function updateJsonj ($idHotel, Request $request,NormalizerInterface $normalizerInterface) {
        $em=$this->getDoctrine()->getManager();
        $h=$this->getDoctrine()->getRepository(Hotel::class)->find($idHotel);
        
        $h->setHotelName($request->get('hotelName'));
        $h->setHotelStaff($request->get('hotelStaff'));
        $h->setHotelLocation($request->get('hotelLocation'));
        $h->setHotelPhone($request->get('hotelPhone')); 
        $h->setHotelDescription($request->get('hotelDescription')); 
        $em->flush();
        $jsoncontent=$normalizerInterface->normalize($h, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($jsoncontent));
        //return new Response("updated");
    } */

    /**
     * @Route("/modifier/updateJSON", name="hotel_updateJSON")
     * @Method("PUT")
     */
    public function modifierJson(Request $request , NormalizerInterface $normalizerInterface) {
        $em = $this->getDoctrine()->getManager();
        $h = $this->getDoctrine()->getManager()
            ->getRepository(Hotel::class)
            ->find($request->get("idHotel"));

            $h->setHotelName($request->get('hotelName'));
            $h->setHotelStaff($request->get('hotelStaff'));
            $h->setHotelLocation($request->get('hotelLocation'));
            $h->setHotelPhone($request->get('hotelPhone')); 
            $h->setHotelDescription($request->get('hotelDescription'));
            
        $em->persist($h);
        $em->flush();
        $json=$normalizerInterface->normalize($h, 'json', ['groups' => 'post:read']);

        
        return new JsonResponse("Room a ete modifiee avec success.");

    }

    /**
     * @Route("/{idHotel}/delete", name="app_hotel_delete", methods={"GET","POST"})
     */
    public function delete(Request $request, Hotel $hotel, EntityManagerInterface $entityManager, $idHotel): Response
    {
        $hotel = $entityManager->getRepository(Hotel::class)->find($idHotel);
        $entityManager->remove($hotel);
        $entityManager->flush();
        $this->addFlash(
            'danger',
            'Deleted Successfully!'
        );
        return $this->redirectToRoute('app_hotel_index');
    }

    
    /**
     * @Route("/delete/delJSON", name="hotel_delJSON")
     * @Method("DELETE")
     */

    public function delJSON(Request $request , SerializerInterface $serializerInterface) {
        $id = $request->get("idHotel");

        $em = $this->getDoctrine()->getManager();
        $h = $em->getRepository(Hotel::class)->find($id);
        if($h!=null ) {
            $em->remove($h);
            $em->flush();

            //$serialize = new Serializer([new ObjectNormalizer()]);
            $json=$serializerInterface->serialize($h, 'json', ['groups' => 'post:read']);

           // $formatted = $serialize->normalize("Agence a ete supprimee avec success.");
            return new JsonResponse("deleted!".json_encode($json));

        }else{
            return new JsonResponse("id h invalide.");}


    }



    /**
         * @Route("/Search", name="demo_create")
         * @return Response|JsonResponse
         *
    */
    public function index3(Request $request, HotelRepository $hotelRepository, PaginatorInterface $paginator) : Response
    {
        $emailValue = $request->get('search');
        //dd($emailValue);
        $allhotel= $hotelRepository->search($emailValue);
        $arr = (object) $allhotel;

        $hotels=$paginator->paginate($allhotel, $request->query->getInt('page', 1), 3);

        if ($request->get('path')) {
            return new JsonResponse([
                'content' => $this->renderView('backOffice/hotel/contentajax.html.twig', ["hotels" => $hotels])
            ]);
        }
        return new JsonResponse([
            "html" => $this->renderView("backOffice/hotel/index.html.twig", ["hotels" => $hotels]),
            ]);
        return Response::json($allhotel);

        // $response = new JsonResponse();
        // $response->setStatusCode(200);
        return $response->setData(['search' => $allhotel ]);
    }

    /**
         * @Route("/rating", name="app_hotel_rating", methods= {"POST"})
         * @return Response|JsonResponse
         */

    
    public function rating(Request $request, HotelRepository $hotelRepository, EntityManagerInterface $entityManager): Response
    {

        /*   $hotel = $hotelRepository->find(112);
        $hotel->setRating(5);
        $hotelRepository->add($hotel);
  */

        $em = $this->getDoctrine()->getManager();
        $hotel1 = $em->getRepository(Hotel::class)->find(108);
        $hotel1->setRating(4);
        $em->flush();
        return new JsonResponse("rating done");
    }
    /**
     * @Route("/mobile/uploadImg", name="uploadImg")
     */
    public function uploadImg(Request $request, NormalizerInterface $normalizer){
        //houni uploadi image
        if (isset($_FILES['file']["name"])){
            $img=file_get_contents($_FILES["file"]["tmp_name"]);
            $fp=fopen("uploads\\".$_FILES['file']["name"],"w");
            fwrite($fp,$img);
            fclose($fp);

        }

        return new Response('json_encode($_FILES)');
    }
}
