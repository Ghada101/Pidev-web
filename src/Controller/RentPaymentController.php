<?php

namespace App\Controller;

use Stripe\Stripe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;




class RentPaymentController extends AbstractController
{
    /**
     * @Route("/payment", name="app_payment")
     */
    public function index(): Response
    {
        return $this->render('payment/index.html.twig', [
            'controller_name' => 'PaymentController',
        ]);
    }
    /**
     * @Route("/checkoutRent/{idAgency}/{idCar}", name="checkoutRent")
     */
    public function checkout($idAgency,$idCar): Response
    {

        Stripe::setApiKey('sk_test_51KzO25LwdY5hxxuHA007yKP5Ce4tHWAhIYPqYMplayPDyrqwyg419JypzgYwDdIh5Yg67sQ02sK1egnWH30Mqdkz00PNVTAiSI');
        $checkout_session = \Stripe\Checkout\Session::create([
            'line_items' => [[
                # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Your Games are ready',
                    ],

                    'unit_amount' => 1*100,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            $this->addFlash('success', 'this car is already rented at this date'),
        'success_url' => $this->generateUrl('app_rent_new',['idAgency' => $idAgency, 'idCar' => $idCar],UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('cancel_url',[],UrlGeneratorInterface::ABSOLUTE_URL),
        ]);
        return $this->redirect($checkout_session->url,303);
    }
    /**
     * @Route("/success-url", name="success_url")
     */
    public function successUrl(): Response
    {
        return $this->render('payment/success.html.twig', [
        ]);
    }
    /**
     * @Route("/cancel-url", name="cancel_url")
     */
    public function cancelUrl(): Response
    {
        return $this->render('payment/cancel.html.twig', [

        ]);
    }
}
