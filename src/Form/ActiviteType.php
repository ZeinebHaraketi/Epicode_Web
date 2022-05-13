<?php

namespace App\Form;

use App\Entity\Activite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ActiviteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomA',TextType::class,[
                'label'=>'Nom Activite',
                'attr'=>[
                    'placeholder'=>'Merci de définir le Nom'
                ]
            ])
            ->add('catAge',ChoiceType::class,[
                'choices'=> array(
                    '3'=>'3',
                    '4'=>'4',
                    '5'=>'5',
                    '6'=>'6',
                    '7'=>'7',
                    '8'=>'8',
                    '9'=>'9',
                    '10'=>'10',
                    '11'=>'11',
                    '12'=>'12',
                    '13'=>'13',
                    
                ),
            ])
            ->add('type',ChoiceType::class,[
                'choices'=> array(
                    'Sport'=>'Sport',
                    'Divertissement'=>'Divertissement',
                    'Education'=>'Education',
                    
                    
                ),
            ])
            ->add('image',FileType::class,[
                'label' => 'image',
                'mapped' => false,
                
                ])
            ->add('idEnfant')

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Activite::class,
        ]);
    }
}
