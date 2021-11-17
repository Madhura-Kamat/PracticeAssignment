<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>


<?php if(isset($_SESSION['auth_user'])) : ?>
        <li class="nav-item">
          <a class="nav-link ">
            <?= $_SESSION['auth_user']['user_name']; ?>
          </a>
          
            
            <li><form action="allcode.php" method="POST">
              <button type="submit"  name ="logout_btn" class="btn btn-info">Logout</button>
            </form></li>
            
          
        </li>
        <?php else : ?>
          <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>

        <?php endif; ?>
      </ul>
      
    </div>
  </div>
</nav>