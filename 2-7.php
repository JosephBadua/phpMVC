<?php
    class User {
        public $name;
        public $age;
        public static $minPassLength = 6;

        public static function validatePass($pass){
            if(strlen($pass) >= self::$minPassLength){
                return true;
            } else {
                return false;
            }
        }
    }

    $password = 'hello1';

    if(User::validatePass($password)) {
        echo 'passed';
    } else {
        echo 'did not pass';
    }
    
    // use double colon :: when dealing with static methods
    // self:: and __Class__::
?>