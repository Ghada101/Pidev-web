<?php

namespace App\Controller;

use App\Entity\Agency;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\SerializerInterface;
class AgencyMobileController extends AbstractController
{
    /**
     * @Route("/agency/mobile", name="app_agency_mobile")
     */
    public function index(): Response
    {
        return $this->render('agency_mobile/index.html.twig', [
            'controller_name' => 'AgencyMobileController',
        ]);
    }
    /**
         * @Route("/mobile/getAgencies", name="GetAgenciesMobile")
     */
    public function getAgenciesMobile(Request $request, NormalizerInterface $normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $agencies = $em->getRepository(Agency::class)->findAll();
        $json = $normalizer->normalize($agencies, "json",["groups"=>"Agency"]);
        return new Response(json_encode($json));
    }

    /**
     * @Route("/mobile/addAgency", name="AddAgencyMobile")
     */
    public function addAgenciesMobile(Request $request, NormalizerInterface $normalizer){
        $agency=new Agency();
        $em= $this->getDoctrine()->getManager();
        $agency->setNameagency($request->get('nameagency'));
        $agency->setAgencylocation($request->get('agencylocation'));
        $agency->setAgencydescription($request->get('agencydescription'));
        $agency->setNumberofcars($request->get('numberofcars'));
        $agency->setNumberofavailablecars($request->get('numberofavailablecars'));
        $agency->setImageagency($request->get('imageagency'));
        $agency->setNbrlike(0);
        $agency->setAgencyphonenumber($request->get('agencyphonenumber'));
        $em->persist($agency);
        $em->flush();
        $json = $normalizer->normalize($agency, "json",["groups"=>"Agency"]);
        return new Response(json_encode($json));
    }


    /**
     * @Route("/mobile/deleteAgency", name="DeleteAgencyMobile")
     */
    public function deleteAgencyMobile(Request $request, NormalizerInterface $normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $agency = $em->getRepository(Agency::class)->find($request->get('idAgency'));
        $em->remove($agency);
        $em->flush();
        $json = $normalizer->normalize($agency, "json",["groups"=>"Agency"]);
        return new Response(json_encode($json));
    }

    /**
     * @Route("/mobile/updatAgency/{idAgency}", name="UpdateAgecyMobile")
     */
    public function updateAgencyMobile(Request $request, NormalizerInterface $normalizer,$idAgency){
        $em= $this->getDoctrine()->getManager();
        $agency= $em->getRepository(Agency::class)->find($idAgency);
        $agency->setNameagency($request->get('nameagency'));
        $agency->setAgencydescription($request->get('agencyphonenumber'));
        $agency->setAgencylocation($request->get('agencylocation'));
        $agency->setAgencydescription($request->get('agencydescription'));
        $agency->setNumberofcars($request->get('numberofcars'));
        $agency->setNumberofavailablecars($request->get('numberofavailablecars'));
        $agency->setImageagency($request->get('imageagency'));
        $em->flush();
        $json= $normalizer->normalize($agency, "json",["groups"=>"Agency"]);
        return new Response(json_encode($json));
    }
}
