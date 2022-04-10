<?php

namespace App\Form;

use App\Entity\Hotel;
use App\Entity\Hotelchain;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class HotelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('hotelName')
            ->add('hotelStaff')
            ->add('hotelLocation')
            ->add('hotelPhone')
            ->add('hotelDescription')
            ->add('hotelImg',FileType::class,['mapped' => false,
            'attr' => array('accept' => 'image/jpeg,image/png')])
            ->add('fkHotelchain', EntityType::class, [
                'class' => Hotelchain::class,
                'choice_label' => 'hotelChainName',
                'multiple' => false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hotel::class,
        ]);
    }
}
