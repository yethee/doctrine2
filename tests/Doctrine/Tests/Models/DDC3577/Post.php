<?php

namespace Doctrine\Tests\Models\DDC3577;


/**
 * @MappedSuperclass
 */
abstract class Post
{
    /**
     * @ManyToOne(targetEntity="User")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    public $author;
}
