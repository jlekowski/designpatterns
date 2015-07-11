<?php

namespace DesignPatterns\Observer;

class MailerObserver implements \SplObserver
{
    /**
     * @var Mailer
     */
    protected $mailer;

    /**
     * @param Mailer $mailer
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * {@inheritdoc}
     */
    public function update(\SplSubject $subject)
    {
        if ($subject instanceof User) {
            $this->mailer->sendUserUpdateEmail($subject);
        }
    }
}
