<?php
use phpDocumentor\Reflection\Types\Integer;

print("INDEX <br>");

    /**
     * Nullable Type
     */

    class User{
        private $id;
        private $name;

        // : string set return type - : ? string return type can be null
        public function getName() : ? string
        {
            return $this->name;
        }

        public function getId() : Integer
        {
            return $this->id;
        }
    }

    $user =  new User;

    print("Name: " . $user->getName() . "<br>");

    class Post
    {
        private $id = 5;
        private $user_id =50;

        // ? User $user, the function accept a User type or null
        public function ownedByUser(? User $user){
            return $this->user_id === $user->id;
        }
    }

    /**
     * Array deconstructing
     */

    $response = ['alex', 27, 'red'];

    //list($name, $age, $colour) = $response;
    // PHP 7.1
    [$name, $age, $colour] = $response;
    print("Name: $name, Age: $age, Colour: $colour <br>");

    // With associative array
    $user = ['name'=>'mark', 'age'=>37, 'city'=>'olabama'];
    ['name'=>$userName, 'city'=>$userCity, 'age'=>$userAge] = $user;
    print("Name: $userName, Age: $userAge, City: $userCity <br>");
    
?>