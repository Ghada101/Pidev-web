<?php

namespace App\Controller;

use App\Entity\Agency;
use App\Entity\Car;
use App\Form\AgencyType;
use App\Repository\AgencyRepository;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/agency")
 */
class AgencyController extends AbstractController
{
    /**
     * @Route("/show", name="app_agency_index", methods={"GET"})
     */
    public function index(AgencyRepository $agencyRepository): Response
    {
        return $this->render('Backoffice/agency/show.html.twig', [
            'agencies' => $agencyRepository->findAll(),
        ]);
    }

    /**
     * @Route("/front", name="app_agency_frontindex", methods={"GET"})
     */
    public function Frontindex(AgencyRepository $agencyRepository, Request $request, PaginatorInterface $paginator): Response
    {
        $em = $this->getDoctrine()->getManager();
        $agencies = $em->getRepository(Agency::class)->findAll();
        //$agenciesTest=$em->getRepository(Agency::class)->findBy();

        $agencies = $paginator->paginate(
            $agencies,
            $request->query->getInt('page', 1), 6
        );


        return $this->render('Frontoffice/agency/show.html.twig', [
            'agencies' => $agencies
        ]);
    }

    /**
     * @Route("/back", name="app_agency_index_back", methods={"GET"})
     */
    public function defaultBack(): Response
    {
        return $this->render('Backoffice/baseback.html.twig', [
        ]);
    }

    /**
     * @Route("/new", name="app_agency_new", methods={"GET", "POST"})
     */
    public function new(Request $request, AgencyRepository $agencyRepository): Response
    {
        $agency = new Agency();
        $form = $this->createForm(AgencyType::class, $agency);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $agency->setNbrlike(0);
            $agencyRepository->add($agency);
            return $this->redirectToRoute('app_agency_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('BackOffice/agency/new.html.twig', [
            'agency' => $agency,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idAgency}/details", name="app_agency_show", methods={"GET"})
     */
    public function show(Agency $agency): Response
    {
        return $this->render('agency/show.html.twig', [
            'agency' => $agency,
        ]);
    }

    /**
     * @Route("/{idAgency}/edit", name="app_agency_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Agency $agency, AgencyRepository $agencyRepository): Response
    {
        $form = $this->createForm(AgencyType::class, $agency);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $agencyRepository->add($agency);
            return $this->redirectToRoute('app_agency_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('BackOffice/agency/edit.html.twig', [
            'agency' => $agency,
            'form' => $form->createView(),
        ]);
    }

    /* /**
      * @Route("/{idAgency}/delete", name="app_agency_delete")
      */
    /* public function delete(Request $request, Agency $agency, AgencyRepository $agencyRepository): Response
     {
         if ($this->isCsrfTokenValid('delete'.$agency->getIdAgency(), $request->request->get('_token'))) {
             $agencyRepository->remove($agency);
         }
         return $this->redirectToRoute('app_agency_index',[], Response::HTTP_SEE_OTHER);
 }*/

    /**
     * @Route("/{idAgency}/delete", name="app_agency_delete")
     */
    public function deleteAgency($idAgency): Response
    {
        $rep = $this->getDoctrine()->getRepository(Agency::class);
        $em = $this->getDoctrine()->getManager();
        $classroom = $rep->find($idAgency);
        $em->remove($classroom);
        $em->flush();
        return $this->redirectToRoute('app_agency_index');
    }


    /**
     * @Route("/search/{nameagency}/{pageNumber}", name="app_agency_findByname"), methods={"GET"})
     */
    public function findByName($nameagency,$pageNumber): Response
    {
        $rep = $this->getDoctrine()->getRepository(Agency::class);
        $response = new JsonResponse();
        if ($nameagency != "") {
            $agencies = $rep->findByName($nameagency,$pageNumber);
            $response->setData(($agencies));
        } else {
            $response->setData([]);
        }
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }


    /**
     * @Route("/SearchAll/{pageNumber}", name="app_agency_findall"), methods={"GET"})
     */
    public function searchAllAgencies(Request $request,$pageNumber):Response
    {
        $rep = $this->getDoctrine()->getRepository(Agency::class);
        $agencies = $rep->findAllAgencies($pageNumber);
        $response = new JsonResponse();
        $response->setData($agencies);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }


    /**
     * @Route("/admin/msg",name="msg")
     */
    public function msg(Request $request)
    {
        DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);
        $config=[];
        $botman = BotManFactory::create($config);
        $botman->hears("(hello|h|hel|hey|hi)",function(BotMan $botman){
            $botman->reply("How can i help you?");
        });
        $botman->hears("best agency",function(BotMan $botman){
            $agency=$this->getDoctrine()->getRepository(Agency::class)->findBestAgency()[0];
            $botman->reply("the best agency is ".$agency->getNameagency());
        });
        $botman->hears("number of cars",function(BotMan $botman){
            $agency=$this->getDoctrine()->getRepository(Car::class)->findAll();
            $botman->reply("the number of cars is ".count($agency));
        });
        $botman->hears("number of agencies",function(BotMan $botman){
            $agency=$this->getDoctrine()->getRepository(Agency::class)->findAll();
            $botman->reply("the number of agencies is ".count($agency));
        });
        $botman->hears("(thanks|ty|thank you|THANKS A LOT|thanks alot)",function(BotMan $botman){
            $botman->reply("Thats what i am here for");
        });
        $botman->hears("help",function(BotMan $botman){
            $botman->reply("You can find the guides in this menu : \n 1-best agency \n 2-number of cars \n 3-number of agencies \n 4-help");
        });
        $botman->fallback(function($bot){
            $bot->reply("Sorry, I don't understand you");
        });
        $botman->listen();
        return new Response();
    }
    /**
     * @Route("/chatframe", name="chatframe")
     */
    public function chatframeAction(Request $request)
    {
        return $this->render('Frontoffice/agency/chattframe.html.twig');
        //create new file

    }


}
