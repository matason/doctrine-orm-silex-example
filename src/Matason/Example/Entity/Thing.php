<?php

namespace Matason\Example\Entity;

/**
 * @Entity
 * @Table(name="thing")
 */
class Thing {
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     *
     * @var int
     */
    private $id;

    /**
     * @Column(type="string", length=60)
     *
     * @var string
     */
    private $name;
}
