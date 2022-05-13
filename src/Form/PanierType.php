<?php

namespace App\Form;

use App\Entity\Panier;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PanierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
           
        ->add('quantite',TextType::class,[
            'label'=>'quantite',
            'attr'=>[
                'placeholder'=>'Merci de définir la quantite'
            ]
     ]
)
        ->add('coupon',NumberType::class,[
            'label'=>'coupon',
            'attr'=>[
                'placeholder'=>'Merci de définir le coupon'
            ]
        ]

)
            ->add('idP', EntityType::class,[
                'class'=>Panier::class, 'choice_label'=>'nomP'
            ])



    ;
}

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Panier::class,
        ]);
    }
}
