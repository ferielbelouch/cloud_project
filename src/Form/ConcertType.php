<?php

namespace App\Form;

use App\Entity\Concert;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ConcertType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Name')
            ->add('Description')
            ->add('StartAt', null, [
                'widget' => 'single_text',
            ])
            ->add('EndAt', null, [
                'widget' => 'single_text',
            ])
            ->add('Type')
            ->add('imageFile', FileType::class, [
                'label' => 'Image (JPG, PNG or GIF file)',
                'required' => false,
                'mapped' => false, // Le champ n'est pas mappé directement à la propriété de l'entité
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Concert::class,
        ]);
    }
}
