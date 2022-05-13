<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Dislikee;
use App\Entity\Likee;
use App\Entity\Subject;
use App\Entity\User;
use App\Form\CommentType;
use App\Repository\CommentRepository;
use App\Repository\SubjectRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;

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
    public function new(Request $request, CommentRepository $commentRepository,SubjectRepository $subjectRepository,$IdSubject,PaginatorInterface $paginator): Response
    {
        $comment = new Comment();
        $subject = $subjectRepository->find($IdSubject);
        $subjectNext = $subjectRepository->findNextSubject( $IdSubject+1);
        $subjectPrevious = $subjectRepository->findPreviousSubject( $IdSubject-1);
        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setCommentDate(new \DateTime("now"));
            $comment->setSubject($this->getDoctrine()->getRepository(Subject::class)->findOneBy(['subjectId' => $IdSubject]));
            $user = $this->getUser()->getId();
            $user1= $em->getRepository(User::class)->find($user);
            $comment->setUser($this->getDoctrine()->getRepository(User::class)->find($user1));
            $subject->setSubjectNumComments($subject->getSubjectNumComments()+1);

            $commentRepository->add($comment);
            return $this->redirectToRoute('app_comment_show', ['IdSubject'=> $IdSubject], Response::HTTP_SEE_OTHER);
        }
        return $this->render('FrontOffice/comment/show.html.twig', [
            'comments' => $commentRepository->findByidsubject($IdSubject),
            '$idSubject' => $IdSubject,
            'comment' => $comment,
            'subject' => $subject,
            'subjectNexts' => $subjectNext,
            'subjectPreviouss' => $subjectPrevious,
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
            $comment->setCommentDate(new \DateTime("now"));
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
    {
            $subject = $subjectRepository->find($IdSubject);
            if ($this->isCsrfTokenValid('delete' . $comment->getCommentId(), $request->request->get('_token'))) {
                $subject->setSubjectNumComments($subject->getSubjectNumComments() - 1);
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
    /**
     * @Route("/{IdSubject}/{idcom}/like", name="app_comment_like", methods={"GET"})
     */
    public function like(Request $request, Comment $idcom, EntityManagerInterface $entityManager,Subject $IdSubject): Response
    {   $em = $this->getDoctrine()->getManager();
        $user = $this->getUser()->getId();
        $user1= $em->getRepository(User::class)->find($user);
        $dislikeee=$this->getDoctrine()->getRepository(Dislikee::class)->findoneBy(['commentid'=>$idcom->getCommentId(),'userid'=>$user]);
        $likeee=$this->getDoctrine()->getRepository(likee::class)->findBy(['commentid'=>$idcom->getCommentId(),'userid'=>$user]);
        if($likeee==null){

            $idcom->setNblike($idcom->getNblike()+1);
            $like = new likee();
            $like->setCommentid($idcom);
            $user2=$this->getDoctrine()->getRepository(User::class)->find($user1);
            $like->setUserid($user2);
            $entityManager->persist($like);
            if($dislikeee!=null)
            {
                $idcom->setNbdislike($idcom->getNbdislike()-1);
                $entityManager->remove($dislikeee);

            }
            $entityManager->flush();}
        else
        {
            $this->addFlash('warning', 'You can only like once');
        }
        return $this->redirectToRoute('app_comment_show', [ 'IdSubject' => $IdSubject->getSubjectId()], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/{IdSubject}/{idcom}/dislike", name="app_comment_dislike", methods={"GET"})
     */
    public function dislike(Request $request, Comment $idcom, EntityManagerInterface $entityManager,Subject $IdSubject): Response
    {   $em = $this->getDoctrine()->getManager();
        $user = $this->getUser()->getId();
        $user1= $em->getRepository(User::class)->find($user);
        $dislikeee=$this->getDoctrine()->getRepository(Dislikee::class)->findBy(['commentid'=>$idcom->getCommentId(),'userid'=>$user]);
        $likeee=$this->getDoctrine()->getRepository(Likee::class)->findOneBy(['commentid'=>$idcom->getCommentId(),'userid'=>$user]);

        if($dislikeee==null){
          if($idcom->getNbdislike()==0){
            $idcom->setNbdislike($idcom->getNbdislike()+1);
            $dislike = new Dislikee();
            $dislike->setCommentid($idcom);
            $user2=$this->getDoctrine()->getRepository(User::class)->find($user1);
            $dislike->setUserid($user2);

            if($likeee!=null)
            {
                $idcom->setNblike($idcom->getNblike()-1);
                $entityManager->remove($likeee);

            }
            $entityManager->persist($dislike);
            $entityManager->flush();
            }
            elseif ($idcom->getNbdislike()==1){
                $entityManager->remove($dislikeee);
            }


        }
        else
        {
            $this->addFlash('warning', 'You can only dislike once');
        }
        return $this->redirectToRoute('app_comment_show', [ 'IdSubject' => $IdSubject->getSubjectId()], Response::HTTP_SEE_OTHER);
    }
    /**
     * @Route("/jaime", name="app_commentjaime", methods={"GET, POST"})
     */
    public function likeeee(Request $request, EntityManagerInterface $entityManager,Subject $IdSubject): Response
    {
        $post_data = $request->request->get('id');

        $idcom=$this->getDoctrine()->getRepository(Comment::class)->find($post_data);
        $dislikeee=$this->getDoctrine()->getRepository(Dislikee::class)->findoneBy(['commentid'=>$idcom->getCommentId(),'userid'=>90]);
        $likeee=$this->getDoctrine()->getRepository(likee::class)->findBy(['commentid'=>$idcom->getCommentId(),'userid'=>90]);
        if($likeee==null){

            $idcom->setNblike($idcom->getNblike()+1);
            $like = new likee();
            $like->setCommentid($idcom);
            $user=$this->getDoctrine()->getRepository(User::class)->find(90);
            $like->setUserid($user);
            $entityManager->persist($like);
            if($dislikeee!=null)
            {
                $idcom->setNbdislike($idcom->getNbdislike()-1);
                $entityManager->remove($dislikeee);

            }
            $entityManager->flush();}
        else
        {
            dump($likeee);
        }
        $retour=true;
        return new Response($retour, 200, [
            'Content-Type' => 'application/json'
        ]);

    }

    /**
     * @Route("/searchComments/firas", name="appCommentssearch")
     */
    public function searchComments(Request $request,SerializerInterface $serializer)
    {

        $rep = $this->getDoctrine()->getRepository(Comment::class);
        $requestString = $request->get('searchValue');
        $comments =  $rep->findByTitle($requestString);
        $jsoncontent = $serializer->serialize($comments, 'json', ['groups' => ['comment_read']]);
        $retour = json_encode($jsoncontent);
        return new Response($retour, 200, [
            'Content-Type' => 'application/json'
        ]);

    }

    /**
     * @Route("/mobile/listComments", name="mobile_liste_Comment", methods={"GET"})
     */
    public function liste_comments(Request $request,NormalizerInterface $Normalizer,CommentRepository $commentRepository)
    {
        $comments = $commentRepository->findByidsubject($request->get('idsubject'));
        $jsonContent = $Normalizer->normalize($comments, 'json',['groups'=>'comment_read']);
        return new Response(json_encode($jsonContent));
    }


    /**
     * @Route("/mobile/deletecomment", name="mobile_delete_comment")
     */
    public function deletecomment(Request $request,SubjectRepository  $subjectRepository)
    {
        $repository = $this->getDoctrine()->getRepository(Comment::class);
        $comment = $repository->find($request->get('idcomment'));
        $em= $this->getDoctrine()->getManager();
        $subject= $subjectRepository->find($request->get('idsubject'));
        $subject->setSubjectNumComments($subject->getSubjectNumComments()-1);
        $em->remove($comment);
        $em->flush();


        return new Response("comment deleted successfully");
    }
    /**
     * @Route("/mobile/modifiercomment", name="mobile_modifier_comment"  )
     */
    public function modifiercomment(Request $request,NormalizerInterface $Normalizer)
    {
        $em= $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository(Comment::class);
        $comment = $repository->find($request->get('idcomment'));
        $comment->setCommentDescription($request->get('description'));
        $em->flush();
        return new Response("comment updated successfully");
    }
    /**
     * @Route("/mobile/ajoutercomment", name="mobile_ajouter_comment")
     */
    public function ajoutercomment(Request $request,NormalizerInterface $Normalizer,SubjectRepository $subjectRepository)
    {
        $em= $this->getDoctrine()->getManager();
        $comment=new Comment();
        $subject = $subjectRepository->find($request->get('idsubject'));
        $comment->setCommentDate(new \DateTime("now"));
        $comment->setCommentDescription($request->get('description'));
        $comment->setSubject($this->getDoctrine()->getRepository(Subject::class)->findOneBy(['subjectId' => $request->get('idsubject')]));
        $comment->setUser($this->getDoctrine()->getRepository(User::class)->findOneBy(['id' => 90]));
        $subject->setSubjectNumComments($subject->getSubjectNumComments()+1);
        $em->persist($comment);
        $em->flush();
        return new Response("comment added successfully");

    }
}
