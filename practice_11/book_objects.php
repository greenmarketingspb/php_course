<?php

// $object = new user;
// print_r($object); echo "<br>";

// $object -> name = "Joe";
// $object -> password = "mypass";
// print_r($object); echo "<br>";

// $object -> save_user();

// class user {
//     public $name, $password;

//     function save_user() {
//         echo "Код";
//     }
// }


// $object1 = new user();
// $object1 -> name = "Alice";
// $object2 = $object1;
// $object2 -> name = "Amy";

// echo "$object1 name = " . $object1 -> name  . "<br>";
// echo "$object2 name = " . $object2 -> name;

// class user {
//     public $name;
// }

//не работает нихуя


$object1 = new user();
$object1->name = "Alice";
$object2 = clone $object1;
$object2->name = "Amy";

echo "object1 name = " . $object1->name  . "<br>";
echo "object2 name = " . $object2 -> name;

class user {
    public $name;
}


// class user {
//     function __construct($param1, $param2) {
//         public $username = "Guest";
//     }
// }





?>