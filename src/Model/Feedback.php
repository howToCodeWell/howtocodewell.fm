<?php
declare(strict_types=1);

namespace App\Model;

class Feedback
{
    private string $name;
    private int $topic;
    private string $email;
    private string $message;
    private string $subject;
    private bool $private;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Feedback
     */
    public function setName(string $name): Feedback
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getTopic(): int
    {
        return $this->topic;
    }

    /**
     * @param int $topic
     * @return Feedback
     */
    public function setTopic(int $topic): Feedback
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Feedback
     */
    public function setEmail(string $email): Feedback
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     * @return Feedback
     */
    public function setSubject(string $subject): Feedback
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return Feedback
     */
    public function setMessage(string $message): Feedback
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPrivate(): bool
    {
        return $this->private;
    }

    /**
     * @param bool $private
     * @return Feedback
     */
    public function setPrivate(bool $private): Feedback
    {
        $this->private = $private;

        return $this;
    }

}