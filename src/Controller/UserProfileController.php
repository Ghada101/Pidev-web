<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ProfileType;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserProfileController extends AbstractController
{
    /**
     * @Route("/profile", name="profile")
     */
    public function index(Request $request, UserPasswordEncoderInterface $encoder, FlashyNotifier $flashyNotifier): Response
    {
        if (!($this->getUser())) {


            return $this->redirectToRoute('app_login');
        }
        $form = $this->createForm(ProfileType::class);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        $user1 = $this->getUser()->getId();
        $user = $em->getRepository(User::class)->find($user1);

        if ($form->isSubmitted() && $form->isValid()) {
//            if ($encoder->isPasswordValid($user, $form["confirm"]->getData())) {
//                if($form["newPassword"]->getData()) {
//                    $user->setPassword($encoder->encodePassword($user, $form["newPassword"]->getData()));
//                }
            if ($form["name"]->getData()) {
                $user->setName($form["name"]->getData());
            }
            if ($form["lastname"]->getData()) {
                $user->setLastname($form["lastname"]->getData());
            }
            if ($form["phone"]->getData()) {
                $user->setPhone($form["phone"]->getData());
            } 

            $images = $form->get('img')->getData();
            foreach ($images as $image) {
                // On génère un nouveau nom de fichier
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();

                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );


                $user->setImage($fichier);

//
//                if($form["img"]->getData()) {
//                $user->setImage($form["img"]->getData());
//            }
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();


                $flashyNotifier->success('Your information have been updated !', 'http://your-awesome-link.com');

                return $this->redirectToRoute('profile');


                //}
            }
//                return $this->redirectToRoute('app_logout');


            }
            return $this->render('user/newprofile.html.twig', ['registrationForm' => $form->createView(),
                'user' => $this->getUser(),
            ]);
        }
    }
