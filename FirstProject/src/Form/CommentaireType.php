<?php

namespace App\Form;

use App\Entity\Commentaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;



class CommentaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
//            ->add('nomC',TextType::class,[
//                'label'=>'Nom comm',
//                'attr'=>[
//                    'placeholder'=>'Merci de définir le NomC'
//                ]
//            ])
//            ->add('email',TextType::class,[
//                'label'=>'email',
//                'attr'=>[
//                    'placeholder'=>'Merci de définir email'
//                ]
//            ])
            ->add('message',TextareaType::class,[
                'attr'=>[
                    'placeholder'=>'Merci de définir le message'
                ]
            ])
            
//            ->add('nomArticle',TextType::class,[
//                'label'=>'article',
//                'attr'=>[
//                    'placeholder'=>'Merci de définir article'
//                ]
//            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commentaire::class,
        ]);
    }
}
