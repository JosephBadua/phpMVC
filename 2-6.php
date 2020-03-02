<?php
    class User {
        protected $name = 'Joseph';
        protected $age;

        public function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
        }
    }

    class Customer extends User {
        private $balance;

        public function __construct($name, $age, $balance){
            parent::__construct($name, $age);
            $this->balance = $balance;
        }

        public function pay($amount) {
            return $this->name . " paid $" . $amount; 
        }

        public function getBalance(){
            return $this->balance;
        }
    }

    $customer1 = new Customer('rick', 40, 500);
    echo $customer1->getBalance();
    // echo $customer1->pay(100);
?>