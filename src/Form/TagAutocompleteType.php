<?php

namespace App\Form;

use App\Entity\Tag;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\ORM\EntityManagerInterface;

class TagAutocompleteType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('tags', EntityType::class, [
                'class' => Tag::class,
                'choice_label' => 'name',
                'multiple' => true,
                'expanded' => false,
                'attr' => [
                    'class' => 'tag-autocomplete',
                ],
            ])
            ->add('newTag', TextType::class, [
                'mapped' => false,
                'required' => false,
                'attr' => [
                    'class' => 'new-tag-input',
                    'placeholder' => 'Add a new tag',
                ],
            ]);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => null,
        ]);
    }

    public function getBlockPrefix(): string
    {
        return 'tag_autocomplete';
    }
}
