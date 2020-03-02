<?php
    class User {
        private $name;
        private $age;

        public function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
        }

        // public function getName(){
        //     return $this->name;
        // }

        // public function setName($name){
        //     $this->name = $name;
        // }


        //get Magic method
        public function __get($property){
            if(property_exists($this, $property)){
                return $this->$property;
            }
        }
        //set magic method
        public function __set($property, $value){
            if(property_exists($this, $property)){
                $this->$property = $value;
            }
            return $this;
        }
    }

    $user1 = new User('Joseph', 21);

    // $user1->setName('Eunice');
    // echo $user1->getName();
    $user1->__set('age', 41);
    echo $user1->__get('age');
?>