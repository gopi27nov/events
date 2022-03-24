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
                        <h3>Reset Password</h3>
                    </div>
                    <form action="" method="POST">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <input type="hidden" name="email" value="<?php if (isset($email)) { echo $email;}?>">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button name="reset_btn" type="submit"  class="btn btn-primary">Update Password </button>
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