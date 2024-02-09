<?php
session_start();
$conn=mysqli_connect('localhost','root','','daddy');
//Update Details
if(isset($_POST['update'])){ 
    $aname=$_POST['admin'];
    $auser=$_POST['auser'];
    $anumber=$_POST['anum'];
    $aemail=$_POST['aemail'];
    $adate=$_POST['adate'];
    $updt="UPDATE `admin` SET `Admin_Name`=' $aname',`user_name`='$auser',`mobile_number`='$anumber',`email`=' $aemail', `admin_regdate`='$adate' ";
    if(mysqli_query($conn, $updt)){
       echo "<script>"."window.alert('Admin Details Updated Successfully');"."</script>";
      
    }else{
        
        echo "something fishee";
    }
}
        $read="select * from admin";
        $result=mysqli_query($conn, $read);
        if(mysqli_num_rows($result)==1){
            $row1=mysqli_fetch_array($result);
        }
        else{
            echo "duplicated rows";
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
                <h4 class="ps-3">Admin Profile</h4>
              </div>
              <div class="col-sm-3">
              <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="admindashboard.php" style="text-decoration:none">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
              </ol>
            </nav>
              </div>
            </div>
              
<form method="post" enctype="multipart/form-data" class="bg-white">
<h4 style="text-align:center">Admin Profile</h4>
<div class="mb-3 ps-4 pe-4">
    <label for="exampleInputname" class="form-label">Admin Name</label>
    <input type="text" class="form-control" id="exampleInputname" aria-describedby="emailHelp" name="admin" value="<?php echo $row1['Admin_Name']?>">
  </div>
  <div class="mb-3 ps-4 pe-4">
    <label for="exampleInputuname" class="form-label">User Name</label>
    <input type="text" class="form-control" id="exampleInputuname" aria-describedby="userHelp" name="auser" value="<?php echo $row1['user_name']?>">
  </div>
  <div class="mb-3 ps-4 pe-4">
    <label for="exampleInputfnum" class="form-label">Contact Number</label>
    <input type="text" class="form-control" id="exampleInputfnum" aria-describedby="conHelp" name="anum" value="<?php echo $row1['mobile_number']?>">
  </div>
  <div class="mb-3 ps-4 pe-4">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="aemail" value="<?php echo $row1['email']?>">
  </div>
  <div class="mb-3 ps-4 pe-4">
    <label for="exampleInputdate" class="form-label">Admin Regestration Date</label>
    <input type="text" class="form-control" id="exampleInputdate" aria-describedby="dateHelp" name="adate" value="<?php echo $row1['admin_regdate']?>">
  </div>
  <button type="submit" name="update"  class="ps-3 btn btn-primary ms-4">UPDATE</button>
</form>

  
                
                
            </div>
        </div>

     </div>
    
</body>
</html>














