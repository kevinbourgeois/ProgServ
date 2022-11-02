<?php

require "User.php";
require "DB.php";

$filteredPostData = filter_input_array( INPUT_POST, [
    "name" => FILTER_SANITIZE_STRING,
    "surname" => FILTER_SANITIZE_STRING,
    "email" => FILTER_SANITIZE_EMAIL,
    "phone" => FILTER_VALIDATE_INT,
    "passwd" => FILTER_SANITIZE_STRING
]);


$usr = new User($filteredPostData['name'],
                $filteredPostData['surname'],
                $filteredPostData['email'],
                $filteredPostData['phone'],
                $filteredPostData['passwd']
);
//var_dump($usr);

$db = new DB();

var_dump($usr->getName());
$db->addUser($usr->getName(), $usr->getSurname(), $usr->getEmail(), $usr->getPhone(), $usr->getPasswd());

