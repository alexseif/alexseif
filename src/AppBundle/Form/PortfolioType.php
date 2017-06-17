<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PortfolioType extends AbstractType
{

  /**
   * {@inheritdoc}
   */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder->add('title')->add('subtitle')->add('description')
        ->add('url', UrlType::class, array(
          'required' => false,
          'label' => 'URL'
        ))
        ->add('price', MoneyType::class, array(
          'required' => false,
          'currency' => 'EGP',
          'divisor' => 100
        ))
        ->add('publishedAt', DateType::class, array(
          'widget' => 'single_text',
          'format' => 'yyyy-MM-dd',
          'required' => false
        ))
        ->add('position')
        ->add('tags', TextType::class, array(
          'mapped' => false,
          'required' => false
    ));
  }

  /**
   * {@inheritdoc}
   */
  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'AppBundle\Entity\Portfolio'
    ));
  }

  /**
   * {@inheritdoc}
   */
  public function getBlockPrefix()
  {
    return 'appbundle_portfolio';
  }

}
