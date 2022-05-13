<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
      
        ->add('nomP',TextType::class,[
            'label'=>'nom_p',
            'attr'=>[
                'placeholder'=>'Merci de définir le Nom'
            ]
     ]
)
        ->add('prix',TextType::class,[
            'label'=>'prix',
            'attr'=>[
                'placeholder'=>'Merci de définir le prix'
            ]
        ]

)
        ->add('photo',FileType::class,[
            'label' => 'photo',
            'mapped' => false,
            
            ]

)
        ->add('categories',ChoiceType::class,[
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
        'data_class' => Produit::class,
    ]);
}
}
