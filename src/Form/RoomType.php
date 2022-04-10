<?php

namespace App\Form;

use App\Entity\Room;
use App\Entity\Hotel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RoomType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('roomType', ChoiceType::class, array(
                'label' => false,
                'choices'  => [
                    'Economy' => 'Economy',
                    'Normal' => 'Normal',
                    'VIP' => 'VIP',
                ], )) 
            ->add('roomCapacity', ChoiceType::class, array(
                'label' => false,
                'choices'  => [
                    'Single' => 'single',
                    'Double' => 'Double',
                    'Triple' => 'Triple',
                ], )) 
            ->add('nbrroom')
            ->add('price')
            ->add('image', FileType::class,['mapped' => false,
            'attr' => array('accept' => 'image/jpeg,image/png')])
            ->add('fkHotel', EntityType::class, [
                'class' => Hotel::class,
                'choice_label' => 'hotelName',
                'multiple' => false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Room::class,
        ]);
    }
}
