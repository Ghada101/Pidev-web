<?php

namespace App\Form;

use App\Entity\Restaurant;
use App\Entity\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
class RestaurantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nameRestau')
            ->add('descriptionRestau')
            ->add('phoneRestau')
            ->add('locationRestau')
            ->add('restaurantimg',FileType::class,['mapped' => false,
            'attr' => array('accept' => 'image/jpeg,image/png')])
            ->add('idcategory', EntityType::class, [
            'class' => Category::class,
            'choice_label' => 'nameCategory',
            'multiple' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Restaurant::class,
        ]);
    }
}
