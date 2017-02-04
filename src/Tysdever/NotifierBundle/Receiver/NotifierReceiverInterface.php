<?php

namespace Tysdever\NotifierBundle\Receiver;

/**
 * Interface NotifierReceiverInterface
 *
 * @package Tysdever\NotifierBundle\Receiver
 * @author Piotr Theis <piotr.theis@etendard.pl>
 */
interface NotifierReceiverInterface {

    /**
     * Set receiver identity, for example
     * email address for email notifier
     * or phone number for sms notifier.
     *
     * @param $receiver
     * @return void
     */
    public function setReceiverIdentity($receiver);

    /**
     * Get receiver identity.
     *
     * @return string
     */
    public function getReceiverIdentity();

    /**
     * Set sender identity.
     *
     * @see NotifierReceiverInterface::setReceiverIdentity()
     * @param $sender
     * @return void
     */
    public function setSenderIdentity($sender);

    /**
     * Get sender identity.
     *
     * @return string
     */
    public function getSenderIdentity();
}