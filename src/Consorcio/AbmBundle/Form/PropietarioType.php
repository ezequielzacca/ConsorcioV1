<?php

namespace Consorcio\AbmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PropietarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tipo_documento')
            ->add('numero_documento')
            ->add('nombre')
            ->add('apellido')
            ->add('telefono_fijo')
            ->add('telefono_celular')
            ->add('contacto_auxiliar')
            ->add('observaciones')
            ->add('email')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Consorcio\AbmBundle\Entity\Propietario'
        ));
    }

    public function getName()
    {
        return 'consorcio_abmbundle_propietariotype';
    }
}
