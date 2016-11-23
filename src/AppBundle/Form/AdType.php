<?php

namespace AppBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class AdType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("title", TextType::class)
            ->add("brand", TextType::class)
            ->add("model", TextType::class)
            ->add("yearProduction", IntegerType::class)
            ->add("city", TextType::class)
            ->add("power", IntegerType::class)
            ->add("kilometers", IntegerType::class)
            ->add("price", NumberType::class)
            ->add("image", FileType::class, array('label' => 'Image(jpg file)') );


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Ad',
        ));

    }

    public function getName()
    {
        return 'app_bundle_ad_type';
    }
}
