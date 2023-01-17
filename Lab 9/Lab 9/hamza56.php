<?php

class hamza56{
    private $username = "root";
    private $password = "";
    private $url = "localhost";
    private $database = "hamza56";
    private $db;

    function __construct(){
        try{
            $this->db = new PDO ("mysql:host=localhost; dbname=hamza56", $this->username, $this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            die($e-> getmessage());
        }
    }

    function create_user($un,$pwd){
        $sql = "INSERT INTO `users` (`uid`, `uname`, `upass`, `date`) VALUES (NULL, \"$un\", \"$pwd\", current_timestamp());";
        $this->db->exec($sql);

    }

    function signin($un,$pwd){
        $sql = "SELECT uid FROM hamza56 WHERE uname = \"$un\" AND \"$pwd\"; ";

        $data = $this->db->query($sql);
        $uid = $data->fetch();
        if(!$uid){
            print('Failed');
        }
        else {
            print($uid[0]);
        }

    }
}

?>