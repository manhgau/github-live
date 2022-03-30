<?php

class db{
    public $con;
    protected $servername = DB_HOST;
    protected $username = DB_USER;
    protected $password = DB_PASSWORD;
    protected $dbname = DB_NAME;

    function __construct(){
        $this->con = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }
    function __destruct(){
        mysqli_close($this->con);
    }

}

?>