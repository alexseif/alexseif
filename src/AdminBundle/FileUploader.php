<?php

namespace AdminBundle;

use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Description of FileUploader
 *
 * @author Alex Seif <me@alexseif.com>
 */
class FileUploader
{

  private $targetDir;

  public function __construct($targetDir)
  {
    $this->targetDir = $targetDir;
  }

  public function upload(UploadedFile $file)
  {
    $fileName = md5(uniqid()) . '.' . $file->guessExtension();

    $file->move($this->targetDir, $fileName);

    return $fileName;
  }

}
