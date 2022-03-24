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
                        <h3>Login</h3>
                    </div>
                    <form action="" method="POST">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label>Email/Username</label>
                                <input type="text" name="id" placeholder="Email/username" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button name="login_btn" type="submit"  class="btn btn-primary">Login Now </button>
                            </div>
                        </div>
                    </form>
                    <a  href="<?php base_url('forget.php'); ?>">Forget Password</a>
                </div>
                
            </div>
        </div>
    </div>
</div>


<?php
include('includes/footer.php');
?>