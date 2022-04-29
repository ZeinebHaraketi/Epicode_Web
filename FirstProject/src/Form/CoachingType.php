<?php

namespace App\Form;

use App\Entity\Coaching;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class CoachingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateS')
            ->add('prix', ChoiceType::class, array(
                'choices' => array(
                    '50' => 50,
                    '20' => 20,
                )))
               
            
            ->add('nomUser')
            ->add('prenomUser')
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Coaching::class,
        ]);
    }
}

