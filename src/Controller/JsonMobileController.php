<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;



class JsonMobileController extends AbstractController
{


    /**
     * @Route("/personne/mobilemodifier",name="mobile_modifier")
     */

    public function modifierUser(NormalizerInterface $normalizer, Request $request)
    {
        $id = $request->get('id');
        $entityManager = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository(User::class);
        $p = $repo->find($id);

        $p->setLastname($request->get('lastname'));
        $p->setName($request->get('name'));
        $p->setEmail($request->get('email'));
        $p->setPhone($request->get('phone'));
        $p->setPassword($request->get('password'));

        $entityManager->flush();
        $jsonContent = $normalizer->normalize($p, 'json', ['groups' => 'post:read']);
        return new Response("information modifie" . json_encode($jsonContent));
    }


    /**
     * @Route("/personnel/mobilemodifier",name="mobile_modifierpers")
     */

    public function modifierpersonnel(NormalizerInterface $normalizer, Request $request)
    {
        $id = $request->get('id');
        $entityManager = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository(User::class);
        $p = $repo->find($id);

        $p->setLastname($request->get('lastname'));
        $p->setName($request->get('name'));
        $p->setEmail($request->get('email'));
        $p->setPhone($request->get('phone'));
        //$p->setSport($request->get('sport'));
        //$p->setCategorie($request->get('categorie'));
        //$p->setRole($request->get('role'));
        $entityManager->flush();
        $jsonContent = $normalizer->normalize($p, 'json', ['groups' => 'post:read']);
        return new Response("information modifie" . json_encode($jsonContent));
    }


    /**
     * @Route("/listUserJSON", name="listUserJSON")
     */
    public function listUserJSON(Request $request, NormalizerInterface $Normalizer): Response

    {
        $repository = $this->getDoctrine()->getRepository(User::Class);
        $Users = $repository->findAll();

        $jsonContent = $Normalizer->normalize($Users, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($jsonContent));

    }

    /**
     * @Route("/showUserJSON/{id}", name="showUserJSON")
     */

    public function showUserJSON($id, NormalizerInterface $Normalizer): Response
    {
        $repository = $this->getDoctrine()->getRepository(User::Class);
        $User = $repository->find($id);

        $jsonContent = $Normalizer->normalize($User, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($jsonContent));
    }

//    /**
//     * @Route("/AddUserJSON", name="AddJSON")
//     */
//    public function AddJSON(Request $request, NormalizerInterface $Normalizer, \Swift_Mailer $mailer)
//    {
//        $lastname = $request->query->get("lastname");
//        $name = $request->query->get("name");
//        $email = $request->query->get("email");
//        $password = $request->query->get("password");
//        $phone = $request->query->get("phone");
//        //$image = $request->query->get("image");
//
//        $em = $this->getDoctrine()->getManager();
//        $User = new User();
//
//        $User->setLastname($lastname);
//        $User->setName($name);
//        $User->setEmail($email);
//        $User->setPassword($password);
//        $User->setPhone($phone);
//        //$User->setImage($image);
//
////        $message = (new \Swift_Message('Tabaani'))
////            ->setFrom('allintravelapp@gmail.com')
////            ->setTo($email)
////            ->setBody("Bienvenue à Tabaani Travel Agency");
////        $mailer->send($message);
//
//        $em->persist($User);
//        $em->flush();
//        $jsonContent = $Normalizer->normalize($User, 'json', ['groups' => 'post:read']);
//        return new Response(json_encode($jsonContent));
//    }

    /**
     * @Route("/AddJSONMobile", name="LoginJsonMobile")
     */
    public function AddJSON(Request $request,NormalizerInterface $Normalizer, \Swift_Mailer $mailer, UserPasswordEncoderInterface $encoder,
                            EntityManagerInterface $manager  )
    {
        $lastname = $request->query->get("lastname");
        $name = $request->query->get("name");
        $email = $request->query->get("email");
        $password = $request->query->get("password");
        $phone = $request->query->get("phone");
        //$image = $request->query->get("image");

        $em=$this->getDoctrine()->getManager();
        $User = new User();

        $User->setLastname($lastname);
        $User->setName($name);
        $User->setEmail($email);
        $User->setPassword($password );
        $User->setPassword($encoder->encodePassword($User,$request->query->get("password")));
        $User->setRoles(["ROLE_USER"]);
        $User->setType("client");
        $User->setPhone($phone);

        //$User->setImage($image);

        $message = (new \Swift_Message('Tabaani'))
            ->setFrom('allintravelapp@gmail.com')
            ->setTo($email)
            ->setBody("Bienvenue à Tabaani Travel Agency");
        $mailer->send($message) ;

        $em->persist($User);
        $em->flush();
        $jsonContent = $Normalizer->normalize($User,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));
    }



    /**
     * @Route("/UpdateJSON/{id}", name="UpdateJSON")
     */
    public function UpdateJSON(Request $request, NormalizerInterface $Normalizer, $id,
                               UserPasswordEncoderInterface $encoder)
    {

        $id = $request->get("id");
        $lastname = $request->query->get("lastname");
        $name = $request->query->get("name");
        $email = $request->query->get("email");
        $password = $request->query->get("password");
        $em = $this->getDoctrine()->getManager();
        $User = $em->getRepository(User::class)->find($id);
        $User->setLastname($lastname);
        $User->setName($name);
        $User->setEmail($email);
//        $User->setPassword($password);
        $User->setPassword($encoder->encodePassword($User,$request->query->get($password)));


        $em = $this->getDoctrine()->getManager();

        $em->persist($User);
        $em->flush();


        $jsonContent = $Normalizer->normalize($User, 'json', ['groups' => 'post:read']);
        return new Response("User updated" . json_encode($jsonContent));
    }

    /**
     * @Route("/RemoveJSON/{id}", name="RemoveJSON")
     */
    public function RemoveJSON(Request $request, NormalizerInterface $Normalizer, $id)
    {


        $em = $this->getDoctrine()->getManager();
        $User = $em->getRepository(User::class)->find($id);

        $em->remove($User);
        $em->flush();

        $jsonContent = $Normalizer->normalize($User, 'json', ['groups' => 'post:read']);
        return new Response("User deleted" . json_encode($jsonContent));
    }

    /**
     * @Route("/user/rechercheJSON", name="rechercheJSON")
     */
    function Recherche(UserRepository $repository, Request $request, NormalizerInterface $Normalizer)
    {

        $data = $request->get('Search');
        $Users = $repository->findBy(['name' => $data]);

        $jsonContent = $Normalizer->normalize($Users, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($jsonContent));

    }

//    /**
//     * @Route("/LoginJSON", name="LoginJSON")
//     */
//    function LoginJSON(UserRepository $repository, Request $request, NormalizerInterface $Normalizer)
//    {
//
//        $email = $request->query->get("email");
//        $password = $request->query->get("password");
//
//        $em = $this->getDoctrine()->getManager();
//        $User = $em->getRepository(User::class)->findOneBy(['email' => $email, 'password' => $password]);
//
//        if ($User) {
//
//            $jsonContent = $Normalizer->normalize($User, 'json', ['groups' => 'post:read']);
//            return new Response(json_encode($jsonContent));
//        } else {
//            return new Response("failed");
//        }
//    }



    /**
     * @Route("/LoginJSONMobile", name="LoginJSONMobile")
     * @Method("POST")
     * @throws \Symfony\Component\Serializer\Exception\ExceptionInterface
     */
    function LoginJSON(UserRepository $repository,Request $request,NormalizerInterface $Normalizer,
                       UserPasswordEncoderInterface $encoder,
                       serializerInterface $serializer){
        $user=new User();
        $hash =$encoder->encodePassword($user,$request->query->get("password"));
        $user->setPassword($hash);
        $email = $request->query->get("email");
        $password = $request->query->get("password");

        $em=$this->getDoctrine()->getManager();
        $User=$em->getRepository(User::class)->findOneBy(['email'=>$email,'password'=>$hash]);

        if ($User)
        {

            $jsonContent = $Normalizer->normalize($User,'json',['groups'=>'post:read']);
            return new Response(json_encode($jsonContent));
        }
        else {
            return new Response("Bad credentials");
        }


    }

    /**
     * @Route("/getPasswordByEmail", name="getPasswordByEmail")
     */

    public function getPassswordByEmail(Request $request)
    {

        $email = $request->get('email');
        $User = $this->getDoctrine()->getManager()->getRepository(User::class)->findOneBy(['email' => $email]);
        if ($User) {
            $password = $User->getPassword();
            $serializer = new Serializer([new ObjectNormalizer()]);
            $formatted = $serializer->normalize($password);
            return new JsonResponse($formatted);
        }
        return new Response("User not found");


    }


    /**
     * @Route("/userlist",name="userlist")
     */

    public function getUsers(UserRepository $repo, serializerInterface $serializer, NormalizerInterface $normalizer)
    {
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();
        $json = $normalizer->normalize($users, "json");
        return new Response(json_encode($json));

    }


    /**
     * @Route("/json/findUserByMail",name="userByMail")
     */
    public function getUSerByMail(UserRepository $repo,Request $request, serializerInterface $serializer, NormalizerInterface $normalizer)
    {
        $email = $request->get('email');
        $email = $this->getDoctrine()->getRepository(User::class)->findOneBy(['email' => $email]);
        $json = $normalizer->normalize($email, 'json',['groups'=>'post:read']);
        return new Response(json_encode($json));
    }




}