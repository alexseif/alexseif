<?php

namespace App\Form;

use App\Entity\Portfolio;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class PortfolioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('imageFile', VichImageType::class, [
                'required' => false,
                'allow_delete' => true,
                'download_uri' => true,
            ])
            ->add('projectDate', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
            ])
            ->add('estimatedCost', MoneyType::class, [
                'currency' => 'USD',
            ])
            ->add('tags', TagAutocompleteType::class, [
                'label' => 'Tags',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Portfolio::class,
        ]);
    }
}
