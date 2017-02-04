<?php

namespace AppBundle\Event;

use AppBundle\Entity\Comment;
use Symfony\Component\EventDispatcher\Event;

/**
 * Class NewCommentEvent
 *
 * @package AppBundle\Event
 * @author Piotr Theis <piotr.theis@etendard.pl>
 */
class NewCommentEvent extends Event {

    const NAME = 'app.comment.new';

    /**
     * @var Comment
     */
    private $comment;

    /**
     * NewCommentEvent constructor.
     *
     * @param Comment $comment
     */
    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return Comment
     */
    public function getComment()
    {
        return $this->comment;
    }
}