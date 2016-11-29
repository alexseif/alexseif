<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * PortfolioImages
 *
 * @ORM\Table(name="portfolio_images")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\PortfolioImagesRepository")
 * @ORM\HasLifecycleCallbacks
 */
class PortfolioImages
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
   * @ORM\Column(name="name", type="string", length=255)
   */
  private $name;

  /**
   * @var string
   *
   * @ORM\Column(name="path", type="string", length=255)
   */
  private $path;

  /**
   * @var UploadedFile
   */
  private $file;

  /**
   * @ORM\ManyToOne(targetEntity="Portfolio", inversedBy="images")
   * @ORM\JoinColumn(name="protfolio_id", referencedColumnName="id", onDelete="CASCADE")
   * */
  private $portfolio;

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
   * Set name
   *
   * @param string $name
   *
   * @return PortfolioImages
   */
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get name
   *
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set path
   *
   * @param string $path
   *
   * @return PortfolioImages
   */
  public function setPath($path)
  {
    $this->path = $path;

    return $this;
  }

  /**
   * Get path
   *
   * @return string
   */
  public function getPath()
  {
    return $this->path;
  }

  /**
   * Set portfolio
   *
   * @param \AdminBundle\Entity\Portfolio $portfolio
   *
   * @return PortfolioImages
   */
  public function setPortfolio(\AdminBundle\Entity\Portfolio $portfolio = null)
  {
    $this->portfolio = $portfolio;

    return $this;
  }

  /**
   * Get portfolio
   *
   * @return \AdminBundle\Entity\Portfolio
   */
  public function getPortfolio()
  {
    return $this->portfolio;
  }

  /**
   * @param UploadedFile $uploadedFile
   */
  function upload(UploadedFile $uploadedFile)
  {
    $path = sha1(uniqid(mt_rand(), true)) . '.' . $uploadedFile->guessExtension();
    $this->setPath($path);
    $this->setName($uploadedFile->getClientOriginalName());
    $uploadedFile->move($this->getUploadRootDir(), $path);
  }

  public function getWebPath()
  {
    return null === $this->path ? null : $this->getUploadDir() . '/' . $this->path;
  }

  /**
   * @return string
   */
  protected function getUploadRootDir()
  {
    // the absolute directory path where uploaded
    // documents should be saved
    return $this->container->getParameter('portfolio_directory');
  }

  /**
   * @return string
   */
  protected function getUploadDir()
  {
    return 'images/portfolio';
  }

  /**
   * @ORM\PostRemove()
   */
  public function removeFile()
  {
    if ($file = $this->getUploadRootDir() . '/' . $this->path) {
      unlink($file);
    }
  }

}
