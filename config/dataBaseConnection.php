<?php
class dataBaseConnection{

    public function __construct(){
        $con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
        if ($con->connect_error) {
            die('Something went wrong');
        }
        //echo "DB Connected";
        return $this->con = $con;
    }
}
?>