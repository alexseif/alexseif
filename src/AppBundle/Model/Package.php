<?php
/**
 * The following content was designed & implemented under AlexSeif.com
 **/

namespace AppBundle\Model;


class Package
{
    /**
     * @var string package name
     */
    private $name;

    /**
     * @var string link to package image
     */
    private $image;
    /**
     * @var string link to package background image
     */
    private $background;

    /**
     * @var float package price
     */
    private $price;

    /**
     * Package constructor.
     * @param string $name
     * @param string $image
     * @param float $price
     * @param string $background
     */
    public function __construct(string $name, string $image, float $price, string $background)
    {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->background = $background;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getBackground(): string
    {
        return $this->background;
    }

    /**
     * @param string $background
     */
    public function setBackground(string $background): void
    {
        $this->background = $background;
    }


}