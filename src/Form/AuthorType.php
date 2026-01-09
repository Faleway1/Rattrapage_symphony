<?php

namespace App\Form;

use App\Entity\Author;
use App\Entity\Book;
use App\Entity\Country;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AuthorType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('lastName')
            ->add('firstName')
            ->add('birthDate')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('country', EntityType::class, [
                'class' => Country::class,
'choice_label' => 'id',
            ])
            ->add('books', EntityType::class, [
                'class' => Book::class,
'choice_label' => 'id',
'multiple' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Author::class,
        ]);
    }
}
