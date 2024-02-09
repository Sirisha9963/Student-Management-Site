<?php

session_start();
     $conn=mysqli_connect('localhost','root','','daddy');
    if(isset($_POST['submit'])){
      $sname=$_POST['sname'];
      $semail=$_POST['semail'];
      $section=$_POST['section'];
      $gender=$_POST['gender'];
      $dob=$_POST['dob'];
      $sid=$_POST['sid'];
      $image = $_FILES["image"]["name"];
      $tempname = $_FILES["image"]["tmp_name"];
      $folder = "./pics/" . $image;
      move_uploaded_file($tempname, $folder);
      $fname=$_POST['fname'];
      $mname=$_POST['mname'];
      $cnum=$_POST['cnum'];
      $anum=$_POST['anum'];
      $address=$_POST['address'];
      $usname=$_POST['usname'];
      $pass=$_POST['pass'];
     
      $rel="INSERT INTO `student`(`Student_Name`, `Student_Email`, `Student_Section`, `Student_Gender`, `Student_DOB`, `Student_ID`, `Student_Photo`, `Father_Name`, `Mother_Name`, `Contact_Number`, `Alt_Number`, `Address`, `User_Name`, `Password`) VALUES ('$sname','$semail','$section','$gender','$dob','$sid','$image','$fname','$mname','$cnum','$anum','$address','$usname','$pass')";
      if(mysqli_query($conn,$rel)){
        echo "data inserted";
      }
      else{
        echo "data not inserted";
      }


    }
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
                <h4 class="ps-3">Add Students</h4>
              </div>
              <div class="col-sm-3">
              <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="admindashboard.php" style="text-decoration:none">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Students</li>
              </ol>
            </nav>
              </div>
            </div>
<form method="post" enctype="multipart/form-data" class="bg-white">
<h3 style="text-align:center">Add Students</h3>
<div class="mb-3 ps-3 pe-3">
    <label for="exampleInputname" class="form-label">Student Name</label>
    <input type="text" class="form-control" id="exampleInputname" aria-describedby="emailHelp" name="sname">
  </div>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputEmail1" class="form-label">Student Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="semail">
  </div>
  
  <div class="mb-3 ps-3 pe-3">
  <label  class="form-label"> 
            Enter Section
        </label> 
  <select class="form-select" aria-label="Default select example" name="section">
  <option selected>select section</option>
  <option value="10 A">10 A</option>
  <option value="10 B">10 B</option>
  <option value="10 C">10 C</option>
  <option value="10 D">10 D</option>
  <option value="10 E">10 E</option>
  <option value="11 A">11 A</option>
  <option value="11 B">11 B</option>
  <option value="12 A">12 A</option>
  <option value="12 C">12 C</option>
</select>
</div>
  <div class="mb-3 ps-3 pe-3">
  <label  class="form-label"> 
            Enter gender
        </label> 
  <select class="form-select" aria-label="Default select example" name="gender">
  <option selected>choose gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Others">Others</option>
</select>
  </div>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputdob1" class="form-label">Date of Birth</label>
    <input type="date" class="form-control" id="exampleInputdob1" name="dob">
  </div>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputid1" class="form-label">Student ID</label>
    <input type="text" class="form-control" id="exampleInputid1" name="sid">
  </div>
 
  <div class="input-group mb-3 ps-3 pe-3">
  <label for="exampleInputid1" class="form-label">Student Photo</label> 
  <input type="file" class="form-control" id="inputGroupFile02" name="image">
  
</div>
<h2 class="ms-3">Parents/Guardian's details</h2>
<div class="mb-3 ps-3 pe-3">
    <label for="exampleInputfname" class="form-label">Father Name</label>
    <input type="text" class="form-control" id="exampleInputfname" aria-describedby="fnameHelp" name="fname">
  </div>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputmname" class="form-label">Mother Name</label>
    <input type="text" class="form-control" id="exampleInputmname" aria-describedby="mnameHelp" name="mname">
  </div>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputfnum" class="form-label">Contact Number</label>
    <input type="text" class="form-control" id="exampleInputfnum" aria-describedby="conHelp" name="cnum">
  </div>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputfnum1" class="form-label">Alternative Contact Number</label>
    <input type="text" class="form-control" id="exampleInputfnum1" aria-describedby="anumHelp" name="anum">
  </div>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputadd" class="form-label">Address</label>
    <input type="text-area" class="form-control" id="exampleInputadd" aria-describedby="addHelp" name="address">
  </div>
  <h2 class="ms-3">Login Details</h2>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputuname" class="form-label">User Name</label>
    <input type="text" class="form-control" id="exampleInputuname" aria-describedby="userHelp" name="usname">
  </div>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputpass" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputpass" aria-describedby="passHelp" name="pass">
  </div>
  <button type="submit" class="btn btn-primary ms-3" name="submit">ADD</button>
</form>
