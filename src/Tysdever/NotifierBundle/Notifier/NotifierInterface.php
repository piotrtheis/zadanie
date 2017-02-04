<?php

namespace Tysdever\NotifierBundle\Notifier;

use Tysdever\NotifierBundle\Message\NotifierMessageInterface;
use Tysdever\NotifierBundle\Receiver\NotifierReceiverInterface;

/**
 * Interface NotifierInterface
 *
 * @package Tysdever\NotifierBundle\Notifier
 * @author Piotr Theis <piotr.theis@etendard.pl>
 */
interface NotifierInterface {

    /**
     * Send notification.
     *
     * @param $message
     * @param $receiver
     * @return mixed
     */
    public function notify(NotifierMessageInterface $message, NotifierReceiverInterface $receiver);
}