<?php

namespace App\Controller;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Entity\Category;
use App\Form\CategoryType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CategoryRepository;
use App\Entity\Restaurant;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use SymfonyComponentHttpFoundationStreamedResponse;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;
use SymfonyBundleFrameworkBundleControllerController;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/category")
 */
class CategoryController extends AbstractController
{
    /**
     * @Route("/", name="app_category_index", methods={"GET"})
     */
    public function index(CategoryRepository $categoryRepository): Response
    {
        return $this->render('Backoffice/category/index.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }
    /**
     * @Route("/stat", name="dashboard", methods={"GET"})
     */
    public function stat (CategoryRepository $categoryRepository) : Response
    {

       // $e1 = $categoryRepository->find_Nb_Restau_Per_Category("Chineese");
        /*dd($e1);*/
       // dump($e1);
       $idcategory1=$this->getDoctrine()->getRepository(Category::class)->findOneBy(['nameCategory'=>'Chineese']);
      $list_of_restau1=$this->getDoctrine()->getRepository(Restaurant::class)->findBy(['idcategory' => $idcategory1->getIdcategory()]);
       $nbr_of_restau1=count($list_of_restau1);
       //dd($nbr_of_restau);
       /* $nbrs[] = $e1[0][1];**/
       $idcategory2=$this->getDoctrine()->getRepository(Category::class)->findOneBy(['nameCategory'=>'Italien']);
      $list_of_restau2=$this->getDoctrine()->getRepository(Restaurant::class)->findBy(['idcategory' => $idcategory2->getIdcategory()]);
       $nbr_of_restau2=count($list_of_restau2);
      // dd($nbr_of_restau);
       $idcategory3=$this->getDoctrine()->getRepository(Category::class)->findOneBy(['nameCategory'=>'Mexican']);
      $list_of_restau3=$this->getDoctrine()->getRepository(Restaurant::class)->findBy(['idcategory' => $idcategory3->getIdcategory()]);
       $nbr_of_restau3=count($list_of_restau3);
      // dd($nbr_of_restau);

      //  $e2 = $categoryRepository->find_Nb_Restau_Per_Category("Italien");
        //dd($e2);
        //dump($e2);
        //$nbrs[] = $e2[0][1];
    

        
        //$e3=$categoryRepository->find_Nb_Restau_Per_Category("Mexican");
        //dump($e3);
       // $nbrs[]=$e3[0][1];
        
       // dump($nbrs);
       // reset($nbrs);
       // dump(reset($nbrs));
       // $key = key($nbr_of_restau);
       // dump($key);
        //dump($nbr_of_restau[$key]);
       // unset($nbr_of_restau[$key]);
       // $nbrss = array_values($nbr_of_restau);
       // dump(json_encode($nbrss));
        
        return $this->render('Backoffice/category/dashboard.html.twig', [
         'nbr1' => $nbr_of_restau1,
         'nbr2' => $nbr_of_restau2,
         'nbr3' => $nbr_of_restau3
                ]);

       

       
    }
    /**
     * @Route("/indexFrontcat", name="app_category_indexFront", methods={"GET"})
     */
    public function indexFront(CategoryRepository $categoryRepository): Response
    {
        return $this->render('Frontoffice/category/indexFrontcat.html.twig',[
            'categories' => $categoryRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_category_new", methods={"GET", "POST"})
     */
    public function new(Request $request, CategoryRepository $categoryRepository): Response
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $categoryRepository->add($category);
            $this->addFlash(
                'success',
                'Added Successfully!'
            );
            return $this->redirectToRoute('app_category_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Backoffice/category/new.html.twig', [
            'category' => $category,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idcategory}", name="app_category_show", methods={"GET"})
     */
    public function show(Category $category): Response
    {
        return $this->render('Backoffice/category/show.html.twig', [
            'category' => $category,
        ]);
    }

    /**
     * @Route("/{idcategory}/edit", name="app_category_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Category $category, CategoryRepository $categoryRepository): Response
    {
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $categoryRepository->add($category);
            $this->addFlash(
                'success',
                'Edited Successfully!'
            );
            return $this->redirectToRoute('app_category_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('Backoffice/category/edit.html.twig', [
            'category' => $category,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idcategory}", name="app_category_delete", methods={"POST"})
     */
    public function delete(Request $request, Category $category, CategoryRepository $categoryRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$category->getIdcategory(), $request->request->get('_token'))) {
            $categoryRepository->remove($category);
        }

        return $this->redirectToRoute('app_category_index', [], Response::HTTP_SEE_OTHER);
    }
}
