<?php
session_start();
$conn=mysqli_connect('localhost','root','','daddy');
//Update Details
if(isset($_POST['update'])){
    $id=$_GET['sno'];
    $notices=$_POST['notice'];
    $cid=$_POST['class'];
    $nmessage=$_POST['nmessage'];
    $updt="UPDATE `tbnotice` SET `Notice_Name`='$notices',`Class_Id`='$cid',`Notice_Message`='$nmessage' WHERE sno='$id' ";
    if(mysqli_query($conn, $updt)){
      //  echo "Student Details Successfully Updated ";
       header("location:manage_notice.php"); 
}    
    // }else{     
    //     echo "something fishee";
    // }
}
if(isset($_GET['sno'])){
    $id1=$_GET['sno'];
    $read="select * from tbnotice where sno='$id1'";
    $result=mysqli_query($conn, $read);
    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_array($result);
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
                <h4 class="ps-3">Update Notice</h4>
              </div>
              <div class="col-sm-3">
              <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="admindashboard.php" style="text-decoration:none">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Update Notice</li>
              </ol>
            </nav>
              </div>
            </div>
<form method="post" class="bg-white">
  <h4 class="text-center">Update Notice</h4>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputnotice" class="form-label">Notice Title</label>
    <input type="text" class="form-control" id="exampleInputnotice" aria-describedby="noticeHelp" name="notice" value="<?php echo $row['Notice_Name'] ?>"> 
  </div>
  <div class="mb-3 ps-3 pe-3">
  <label  class="form-label"> 
            Notice For
        </label> 
  <select class="form-select" aria-label="Default select example" name="class">
  <option selected><?php echo $row['Class_Id'] ?></option>
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
    <label for="exampleInputmessage" class="form-label">Notice Message</label>
    <input type="text-area" class="form-control" id="exampleInputmessage" aria-describedby="noticeHelp" name="nmessage" value="<?php echo $row['Notice_Message'] ?>">
    
  </div>

  <input type="submit" class="btn btn-primary ms-3" name="update" value="UPDATE" >
</form>
<!-- <script>
function myFunction1() {
  window.alert('Notice has been updated');
}
</script> -->
</body>
</html>

