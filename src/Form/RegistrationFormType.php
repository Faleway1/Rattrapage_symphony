<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'constraints' => [
                    new Assert\NotBlank(message: "L'email est obligatoire."),
                    new Assert\Email(message: "Email invalide."),
                ],
            ])
            ->add('lastName', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(message: "Le nom est obligatoire."),
                    new Assert\Length(min: 2, max: 50),
                ],
            ])
            ->add('firstName', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(message: "Le prénom est obligatoire."),
                    new Assert\Length(min: 2, max: 50),
                ],
            ])
            ->add('address', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(message: "L'adresse est obligatoire."),
                    new Assert\Length(min: 5, max: 150),
                ],
            ])
            ->add('zipCode', TextType::class, [
                'constraints' => [
                    new Assert\NotBlank(message: "Le code postal est obligatoire."),
                    new Assert\Regex(pattern: "/^\d{5}$/", message: "Code postal invalide (5 chiffres)."),
                ],
            ])
            ->add('birthDate', DateType::class, [
                'widget' => 'single_text',
                'constraints' => [
                    new Assert\NotNull(message: "La date de naissance est obligatoire."),
                    new Assert\LessThanOrEqual('today', message: "La date de naissance ne peut pas être dans le futur."),
                ],
            ])
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'mapped' => false,
                'first_options'  => ['label' => 'Mot de passe'],
                'second_options' => ['label' => 'Confirmer le mot de passe'],
                'invalid_message' => 'Les mots de passe ne correspondent pas.',
                'constraints' => [
                    new Assert\NotBlank(message: "Le mot de passe est obligatoire."),
                    new Assert\Length(min: 8, minMessage: "Le mot de passe doit faire au moins {{ limit }} caractères."),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
