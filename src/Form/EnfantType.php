<?php

namespace App\Form;

use App\Entity\Enfant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EnfantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class,[
                'label'=>'Nom Enfant',
                'attr'=>[
                    'placeholder'=>'Merci de définir le Nom'
                ]
            ])
            ->add('prenom',TextType::class,[
                'label'=>'Prenom Activite',
                'attr'=>[
                    'placeholder'=>'Merci de définir le Prenom'
                ]
            ])
            ->add('age',ChoiceType::class,[
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
            ->add('sexe',ChoiceType::class,[
                'choices'=> array(
                    'Homme'=>'Homme',
                    'Femme'=>'Femme',
                    
                ),
            ])
            ->add('photo',FileType::class,[
                'label' => 'photo',
                'mapped' => false,
                
                ])
            ->add('idA')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Enfant::class,
        ]);
    }
}
