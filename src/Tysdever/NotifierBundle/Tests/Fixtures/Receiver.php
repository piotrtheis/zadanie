<?php

namespace Tysdever\NotifierBundle\Tests\Fixtures;

use Faker\Factory;
use Tysdever\NotifierBundle\Receiver\NotifierReceiver;

/**
 * Class Receiver
 *
 * @package Tysdever\NotifierBundle\Tests\Fixtures
 * @author Piotr Theis <piotr.theis@etendard.pl>
 */
class Receiver extends NotifierReceiver {

    /**
     * Receiver constructor.
     */
    public function __construct()
    {
        $faker = Factory::create();

        $this->setReceiverIdentity($faker->email);
        $this->setSenderIdentity($faker->email);
    }
}