<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Portfolio
 *
 * @ORM\Table(name="portfolio")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\PortfolioRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Portfolio
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
   * @ORM\Column(name="subtitle", type="string", length=255, nullable=true)
   */
  private $subtitle;

  /**
   * @var string
   *
   * @ORM\Column(name="description", type="text")
   */
  private $description;

  /**
   * @var int
   *
   * @ORM\Column(name="price", type="integer", nullable=true)
   */
  private $price;

  /**
   * @var int
   *
   * @ORM\Column(name="portfolio_order", type="integer")
   */
  private $order = 0;

  /**
   * @var File
   * 
   * @ORM\OneToMany(targetEntity="PortfolioImages", mappedBy="portfolio", cascade={"persist", "remove"})
   * */
  private $images;

  /**
   * @var ArrayCollection
   */
  private $uploadedFiles;

  /**
   * Constructor
   */
  public function __construct()
  {
    $this->images = new \Doctrine\Common\Collections\ArrayCollection();
  }

  /**
   * Get id
   *
   * @return integer 
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set title
   *
   * @param string $title
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

  /**
   * Set subtitle
   *
   * @param string $subtitle
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
   * Set Portofolio Order
   *
   * @param integer $portfolioOrder
   * @return Portfolio
   */
  public function setOrder($order)
  {
    $this->order = $order;

    return $this;
  }

  /**
   * Get Portfolio Order
   *
   * @return integer 
   */
  public function getOrder()
  {
    return $this->order;
  }

  /**
   * @return ArrayCollection
   */
  public function getUploadedFiles()
  {
    return $this->uploadedFiles;
  }

  /**
   * @param ArrayCollection $uploadedFiles
   */
  public function setUploadedFiles($uploadedFiles)
  {
    $this->uploadedFiles = $uploadedFiles;
  }

  /**
   * Add image
   *
   * @param \AdminBundle\Entity\PortfolioImages $image
   *
   * @return Portfolio
   */
  public function addImage(\AdminBundle\Entity\PortfolioImages $image)
  {
    $this->images[] = $image;

    return $this;
  }

  /**
   * Remove image
   *
   * @param \AdminBundle\Entity\PortfolioImages $image
   */
  public function removeImage(\AdminBundle\Entity\PortfolioImages $image)
  {
    $this->images->removeElement($image);
  }

  /**
   * Get images
   *
   * @return \Doctrine\Common\Collections\Collection
   */
  public function getImages()
  {
    return $this->images;
  }

}
