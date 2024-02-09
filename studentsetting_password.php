<?php

session_start();
    $conn=mysqli_connect('localhost','root','','daddy');
    if(isset($_POST['submit'])){
       
        $current_pass=$_POST['cpass'];
        $new_pass=$_POST['npass'];
        $confirm_pass=$_POST['conpass'];
        $sql="select * from student ";
        $result=mysqli_query($conn, $sql);     
        if(mysqli_num_rows($result)>0){
            $row=mysqli_fetch_array($result);
            if($current_pass==$row['Password']){
              if($new_pass==$confirm_pass){
                $upd="UPDATE `student` SET `Password`='$confirm_pass' WHERE Password='$current_pass'; ";
                mysqli_query($conn, $upd);
               
        
            }     
            }
            else{
                echo "enter correct password";
            }

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
            include "student_header.php";
        ?>
     <div class="container-fluid" style="background-color:#ecf0f4">
        <div class="row">
            <div class="col-sm-2 bg-dark ps-0 my-0 text-white">
                <?php 
                    include "student_sidenav.php";
                ?>
            </div>
            <div class="col-sm-10 mt-5">
            <div class="row">
              <div class="col-sm-9">
                <h4 class="ps-3">Change Password</h4>
              </div>
              <div class="col-sm-3">
              <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="student_dashboard.php" style="text-decoration:none">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Change Password</li>
              </ol>
            </nav>
              </div>
            </div>
            <form method="post" enctype="multipart/form-data" class="bg-white">
            <h3 style="text-align:center">Change Password</h3>
            <div class="mb-3 ps-4 pe-4">
              <label for="exampleInputpass1" class="form-label">Current Password</label>
             <input type="password" class="form-control" id="exampleInputpass1" aria-describedby="passHelp" name="cpass">
           </div>
          <div class="mb-3 ps-4 pe-4">
            <label for="exampleInputpass2" class="form-label">New Password</label>
            <input type="password" class="form-control" id="exampleInputpass2" aria-describedby="passHelp" name="npass">
          </div>
         <div class="mb-3 ps-4 pe-4">
          <label for="exampleInputpass3" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="exampleInputpass3" aria-describedby="passHelp" name="conpass">
          </div>
          <button type="submit" name="submit"  class="ps-3 btn btn-primary ms-4" onclick="myfun()">CHANGE</button>
         
  </form>
  </div>
  </div>
  </div>
<script>
    function myfun(){
        window.alert("Password Updated Successfully");
    }
</script>
  </body>
  </html>




 
