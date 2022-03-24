<?php

include_once('controller/registerController.php');
include_once('controller/loginController.php');
include_once('controller/forgetController.php');
include_once('controller/resetController.php');

    //for login purpose
    $auth = new loginController();
    if (isset($_POST['login_btn'])) {
        $id = validateInput($db->con,$_POST['id']);
        $password = validateInput($db->con,$_POST['password']);
        $result = $auth->userLogin($id, $password);
        if ($result) {
            redirect("Login Success","index.php");
        }else{
            redirect("Invalid id or password","login.php");
        }
    }
    //for logout purpose
    if (isset($_POST['logout_btn'])) {
        $result = $auth->logout();
        if ($result) {
            redirect("Log out Success","index.php");    
        }
    }
    //for forget password
    if (isset($_POST['forget_btn'])) {
        $email = $_POST['email'];
        $forget = new forgetController();
        $result = $forget->checkEmail($email);
        if ($result) {
            $emailSend = $forget->email($email);
            if ($emailSend) {
                redirect("LINK SENT ON YOUR EMAIL","forget.php");
            }
        }else{
            redirect("User Not Found","forget.php");
        }

    }


    //for reset password - getting email via token
    $resetObject = new resetController();
    if (isset($_GET['token'])) {
        $data = $resetObject->getEmail($_GET['token']);
        if ($data) {
            $email = $data['email'];
        }else{
            redirect("Link Was Not Valid","forget.php");
        }
    }
    if ($_SERVER['REQUEST_URI'] == '/events/reset.php') {
        redirect("Link Was Not Valid !! Try Again","forget.php");
    }
    //for updating password
    if (isset($_POST['reset_btn'])) {
        $email = $_POST['email'];
        $password = validateInput($db->con,$_POST['password']);
        $result = $resetObject->updatePassword($email, $password);
        if ($result) {
            redirect("Password Updated Successfully","login.php");
        }

    }
    //for registartion purpose
    if (isset($_POST['register_btn'])) {
        $username = validateInput($db->con, $_POST['username']);
        $user_type = validateInput($db->con, $_POST['user_type']);
        $email = validateInput($db->con, $_POST['email']);
        $gender = validateInput($db->con, $_POST['gender']);
        $phone = validateInput($db->con, $_POST['phone']);
        $password = validateInput($db->con, $_POST['password']);
        $confirm_password = validateInput($db->con, $_POST['confirm_password']);
        if (isset($_POST['concent'])) {
            $concent =$_POST['concent'] ;
        }else{
            redirect("Accept Terms & Condition","register.php"); 
        }

        $register = new regsiterController();
        $emailValid = $register->isValidEmail($email);
        if ($emailValid) {
            redirect($emailValid,"register.php");
        }
        $passwordMatch = $register->confirmPassword($password, $confirm_password);
        if ($passwordMatch) {
            $result = $register->emailExist($email);
            if ($result) {
                redirect("Email allready Exist","register.php");
            }else{
                $result = $register->userNameExist($username);
                if ($result) {
                    redirect("Username allready Exist","register.php");
                }else{
                    $register = $register->registration($user_type, $username,  $email,  $gender, $phone, $password, $concent );
                    if ($register) {
                        redirect("Register Success","login.php");
                    }else{
                        redirect("Something went wrong","register.php");
                    }
                }
            }
        }else{
            redirect("password & confirm password does not match","register.php");
        }
        
    }
?>