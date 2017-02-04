<?php

namespace Tysdever\NotifierBundle\Notifier;

use Tysdever\NotifierBundle\Message\NotifierMessageInterface;
use Tysdever\NotifierBundle\Receiver\NotifierReceiverInterface;


/**
 * Class EmailNotifier
 *
 * @package Tysdever\NotifierBundle\Notifier
 * @author Piotr Theis <piotr.theis@etendard.pl>
 */
class EmailNotifier implements NotifierInterface {

    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    /**
     * EmailNotifier constructor.
     *
     * @param \Swift_Mailer $mailer
     */
    public function __construct(\Swift_Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @inheritdoc
     */
    public function notify(NotifierMessageInterface $message, NotifierReceiverInterface $receiver)
    {
        $msg = \Swift_Message::newInstance()
            ->setFrom($receiver->getSenderIdentity())
            ->setTo($receiver->getReceiverIdentity())
            ->setSubject($message->getSubject())
            ->setBody($message->getBody(), 'text/plain');

        $this->mailer->send($msg);

    }
}