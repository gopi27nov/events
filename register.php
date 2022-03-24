<?php
include('config/app.php');
include('codes/authentication.php');
$auth->isLoggedIn();
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <?php include("message.php") ?>
                <div class="card">
                    <div class="card-header">
                        <h3>Register</h3>
                    </div>
                    <form action="" method="POST">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label>User Type</label>
                                <select class="form-control select2" name="user_type">
                                    <option value="">Select User</option>
                                    <option value="s">Subscriber</option>
                                    <option value="o">Organiser</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label>User Name</label>
                                <input type="text" name="username" placeholder="username" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Email</label>
                                <input type="text" name="email" placeholder="Email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Gender</label>
                                <select class="form-control select2" name="gender">
                                    <option value="">Select Gender</option>
                                    <option value="m">Male</option>
                                    <option value="f">Female</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label>Phone</label>
                                <input type="number" name="phone" placeholder="phone no." class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Confirm Password</label>
                                <input name="confirm_password" type="password" placeholder="Confirm password" class="form-control">
                            </div>
                            <div align='center'>    
                                <input type="checkbox" name="concent">  I Agree Terms & condition 
                            </div>
                            <div class="form-group mb-3">
                                <button name="register_btn" type="submit"  class="btn btn-primary">Register Now </button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>


<?php
include('includes/footer.php');
?>