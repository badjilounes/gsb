<?php
/**
 * @ORM\Entity @ORM\Table(name="medicine")
 **/
class Medicine
{
    /** @ORM\Column(type="integer") **/
    private $id;

    /** @ORM\Column(type="string") **/
    private $name;

    /** @ORM\Column(type="string") **/
    private $description;

    /** @ORM\Column(type="integer") **/
    private $price;
}