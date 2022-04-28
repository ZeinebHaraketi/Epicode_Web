<?php

namespace App\Form;

use App\Entity\Blg;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class BlgType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre',TextType::class,[
                'label'=>'titre',
                'attr'=>[
                    'placeholder'=>'Merci de définir le Nom'
                ]
         ]
)
            ->add('contenu',TextType::class,[
                'label'=>'contenu',
                'attr'=>[
                    'placeholder'=>'Merci de définir le contenu'
                ]
            ]


           

)
            ->add('auteur',TextType::class,[
                'label'=>'auteur',
                'attr'=>[
                    'placeholder'=>'Merci de définir le auteur'
                ]
            ]

)
            ->add('image',FileType::class,[
                'label' => 'image',
                'mapped' => false,
                
                ]

)
            ->add('categorie',ChoiceType::class,[
                'choices'=> array(
                    'Sport'=>'Sport',
                    'Nutrition'=>'Nutrition',
                    'Education'=>'Education',
                    
                    
                ),
            ]


)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Blg::class,
        ]);
    }
}
