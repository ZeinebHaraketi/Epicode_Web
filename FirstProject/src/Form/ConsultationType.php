<?php

namespace App\Form;

use App\Entity\Consultation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
// Import the Captcha Field Type and Validator
 


class ConsultationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom')
            ->add('nom',null,[
                
                'attr'=>[
                    'placeholder'=>'Merci de définir le Nom',
                ]
            ])
            ->add('prenom' ,TextType::class,[
                'label'=>'prenom',
                'attr'=>[
                    'placeholder'=>'Merci de définir un prenom'
                ]
            ])
            ->add('age',ChoiceType::class,[
                'choices'=> array(
                    '20'=> '20',
                    '25'=>'25',
                    '30'=>'30',
                    '35'=>'35',
                    '40'=>'40',
                    '45'=>'45',
                    '50'=>'50',
                    '55'=>'55',
                    
                    
                    
                ),
            ])
            ->add('sexe' ,ChoiceType::class,[
                'choices'=> array(
                    'Masculin'=> 'Masculin',
                    'Feminin'=>'Feminin',
                    
                    
                    
                ),
            ])
           
            ->add('etatPhysique' ,TextType::class,[
                'label'=>'etat physique',
                'attr'=>[
                    'placeholder'=>'Merci de définir un etat physique'
                ]
            ])
            ->add('categorieC',ChoiceType::class,[
                'choices'=> array(
                    'Blessure'=> 'Blessure',
                    'Regime'=>'Regime',
                    'Therapie'=>'Therapie',
                    
                    
                    
                ),
            ])
            
            ->add('email',TextType::class,[
                'label'=>'email',
                'attr'=>[
                    'placeholder'=>'Merci de définir un email'
                ]
            ])
            ->add('dateRdv',TextType::class,[
                'label'=>'date rendez vous',
                'attr'=>[
                    'placeholder'=>'Merci de définir un date de rendez vous'
                ]
            ])


        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Consultation::class,
        ]);
    }
}
