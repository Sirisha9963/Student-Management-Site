<?php
session_start();
$conn=mysqli_connect('localhost','root','','daddy');
//Update Details
if(isset($_POST['update'])){
    $pgtitle1=$_POST['pagetit'];
    $pgdes1=$_POST['pagedes'];   
    $updt1="UPDATE `tblpage` SET Page_Title='$pgtitle1',Page_Description='$pgdes1' WHERE  Page_Type='contact us' ";
    if(mysqli_query($conn, $updt1)){
        echo '<script>alert("Form submitted successfully!");</script>';
      
       header("location:contact_us.php");     
    }else{     
        echo "something fishee";
    }
}

   
    $read="select * from tblpage where Page_Type='contact us' ";
    $result=mysqli_query($conn, $read);
    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_array($result);
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
     <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
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
                <h4 class="ps-3">Update Contact Us</h4>
              </div>
              <div class="col-sm-3">
              <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="admindashboard.php" style="text-decoration:none">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Update Contact Us</li>
              </ol>
            </nav>
              </div>
            </div>
<form method="post" class="bg-white">
  <h4 class="text-center">Update Contact Us</h4>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputabout" class="form-label">Page Title</label>
    <input type="text" class="form-control" id="exampleInputabout" aria-describedby="noticeHelp" name="pagetit" value="<?php echo $row['Page_Title'] ?>"> 
  </div>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputaboutd" class="form-label">Page Description</label>
    <textarea name="pagedes"><?php echo $row['Page_Description'] ?></textarea> 
  </div>

  <input type="submit" class="btn btn-primary ms-3" name="update" value="UPDATE">
</form>
  </body>
  </html>