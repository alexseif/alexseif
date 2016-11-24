<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Portofolio
 *
 * @ORM\Table(name="portofolio")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\PortofolioRepository")
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

}
