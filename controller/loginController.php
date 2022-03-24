<?php
class loginController{
    public function __construct(){
        $db = new databaseConnection();
        $this->con = $db->con;
    }
    
    public function userLogin($id, $password){
        $password = md5($password);
        $check = "SELECT * FROM users where email='".$id."' AND password ='".$password."'";
        $result = $this->con->query($check);

        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            $this->userAuthentication($data);
            return true;
        }else{
            $check = "SELECT * FROM users where username='".$id."' AND password ='".$password."'";
            $result = $this->con->query($check);
            if ($result->num_rows > 0) {
                $data = $result->fetch_assoc();
                $this->userAuthentication($data);
                return true;
            }else{
                return false;
            }
        }

    }

    private function userAuthentication($data){
        $_SESSION['authenticated'] = true;
        $_SESSION['role'] = $data['user_type'];
        $_SESSION['auth_user'] = [
            'id' => $data['id'],
            'user_name' => $data['username'],
            'email' => $data['email'],
        ];

    }

    public function logout(){

        if ($_SESSION['authenticated'] === TRUE) {
            unset($_SESSION['authenticated']);
            unset($_SESSION['auth_user']);
            return true;
        }else{
            return false;
        }

    }

    public function isLoggedIn(){
        if (isset($_SESSION['authenticated'])) {
            redirect("You are allready Logged in","index.php");
        }else{
            return false;
        }
    }
}
?>