<?php 
// Define a Class
   class User{
    // Properties (attributes i.e name, email, age)
        public $name;
    // Methods (Functions)
        public function sayHello(){
            return $this->name . ' Says Hello';
        }
   }
   //Instantiate a user object from user class

   $user1 = new User();
   $user1->name = "Eunice";
   echo $user1->sayHello();

   //Create new User

   $user2 = new User();

   $user2->name = "Joseph";
   echo '<br>';
   echo $user2->sayHello();

?>