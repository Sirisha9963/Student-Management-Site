<?php
session_start();
$conn=mysqli_connect('localhost','root','','daddy');
//Update Details
if(isset($_POST['update'])){
    $id=$_GET['sno'];
   
    $sname1=$_POST['sname'];
    $semail1=$_POST['semail'];
    $section1=$_POST['section'];
    $gender1=$_POST['gender'];
    $dob1=$_POST['dob'];
    $sid1=$_POST['sid'];
    $image1 = $_FILES["image"]["name"];
    $tempname1 = $_FILES["image"]["tmp_name"];
    $folder1 = "./pics/" . $image1;   
    $fname1=$_POST['fname'];
    $mname1=$_POST['mname'];
    $cnum1=$_POST['cnum'];
    $anum1=$_POST['anum'];
    $address1=$_POST['address'];
    $usname1=$_POST['usname'];
    $pass1=$_POST['pass'];
    if(empty($image1)){
      $sql="select * from student where sno='$id'";
      $res=mysqli_query($conn,$sql);
      if(mysqli_num_rows($res)>0){
        $resl=mysqli_fetch_array($res);
        $image1=$resl['Student_Photo'];
        $updt="UPDATE `student` SET `Student_Name`='$sname1',`Student_Email`='$semail1',`Student_Section`='$section1',`Student_Gender`='$gender1',`Student_DOB`='$dob1',`Student_ID`='$sid1',`Student_Photo`='$image1',`Father_Name`='$fname1',`Mother_Name`='$mname1',`Contact_Number`='$cnum1',`Alt_Number`='$anum1',`Address`='$address1',`User_Name`='$usname1',`Password`='$pass1' WHERE  sno=$id";
        if(mysqli_query($conn, $updt)){
          move_uploaded_file($tempname1, $folder1);

        }

      }
      
    }
    else{
      $updt="UPDATE `student` SET `Student_Name`='$sname1',`Student_Email`='$semail1',`Student_Section`='$section1',`Student_Gender`='$gender1',`Student_DOB`='$dob1',`Student_ID`='$sid1',`Student_Photo`='$image1',`Father_Name`='$fname1',`Mother_Name`='$mname1',`Contact_Number`='$cnum1',`Alt_Number`='$anum1',`Address`='$address1',`User_Name`='$usname1',`Password`='$pass1' WHERE  sno=$id";
        if(mysqli_query($conn, $updt)){
          move_uploaded_file($tempname1, $folder1);
        }

      
     
    }
}
if(isset($_GET['sno'])){
    $id1=$_GET['sno'];
    $read="select * from student where sno='$id1'";
    $result=mysqli_query($conn, $read);
    if(mysqli_num_rows($result)==1){
        $row1=mysqli_fetch_array($result);
    }
    else{
        echo "duplicated rows";
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
                <h4 class="ps-3">Update Students</h4>
              </div>
              <div class="col-sm-3">
              <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="admindashboard.php" style="text-decoration:none">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Update Students</li>
              </ol>
            </nav>
              </div>
            </div>
<form method="post" enctype="multipart/form-data" class="bg-white">
<h4 style="text-align:center">Update Students</h4>
<div class="mb-3 ps-3 pe-3">
    <label for="exampleInputname" class="form-label">Student Name</label>
    <input type="text" class="form-control" id="exampleInputname" aria-describedby="emailHelp" name="sname" value="<?php echo $row1['Student_Name'];?>">
  </div>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputEmail1" class="form-label">Student Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="semail" value="<?php echo $row1['Student_Email'];?>">
  </div>
  <div class="mb-3 ps-3 pe-3">
  <label  class="form-label"> Enter Section</label>
  <input list="sections" name="section" id="section" value="<?php echo $row1['Student_Section'];?>"> 
  <datalist id="sections">
  <option selected >select section</option>
  <option value="10 A">
  <option value="10 B">
  <option value="10 C">
  <option value="10 D">
  <option value="10 E">
  <option value="11 A">
  <option value="11 B">
  <option value="12 A">
  <option value="12 C">
</datalist>
  </div>
  <div class="mb-3 ps-3 pe-3">
  <label  class="form-label"> 
            Enter gender
        </label> 
  <select class="form-select" aria-label="Default select example" name="gender">
  <option selected ><?php echo $row1['Student_Gender'];?>"</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Others">Others</option>
</select>
  </div>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputdob1" class="form-label">Date of Birth</label>
    <input type="date" class="form-control" id="exampleInputdob1" name="dob" value="<?php echo $row1['Student_DOB'];?>">
  </div>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputid1" class="form-label">Student ID</label>
    <input type="text" class="form-control" id="exampleInputid1" name="sid" value="<?php echo $row1['Student_ID'];?>">
  </div>
 
  <div class="input-group mb-3 ps-3 pe-3">
  <label for="exampleInputid1" class="form-label">Student Photo</label> 
  <?php
    echo "<img src=pics/$row1[Student_Photo] width='100px' height='100px'>";
  ?>
  
  <input type="file" class="form-control" id="inputGroupFile02" name="image">
  
</div>
<h2 class="ms-3">Parents/Guardian's details</h2>
<div class="mb-3 ps-3 pe-3">
    <label for="exampleInputfname" class="form-label">Father Name</label>
    <input type="text" class="form-control" id="exampleInputfname" aria-describedby="fnameHelp" name="fname" value="<?php echo $row1['Father_Name'];?>">
  </div>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputmname" class="form-label">Mother Name</label>
    <input type="text" class="form-control" id="exampleInputmname" aria-describedby="mnameHelp" name="mname" value="<?php echo $row1['Mother_Name'];?>">
  </div>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputfnum" class="form-label">Contact Number</label>
    <input type="text" class="form-control" id="exampleInputfnum" aria-describedby="conHelp" name="cnum" value="<?php echo $row1['Contact_Number'];?>">
  </div>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputfnum1" class="form-label">Alternative Contact Number</label>
    <input type="text" class="form-control" id="exampleInputfnum1" aria-describedby="anumHelp" name="anum" value="<?php echo $row1['Alt_Number'];?>">
  </div>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputadd" class="form-label">Address</label>
    <input type="text-area" class="form-control" id="exampleInputadd" aria-describedby="addHelp" name="address" value="<?php echo $row1['Address'];?>">
  </div>
  <h2 class="ms-3">Login Details</h2>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputuname" class="form-label">User Name</label>
    <input type="text" class="form-control" id="exampleInputuname" aria-describedby="userHelp" name="usname" value="<?php echo $row1['User_Name'];?>">
  </div>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputpass" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputpass" aria-describedby="passHelp" name="pass" value="<?php echo $row1['Password'];?>">
  </div>
  <button type="submit" class="btn btn-primary ms-3" name="update" onclick="myFunction()">UPDATE</button>
  
</form>
<script>
function myFunction() {
  window.alert('Student has been updated');
}
</script>
</body>
</html>
