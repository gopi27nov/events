<?php
class forgetCOntroller{

    public function __construct(){
        $db = new databaseConnection();
        $this->con = $db->con;
    }

    public function checkEmail($email){
        $sql = "SELECT email FROM users where email='".$email."' LIMIT 1";
        $result = $this->con->query($sql);
        if ($result->num_rows >  0 ) {
            return true;
        }else{
            return false;
        }
    }
    public function email($email){
        $to = $email;
        $to = 'gopikumar27nov@gmail.com';
        $subject = "Password Reset";
        $txt = "Hi you OTP for password reset is ";
        $headers = "From:gopi.hestabit@gmail.com";
        $this->saveToken($email);
        if(mail($to,$subject,$txt,$headers)){
            return true;
        }else{
            return false;
        }
    }

    public function saveToken($email){
        $token = $this->generatToekn(10);
        $sql = "SELECT count(email) as count from usertoken WHERE email='".$email."'";
        $result = $this->con->query($sql);
        $data = $result->fetch_assoc();
        if ($data['count'] > 0) {
            $sql = "UPDATE usertoken SET token ='".$token."' WHERE email ='".$email."'";
            $result = $this->con->query($sql);
        }else{
            $sql = "INSERT into usertoken SET token ='".$token."', email ='".$email."'";
            $result = $this->con->query($sql);
        }
        return true;
    }

    private function generatToekn($length){
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'));
        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }
        return $key;
    }
}
?>