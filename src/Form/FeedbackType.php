<?php
declare(strict_types=1);

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;

class FeedbackType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                child: 'name',
                options: [
                    'constraints' => [
                        new NotBlank(),
                    ],
                ]
            )
            ->add(
                child: 'email',
                type: EmailType::class,
                options: [
                    'label' => 'Email',
                    'required' => true,
                    'constraints' => [
                        new NotBlank(),
                        new Email(),
                    ],
                ]
            )
            ->add(
                child: 'topic',
                type: ChoiceType::class,
                options: [
                    'constraints' => [
                        new NotBlank(),
                    ],
                    'label' => 'Topic',
                    'required' => true,
                    'choices' => [
                        'Question for the podcast' => 'question_for_the_podcast',
                        'Course/tutorial suggestion' => 'course_tutorial_suggestion',
                        'Podcast guest suggestion' => 'podcast_guest_suggestion',
                        'Podcast topic suggestion' => 'podcast_topic_suggestion',
                        'Other' => 5,
                    ],
                ]
            )
            ->add(
                child: 'subject',
                type: TextType::class,
                options: [
                    'constraints' => [
                        new NotBlank(),
                    ],
                    'label' => 'Subject',
                    'required' => false,
                ]
            )
            ->add(
                child: 'message',
                type: TextareaType::class,
                options: [
                    'constraints' => [
                        new NotBlank(),
                    ],
                    'label' => 'Message',
                    'required' => true,
                ]
            )
            ->add(
                child: 'private',
                type: ChoiceType::class,
                options: [
                'label' => 'Permission',
                'choices' => [
                    'I grant permission for this feedback to be read out on-air or be added to the website' => 'feedback_is_public',
                    'This feed back is private' => 'feedback_is_private',
                ],
                'data' => 'feedback_is_public',
                'expanded' => true,
                'multiple' => false,
            ],
            );
    }
}
