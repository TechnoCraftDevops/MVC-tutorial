<?php
declare(strict_types=1);

namespace App\Entity;

class User
{
    private int $id;
    private int $age;
    private string $sex;
    private int $weight;
    private int $height;

    function __construct() {
    }

    /**
     * Get the value of id
     */ 
    public function getId(): int
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
     * Get the value of age
     */ 
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of sex
     */ 
    public function getSex(): string
    {
        return $this->sex;
    }

    /**
     * Set the value of sex
     *
     * @return  self
     */ 
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get the value of weight
     */ 
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */ 
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get the value of height
     */ 
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     *
     * @return  self
     */ 
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }


    public static function getStatus(int $age): string
    {
        if($age>18){
            return 'majeur';
            
        }else if($age < 18){
            return 'minure';
        }else{
            exit();
        }
    }

    public static function addString(int $age): string
    {
        $status = self::getStatus($age);
        $sentens = 'vous étes ' . $status;
        return $sentens;
    }

    
}
