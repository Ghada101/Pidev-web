<?php

namespace App\Form;

use App\Controller\SearchController;
use App\Entity\Event;
use App\Entity\Venue;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchEventType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
{
    $builder
        ->add('q', TextType::class, [
            'label' =>false,
            'required' =>false,
            'attr'=> [
                'placeholder'=>'search'
            ]

        ])

        ->add('categories', ChoiceType::class,[
            'label'=>false,
            'required' => false,
            'expanded' => true,

            'choices'  => [
                'Conferences' => 'Conferences',
                'Seminars'     => 'Seminars',
                'Internal Company Meetings / Periodic Business Gatherings'    => 'Internal Company Meetings / Periodic Business Gatherings',
                'Trade Shows / Expos'    => 'Trade Shows / Expos',
                'Thought Leadership and Networking Events'     => 'Thought Leadership and Networking Events',
                'Ceremonies / Galas'     => 'Ceremonies / Galas',
                'Product Launches'     => 'Product Launches',
                'VIP Events'     => 'VIP Events',
                'Job Fairs / Recruiting Events'     => 'Job Fairs / Recruiting Events',
                'Team Building'     => 'Team Building',
                'Field Marketing / Activations' => 'Field Marketing / Activations',
            ]
        ])
        ->add('min', NumberType::class,[
            'label' =>false,
            'required' =>false,
            'attr'=> [
                'placeholder'=>'min Price'
            ]

        ])
        ->add('max', NumberType::class,[
            'label' =>false,
            'required' =>false,
            'attr'=> [
                'placeholder'=>'max Price'
            ]

        ]);
}


    public function configureOptions(OptionsResolver $resolver): void
{
    $resolver->setDefaults([
        'data_class' => SearchController::class,
        'method' => 'GET',
        'csrf_protection' => false
    ]);
}
public  function getBlockPrefix()
{
    return '';
}

}