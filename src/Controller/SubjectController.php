<?php

namespace App\Controller;

use App\Entity\Subject;
use App\Entity\Topic;
use App\Entity\User;
use App\Form\SubjectType;
use App\Repository\SubjectRepository;
use App\Repository\TopicRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/subject")
 */
class SubjectController extends AbstractController
    {
     /**
     * @Route("/Back", name="app_subject_back", methods={"GET"})
     */
    public function back(SubjectRepository $subjectRepository): Response
    {
        return $this->render('BackOffice/baseBackFinal.html.twig');
    }
    /**
     * @Route("/ShowBack/{IdTopic}", name="app_subject_indexBack", methods={"GET"})
     */
    public function showBack(SubjectRepository $subjectRepository,$IdTopic): Response
    {
        return $this->render('BackOffice/subject/show.html.twig', [
            'subjectsBack' => $subjectRepository->findByidtopic($IdTopic),
        ]);
    }
    /**
     * @Route("/Show/{IdTopic}", name="app_subject_index", methods={"GET", "POST"})
     */
    public function show(Request $request,SubjectRepository $subjectRepository,TopicRepository $topicRepository,$IdTopic): Response
    {
        $subject = new Subject();
        $topic= $topicRepository->find($IdTopic);
        $form = $this->createForm(SubjectType::class, $subject);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $subject->setSubjectDate(new \DateTime("now"));
            $subject->setSubjectNumComments(0);
            $subject->setTopic($this->getDoctrine()->getRepository(Topic::class)->findOneBy(['topicId' => $IdTopic]));
            $subject->setUser($this->getDoctrine()->getRepository(User::class)->findOneBy(['id' => 90]));
            $topic->setTopicNumSubjects($topic->getTopicNumSubjects()+1);

            $subjectRepository->add($subject);
            return $this->redirectToRoute('app_subject_index',['IdTopic'=> $IdTopic], Response::HTTP_SEE_OTHER);
        }

        return $this->render('FrontOffice/subject/show.html.twig', [
            'subjects' => $subjectRepository->findByidtopic($IdTopic),
            'idTopic' => $IdTopic,
            'subject' => $subject,
            'form' => $form->createView(),

        ]);
    }

    /**
     * @Route("/new/{IdTopic}", name="app_subject_new", methods={"GET", "POST"})
     */
    public function new(Request $request, SubjectRepository $subjectRepository,$IdTopic): Response
    {
        $subject = new Subject();
        $form = $this->createForm(SubjectType::class, $subject);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $subject->setSubjectDate(new \DateTime("now"));
            $subject->setSubjectNumComments(0);
            $subject->setTopic($this->getDoctrine()->getRepository(Topic::class)->findOneBy(['topicId' => $IdTopic]));
            $subject->setUser($this->getDoctrine()->getRepository(User::class)->findOneBy(['id' => 90]));
            $subjectRepository->add($subject);
            return $this->redirectToRoute('app_subject_index',['IdTopic'=> $IdTopic], Response::HTTP_SEE_OTHER);
        }

        return $this->render('FrontOffice/subject/show.html.twig', [
            'subject' => $subject,
            'form' => $form->createView(),
            'idTopic' => $IdTopic,
        ]);
    }

    /**
     * @Route("/{subjectId}", name="app_subject_show", methods={"GET"})
     */
    public function showById(Subject $subject): Response
    {
        return $this->render('BackOffice/subject/show.html.twig', [
            'subject' => $subject,
        ]);
    }

    /**
     * @Route("/{subjectId}/edit", name="app_subject_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Subject $subject, SubjectRepository $subjectRepository): Response
    {
        $form = $this->createForm(SubjectType::class, $subject);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $subject->setSubjectDate(new \DateTime("now"));
            $subjectRepository->add($subject);
            return $this->redirectToRoute('app_subject_index', ['IdTopic'=> $subject->getTopic()->getTopicId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('FrontOffice/subject/edit.html.twig', [
            'subject' => $subject,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{subjectId}/{IdTopic}", name="app_subject_delete", methods={"POST"})
     */
    public function delete(Request $request, Subject $subject, SubjectRepository $subjectRepository,TopicRepository $topicRepository,$IdTopic): Response
    {   $topic= $topicRepository->find($IdTopic);
        if ($this->isCsrfTokenValid('delete'.$subject->getSubjectId(), $request->request->get('_token'))) {
            $topic->setTopicNumSubjects($topic->getTopicNumSubjects()-1);

            $subjectRepository->remove($subject);
        }

        return $this->redirectToRoute('app_subject_index', ['IdTopic'=> $IdTopic], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/{subjectId}/{IdTopic}/back", name="app_subject_deleteBack", methods={"POST"})
     */
    public function deleteBack(Request $request, Subject $subject, SubjectRepository $subjectRepository,TopicRepository $topicRepository,$IdTopic): Response
    {        $topic= $topicRepository->find($IdTopic);

        if ($this->isCsrfTokenValid('delete'.$subject->getSubjectId(), $request->request->get('_token'))) {
            $topic->setTopicNumSubjects($topic->getTopicNumSubjects()-1);

            $subjectRepository->remove($subject);
        }

        return $this->redirectToRoute('app_subject_indexBack', ['IdTopic'=> $IdTopic], Response::HTTP_SEE_OTHER);
    }
}
