
<?php
    class User {
        public $name;
        public $email;

        public function __construct($name, $email) {
          $this->name = $name;
          $this->email = $email;
        }
        //method
        public function login(){
            echo $this->name . ' user logged in';
        }
    }

    //Instantiate a new Object


$user1 = new User("John Doe", 'johndoe@gmail.com');
$user2 = new User("Jane Doe", 'janedoe@gmail.com');


    $user1->login();
    $user2->login();
//    var_dump($user2);