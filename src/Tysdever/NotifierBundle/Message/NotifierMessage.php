<?php

namespace Tysdever\NotifierBundle\Message;

/**
 * Class NotifierMessage
 *
 * @package Tysdever\NotifierBundle\Message
 * @author Piotr Theis <piotr.theis@etendard.pl>
 */
class NotifierMessage implements  NotifierMessageInterface {

    /**
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $body;

    /**
     * @inheritdoc
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @inheritdoc
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @inheritdoc
     */
    public function setBody($body)
    {
        $this->body = $body;
    }

    /**
     * @inheritdoc
     */
    public function getBody()
    {
        return $this->body;
    }
}