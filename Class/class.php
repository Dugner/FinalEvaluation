<?php
 //First name (string of 3 to 20 characters) - Age (int) - Color (string of 3 to 10 characters) - Sex (string: male or female) - Race (string of 3 to 20 characters) 
 namespace Cat;
 require_once 'index.php';
#### CLASS CAT ####
 class Cat
 {
     ### PROPERTIES OF THE CLASSS
     private $firstname;
     
     private $age;
     
     private $gender;
     
     private $color;

     private $race;

     private static $allowedGender = ['m', 'f', 'o'];

     ### GETTERS OF THE CLASS

     public function getFirstname() : string
     {
         if(strlen($firstname) < 3 && strlen($firstname) > 20) {return $this->firstname;}
         else{echo "please enter between 3 and 20 characters";}
     }
     public function getAge() : int
     {
        if(count($age) < 3 && count($age) > 10) {return $this->age;}
        else{echo "please enter between 3 and 10 numbers";}
     }
     public function getGender() : string
     {
         return $this->gender;
     }
     public function getColor() : string
     {
        if(strlen($color) < 3 && strlen($color) > 10) {return $this->color;}
        else{echo "please enter between 3 and 10 characters";}
     }
     public function getRace() : string
     {
        if(strlen($race) < 3 && strlen($race) > 10) {return $this->race;}
        else{echo "please enter between 3 and 20 characters";}
     }

        ### SETTERS OF THE CLASS
     public function setFirstname(string $firstname)
     {
         $this->firstname = $firstname;
         return $this;
     }
 
     public function setAge(int $age)
     {
         $this->age = $age;
         return $this;
     }
 
     public function setGender(string $gender)
    {
        if (!in_array($gender, self::$allowedGender)) {
            #### check for unalowrd characters
            throw new \RuntimeException('Gender is not allowed');
        }
        
        $this->gender = $gender;
        return $this;
    }
 
    public function setColor(string $color)
    {
        $this->color = $color;
        return $this;
    }
     
    public function setRace(string $race)
    {
        $this->race = $race;
        return $this;
    }

    
     public function getSignificantOther() : string
     {
         return $this->significantOther;
     }
     public static function fromArray(array $definition)
     {
         $cat = new Cat();
         $cat->setFirstname($definition['name'] ?? '')
             ->setAge((int)$definition['age'] ?? '')
             ->setGender($definition['gender'] ?? '')
             ->setColor($definition['color'] ?? '')
             ->setRace($definition['race'] ?? '');
         
         return $cat;
     }
}