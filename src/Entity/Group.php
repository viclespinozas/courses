<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Sonata\UserBundle\Entity\BaseGroup as BaseGroup;

/**
 * @ORM\Entity
 * @ORM\Table(name="group")
 */
class Group extends BaseGroup
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}
