<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Gedmo\Mapping\Annotation as Gedmo;
/**
 * Portofolio
 *
 * @ORM\Table(name="portofolio")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\PortofolioRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Portofolio
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
   * @ORM\Column(name="portofolio_order", type="integer")
   */
  private $portofolioOrder = 0;

  /**
   * @var File
   * 
   * @ORM\OneToMany(targetEntity="PortofolioImages", mappedBy="portofolio", cascade={"persist", "remove"})
   * */
  private $portofolioImages;

  /**
   * @var ArrayCollection
   */
  private $uploadedFiles;

  /**
   * Constructor
   */
  public function __construct()
  {
    $this->portofolioImages = new \Doctrine\Common\Collections\ArrayCollection();
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
   * @return Portofolio
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
   * @return Portofolio
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
   * @return Portofolio
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
   * @return Portofolio
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
   * Set portofolioOrder
   *
   * @param integer $portofolioOrder
   * @return Portofolio
   */
  public function setPortofolioOrder($portofolioOrder)
  {
    $this->portofolioOrder = $portofolioOrder;

    return $this;
  }

  /**
   * Get portofolioOrder
   *
   * @return integer 
   */
  public function getPortofolioOrder()
  {
    return $this->portofolioOrder;
  }

  /**
   * Add portofolioImage
   *
   * @param \AdminBundle\Entity\PortofolioImages $portofolioImage
   *
   * @return Portofolio
   */
  public function addPortofolioImage(\AdminBundle\Entity\PortofolioImages $portofolioImage)
  {

    $this->portofolioImages[] = $portofolioImage;
    $portofolioImage->setPortofolio($this);

    return $this;
  }

  /**
   * Remove portofolioImage
   *
   * @param \AdminBundle\Entity\PortofolioImages $portofolioImage
   */
  public function removePortofolioImage(\AdminBundle\Entity\PortofolioImages $portofolioImage)
  {
    $this->portofolioImages->removeElement($portofolioImage);
  }

  /**
   * Get portofolioImages
   *
   * @return \Doctrine\Common\Collections\Collection
   */
  public function getPortofolioImages()
  {
    return $this->portofolioImages;
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
   * @ORM\PreFlush()
   */
  public function upload()
  {
    if ($this->uploadedFiles) {
      foreach ($this->uploadedFiles as $uploadedFile) {
        if ($uploadedFile) {
          $file = new PortofolioImages();
          $file->upload($uploadedFile);
          $this->getPortofolioImages()->add($file);
          $file->setPortofolio($this);
          unset($uploadedFile);
        }
      }
    }
  }

}
