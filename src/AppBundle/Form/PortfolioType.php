<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PortfolioType extends AbstractType
{

  /**
   * {@inheritdoc}
   */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder->add('title')->add('subtitle')->add('description')
        ->add('url', \Symfony\Component\Form\Extension\Core\Type\UrlType::class, array(
          'required' => false,
          'label' => 'URL'
        ))
        ->add('price', \Symfony\Component\Form\Extension\Core\Type\MoneyType::class, array(
          'required' => false,
          'currency' => 'EGP',
          'divisor' => 100
        ))
        ->add('publishedAt', \Symfony\Component\Form\Extension\Core\Type\DateType::class, array(
          'widget' => 'single_text',
          'format' => 'yyyy-MM-dd',
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
