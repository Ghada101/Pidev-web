<?php

namespace App\Controller;

use App\Entity\Agency;
use App\Entity\Agencylove;
use App\Entity\User;
use App\Repository\AgencyloveRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AgencyLoveMobileController extends AbstractController
{
    /**
     * @Route("/agency/love/mobile", name="app_agency_love_mobile")
     */
    public function index(): Response
    {
        return $this->render('agency_love_mobile/index.html.twig', [
            'controller_name' => 'AgencyLoveMobileController',
        ]);
    }

    /**
     * @Route("/mobile/Like/{idAgency}", name="app_agencylove_newLike")
     * @param Request $request
     * @param AgencyloveRepository $agencyloveRepository
     * @param $idAgency
     * @return Response
     */
    public function new(Request $request, AgencyloveRepository $agencyloveRepository, $idAgency,NormalizerInterface $normalizer,\Swift_Mailer $mailer): Response
    {
        $agencylove = new Agencylove();
        $em = $this->getDoctrine()->getManager();
        $agency = $em->getRepository(Agency::class)->find($idAgency);
        $user = $em->getRepository(User::class)->find(83);
        $message = (new \Swift_Message('Love Agency'))
            ->setFrom('aymenkhiari99@gmail.com')
            ->setTo('khiari.aymen@esprit.tn')
            ->setBody(
                $this->renderView(
                    'Frontoffice/agencylove/mailRent.html.twig',
                    ['name' => $user->getName(), 'agency' => $agency->getNameagency(),'phone'=>$agency->getAgencyphonenumber()]),
                'text/html'
            );
        $message1 = (new \Swift_Message('Love Agency'))
            ->setFrom('aymenkhiari99@gmail.com')
            ->setTo('khiari.aymen@esprit.tn')
            ->setBody(
                $this->renderView(
                    'Frontoffice/agencylove/mailRentHate.html.twig',
                    ['name' => $user->getName(), 'agency' => $agency->getNameagency(),'phone'=>$agency->getAgencyphonenumber()]),
                'text/html'
            );

        $agencyExistsLikeByUser = $agencyloveRepository->findBy(['idagency' => $agency->getIdAgency(), 'iduser' => $user->getId()]);
        if (!$agencyExistsLikeByUser) {
            $agencylove->setIdagency($agency);
            $agencylove->setIduser($user);
            $agency->setNbrlike($agency->getNbrlike() + 1);
            $mailer->send($message);
            $agencyloveRepository->add($agencylove);
            $done=true;
            $em->flush();


        } else {
            $classroom = $agencyloveRepository->find($agencyExistsLikeByUser[0]->getIdagencylove());
            $agency->setNbrlike($agency->getNbrlike() - 1);
            $mailer->send($message1);
            $em->remove($classroom);
            $em->flush();
            $done=false;
        }
        $json= $normalizer->normalize($done, "json",["groups"=>"Agency"]);
        return new Response(json_encode($json));
    }
}
