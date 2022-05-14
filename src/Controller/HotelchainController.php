<?php

namespace App\Controller;

use App\Entity\Hotelchain;
use App\Form\HotelchainType;
use App\Repository\HotelchainRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use phpDocumentor\Reflection\DocBlock\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Serializer as SerializerSerializer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
/**
 * @Route("/hotelchain")
 */
class HotelchainController extends AbstractController
{
    /**
     * @Route("/", name="app_hotelchain_index", methods={"GET"})
     */
    public function index(Request $request, EntityManagerInterface $entityManager, PaginatorInterface $paginator): Response
    {
        $hotelchains = $entityManager
            ->getRepository(Hotelchain::class)
            ->findAll();

        $hotelchains=$paginator->paginate($hotelchains, $request->query->getInt('page', 1), 1);

        return $this->render('backOffice/hotelchain/index.html.twig', [
            'hotelchains' => $hotelchains,
        ]);

    }
    /**
     * @Route("/mobile/listem", name="listem")
     */
    public function indexJson(NormalizerInterface $normalizerInterface) {
        $repository = $this->getDoctrine()->getRepository(Hotelchain::class);
        $hotelchain = $repository->findAll();
        
        $json= $normalizerInterface->normalize($hotelchain,'json',['groups'=>'post:read']);
       // return $this->render
 
        return new Response(json_encode($json));
    }

    /**
     * @Route("/new", name="app_hotelchain_new", methods={"GET", "POST"})
    * @Method("DELETE")
     */
    public function delJSONj(Request $request , SerializerInterface $serializerInterface) {
        $id = $request->get("idHotelchain");

        $em = $this->getDoctrine()->getManager();
        $agence = $em->getRepository(HotelChain::class)->find($id);
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
     * @Route("/web/HC", name="app_hotelchain_newhc", methods={"GET", "POST"})
     */

    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $hotelchain = new Hotelchain();
        $form = $this->createForm(HotelchainType::class, $hotelchain);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($hotelchain);
            $entityManager->flush();
            $this->addFlash(
                'success',
                'Added Successfully!'
            );
            return $this->redirectToRoute('app_hotelchain_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('backOffice/hotelchain/new.html.twig', [
            'hotelchain' => $hotelchain,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/add" , name="add_HC_Json")
     */
    public function addHotelChainJson (Request $request , SerializerInterface $serializerInterface , EntityManagerInterface $entityManager){
        $entityManager = $this->getDoctrine()->getManager();
         $hotelchain = new Hotelchain();
        $hotelchain->setHotelchainName($request->get('hotelchainName'));
        $hotelchain->setHotelchainStaff($request->get('hotelchainStaff'));
        $hotelchain->setHotelchainDescription($request->get('hotelchainDescription'));
        $hotelchain->setPhone($request->get('phone')); 
        $entityManager->persist($hotelchain);
        $entityManager->flush();
        $jsoncontent= $serializerInterface->serialize($hotelchain, 'json', ['groups'=>'post:read']);
        return new Response(json_encode($jsoncontent));
        
        // $content=$request->getContent();
        // $data=$serializerInterface->deserialize($content,Hotelchain::class,'json');
        // $entityManager->persist($data);
        // $entityManager->flush();
        // return new Response("added");
    }


    /**
     * @Route("/{idHotelchain}", name="app_hotelchain_show", methods={"GET"})
     */
    public function show(Hotelchain $hotelchain): Response
    {
        return $this->render('backOffice/hotelchain/show.html.twig', [
            'hotelchain' => $hotelchain,
        ]);
    } 

    /**
     * @Route("/show/{idHotelchain}", name="app_hotelchain_showjson", methods={"GET"})
     */
    public function showJson ($idHotelchain, NormalizerInterface $normalizerInterface) {
        $entityManager = $this->getDoctrine()->getManager();
        $hc=$entityManager->getRepository(Hotelchain::class)->find($idHotelchain);
        $jsoncontent = $normalizerInterface->normalize($hc,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsoncontent));
    }


    /**
     * @Route("/{idHotelchain}/edit", name="app_hotelchain_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Hotelchain $hotelchain, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(HotelchainType::class, $hotelchain);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash(
                'info',
                'Edited Successfully!'
            );

            return $this->redirectToRoute('app_hotelchain_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('backOffice/hotelchain/edit.html.twig', [
            'hotelchain' => $hotelchain,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/mod", name="app_hotelchain_updatejson")
     * @Method("PUT")
     */
    public function updateJson ($idHotelchain, Request $request) {
        $em=$this->getDoctrine()->getManager();
        $hotelchain=$this->getDoctrine()->getRepository(Hotelchain::class)->find($idHotelchain);
        $hotelchain->setHotelchainName($request->get('hotelchainName'));
        $hotelchain->setHotelchainStaff($request->get('hotelchainStaff'));
        $hotelchain->setHotelchainDescription($request->get('hotelchainDescription'));
        $hotelchain->setPhone($request->get('phone')); 
        $em->flush();
        return new Response("updated");
    }


    /**
     * @Route("/admin/agence/updateJSON", name="agence_updateJSON")
     * @Method("PUT")
     */
    public function modifierJson(Request $request , NormalizerInterface $normalizerInterface) {
        $em = $this->getDoctrine()->getManager();
        $hotelchain = $this->getDoctrine()->getManager()
            ->getRepository(HotelChain::class)
            ->find($request->get("idHotelchain"));

            $hotelchain->setHotelchainName($request->get('hotelchainName'));
            $hotelchain->setHotelchainStaff($request->get('hotelchainStaff'));
            $hotelchain->setHotelchainDescription($request->get('hotelchainDescription'));
            $hotelchain->setPhone($request->get('phone')); 
        // $agence->setVideo($request->get("Video"));

        $em->persist($hotelchain);
        $em->flush();
        $json=$normalizerInterface->normalize($hotelchain, 'json', ['groups' => 'post:read']);

        
        return new JsonResponse("Agence a ete modifiee avec success.");

    }


    /**
     * @Route("/{idHotelchain}", name="app_hotelchain_delete", methods={"GET","POST"})
     */
    public function delete($idHotelchain, Request $request, Hotelchain $hotelchain, EntityManagerInterface $entityManager): Response
    {
        $hotelchain = $entityManager->getRepository(Hotelchain::class)->find($idHotelchain);
            $entityManager->remove($hotelchain);
            $entityManager->flush();
        
            $this->addFlash(
                'danger',
                'Deleted Successfully!'
            );
        return $this->redirectToRoute('app_hotelchain_index');
    }

    /**
     * @Route("/delete/{idHotelchain}", name="app_hotelchain_deletejson")
    */

    public function deleteJson (EntityManagerInterface $em  , $idHotelchain, Request $request , SerializerInterface $serializerInterface) {
        $hc=$em->getRepository(Hotelchain::class)->find($idHotelchain);
        $em->remove($hc);
        $em->flush();
        $json=$serializerInterface->serialize($hc, 'json', ['groups' => 'post:read']);
        return new Response("deleted!".json_encode($json));
    }

    /**
     * @Route("/admin/agence/delJSON", name="agence_delJSON")
     * @Method("DELETE")
     */

    public function delJSON(Request $request , SerializerInterface $serializerInterface) {
        $id = $request->get("idHotelchain");

        $em = $this->getDoctrine()->getManager();
        $agence = $em->getRepository(HotelChain::class)->find($id);
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
      * @Route("/", name="excel", methods={"GET", "POST"})
     */
    public function Exceldownload()
    {
        $spreadsheet = new Spreadsheet();
        
        /* @var $sheet \PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet */
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Hello World !');
        $sheet->setTitle("My First Worksheet");
        
        // Create your Office 2007 Excel (XLSX Format)
        $writer = new Xlsx($spreadsheet);
        
        // Create a Temporary file in the system
        $fileName = 'my_first_excel_symfony4.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);
        
        // Create the excel file in the tmp directory of the system
        $writer->save($temp_file);

        // Return the excel file as an attachment
        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE); }
    
}
