<?php

namespace App\Form;

use App\Entity\Book;
use App\Entity\Room;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('startdate', DateType::class, [
                // renders it as a single text box
                'widget' => 'single_text'])
            ->add('enddate' , DateType::class, [
                // renders it as a single text box
                'widget' => 'single_text'])
            //->add('idRoom');
            ->add('idRoom', EntityType::class, [
                'class' => Room::class,
                'choice_label' => 'idRoom',
             ]) ;
      }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
