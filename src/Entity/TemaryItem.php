<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TemaryItem
 *
 * @ORM\Table(name="temary_item", indexes={@ORM\Index(name="fk_temary_item_temary1_idx", columns={"temary_id"})})
 * @ORM\Entity
 */
class TemaryItem
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duration", type="integer", nullable=true)
     */
    private $duration;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_completed", type="boolean", nullable=true)
     */
    private $isCompleted;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var \Temary
     *
     * @ORM\ManyToOne(targetEntity="Temary")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="temary_id", referencedColumnName="id")
     * })
     */
    private $temary;


}
