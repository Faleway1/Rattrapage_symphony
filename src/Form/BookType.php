<?php

namespace App\Form;

use App\Entity\Author;
use App\Entity\Book;
use App\Entity\Cover;
use App\Entity\Genre;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('isbn')
            ->add('title')
            ->add('summary')
            ->add('publicationYear')
            ->add('issueDate')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('user', EntityType::class, [
                'class' => User::class,
'choice_label' => 'id',
            ])
            ->add('genres', EntityType::class, [
                'class' => Genre::class,
'choice_label' => 'id',
'multiple' => true,
            ])
            ->add('authors', EntityType::class, [
                'class' => Author::class,
'choice_label' => 'id',
'multiple' => true,
            ])
            ->add('cover', EntityType::class, [
                'class' => Cover::class,
'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
        ]);
    }
}
