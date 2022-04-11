<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Subject;
use App\Entity\User;
use App\Form\CommentType;
use App\Repository\CommentRepository;
use App\Repository\SubjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/comment")
 */
class CommentController extends AbstractController
{
    /**
     * @Route("/showBack/{IdSubject}", name="app_comment_index", methods={"GET"})
     */
    public function index(CommentRepository $commentRepository,$IdSubject): Response
    {
        return $this->render('BackOffice/comment/show.html.twig', [
            'comments' => $commentRepository->findByidsubject($IdSubject),
        ]);
    }

    /**
     * @Route("/show/{IdSubject}", name="app_comment_show", methods={"GET", "POST"})
     */
    public function new(Request $request, CommentRepository $commentRepository,SubjectRepository $subjectRepository,$IdSubject): Response
    {
        $comment = new Comment();
        $subject = $subjectRepository->find($IdSubject);
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setCommentDate(new \DateTime("now"));
            $comment->setSubject($this->getDoctrine()->getRepository(Subject::class)->findOneBy(['subjectId' => $IdSubject]));
            $comment->setUser($this->getDoctrine()->getRepository(User::class)->findOneBy(['id' => 90]));
            $subject->setSubjectNumComments($subject->getSubjectNumComments()+1);
            $commentRepository->add($comment);
            return $this->redirectToRoute('app_comment_show', ['IdSubject'=> $IdSubject], Response::HTTP_SEE_OTHER);
        }
        return $this->render('FrontOffice/comment/show.html.twig', [
            'comments' => $commentRepository->findByidsubject($IdSubject),
            '$idSubject' => $IdSubject,
            'comment' => $comment,
            'subject' => $subject,
            'form' => $form->createView(),
        ]);


    }

    /**
     * @Route("/{commentId}", name="app_comment_show1   ", methods={"GET"})
     */
    public function show(Comment $comment): Response
    {
        return $this->render('comment/show.html.twig', [
            'comment' => $comment,
        ]);
    }

    /**
     * @Route("/{commentId}/edit", name="app_comment_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Comment $comment, CommentRepository $commentRepository): Response
    {
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commentRepository->add($comment);
            return $this->redirectToRoute('app_comment_show', ['IdSubject'=> $comment->getSubject()->getSubjectId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('FrontOffice/comment/edit.html.twig', [
            'comment' => $comment,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{commentId}/{IdSubject}", name="app_comment_delete", methods={"POST"})
     */
    public function delete(Request $request, Comment $comment, CommentRepository $commentRepository,SubjectRepository $subjectRepository,$IdSubject): Response
    {  $subject = $subjectRepository->find($IdSubject);
        if ($this->isCsrfTokenValid('delete'.$comment->getCommentId(), $request->request->get('_token'))) {
            $subject->setSubjectNumComments($subject->getSubjectNumComments()-1);
            $commentRepository->remove($comment);
        }

        return $this->redirectToRoute('app_comment_show', ['IdSubject'=>$IdSubject], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/{commentId}/{IdSubject}/back", name="app_comment_deleteBack", methods={"POST"})
     */
    public function deleteBack(Request $request, Comment $comment, CommentRepository $commentRepository,SubjectRepository $subjectRepository,$IdSubject): Response
    {  $subject = $subjectRepository->find($IdSubject);
        if ($this->isCsrfTokenValid('delete'.$comment->getCommentId(), $request->request->get('_token'))) {
            $subject->setSubjectNumComments($subject->getSubjectNumComments()-1);
            $commentRepository->remove($comment);
        }

        return $this->redirectToRoute('app_comment_index', ['IdSubject'=>$IdSubject], Response::HTTP_SEE_OTHER);
    }
}
