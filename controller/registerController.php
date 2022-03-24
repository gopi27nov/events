<?php
//include('config/app.php');
class regsiterController{

    public function __construct(){
        $db = new databaseConnection();
        $this->con = $db->con;
    }

    public function registration($user_type, $username,  $email,  $gender, $phone, $password, $concent ){
        $password = md5($password);
        $register_query = "INSERT into users SET user_type='".$user_type."',
                                                    username = '".$username."',
                                                    email = '".$email."',
                                                    gender = '".$gender."',
                                                    phone = '".$phone."',
                                                    password = '".$password."',
                                                    concent = '".$concent."'";
            $result = $this->con->query($register_query);
            return $result;
    }

    public function emailExist($email){
        $sql = "SELECT email FROM users where email='".$email."' LIMIT 1";
        $result = $this->con->query($sql);
        if ($result->num_rows >  0 ) {
            return true;
        }else{
            return false;
        }
    }

    public function isValidEmail($email){
        if (empty($email)) {
            $emailErr = "Email is required";
        } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        } else{
            $emailErr = 0;
        }
        return $emailErr;
    }
    
    public function userNameExist($username){
        $sql = "SELECT username FROM users where username='".$username."' LIMIT 1";
        $result = $this->con->query($sql);
        if ($result->num_rows >  0 ) {
            return true;
        }else{
            return false;
        }
    }

    public function confirmPassword($password, $confirm_password){
        if ($password == $confirm_password) {
            return true;
        }else{
            return false;
        }

    }
}
?>