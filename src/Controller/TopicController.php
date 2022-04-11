<?php

namespace App\Controller;

use App\Entity\Topic;
use App\Entity\User;
use App\Form\TopicType;
use App\Repository\TopicRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/topic")
 */
class TopicController extends AbstractController
{
    /**
     * @Route("/show", name="app_topic_index", methods={"GET", "POST"})
     */
    public function index(Request $request,TopicRepository $topicRepository): Response
    {   $topic = new Topic();
        $form = $this->createForm(TopicType::class, $topic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $topic->setTopicDate(new \DateTime("now")) ;
            $topic->setTopicNumSubjects(0);
            $topic->setUser($this->getDoctrine()->getRepository(User::class)->findOneBy(['id' => 90]));
            $topicRepository->add($topic);
            return $this->redirectToRoute('app_topic_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('FrontOffice/topic/show.html.twig', [
            'topics' => $topicRepository->findAll(),
            'topic' => $topic,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/showBack", name="app_topic_index_Back", methods={"GET", "POST"})
     */
    public function indexBack(TopicRepository $topicRepository): Response
    {
        return $this->render('BackOffice/topic/show.html.twig', [
            'topics' => $topicRepository->findAll(),

        ]);
    }

    /**
     * @Route("/new", name="app_topic_new", methods={"GET", "POST"})
     */
    public function new(Request $request, TopicRepository $topicRepository): Response
    {
        $topic = new Topic();
        $form = $this->createForm(TopicType::class, $topic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $topic->setTopicDate(new \DateTime("now")) ;
            $topic->setTopicNumSubjects(0);
            $topic->setUser($this->getDoctrine()->getRepository(User::class)->findOneBy(['id' => 90]));
            $topicRepository->add($topic);
            return $this->redirectToRoute('app_topic_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('FrontOffice/topic/show.html.twig', [
            'topic' => $topic,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{topicId}", name="app_topic_show", methods={"GET"})
     */
    public function show(Topic $topic): Response
    {
        return $this->render('FrontOffice/topic/show.html.twig', [
            'topic' => $topic,
        ]);
    }

    /**
     * @Route("/{topicId}/edit", name="app_topic_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Topic $topic, TopicRepository $topicRepository): Response
    {
        $form = $this->createForm(TopicType::class, $topic);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $topic->setTopicDate(new \DateTime("now")) ;
            $topicRepository->add($topic);
            return $this->redirectToRoute('app_topic_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('FrontOffice/topic/edit.html.twig', [
            'topic' => $topic,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{topicId}/back", name="app_topic_delete_Back", methods={"POST"})
     */
    public function deleteBack(Request $request, Topic $topic, TopicRepository $topicRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$topic->getTopicId(), $request->request->get('_token'))) {
            $topicRepository->remove($topic);
        }

        return $this->redirectToRoute('app_topic_index_Back', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/{topicId}", name="app_topic_delete", methods={"POST"})
     */
    public function delete(Request $request, Topic $topic, TopicRepository $topicRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$topic->getTopicId(), $request->request->get('_token'))) {
            $topicRepository->remove($topic);
        }

        return $this->redirectToRoute('app_topic_index', [], Response::HTTP_SEE_OTHER);
    }
}
