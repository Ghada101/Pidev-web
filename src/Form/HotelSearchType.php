<?php

namespace App\Form;

use App\Entity\Hotel;
use App\Entity\Hotelchain;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;




class HotelSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
       
        $builder
            ->add('idHotel', TextType::class, array('label' => false,'attr' => ['placeholder' => "ex:  idHotel"]))
            //->add('Pays', TextType::class, array('label' => false,'attr' => ['placeholder' => "ex:  Pays"]))
            ->add('Search', SubmitType::class);
    }
}
