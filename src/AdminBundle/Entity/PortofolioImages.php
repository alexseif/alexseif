<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * PortofolioImages
 *
 * @ORM\Table(name="portofolio_images")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\PortofolioImagesRepository")
 * @ORM\HasLifecycleCallbacks
 */
class PortofolioImages
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
   * @ORM\ManyToOne(targetEntity="Portofolio", inversedBy="portofolioImages")
   * @ORM\JoinColumn(name="protofolio_id", referencedColumnName="id", onDelete="CASCADE")
   * */
  private $portofolio;

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
   * @return PortofolioImages
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
   * @return PortofolioImages
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
   * Set portofolio
   *
   * @param \AdminBundle\Entity\Portofolio $portofolio
   *
   * @return PortofolioImages
   */
  public function setPortofolio(\AdminBundle\Entity\Portofolio $portofolio = null)
  {
    $this->portofolio = $portofolio;

    return $this;
  }

  /**
   * Get portofolio
   *
   * @return \AdminBundle\Entity\Portofolio
   */
  public function getPortofolio()
  {
    return $this->portofolio;
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
    return $this->getParameter('brochures_directory');
  }

  /**
   * @return string
   */
  protected function getUploadDir()
  {
    return 'images/portofolio';
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
