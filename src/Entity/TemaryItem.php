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

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param int|null $duration
     *
     * @return self
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function isIsCompleted()
    {
        return $this->isCompleted;
    }

    /**
     * @param bool|null $isCompleted
     *
     * @return self
     */
    public function setIsCompleted($isCompleted)
    {
        $this->isCompleted = $isCompleted;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param bool|null $active
     *
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return \Temary
     */
    public function getTemary()
    {
        return $this->temary;
    }

    /**
     * @param \Temary $temary
     *
     * @return self
     */
    public function setTemary(\Temary $temary)
    {
        $this->temary = $temary;

        return $this;
    }
}
