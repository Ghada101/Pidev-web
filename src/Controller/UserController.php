<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ForgetPasswordType;
use App\Form\InfoSuppType;
use App\Form\PasswordbackupType;
use App\Form\PasswordkeyType;
use App\Form\UploadImageType;
use App\Form\UserType;
use App\Form\UserType1;
use App\Repository\UserRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use MercurySeries\FlashyBundle\FlashyNotifier;




/**
 * @Route("/user")
 */
class UserController extends AbstractController
{

    /**
     * @Route("/front", name="app_user_front", methods={"GET"})
     */
    public function front(UserRepository $userRepository, FlashyNotifier $flashyNotifier): Response
    {
//
//        if($this->getUser()->getBan()) {
//
//            $this->addFlash('message','You are banned  ');
//
////            $flashyNotifier->error('You have been banned, please contact the administrator !', 'http://your-awesome-link.com');
//            return $this->redirectToRoute('app_logout');
//
//        }

            $flashyNotifier->primary('Welcome to our application !', 'http://your-awesome-link.com');

        return $this->render('user/front.html.twig');
    }



//
//
//    /**
//     * @Route("/", name="app_user_index")
//     */
//    public function index(UserRepository $userRepository, SessionInterface $session): Response
//    {
//
//        return $this->render('user/index.html.twig', [
//            'users' => $userRepository->findAll(),
//        ]);
//    }






    /**
     * @Route("/pdf", name="app_pdf_user")
     */
    public function pdf(UserRepository $userRepository, SessionInterface $session , FlashyNotifier $flashyNotifier): Response
    {


        return $this->render('user/pdf.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    /**
     * @Route("/", name="app_user_index", methods={"GET"})
     */
    public function index(Request $request,UserRepository $userRepository,PaginatorInterface $paginator, FlashyNotifier $flashyNotifier, SessionInterface $session): Response
    {


//        if($this->getUser()) {
//        if (!(in_array("ROLE_ADMIN", $this->getUser()->getRoles()))) {
//            return $this->redirectToRoute('app_user_front');
//        }
//    }

//        $user=$session->get('user');
//        if(is_null($user)){
//            return $this->redirectToRoute('app_logout');
//
//        }else if($user->getType()!="admin")
//        {   return $this->redirectToRoute('app_logout');
//        }


        $search = $request->query->get("search");
        $users = $userRepository->findAllWithSearch($search);
        //$users= $userRepository->findAll();
        $users=$paginator->paginate(
            $users,// Requête contenant les données à paginer (ici les publications)
            $request->query->getInt('page',1),// Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            3   // number of users per page
        );
//        $flashyNotifier->primary('Welcome admin Molka Louati !', 'http://your-awesome-link.com');

        return $this->render('user/index.html.twig', [
            'users' => $users,
        ]);
    }




    /**
     * @Route("/new", name="app_user_new", methods={"GET", "POST"})
     */
    public function new(Request $request, UserRepository $userRepository): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->add($user);
            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_user_show", methods={"GET"})
     */
    public function show(User $user): Response
    {
        return $this->render('user/show.html.twig', [
            'user' => $user,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_user_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, User $user, UserRepository $userRepository): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->add($user);
            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="app_user_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user);
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }


    /**
     * @Route("/ban/{id}", name="ban",)
     */
    public function ban($id, FlashyNotifier $flashyNotifier): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        $user->setBan(true);
        $user->setActive(false);
        $this->getDoctrine()->getManager()->flush();
        $flashyNotifier->success('The user that you selected is now banned !', 'http://your-awesome-link.com');
        return $this->redirectToRoute('app_user_index');
    }


    /**
     * @Route("activate/{id}", name="activate",)
     */
    public function activate($id, FlashyNotifier $flashyNotifier): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->find($id);
        $user->setBan(false);
        $user->setActive(true);
        $this->getDoctrine()->getManager()->flush();

        $flashyNotifier->success('The user that you selected is now activated !', 'http://your-awesome-link.com');

        return $this->redirectToRoute('app_user_index');


    }

    /**
     * @Route("/user/password_backup", name="user_password_backup",)
     */
    public function passwordbackup(MailerInterface $mailer,Request $request,SessionInterface $session, FlashyNotifier $flashyNotifier): Response
    {

        $form = $this->createForm(PasswordbackupType::class);
        $form->add('Confirm',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()){
            $email=$form->get('email')->getData();
            $user=$this->getDoctrine()->getRepository(User::class)->findOneBy(['email'=>$email]);
            if(is_null($user)){

                $flashyNotifier->error('This email address is unknown !', 'http://your-awesome-link.com');

//                $this->addFlash('message','This email address is unknown');
            }else{
                $cle =(bin2hex(random_bytes(3)));
                $session->set('cle',$cle);
                $session->set('userbackup',$user);
                $email=(new Email())
                    ->from('allintravelapp@gmail.com')
                    ->to($user->getEmail())
                    ->subject('Verification code')
                    ->text($cle);

                $mailer->send($email);
                $user->setResetcode($cle);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();

                $flashyNotifier->info('A verification code will be sent to your email to confirm your identity', 'http://your-awesome-link.com');

//                $this->addFlash('message','A verification code will be sent to your email to confirm your identity');
                return $this->redirectToRoute('user_password_backup_key');

            }
        }
        return $this->render('user/passwordbackup.html.twig',['passwordform'=>$form->createView()]);
    }



    /**
     * @Route("/user/password_backup/key", name="user_password_backup_key",)
     */
    public function passwordbackupkey(MailerInterface $mailer,Request $request,SessionInterface $session, FlashyNotifier $flashyNotifier): Response
    {

        $em = $this->getDoctrine()->getManager();

        $paswwordkey=$this->createForm(PasswordkeyType::class);
        $paswwordkey->add('Confirm',SubmitType::class);
        $paswwordkey->handleRequest($request);
        $user = $em->getRepository(User::class)->findOneBy(['resetcode'=> $paswwordkey["cle"]->getData()]);

//        dd($paswwordkey["cle"]->getData());

            if($paswwordkey->isSubmitted() && $paswwordkey->isValid()){
            if ($user->getResetcode() == $paswwordkey["cle"]->getData()) {


                $this->addFlash('message','Change your password');
                return $this->redirectToRoute('usereditpassword');
            }else{
//                $this->addFlash('message','Invalid verification code');



                $flashyNotifier->error('Invalid verification code !', 'http://your-awesome-link.com');
                return $this->redirectToRoute('login');


            }
        }
        return  $this->render('user/passwordbackup.html.twig',['keyform'=>$paswwordkey->createView()]);

    }



    /**
     * @Route("/user/editpassword", name="usereditpassword",)
     */
    public function editpassword(Request $request,SessionInterface $session, UserPasswordEncoderInterface $userPasswordEncoder, FlashyNotifier $flashyNotifier): Response
    {
        if(is_null($session->get('cle'))||is_null($session->get('userbackup'))){
            return $this->redirectToRoute("user_password_backup");
        }
        $user=new User();
        $user=$this->getDoctrine()->getRepository(User::class)->find($session->get('userbackup')->getId());
        $user->setPassword('');
        $passwordform=$this->createForm(UserType1::class,$user);
        $passwordform->add('Confirm',SubmitType::class);
        $passwordform->handleRequest($request);
        if($passwordform->isSubmitted()){
            $user->setPassword(
                $userPasswordEncoder->encodePassword(
                    $user,
                    $passwordform['password']->getData()
                )
            );
            $this->getDoctrine()->getManager()->flush();
            $flashyNotifier->success('Password updated!', 'http://your-awesome-link.com');
            $session->clear();
            return $this->redirectToRoute('app_login');

        }
        return  $this->render('user/passwordbackup.html.twig',['passwordbackupform'=>$passwordform->createView()]);

    }


    /**
     * @Route("/profile/pass/modifier", name="app_modifier_pass")
     */
    public function editPass(Request $request, UserPasswordEncoderInterface $userPasswordEncoder, FlashyNotifier $flashyNotifier)
    {



        if($request->isMethod('Post')){

            $em = $this->getDoctrine()->getManager();

            $user = $this->getUser();

            if($request->request->get('password') == $request->request->get('confirm_password')){

                $user->setPassword($userPasswordEncoder->encodePassword($user,$request->request->get('password')));
//                $user->setRepeatpassword($userPasswordEncoder->encodePassword($user,$request->request->get('pass2')));
                $em->flush();
                $flashyNotifier->success('Succes');

                return $this->redirectToRoute('app_profile');
                dd($user);
            }
        }

        return $this->render('user/editPass.html.twig', [
        ]);
    }




    /**
     * @Route("/profil", name="profil",)
     */
    public function profil(SessionInterface $session,Request $request): Response
    {  $user=new User();

        $user=$session->get('user');
        if(is_null($user)){
            return $this->redirectToRoute('app_register');

        }
        $user= $this->getDoctrine()->getRepository(User::class)
            ->find($user->getUser()->getId());
        $form_image=$this->createForm(UploadImageType::class);
        $form_image->add('save image',SubmitType::class);
        $form_image->handleRequest($request);
        if($form_image->isSubmitted()){
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form_image['image']->getData();
            $destination = $this->getParameter('kernel.project_dir').'/public/profil';
            $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
            $newFilename = $originalFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();

            if($uploadedFile){$uploadedFile->move(
                $destination,
                $newFilename
            );
                $user->setImage($newFilename);
                $this->getDoctrine()->getManager()->flush();
            }}
        return $this->render('user/newprofile.html.twig',['user'=>$user,'path'=>$session->get('path'),
            'texte'=>$session->get('texte'),'user'=>$user,'formup'=>$form_image->createView()]);

    }


    /**
     * @Route("/user/profil/edit", name="editprofil" )
     */
    public function editprofil(Request $request,SessionInterface $session, UserPasswordEncoderInterface $userPasswordEncoder): Response
    {
        $user=$session->get('user');

        $user= $this->getDoctrine()->getRepository(User::class)
            ->find($user->getUser()->getId());
        $forminfo=$this->createForm(InfoSuppType::class,$user);
        $formuser=$this->createForm(UserType1::class,$user);
        $formuser->add('save',SubmitType::class);
        $forminfo->add('saveinformation',SubmitType::class);
        $formuser->handleRequest($request);
        $forminfo->handleRequest($request);

        if($formuser->isSubmitted()&&$formuser->isValid()){
            $user->setPassword(
                $userPasswordEncoder->encodePassword($user->getPassword()));
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('profil');
        }elseif($forminfo->isSubmitted()&&$forminfo->isValid()){
            $xm=$this->getDoctrine()->getManager();
            $xm->flush();
            return $this->redirectToRoute('profil');
        }

        return $this->render('user/profilefrontedit.html.twig',['user'=>$user,'path'=>$session->get('path'),
            'texte'=>$session->get('texte'),'info_supp'=>$user,'userform'=>$formuser->createView(),
            'info_supp_form'=>$forminfo->createView(),
        ]);
    }






}
