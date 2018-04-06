<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Career
 *
 * @ORM\Table(name="career")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CareerRepository")
 */
class Career
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="job_type", type="string", length=255, nullable=true)
     */
    private $jobType;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255, nullable=true)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="experience", type="string", length=255, nullable=true)
     */
    private $experience;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=true)
     */
    private $location;

    /**
     * @var array
     *
     * @ORM\Column(name="technology", type="json_array"), nullable=true)
     */
    private $technology;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="text", nullable=true)
     */
    private $company;

    /**
     * @var array
     *
     * @ORM\Column(name="responsbilities", type="json_array", nullable=true)
     */
    private $responsbilities;

    /**
     * @var array
     *
     * @ORM\Column(name="skills", type="json_array", nullable=true)
     */
    private $skills;

    /**
     * @var array
     *
     * @ORM\Column(name="additional", type="json_array", nullable=true)
     */
    private $additional;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Career
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set jobType
     *
     * @param string $jobType
     *
     * @return Career
     */
    public function setJobType($jobType)
    {
        $this->jobType = $jobType;

        return $this;
    }

    /**
     * Get jobType
     *
     * @return string
     */
    public function getJobType()
    {
        return $this->jobType;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Career
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set experienceLevel
     *
     * @param string $experienceLevel
     *
     * @return Career
     */
    public function setExperienceLevel($experienceLevel)
    {
        $this->experience = $experienceLevel;

        return $this;
    }

    /**
     * Get experienceLevel
     *
     * @return string
     */
    public function getExperienceLevel()
    {
        return $this->experience;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return Career
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set technology
     *
     * @param array $technology
     *
     * @return Career
     */
    public function setTechnology($technology)
    {
        $this->technology = $technology;

        return $this;
    }

    /**
     * Get technology
     *
     * @return array
     */
    public function getTechnology()
    {
        return $this->technology;
    }

    /**
     * Set company
     *
     * @param string $company
     *
     * @return Career
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set responsbilities
     *
     * @param array $responsbilities
     *
     * @return Career
     */
    public function setResponsbilities($responsbilities)
    {
        $this->responsbilities = $responsbilities;

        return $this;
    }

    /**
     * Get responsbilities
     *
     * @return array
     */
    public function getResponsbilities()
    {
        return $this->responsbilities;
    }

    /**
     * Set skills
     *
     * @param array $skills
     *
     * @return Career
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;

        return $this;
    }

    /**
     * Get skills
     *
     * @return array
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Set additional
     *
     * @param array $additional
     *
     * @return Career
     */
    public function setAdditional($additional)
    {
        $this->additional = $additional;

        return $this;
    }

    /**
     * Get additional
     *
     * @return array
     */
    public function getAdditional()
    {
        return $this->additional;
    }

    /**
     * Set experience
     *
     * @param string $experience
     *
     * @return Career
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return string
     */
    public function getExperience()
    {
        return $this->experience;
    }
}
