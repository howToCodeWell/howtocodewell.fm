<?php
declare(strict_types=1);

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class FeedbackType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(child: 'name')
            ->add(
                child: 'email',
                type: EmailType::class,
                options: [
                    'required' => true,
                ]
            )
            ->add(
                child: 'topic',
                type: ChoiceType::class,
                options: [
                    'required' => true,
                    'choices' => [
                        'Question for the podcast' => 1,
                        'Course/tutorial suggestion' => 2,
                        'Podcast guest suggestion' => 3,
                        'Podcast topic suggestion' => 4,
                        'Other' => 5,
                    ],
                ]
            )
            ->add(
                child: 'subject',
                type: TextType::class,
                options: [
                    'required' => false,
                ]
            )
            ->add(
                child: 'message',
                type: TextareaType::class,
                options: [
                    'required' => true,
                ]
            )
            ->add(
                child: 'private',
                type: ChoiceType::class,
                options: [
                'label' => 'Permission',
                'choices' => [
                    'I grant permission for this feedback to be read out on-air or be added to the website' => '1',
                    'This feed back is private' => '0',
                ],
                'expanded' => true,
                'multiple' => false,
            ],
            );
    }
}
