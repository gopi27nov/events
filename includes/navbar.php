<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php base_url('index.php'); ?>">Home</a>
        </li>
        <?php if (isset($_SESSION['authenticated'])) { ?>
            <li class="nav-item">
            <a class="nav-link" href="">
            <form action="" method="POST" >
                <button name="logout_btn" class="btn btn-outline-success" type="submit">Logout</button>
            </form>       
            </a>
          </li>
         <?php }else{ ?> 
        <li class="nav-item">
          <a class="nav-link" href="<?php base_url('login.php'); ?>">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php base_url('register.php'); ?>">Register</a>
        </li>
        <?php } ?> 
      </ul>
    </div>
  </div>
</nav>