<?php

namespace App\Controller;

use Api2Pdf\Api2Pdf;
use App\Entity\Event;
use App\Form\EventType;
use App\Form\SearchEventType;
use App\Repository\EventRepository;

use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/event")
 */
class EventController extends AbstractController
{
    /**
     * @Route("/", name="app_event_index", methods={"GET"})
     */
    public function index(EventRepository $eventRepository): Response
    {
        $events = $eventRepository->findAll();
        $data = array();
        foreach ($events as $key => $event){
            $data[$key]['title'] = $event->getTitle();

        }
        return new JsonResponse($data);
    }
    /**
     * @Route("/location", name="app_leaflet")
     */
    public function leafletLocation(): Response
    {
        return $this->render('leaflet/leaflet.html.twig', [
        ]);
    }
    /**
     * @Route("/pdf", name="app_pdf", methods={"GET"})
     */
    public function pdfSecond(EventRepository $eventRepository): Response
    {
        return $this->render('event/pdf .html.twig', [
            'events' => $eventRepository->findAll(),
        ]);

    }
    /**
     * @Route("/frontview", name="app_event_indexFront", methods={"GET"})
     */
    public function indexFront(EventRepository $eventRepository, Request $request): Response
    {
        $data = new SearchController();
        $data->page = $request->get('page',1);
        $form = $this->createForm(SearchEventType::class,$data);
        $form->handleRequest($request);
        $events = $eventRepository->findSearch($data);

        return $this->render('event/indexFront.html.twig', [
            'events' => $events,
            'form'=> $form->createView()
        ]);
    }
    /**
     * @Route("/download", name="app_event_download", methods={"GET"})
     */
    public function EventDataDownload(): Response
    {
       //pdf options
        $pdfOptions = new Options();
        //Police par defaut
        $pdfOptions->set('defaultFront','Arial');
        $pdfOptions->setIsRemoteEnabled(true);
        /// Dompdf instance
        $dompdf = new Dompdf();
        $context = stream_context_create([
            'ssl'=>[
                'verify_peer'=> FALSE,
                'verify_peer_name'=> FALSE,
                'allow_self_signed'=>TRUE,
                'allow_url_fopen'=>TRUE
            ]
        ]);
        $dompdf->setHttpContext($context);
        // HTM  generate
        $html = $this->renderView('event/pdf.html.twig');
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4','portrait');
        $dompdf->render();
        /// generate file name
        $fichier ='Event-data.pdf';
        //send pdf to webrowser
        $dompdf->stream($fichier,[
            'Attachment'=> true
        ]);
        return new Response();
    }

    /**
     * @Route("/new", name="app_event_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EventRepository $eventRepository): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $eventRepository->add($event);
            return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('event/new.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
        ]);
    }



    /**
     * @Route("/{id}", name="app_event_show", methods={"GET"})
     */
    public function show(Event $event): Response
    {
        return $this->render('event/show.html.twig', [
            'event' => $event,
        ]);
    }
    /**
     * @Route("/frontview/{id}/show", name="app_event_show_front", methods={"GET"})
     */
    public function showFront(Event $event): Response
    {
        return $this->render('event/destination_details.html.twig', [
            'event' => $event,
        ]);
    }
    /**
     * @Route("/frontview/{id}/show/location", name="app_event_show_location", methods={"GET"})
     */
    public function showLocation(Event $event): Response
    {
        return $this->render('event/map.html.twig', [
            'event' => $event,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_event_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Event $event, EventRepository $eventRepository): Response
    {
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $images = $form->get('image')->getData();

            // On boucle sur les images
            foreach ($images as $image) {
                // On génère un nouveau nom de fichier
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();

                // On copie le fichier dans le dossier uploads
                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );

                // On crée l'image dans la base de données

                $event->setImage($fichier);
            }
                $eventRepository->add($event);
                return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);

        }
            return $this->render('event/edit.html.twig', [
                'event' => $event,
                'form' => $form->createView(),
            ]);
        }


    /**
     * @Route("/{id}", name="app_event_delete", methods={"POST"})
     */
    public function delete(Request $request, Event $event, EventRepository $eventRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$event->getId(), $request->request->get('_token'))) {
            $eventRepository->remove($event);
        }

        return $this->redirectToRoute('app_event_index', [], Response::HTTP_SEE_OTHER);
    }

}

