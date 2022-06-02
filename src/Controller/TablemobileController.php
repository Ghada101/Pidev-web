<?php

namespace App\Controller;
use App\Entity\Tablee;
use App\Entity\Restaurant;
use App\Repository\TableeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;



class TablemobileController extends AbstractController
{


    /**
     * @Route("/displayTable", name="app_tablee_displaymobile", methods={"GET","POST"})
     */
    public function display(TableeRepository $tableeRepository,EntityManagerInterface $entityManager, NormalizerInterface $normalizer,Request $request): Response
    {

        $tablee = $this->getDoctrine()->getRepository(Tablee::class)->findAll();
        $json = $normalizer->normalize($tablee, "json");
        return new Response(json_encode($json));

    }


    /**
     * @Route("/deleteTable", name="app_Table_mobile_delete")
     *
     */
    public function delete(Request $request)
    {
        $idTable=$request->get("idTable");
        $em =$this->getDoctrine()->getManager();
        $tablee=$em->getRepository(Tablee::class)->find($idTable);
        if($tablee!=null){
            $em->remove($tablee);
            $em->flush();
            $serialize= new Serializer([new ObjectNormalizer()]);
            $formatted=$serialize->normalize("table is deleted.");
            return new JsonResponse($formatted);
        }

        return new JsonResponse("id table is invalid");





    }

    /**
     * @Route("/updateTable", name="app_Table_mobile_update")
     *
     */
    public function update(Request $request, NormalizerInterface $normalizer)
    {

        $em =$this->getDoctrine()->getManager();
        $tablee=$this->getDoctrine()->getManager()->getRepository(Tablee::class)
            ->find($request->get('idTable'));
        $tablee->setNbrPlace($request->get('NbrPlace'));
        $tablee->setDescription($request->get('Description'));
        $restaurant= $this->getDoctrine()->getRepository(Restaurant::class)->find($request->get('idRestau'));
//        $products->setDescription($request->get("description"));
//        $products->setPrice($request->get("price"));
//        $products->setDiscount($request->get("discount"));
//        $products->setQuantity($request->get("quantity"));
//        $products->setImage($request->get("image"));
//        $cat= $em->getRepository(Category::class)->findOneBy(["category"=>$request->get('category')]);
//        $products->setCategory($cat);

        $json= $normalizer->normalize($tablee, "json",['groups'=>'post:read']
        );

        $em->flush();
        return new Response(json_encode($json));


    }
    /**
     * @Route("/addTable", name="app_mobile_add")
     */
    public function addTablemobile(Request $request, NormalizerInterface $normalizer){
        $em =$this->getDoctrine()->getManager();
        $tablee= new tablee();
        $tablee->setNbrPlace($request->get('nbrplace'));
        $tablee->setDescription($request->get('description'));
        $restaurant= $this->getDoctrine()->getRepository(Restaurant::class)->find($request->get('idRestau'));
        $em->persist($tablee);
        $em->flush();
        $json= $normalizer->normalize($tablee, "json", ['groups'=>'post:read' ]);

        return new Response(json_encode($json));

    }





}