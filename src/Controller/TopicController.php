<?php

namespace App\Controller;
use App\Entity\Topic;
use App\Entity\User;
use App\Form\TopicType;
use App\Repository\TopicRepository;
use Doctrine\ORM\EntityManagerInterface;
use NLPCloud\NLPCloud;
use phpDocumentor\Reflection\Types\Null_;
use PhpParser\Node\Scalar\String_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

/**
 * @Route("/topic")
 */
class TopicController extends AbstractController
{
    /**
     * @Route("/show", name="app_topic_index", methods={"GET", "POST"})
     * @throws \Exception
     */
    public function index(Request $request,TopicRepository $topicRepository): Response
    {
        $topic = new Topic();
        $form = $this->createForm(TopicType::class, $topic);
        $form->handleRequest($request);
      //  $client = new NLPCloud('opus-mt-en-fr','4352881aedef35e459f323edac54e9d865119731');

       // $client->tokens('4352881aedef35e459f323edac54e9d865119731');
      //  $client->sentiment("hello");
     //  $this->json($client.translation("Hello world!"));

    //  $content = json_decode($client->translation('hello'), true);

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
           //'client' => ,
        ]);
    }
    /**
     * @Route("/showTransl/{idTopic}", name="app_topic_index_Transl", methods={"GET", "POST"})
     */
    public function indexTransl(TopicRepository $topicRepository,$idTopic,TranslatorInterface $translator): Response
    {
        $topic =$topicRepository->find($idTopic);
        $topic->setTopicTitle($translator->trans($topic->getTopicTitle()));
        $topic->setTopicDescription($translator->trans($topic->getTopicDescription()));
        return $this->redirectToRoute('app_topic_index', [], Response::HTTP_SEE_OTHER);

        return $this->render('FrontOffice/topic/show.html.twig', [
            'topicc' => $topic,
            'topics' => $topicRepository->findAll(),
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
    /**
     * @Route("/Accept/{idTopic}", name="app_topic_Accept", methods={"GET", "POST"})
     */
    public function AcceptTopic(TopicRepository $topicRepository,Topic $idTopic): Response
    {

        $idTopic->setAccepttopic(1);
        $this->getDoctrine()->getManager()->flush();

        return $this->redirectToRoute('app_topic_index_Back', [], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/admin/accepter/{idtopic}", name="app_topic_accepter", methods={"GET"})
     */
    public function acceptertopic(TopicRepository $topicRepository,Topic $idtopic): Response
    {
        $idtopic->setAccepter(1);
        $this->getDoctrine()->getManager()->flush();
        return $this->render('topic/indexb.html.twig', [
            'topics' => $topicRepository->findAll(),
        ]);
    }

}
