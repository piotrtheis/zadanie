<?php

namespace Tysdever\NotifierBundle\Tests\Fixtures;

use Faker\Factory;
use Tysdever\NotifierBundle\Message\NotifierMessage;

/**
 * Class Message
 *
 * @package Tysdever\NotifierBundle\Tests\Fixtures
 * @author Piotr Theis <piotr.theis@etendard.pl>
 */
class Message extends NotifierMessage {

    /**
     * Message constructor.
     */
    public function __construct()
    {
        $faker = Factory::create();

        $this->getBody($faker->text);
        $this->setSubject($faker->title);
    }
}