<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use DoctrineExtensions\Taggable\Taggable;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Portfolio
 *
 * @ORM\Table(name="portfolio")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PortfolioRepository")
 */
class Portfolio implements Taggable
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
   * @Gedmo\Slug(fields={"title"})
   * @ORM\Column(length=128, unique=true)
   */
  private $slug;

  /**
   * @var string
   *
   * @ORM\Column(name="url", type="string", length=255, nullable=true)
   */
  private $url;

  /**
   * @var string
   *
   * @ORM\Column(name="subtitle", type="string", length=255, nullable=true)
   */
  private $subtitle;

  /**
   * @var string
   *
   * @ORM\Column(name="description", type="text", nullable=true)
   */
  private $description;

  /**
   * @var integer
   *
   * @ORM\Column(name="price", type="integer", nullable=true)
   */
  private $price;

  /**
   * @var datetime
   *
   * @ORM\Column(name="published_at", type="datetime", nullable=true)
   */
  private $publishedAt;

  /**
   * @ORM\Column(type="integer")
   */
  private $position =0;
  private $tags;

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
   * @return Portfolio
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

  public function getSlug()
  {
    return $this->slug;
  }

  /**
   * Set slug
   *
   * @param string $slug
   *
   * @return Portfolio
   */
  public function setSlug($slug)
  {
    $this->slug = $slug;

    return $this;
  }

  /**
   * Set url
   *
   * @param string $url
   *
   * @return Portfolio
   */
  public function setUrl($url)
  {
    $this->url = $url;

    return $this;
  }

  /**
   * Get url
   *
   * @return string
   */
  public function getUrl()
  {
    return $this->url;
  }

  /**
   * Set subtitle
   *
   * @param string $subtitle
   *
   * @return Portfolio
   */
  public function setSubtitle($subtitle)
  {
    $this->subtitle = $subtitle;

    return $this;
  }

  /**
   * Get subtitle
   *
   * @return string
   */
  public function getSubtitle()
  {
    return $this->subtitle;
  }

  /**
   * Set description
   *
   * @param string $description
   *
   * @return Portfolio
   */
  public function setDescription($description)
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Get description
   *
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Set price
   *
   * @param integer $price
   *
   * @return Portfolio
   */
  public function setPrice($price)
  {
    $this->price = $price;

    return $this;
  }

  /**
   * Get price
   *
   * @return integer
   */
  public function getPrice()
  {
    return $this->price;
  }

  /**
   * Set publishedAt
   *
   * @param \DateTime $publishedAt
   *
   * @return Portfolio
   */
  public function setPublishedAt($publishedAt)
  {
    $this->publishedAt = $publishedAt;

    return $this;
  }

  /**
   * Get publishedAt
   *
   * @return \DateTime
   */
  public function getPublishedAt()
  {
    return $this->publishedAt;
  }

  /**
   * Set position
   *
   * @param integer $position
   *
   * @return Portfolio
   */
  public function setPosition($position)
  {
    $this->position = $position;

    return $this;
  }

  /**
   * Get position
   *
   * @return integer
   */
  public function getPosition()
  {
    return $this->position;
  }

  public function getTags()
  {
    $this->tags = $this->tags ?: new ArrayCollection();

    return $this->tags;
  }

  public function getTaggableType()
  {
    return 'portfolio';
  }

  public function getTaggableId()
  {
    return $this->getId();
  }

}
