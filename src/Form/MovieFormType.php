<?php

namespace App\Form;

use App\Entity\Movie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MovieFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title',TextType::class,[
                'attr' => array(
                    'class' => 'bg-transparent block border border-b-2 w-full h-20 text-6xl outline-none',
                    'placeholder' => 'Enter Title...'
                ),
                'label' => false,
                'required' => false
            ])
            ->add('releaseYear',IntegerType::class,[
                'attr' => array(
                    'class' => 'bg-transparent mt-10 border-b-2 w-full h-20 text-6xl outline-none',
                    'placeholder' => 'Enter Release Year...'
                ),
                'label' => false,
                'required' => false
            ])
            ->add('description',TextareaType::class,[
                'attr' => array(
                    'class' => 'bg-transparent block mt-10 border-b-2 w-full h-60 text-6xl outline-none',
                    'placeholder' => 'Enter Description...'
                ),
                'label' => false,
                'required' => false
            ])
            ->add('imagePath', FileType::class,[
                'required' => false,
                'mapped' => false
            ])
            // ->add('imagePath',FileType::class,[
            //     'attr' => array(
            //         'class' => 'py-10'
            //     ),
            //     'label' => false
            // ])
            // ->add('actors')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Movie::class,
        ]);
    }
}
