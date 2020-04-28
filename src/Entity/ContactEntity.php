<?php
 
namespace App\Entity;
 
class ContactEntity
{
    private $id;
    private $names;
    private $email;
    private $messages;
    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of names
     */ 
    public function getNames()
    {
        return $this->names;
    }

    /**
     * Set the value of names
     *
     * @return  self
     */ 
    public function setNames($names)
    {
        $this->names = $names;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of messages
     */ 
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Set the value of messages
     *
     * @return  self
     */ 
    public function setMessages($messages)
    {
        $this->messages = $messages;

        return $this;
    }
}


 