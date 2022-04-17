<?php

namespace App\Form;

use App\Entity\Agency;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class AgencyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nameagency')
            ->add('agencyphonenumber')
            ->add('agencylocation',ChoiceType::class,[
                'choices'=>[
                    'Manouba'=>'Manouba',
                    'Sousse'=>'Sousse',
                    'Monastir'=>'Monastir',
                    'Mahdia'=>'Mahdia',
                    'Sfax'=>'Sfax',
                    'Tunis'=>'Tunis',
                    'Bizerte'=>'Bizerte',
                    'Nabeul'=>'Nabeul',
                    'Sidi Bouzid'=>'Sidi Bouzid',
                    'Gabes'=>'Gabes',
                    'Kairouan'=>'Kairouan',
                    'Kasserine'=>'Kasserine',
                    'Medenine'=>'Medenine',
                    'Tataouine'=>'Tataouine',
                    'Tozeur'=>'Tozeur',
                    'Zaghouan'=>'Zaghouan',
                    'Siliana'=>'Siliana',
                    'Jendouba'=>'Jendouba',
                    'Béja'=>'Béja',
                    'Ben Arous'=>'Ben Arous',
                    'Kebili'=>'Kebili',
                    'Ariena'=>'Ariena',
                    'kebili'=>'kebili',
                    'Kef'=>'Kef',
            ]
            ])
            ->add('agencydescription')
            ->add('numberofcars')
            ->add('numberofavailablecars')
            ->add('imageFile',VichImageType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Agency::class,
        ]);
    }
}
