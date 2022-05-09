<?php

namespace App\Form;

use App\Entity\Event;
use App\Entity\Venue;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('EventDate')
            ->add('Duration')
            ->add('category', ChoiceType::class,[
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
            ->add('Description')
            ->add('price')
            ->add('image', FileType::class,[
                'label' => false,
                'multiple' => true,
                'mapped' => false,
                'required' => false
            ])
            ->add('venue', EntityType::class, [
                'class'=> Venue::class,
                'choice_label' => 'venueName'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
