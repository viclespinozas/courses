<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Course
 *
 * @ORM\Table(name="course", indexes={@ORM\Index(name="fk_course_fos_user1_idx", columns={"created_by"})})
 * @ORM\Entity
 */
class Course
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
     * @ORM\Column(name="name", type="string", length=45, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duration", type="integer", nullable=true)
     */
    private $duration;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="started_at", type="datetime", nullable=true)
     */
    private $startedAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="finished_at", type="datetime", nullable=true)
     */
    private $finishedAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_finished", type="boolean", nullable=true)
     */
    private $isFinished;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="created_by", referencedColumnName="id")
     * })
     */
    private $createdBy;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Languages", inversedBy="courses")
     * @ORM\JoinTable(name="course_has_languages",
     *   joinColumns={
     *     @ORM\JoinColumn(name="course_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="languages_id", referencedColumnName="id")
     *   }
     * )
     */
    private $programmingLanguages;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->programmingLanguages = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return Collection|Languages[]
     */
    public function getProgrammingLanguages(): Collection
    {
        return $this->programmingLanguages;
    }

    public function addProgrammingLanguage(Languages $programmingLanguage): self
    {
        if (!$this->programmingLanguages->contains($programmingLanguage)) {
            $this->programmingLanguages[] = $programmingLanguage;
        }

        return $this;
    }

    public function removeProgrammingLanguage(Languages $programmingLanguage): self
    {
        if ($this->programmingLanguages->contains($programmingLanguage)) {
            $this->programmingLanguages->removeElement($programmingLanguage);
        }

        return $this;
    }

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

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
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }

    /**
     * @param \DateTime|null $startedAt
     *
     * @return self
     */
    public function setStartedAt($startedAt)
    {
        $this->startedAt = $startedAt;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getFinishedAt()
    {
        return $this->finishedAt;
    }

    /**
     * @param \DateTime|null $finishedAt
     *
     * @return self
     */
    public function setFinishedAt($finishedAt)
    {
        $this->finishedAt = $finishedAt;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function isIsFinished()
    {
        return $this->isFinished;
    }

    /**
     * @param bool|null $isFinished
     *
     * @return self
     */
    public function setIsFinished($isFinished)
    {
        $this->isFinished = $isFinished;

        return $this;
    }

    /**
     * @return \User
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param \User $createdBy
     *
     * @return self
     */
    public function setCreatedBy(\User $createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }
}
