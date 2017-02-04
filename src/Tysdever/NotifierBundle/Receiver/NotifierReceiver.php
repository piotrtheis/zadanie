<?php

namespace Tysdever\NotifierBundle\Receiver;

/**
 * Class NotifierReceiver
 *
 * @package Tysdever\NotifierBundle\Receiver
 * @author Piotr Theis <piotr.theis@etendard.pl>
 */
class NotifierReceiver implements NotifierReceiverInterface {

    /**
     * @var string
     */
    private $receiver;

    /**
     * @var string
     */
    private $sender;

    /**
     * @inheritdoc
     */
    public function setReceiverIdentity($receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * @inheritdoc
     */
    public function getReceiverIdentity()
    {
        return $this->receiver;
    }

    /**
     * @inheritdoc
     */
    public function setSenderIdentity($sender)
    {
        $this->sender = $sender;
    }

    /**
     * @inheritdoc
     */
    public function getSenderIdentity()
    {
        return $this->sender;
    }
}