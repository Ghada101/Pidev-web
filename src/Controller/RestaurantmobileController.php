<?php

namespace App\Controller;
use App\Entity\Restaurant;
use App\Entity\Category;
use App\Repository\RestaurantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;



class RestaurantmobileController extends AbstractController
{


    /**
     * @Route("/displayRestau", name="app_restaurant_displaymobile", methods={"GET","POST"})
     */
    public function display(RestaurantRepository $restaurantRepository,EntityManagerInterface $entityManager, NormalizerInterface $normalizer,Request $request): Response
    {

        $restaurant = $this->getDoctrine()->getRepository(Restaurant::class)->findAll();
        $json = $normalizer->normalize($restaurant, "json");
        return new Response(json_encode($json));

    }


    /**
     * @Route("/deleteRestau", name="app_Restau_mobile_delete")
     *
     */
    public function delete(Request $request)
    {
        $idRestau=$request->get("idRestau");
        $em =$this->getDoctrine()->getManager();
        $restaurant=$em->getRepository(Restaurant::class)->find($idRestau);
        if($restaurant!=null){
            $em->remove($restaurant);
            $em->flush();
            $serialize= new Serializer([new ObjectNormalizer()]);
            $formatted=$serialize->normalize("restaurant is deleted.");
            return new JsonResponse($formatted);
        }

        return new JsonResponse("id restaurant is invalid");





    }

    /**
     * @Route("/updateRestau", name="app_Restau_mobile_update")
     *
     */
    public function update(Request $request, NormalizerInterface $normalizer)
    {

        $em =$this->getDoctrine()->getManager();
        $restaurant=$this->getDoctrine()->getManager()->getRepository(Restaurant::class)
            ->find($request->get('idRestau'));
        $restaurant->setNameRestau($request->get('nameRestau'));
        $restaurant->setDescriptionRestau($request->get('descriptionRestau'));
        $restaurant->setPhoneRestau($request->get('phoneRestau'));
        $restaurant->setLocationRestau($request->get('locationRestau'));
        $restaurant->setRestaurantimg($request->get('Restaurantimg'));
//        $products->setDescription($request->get("description"));
//        $products->setPrice($request->get("price"));
//        $products->setDiscount($request->get("discount"));
//        $products->setQuantity($request->get("quantity"));
//        $products->setImage($request->get("image"));
//        $cat= $em->getRepository(Category::class)->findOneBy(["category"=>$request->get('category')]);
//        $products->setCategory($cat);

        $json= $normalizer->normalize($restaurant, "json", [$em->persist($restaurant)]);

        $em->flush();
        return new Response(json_encode($json));


    }
    /**
     * @Route("/addRestau", name="app_Restau_mobile_add")
     */
    public function addRestaurantMobile(Request $request, NormalizerInterface $normalizer){
        $em =$this->getDoctrine()->getManager();
        $restaurant= new restaurant();
        $restaurant->setNameRestau($request->get('nameRestau'));
        $restaurant->setDescriptionRestau($request->get('descriptionRestau'));
        $restaurant->setPhoneRestau($request->get('phoneRestau'));
        $restaurant->setLocationRestau($request->get('locationRestau'));
//$restaurant->setRestaurantimg('aa');
        $category= $this->getDoctrine()->getRepository(Category::class)->find($request->get('idcategory'));
        $restaurant->setIdcategory($category);
        $em->persist($restaurant);
        $em->flush();
        $json= $normalizer->normalize($restaurant, "json", ['groups'=>'post:read' ]);

        return new Response(json_encode($json));

    }





}
