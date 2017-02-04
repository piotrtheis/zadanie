<?php

namespace AppBundle\EventListener;

use AppBundle\Event\NewCommentEvent;
use Tysdever\NotifierBundle\Message\NotifierMessage;
use Tysdever\NotifierBundle\Notifier\NotifierInterface;
use Tysdever\NotifierBundle\Receiver\NotifierReceiver;

/**
 * Class NewCommentListener
 *
 * @package AppBundle\EventListener
 * @author Piotr Theis <piotr.theis@etendard.pl>
 */
class NewCommentListener {

    /**
     * @var NotifierInterface
     */
    private $notifier;

    /**
     * Notification sender.
     *
     * @var string
     */
    private $sender;

    /**
     * NewCommentListener constructor.
     *
     * @param NotifierInterface $notifier
     * @param                   $sender
     */
    public function __construct(NotifierInterface $notifier, $sender)
    {
        $this->notifier = $notifier;
        $this->sender = $sender;
    }

    public function onNewCommentAdded(NewCommentEvent $event)
    {
        $comment = $event->getComment();
        $user = $comment->getUser();

        $message = new NotifierMessage();
        $message->setSubject("New comment was added.");
        $message->setBody($comment->getContent());

        $receiver = new NotifierReceiver();
        $receiver->setReceiverIdentity("piotr_theis@o2.pl");
        $receiver->setSenderIdentity($this->sender);

        $this->notifier->notify($message, $receiver);
    }
}