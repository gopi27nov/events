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
                        <h3>Forget Password</h3>
                    </div>
                    <form action="" method="POST">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label>Email</label>
                                <input type="text" name="email" placeholder="Email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button name="forget_btn" type="submit"  class="btn btn-primary">Send</button>
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