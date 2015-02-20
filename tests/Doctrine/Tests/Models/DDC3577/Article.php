<?php

namespace Doctrine\Tests\Models\DDC3577;

/**
 * @Entity
 * @Table(name="ddc3577_articles")
 */
class Article extends Post
{
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
    public $id;

    /**
     * @Column(type="string", length=255)
     */
    public $subject;
}
