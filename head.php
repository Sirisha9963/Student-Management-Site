<!-- <?php 
session_start();
if(isset($_GET['log'])){
    session_destory();
    unset($_SESSION['admin_name']);
    header('location:login.php');
}
?> -->
<nav class="navbar navbar-expand navbar-light bg-light" style="height:75px;">
    
        <div class="col-sm-2 bg-dark text-center pb-0 ms-0" style="height:74px;margin-left:0!important; width:252px" >
            <p class="text-white  mt-4 fw-bolder fs-lg">SMS</p>
        </div>
        <div class="col-sm-5 mt-4 text-center">
                <p class="h5"> Welcome to <?php echo $_SESSION['admin_name'] ?>&nbsp;Dashboard</p></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-end me-5" id="navbarNavDarkDropdown">             
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="img-xs rounded-circle ms-2" src="pics/face8.jpg" alt="Profile image" style="width:30px;height:30px;"> <span class="font-weight-normal"><?php echo $_SESSION['admin_name'] ?></span></a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink" style="margin-left:-60px !important; width:210px;">
                                <div class="dropdown-header text-center">
                                    <img class="img-md rounded-circle border border-2 mt-3" src="pics/face8.jpg" alt="Profile image" width="85%" height="170px">
                                    <p class="mb-1 mt-3"><?php echo $_SESSION['admin_name'] ?></p>
                                    <p class="font-weight-light text-muted mb-0"><?php echo $_SESSION['admin_email']?></p>
                                </div>
                                <ul class="list-unstyled mx-4 my-2">
                                    <li><a class="dropdown-item" href="my_profile.php">&nbsp;&nbsp;<i class="bi bi-person text-info "></i>&nbsp;&nbsp;&nbsp;My Profile</a></li>
                                    <li><a class="dropdown-item" href="setting_password.php">&nbsp;&nbsp;<i class="bi bi-gear  text-info"></i>&nbsp;&nbsp;&nbsp;Setting</a></li>
                                    <li><a class="dropdown-item" href="login.php">&nbsp;&nbsp;<i class="bi bi-power text-info"></i>&nbsp;&nbsp;Sign Out</a></li>
                                    
                                </ul>
                            </ul>
                        </li>
                    </ul>
                </div>
        </div>
        </nav>


    <!-- <div class="container-fluid"> 
  <div class="row" style="height:50px">
    <div class="col-sm-2 bg-dark">
        <h5 class="text-white pt-2 ps-5">SMS</h5>
    </div>
    <div class="col-sm-4 pt-2">
        <h5>Admin welcome Dashboard</h5>
    </div>
    <div class="col-sm-3 offset-sm-3 pt-2">
      <img src="face8.jpg" alt="Logo" style="width:40px;" class="rounded-pill">
      <div class="dropdown" style="display:inline">
          <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">
           Admin
          </button>
          <ul class="dropdown-menu">
            <li><img src="face8.jpg" alt="Logo" style="width:140px;padding-left:20px" class="rounded-pill"></li>
            <li><p class="dropdown-item text-center">Admin<p></li>
            <li><h5 class="dropdown-header text-center">Admin@gmail.com</h5></li>
            <li><a class="dropdown-item" href="#">My Profile</a></li>
            <li><a class="dropdown-item" href="#">Setting</a></li>
            <li><a class="dropdown-item" href="#">Sign Out</a></li>
          </ul>
      </div>
    </div>
  </div>

</div> -->
