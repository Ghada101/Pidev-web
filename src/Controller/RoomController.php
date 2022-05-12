<?php

namespace App\Controller;

use App\Entity\Room;
use App\Entity\Hotel;
use App\Form\RoomType;
use App\Repository\RoomRepository;
use App\Repository\HotelRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**   
 * @Route("/room")
 */
class RoomController extends AbstractController
{
    /**
     * @Route("/", name="app_room_index", methods={"GET"})
     */
    public function index(Request $request, EntityManagerInterface $entityManager, PaginatorInterface $paginator): Response
    {
        $rooms = $entityManager
            ->getRepository(Room::class)
            ->findAll();
    
        $rooms=$paginator->paginate($rooms, $request->query->getInt('page', 1), 2);

        return $this->render('backOffice/room/index.html.twig', [
            'rooms' => $rooms,
        ]); 
    } 

    public function indexFront($idHotel, Request $request,EntityManagerInterface $entityManager,PaginatorInterface $paginator): Response
    {
        $rooms = $entityManager
            ->getRepository(Room::class)
            ->findBy(['fkHotel' => $idHotel]); 
            //dd($rooms);
        $rooms=$paginator->paginate($rooms,$request->query->getInt('page',1),2);

        return $this->render('frontOffice/room/indexFront.html.twig', [
            'rooms' => $rooms,
            'idHotel' => $idHotel,
        ]);
    }


/**
     * @Route("/liste", name="liste")
     */
    public function indexJson(NormalizerInterface $normalizerInterface) {
        $repository = $this->getDoctrine()->getRepository(Room::class);
        $room = $repository->findAll();
        
        $json= $normalizerInterface->normalize($room,'json',['groups'=>'post:read']);
       // return $this->render
 
        return new Response(json_encode($json));
    }

    /**
     * @Route("/new", name="app_room_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $room = new Room();
        $form = $this->createForm(RoomType::class, $room);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $form->get('image')->getData();
            $uploads_directory=$this->getParameter('uploads_directory');
            $file_name=md5(uniqid())    . '.'   . $file->guessExtension();
            $file->move(
                $uploads_directory,
                $file_name
            );
            $room->setImage($file_name);
            $entityManager = $this->getDoctrine()->getManager();

            $entityManager->persist($room);
            $entityManager->flush();
            $this->addFlash(
                'success',
                'Added Successfully!'
            );
            return $this->redirectToRoute('app_room_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('backOffice/room/new.html.twig', [
            'room' => $room,
            'form' => $form->createView(),
        ]);
    }
 /**
     * @Route("/add" , name="addRoomJson")
     */
    public function addRoomJson (HotelRepository $hotelRepository,Request $request , SerializerInterface $serializerInterface , EntityManagerInterface $entityManager){
        $entityManager = $this->getDoctrine()->getManager();
        $hotelchain = new Room();
       $hotelchain->setRoomType($request->get('roomType'));
       $hotelchain->setRoomCapacity($request->get('roomCapacity'));
       $hotelchain->setNbrroom($request->get('nbrroom'));
       $hotelchain->setPrice($request->get('price')); 
       $a= $hotelRepository->find($request->get('fkHotel'));
       $hotelchain->setFkHotel($a);
       $hotelchain->setImage($request->get('image'));
       $entityManager->persist($hotelchain);
       $entityManager->flush();
       $jsoncontent= $serializerInterface->serialize($hotelchain, 'json', ['groups'=>'post:read']);
       return new Response(json_encode($jsoncontent));
      
    }

    /**
     * @Route("/{idRoom}", name="app_room_show", methods={"GET"})
     */
    public function show(Room $room): Response
    {
        return $this->render('backOffice/room/show.html.twig', [
            'room' => $room,
        ]);
    }

    /**
     * @Route("/show/{idRoom}", name="showJson")
     */
    public function showJson ($idRoom,Request $request , SerializerInterface $serializerInterface) {
        $entityManager = $this->getDoctrine()->getManager();
        $hc=$entityManager->getRepository(Room::class)->find($idRoom);
        $jsoncontent = $serializerInterface->serialize($hc,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsoncontent));
    }

    /**
     * @Route("/{idRoom}/edit", name="app_room_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Room $room, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(RoomType::class, $room);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash(
                'info',
                'Edited Successfully!'
            );
            return $this->redirectToRoute('app_room_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('backOffice/room/edit.html.twig', [
            'room' => $room,
            'form' => $form->createView(),
        ]);
    }



    /**
     * @Route("/modifier/updateJSON", name="room_updateJSON")
     * @Method("PUT")
     */
    public function modifierJson(Request $request , NormalizerInterface $normalizerInterface) {
        $em = $this->getDoctrine()->getManager();
        $hotelchain = $this->getDoctrine()->getManager()
            ->getRepository(Room::class)
            ->find($request->get("idRoom"));

            $hotelchain->setRoomType($request->get('roomType'));
            $hotelchain->setRoomCapacity($request->get('roomCapacity'));
            $hotelchain->setNbrroom($request->get('nbrroom'));
            $hotelchain->setPrice($request->get('price')); 
            
        $em->persist($hotelchain);
        $em->flush();
        $json=$normalizerInterface->normalize($hotelchain, 'json', ['groups' => 'post:read']);

        
        return new JsonResponse("Room a ete modifiee avec success.");

    }

    /**
     * @Route("/{idRoom}", name="app_room_delete", methods={"POST"})
     */
    public function delete($idRoom, Request $request, Room $room, EntityManagerInterface $entityManager): Response
    {
        $room = $entityManager->getRepository(Room::class)->find($idRoom);
            $entityManager->remove($room);
            $entityManager->flush();
            $this->addFlash(
                'danger',
                'Deleted Successfully!'
            );
        return $this->redirectToRoute('app_room_index');
    }
    /**
     * @Route("/delete/{idRoom}", name="deleteJson")
    */

    public function deleteJson (EntityManagerInterface $em  , $idRoom, Request $request , SerializerInterface $serializerInterface) {
        $hc=$em->getRepository(Room::class)->find($idRoom);
        $em->remove($hc);
        $em->flush();
        $json=$serializerInterface->serialize($hc, 'json', ['groups' => 'post:read']);
        return new Response("deleted!".json_encode($json));
    }
    /**
     * @Route("/del", name="agence_delJSON")
     * @Method("DELETE")
     */

    public function delJSON(Request $request , SerializerInterface $serializerInterface) {
        $id = $request->get("idRoom");

        $em = $this->getDoctrine()->getManager();
        $agence = $em->getRepository(Room::class)->find($id);
        if($agence!=null ) {
            $em->remove($agence);
            $em->flush();

            //$serialize = new Serializer([new ObjectNormalizer()]);
            $json=$serializerInterface->serialize($agence, 'json', ['groups' => 'post:read']);

           // $formatted = $serialize->normalize("Agence a ete supprimee avec success.");
            return new JsonResponse("deleted!".json_encode($json));

        }else{
            return new JsonResponse("id hc invalide.");}
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
