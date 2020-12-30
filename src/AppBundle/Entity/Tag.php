<?php

/*
 * The following content was designed & implemented under AlexSeif.com
 */

namespace AppBundle\Entity;

use FPN\TagBundle\Entity\Tag as BaseTag;
use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Tag
 *
 * @author Alex Seif <me@alexseif.com>
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Tag extends BaseTag
{

  /**
   * @var integer $id
   *
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @ORM\OneToMany(targetEntity="Tagging", mappedBy="tag", fetch="EAGER")
   * */
  protected $tagging;

}
