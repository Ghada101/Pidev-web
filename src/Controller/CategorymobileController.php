<?php

namespace App\Controller;
use App\Entity\Category;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;



class CategorymobileController extends AbstractController
{


    /**
     * @Route("/display", name="app_category_displaymobile", methods={"GET","POST"})
     */
    public function display(CategoryRepository $categoryRepository,EntityManagerInterface $entityManager, NormalizerInterface $normalizer,Request $request): Response
    {

        $category = $this->getDoctrine()->getRepository(Category::class)->findAll();
        $json = $normalizer->normalize($category, "json");
        return new Response(json_encode($json));

    }


    /**
     * @Route("/delete", name="app_mobile_delete", methods={"GET","POST"})
     *
     */
    public function delete(Request $request)
    {
        $idcategory=$request->get("idcategory");
        $em =$this->getDoctrine()->getManager();
        $category=$em->getRepository(Category::class)->find($idcategory);
        if($category!=null){
            $em->remove($category);
            $em->flush();
            $serialize= new Serializer([new ObjectNormalizer()]);
            $formatted=$serialize->normalize("category is deleted.");
            return new JsonResponse($formatted);
        }

        return new JsonResponse("id category is invalid");





    }

    /**
     * @Route("/update", name="app_mobile_update")
     *
     */
    public function addCategoryMobilee(Request $request, NormalizerInterface $normalizer){
        $em =$this->getDoctrine()->getManager();
        $category= new  Category();
        $category->setNameCategory($request->get('nameCategory'));
        $category->setDescriptionCategory($request->get('descriptionCategory'));
        $em->persist($category);
        $em->flush();

        $json= $normalizer->normalize($category, "json", ['groups'=>'post:read']
        );

        return new JsonResponse(json_encode($json));

    }
    /*public function update(Request $request, NormalizerInterface $normalizer)
    {

    $em =$this->getDoctrine()->getManager();
    $category=$this->getDoctrine()->getManager()->getRepository(Category::class)
    ->find($request->get('idcategory'));
    $category->setNameCategory($request->get('nameCategory'));
    $category->setDescriptionCategory($request->get('descriptionCategory'));
    //        $products->setDescription($request->get("description"));
    //        $products->setPrice($request->get("price"));
    //        $products->setDiscount($request->get("discount"));
    //        $products->setQuantity($request->get("quantity"));
    //        $products->setImage($request->get("image"));
    //        $cat= $em->getRepository(Category::class)->findOneBy(["category"=>$request->get('category')]);
    //        $products->setCategory($cat);

        $json= $normalizer->normalize($category, "json", [
            'attributes' => [
                'idcategory',
                'nameCategory',
                'descriptionCategory']
        ]);

        $em->flush();
        return new Response(json_encode($json));


    }*/
    /**
     * @Route("/modifier", name="app_mobile_add", methods = {"PUT"})
     */
    public function update(Request $request, NormalizerInterface $normalizer)
    {

        $em =$this->getDoctrine()->getManager();
        $category=$this->getDoctrine()->getManager()->getRepository(Category::class)
            ->find($request->get('idcategory'));
        $category->setNameCategory($request->get('nameCategory'));
        $category->setDescriptionCategory($request->get('descriptionCategory'));
//        $products->setDescription($request->get("description"));
//        $products->setPrice($request->get("price"));
//        $products->setDiscount($request->get("discount"));
//        $products->setQuantity($request->get("quantity"));
//        $products->setImage($request->get("image"));
//        $cat= $em->getRepository(Category::class)->findOneBy(["category"=>$request->get('category')]);
//        $products->setCategory($cat);

        $json= $normalizer->normalize($category, "json", ['groups'=>'post:read']);

        $em->flush();
        return new Response(json_encode($json));


    }}
