<?php

namespace Tysdever\NotifierBundle\Tests\Notifier;

use Mockery;
use Tysdever\NotifierBundle\Notifier\EmailNotifier;
use Tysdever\NotifierBundle\Tests\Fixtures\Message;
use Tysdever\NotifierBundle\Tests\Fixtures\Receiver;

/**
 * Class EmailNotifierTest
 *
 * @author Piotr Theis <piotr.theis@etendard.pl>
 */
class EmailNotifierTest extends \PHPUnit_Framework_TestCase {

    /**
     * @test
     */
    public function notify()
    {
        $mailer = Mockery::mock("Swift_Mailer");
        $mailer->shouldReceive("send")->once();
        $message = new Message();
        $receiver = new Receiver();

        $notifier = new EmailNotifier($mailer);
        $notifier->notify($message, $receiver);
    }
}