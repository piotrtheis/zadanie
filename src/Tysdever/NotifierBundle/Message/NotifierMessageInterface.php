<?php

namespace Tysdever\NotifierBundle\Message;

/**
 * Interface NotifierMessageInterface
 *
 * @package Tysdever\NotifierBundle\Message
 * @author Piotr Theis <piotr.theis@etendard.pl>
 */
interface NotifierMessageInterface {

    /**
     * Set message subject.
     *
     * @param $subject
     * @return void
     */
    public function setSubject($subject);

    /**
     * Get message subject.
     *
     * @return string
     */
    public function getSubject();

    /**
     * Set message body.
     *
     * @param $body
     * @return void
     */
    public function setBody($body);

    /**
     * Get message body.
     *
     * @return string
     */
    public function getBody();
}