<?php

namespace Doctrine\Tests\Models\DDC3577;

/**
 * @Entity
 * @Table(name="ddc3577_users")
 */
class User
{
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
    public $id;

    /**
     * @Column(type="string", length=255, unique=true)
     */
    public $username;
}
