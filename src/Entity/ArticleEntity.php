<?php
 
namespace App\Entity;
 
class ArticleEntity
{
    private $id;
    private $title;
    private $content;
    private $cretedAt;
 
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }
 
    /**
     * Get the value of cretedAt
     */ 
    public function getCretedAt()
    {
        return $this->cretedAt;
    }
 
    /**
     * Set the value of cretedAt
     * @return  self
     */ 
    public function setCretedAt($cretedAt)
    {
        $this->cretedAt = $cretedAt;
        return $this;
    }
 
    /**
     * Get the value of content
     */ 
    public function getContent()
    {
        return $this->content;
    }
 
    /**
     * Set the value of content
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }
 
    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }
 
    /**
     * Set the value of title
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }
}
