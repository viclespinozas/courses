<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Temary
 *
 * @ORM\Table(name="temary", indexes={@ORM\Index(name="fk_temary_course1_idx", columns={"course_id"})})
 * @ORM\Entity
 */
class Temary
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
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var \Course
     *
     * @ORM\ManyToOne(targetEntity="Course")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="course_id", referencedColumnName="id")
     * })
     */
    private $course;

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
     * @return \Course
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * @param \Course $course
     *
     * @return self
     */
    public function setCourse(\Course $course)
    {
        $this->course = $course;

        return $this;
    }
}
