<?php

/*
 * This file is part of Sulu.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\CommentBundle\Entity;

use Sulu\Bundle\MediaBundle\Entity\Collection;

/**
 * Interface for threads.
 */
interface ThreadInterface
{
    /**
     * Returns id.
     *
     * @return int
     */
    public function getId();

    /**
     * Returns type.
     *
     * @return string
     */
    public function getType();

    /**
     * Returns entity-id.
     *
     * @return string
     */
    public function getEntityId();

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $title
     */
    public function setTitle($title);

    /**
     * Returns comment-count.
     *
     * @return int
     */
    public function getCommentCount();

    /**
     * Increases comment-count.
     *
     * @return $this
     */
    public function increaseCommentCount();

    /**
     * Decreases comment-count.
     *
     * @return $this
     */
    public function decreaseCommentCount();

    /**
     * Set comment-count.
     *
     * @param int $commentCount
     *
     * @return $this
     */
    public function setCommentCount($commentCount);

    /**
     * Returns comments.
     *
     * @return Collection
     */
    public function getComments();

    /**
     * Add comment.
     *
     * @param CommentInterface $comment
     *
     * @return $this
     */
    public function addComment(CommentInterface $comment);
}
