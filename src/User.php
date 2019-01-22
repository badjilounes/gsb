<?php
/**
 * @ORM\Entity @ORM\Table(name="user")
 **/
class User
{
    /** @ORM\Column(type="integer") **/
    private $id;

    /** @ORM\Column(type="string") **/
    private $lname;

    /** @ORM\Column(type="string") **/
    private $fname;

    /** @ORM\Column(type="string") **/
    private $address;

    /** @ORM\Column(type="string") **/
    private $mail;

    /** @ORM\Column(type="string") **/
    private $phone;

    /** @ORM\Column(type="string") **/
    private $role;

    /** @ORM\Column(type="integer", isArray="true") **/
    private $doctors;
    
    /** @ORM\Column(type="integer", isArray="true") **/
    private $medecines;

    /** @ORM\Column(type="integer", isArray="true") **/
    private $patients;
}