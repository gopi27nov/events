<?php
class resetController{

    public function __construct(){
        $db = new databaseConnection();
        $this->con = $db->con;
    }
    public function getEmail($token){
        $sql = "SELECT email from usertoken where token ='".$token."'";
        $result = $this->con->query($sql);
        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            return $data;
        }else{
            return false;
        }
    }

    public function updatePassword($email, $password){
        $password = md5($password);
        $sql = "UPDATE users SET password ='".$password."' WHERE email ='".$email."'";
        $result = $this->con->query($sql);
        return $result;
    }

}

?>