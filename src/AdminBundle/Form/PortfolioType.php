<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PortfolioType extends AbstractType
{

  /**
   * @param FormBuilderInterface $builder
   * @param array $options
   */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
        ->add('title')
        ->add('subtitle')
        ->add('description')
        ->add('price', \Symfony\Component\Form\Extension\Core\Type\MoneyType::class, array('required' => false))
        ->add('order')
        ->add('uploadedFiles', \Symfony\Component\Form\Extension\Core\Type\FileType::class, array(
          'multiple' => true,
          'data_class' => null,
          'required' => false,
            )
    );
  }

  /**
   * @param OptionsResolver $resolver
   */
  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'AdminBundle\Entity\Portfolio'
    ));
  }

}
