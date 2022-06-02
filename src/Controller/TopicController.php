<?php

namespace App\Controller;
use App\Entity\Topic;
use App\Entity\User;
use App\Form\TopicType;
use App\Repository\TopicRepository;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use NLPCloud\NLPCloud;
use phpDocumentor\Reflection\Types\Null_;
use PhpParser\Node\Scalar\String_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use Knp\Bundle\TimeBundle\DateTimeFormatter;
/**
 * @Route("/topic")
 */
class TopicController extends AbstractController
{
    /**
     * @Route("/show", name="app_topic_index", methods={"GET", "POST"})
     * @throws Exception
     */
    public function index(Request $request,TopicRepository $topicRepository): Response
    {
        $topic = new Topic();
        $form = $this->createForm(TopicType::class, $topic);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        if ($form->isSubmitted() && $form->isValid()) {
            $topic->setTopicDate(new \DateTime("now")) ;
            $topic->setTopicNumSubjects(0);
            $user = $this->getUser()->getId();
            $user1= $em->getRepository(User::class)->find($user);
            $topic->setUser($this->getDoctrine()->getRepository(User::class)->find($user1));
            $topicRepository->add($topic);
            return $this->redirectToRoute('app_topic_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('FrontOffice/topic/show.html.twig', [
            'topics' => $topicRepository->findAll(),
            'topic' => $topic,
            'form' => $form->createView(),
            //'client' => $client,

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
       // return $this->redirectToRoute('app_topic_index', [], Response::HTTP_SEE_OTHER);

        return $this->render('FrontOffice/topic/show.html.twig', [
            'topicc' => $topic,
            'topics' => $topicRepository->findAll(),
        ]);
    }
    /**
     * @Route("/searchTopics/firas", name="apptopicsearch")
     */
    public function search(Request $request,SerializerInterface $serializer)
    {

        $rep = $this->getDoctrine()->getRepository(Topic::class);
        $requestString = $request->get('searchValue');
        $topics =  $rep->findByTitle($requestString);
        $jsoncontent = $serializer->serialize($topics, 'json', ['groups' => ['topics']]);
        $retour = json_encode($jsoncontent);
        return new Response($retour, 200, [
            'Content-Type' => 'application/json'
        ]);

    }
    /**
     * @Route("/showBack", name="app_topic_index_Back", methods={"GET", "POST"})
     */
    public function indexBack(TopicRepository $topicRepository,DateTimeFormatter $dateTimeFormatter): Response
    {   $someDate = new \DateTime('2022-04-18'); //or $entity->publishedDate()
        $now = new \DateTime();
        $agoTime = $dateTimeFormatter->formatDiff($someDate, $now);
        return $this->render('BackOffice/topic/show.html.twig', [
            'topics' => $topicRepository->findAll(),
            'agoTime' => $agoTime,

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
    public function AcceptTopic(TopicRepository $topicRepository,Topic $idTopic,\Swift_Mailer $mailer): Response
    {

        $idTopic->setAccepttopic(1);
        $message = (new \Swift_Message('Topic Accepted '))
            ->setFrom('aymenkhiari99@gmail.com')
            ->setTo('oussama.boussetta@esprit.tn')
            ->setBody($this->renderView(
                'BackOffice/topic/mailProfanity.html.twig',['topic'=>$idTopic->getTopicTitle(),'user'=>$idTopic->getUser()->getName()]
                ), 'text/html');
        $mailer->send($message);
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

//   /**
//     * @Route("/search/{TopicName}", name="app_topic_search", methods={"GET"})
//     */
//    public function search(TopicRepository $topicRepository,$TopicName): Response
//    {
//        $response = new JsonResponse();
//        if ($TopicName != "") {
//            $topics = $topicRepository->findByTitle($TopicName);
//            $response->setData(($topics));
//        } else{
//            $response->setData([]);
//        }
//        $response->headers->set('Content-Type', 'application/json');
//       return  $response;
//    }
//    /**
//     * @Route("/topics/allTopics", name="app_topicsearchall", methods={"GET"})
//     */
//    public function searchallTopic(): Response
//    {
//        $rep = $this->getDoctrine()->getRepository(Topic::class);
//        $topics = $rep->findallTopicss();
//        $response = new JsonResponse();
//        $response->setData($topics);
//        $response->headers->set('Content-Type', 'application/json');
//        return  $response;
//    }
//

    /**
     * @Route("/mobile/listTopicsacc", name="mobile_liste_topic", methods={"GET"})
     */
    public function liste_topicsAcc(Request $request,NormalizerInterface $Normalizer)
    {
        $repository = $this->getDoctrine()->getRepository(Topic::class);
        $topics = $repository->findAccept(1);
        $jsonContent = $Normalizer->normalize($topics, 'json',['groups'=>'topic']);
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/mobile/listTopics", name="mobile_liste_topicaccept", methods={"GET"})
     */
    public function liste_topics(Request $request,NormalizerInterface $Normalizer)
    {
        $repository = $this->getDoctrine()->getRepository(Topic::class);
        $topics = $repository->findAll();
        $jsonContent = $Normalizer->normalize($topics, 'json',['groups'=>'topic']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/mobile/topicbyid/{id}", name="mobile_topicbyid", methods={"GET"})
     */
    public function topicbyid(Request $request,$id,NormalizerInterface $Normalizer)
    {
        $repository = $this->getDoctrine()->getRepository(Topic::class);
        $topic = $repository->find($id);
        $jsonContent = $Normalizer->normalize($topic, 'json',['groups'=>'topic']);
        return new Response(json_encode($jsonContent));
    }
    /**
     * @Route("/mobile/delete", name="mobile_delete_topic")
     */
    public function deletetopic(Request $request,NormalizerInterface $Normalizer)
    {
        $repository = $this->getDoctrine()->getRepository(Topic::class);
        $topic = $repository->find($request->get('idtopic'));
        $em= $this->getDoctrine()->getManager();
        $em->remove($topic);
        $em->flush();
        return new Response("topic deleted successfully");
    }
    /**
     * @Route("/mobile/modifier/{id}", name="mobile_modifier_topic"  )
     */
    public function modifiertopic(Request $request,$id,NormalizerInterface $Normalizer)
    {
        $em= $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Topic::class);
        $topic = $repository->find($id);
        $topic->setTopicDescription($request->get('description'));
        $topic->setTopicTitle($request->get('titre'));
        $em->flush();
        return new Response("topic updated successfully");
    }
    /**
     * @Route("/mobile/ajouter", name="mobile_ajouter_topic")
     */
    public function ajoutertopic(Request $request,NormalizerInterface $normalizer)
    {
        $em= $this->getDoctrine()->getManager();
        $topic=new Topic();
        $topic->setTopicDescription($request->get('description'));
        $topic->setTopicTitle($request->get('titre'));
        $topic->setUser($this->getDoctrine()->getRepository(User::class)->findOneBy(['id' => 116]));
        $topic->setTopicDate(new \DateTime('now'));
        $topic->setTopicNumSubjects(0);
        $topic->setTopicImage($request->get('topicImage'));

        $em->persist($topic);
        $em->flush();
        $json= $normalizer->normalize($topic, "json" ,["groups"=>"topic"]);
        return new Response(json_encode($json));

    }

    /**
     * @Route("/mobile/accepter", name="app_topic_acceptermobile")
     */
    public function acceptertopicMobile(Request $request,TopicRepository $topicRepository,NormalizerInterface $Normalizer): Response
    {   $em= $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Topic::class);
        $topic = $repository->find($request->get('idtopic'));
        $topic->setAccepttopic(1);
        $em->flush();
        return new Response("topic added successfully");
    }

    /**
     * @Route("/mobile/uploadImg", name="uploadImg")
     */
    public function uploadImgtopic(Request $request, NormalizerInterface $normalizer){
        //houni uploadi image
        if (isset($_FILES['file']["name"])){
            $img=file_get_contents($_FILES["file"]["tmp_name"]);
            $fp=fopen("images\\topics\\".$_FILES['file']["name"],"w");
            fwrite($fp,$img);
            fclose($fp);

        }

        return new Response('json_encode($_FILES)');
    }


}
