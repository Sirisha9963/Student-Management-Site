<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
        <?php 
            include "head.php";
        ?>
     <div class="container-fluid" style="background-color:#ecf0f4">
        <div class="row">
            <div class="col-sm-2 bg-dark ps-0 my-0 text-white">
                <?php 
                    include "sidenav.php";
                ?>
            </div>
            <div class="col-sm-10 mt-5">
            <div class="row">
              <div class="col-sm-9">
                <h4 class="ps-3">Add Notice</h4>
              </div>
              <div class="col-sm-3">
              <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="admindashboard.php" style="text-decoration:none">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Notice</li>
              </ol>
            </nav>
              </div>
            </div>

<form method="post" class="bg-white">
  <h4 style="text-align:center">Add Notice</h4>

  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputnotice" class="form-label">Notice Title</label>
    <input type="text" class="form-control" id="exampleInputnotice" aria-describedby="noticeHelp" name="notice"> 
  </div>
  <div class="mb-3 ps-3 pe-3">
  <label  class="form-label"> 
            Notice For
        </label> 
  <select class="form-select" aria-label="Default select example" name="class">
  <option selected>select class</option>
  <option value="1">10 A</option>
  <option value="2">10 B</option>
  <option value="3">10 C</option>
  <option value="4">10 D</option>
  <option value="5">10 E</option>
  <option value="6">11 A</option>
  <option value="7">11 B</option>
  <option value="8">12 A</option>
  <option value="9">12 C</option>
</select>
</div>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputmessage" class="form-label">Notice Message</label>
    <input type="text-area" class="form-control" id="exampleInputmessage" aria-describedby="noticeHelp" name="nmessage">
    
  </div>

  <input type="submit" class="btn btn-primary ms-3" name="submit" value="ADD">
</form>
<?php
$conn=mysqli_connect('localhost','root','','daddy');
if(isset($_POST['submit'])){
    $notice=$_POST['notice'];
    $nclass=$_POST['class'];
    $nmessage=$_POST['nmessage'];
    
    $sql="INSERT INTO `tbnotice`(`Notice_Name`, `Class_Id`, `Notice_Message`) VALUES ('$notice','$nclass','$nmessage')";
    if(mysqli_query($conn,$sql)){
        echo "data inserted";
    }
    else {
        echo "not inserted";
    }

}
?>
