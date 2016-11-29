<?php

namespace AdminBundle\EventListener;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use AdminBundle\Entity\Portfolio;
use AdminBundle\Entity\PortfolioImages;
use AdminBundle\FileUploader;

/**
 * Description of PortfolioUploadListener
 *
 * @author Alex Seif <me@alexseif.com>
 */
class PortfolioUploadListener
{

  private $uploader;

  public function __construct(FileUploader $uploader)
  {
    $this->uploader = $uploader;
  }

  public function prePersist(LifecycleEventArgs $args)
  {
    $entity = $args->getEntity();

    $this->uploadFile($entity);
  }

  public function preUpdate(PreUpdateEventArgs $args)
  {
    $entity = $args->getEntity();

    $this->uploadFile($entity);
  }

  private function uploadFile($entity)
  {
    // upload only works for Product entities
    if (!$entity instanceof Product) {
      return;
    }

    $file = $entity->getImages();

    // only upload new files
    if (!$file instanceof UploadedFile) {
      return;
    }

    $fileName = $this->uploader->upload($file);
    $entity->setImages($fileName);
  }

}
