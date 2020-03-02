<?php
    class User {
        public $name;
        public $age;


        //runs when an object is created
        public function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
        }

        public function sayHello(){
            return $this->name . ' says hello';
        }

        // Called when no other references to a certain object
        //used for cleanup/closing connection
        public function __destruct(){
            echo 'destructor0';
        }
    }

    $user1 = new User('Joseph', 21);

    echo "$user1->name is $user1->age years old";
    echo $user1->sayHello();

    $user2 = new User('Eunice', 20);

    
    echo "$user2->name is $user2->age years old";
    echo $user2->sayHello();

?>