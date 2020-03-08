<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 */
class Client
{
        /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
    *@ORM\Column (type="string")
    */
    private $title;
    /**
    *@ORM\Column (type="text")
    */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getTitle():string
    {
        return $this->title;
    }
    public function getDescription():string
    {
        return $this->description;
    }
        public function setTitle($title):void
    {
         $this->title = $title;
    }
    public function setDescription($description):void
    {
         $this->description =$description ;
    }
    
}
