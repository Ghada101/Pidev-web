<?php

namespace App\Form;

use App\Entity\Car;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class CarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $client = HttpClient::create();
        $response = $client->request('GET', 'https://the-vehicles-api.herokuapp.com/brands/');
        $statusCode = $response->getStatusCode();
        $content = $response->getContent();

        $c=[];
        foreach (json_decode($content) as $key => $value) {
            $c[]=$value->{"brand"};
        }
        $builder
            ->add('namecar')
            ->add('carnumber')
            ->add('description')
            ->add('carcolor', ColorType::class)
            ->add('carbrand',ChoiceType::class, [
                "choices"=> $c,
                "choice_label"=> function($choice, $key, $value){
                    return $value;
                }
            ])
            ->add('fkAgency')
            ->add('imageFile',VichImageType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Car::class,
        ]);
    }
}
