<?php

require_once "User.php";

class DB
{
    private $conn;
    private static $hostname = "localhost";
    private static $usr = "root";
    private static $passwd = "root";

    public function __construct()
    {
        $this->conn = new mysqli(self::$hostname, self::$usr, self::$passwd);

        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
    }

    public function addUser($name, $surname, $email, $phone, $passwd)
    {

        try {
            $sql = "INSERT INTO users.users (name, surname, email, phone, passwd) VALUES (:name, :surname, :email, :phone, :passwd)";
            $stmt = $this->conn->prepare($sql);
            $hashPasswd = password_hash($passwd, PASSWORD_DEFAULT);

            var_dump($name);

            $stmt->bind_(':name', $name);
            $stmt->bind_param(':surname', $surname);
            $stmt->bind_param(':email', $email);
            $stmt->bind_param(':phone', $phone);
            $stmt->bind_param(':passwd', $hashPasswd);


            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }







}