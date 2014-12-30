<?php
namespace  AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ChildType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'text', array(
            'label' => 'child.child_name'
        ));
        $builder->add('surname', 'text', array(
            'label' => 'child.child_surname'
        ));
        $builder->add('age', 'integer', array(
            'label' => 'child.child_age'
        ));
        $builder->add('parent', 'text', array(
            'label' => 'child.child_parent'
        ));
        $builder->add('email', 'email', array(
            'label' => 'child.child_email'
        ));
        $builder->add('letter', 'textarea', array(
            'label' => 'child.child_letter'
        ));
        $builder->add('congratulation', 'textarea', array(
            'label' => 'child.child_congratulation'
        ));
    }

    public function getName()
    {
        return 'child';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Child',
            'csrf_protection' => false,
        ));
    }
}