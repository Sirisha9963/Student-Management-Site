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
                <h4 class="ps-3">Add Class</h4>
              </div>
              <div class="col-sm-3">
              <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="admindashboard.php" style="text-decoration:none">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Class</li>
              </ol>
            </nav>
              </div>
            </div>

<form method="post" class="bg-white">
  <h3 style="text-align:center">Add Class</h3>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputEmail1" class="form-label">Class Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="class">
    
  </div>
  <div class="mb-3 ps-3 pe-3">
  <label for="GFGDataList" class="form-label"> 
            Sections
        </label> 
          
        <input class="form-control" 
            list="GFGOptions" id="GFGDataList" 
            placeholder="Select option" name="section"> 
        <datalist id="GFGOptions"> 
            <option value="A"> 
            <option value="B"> 
            <option value="C"> 
            <option value="D">
            <option value="E"> 
            <option value="F">  
        </datalist> 
  </div>
  
  <button type="submit" name="update"  class="ps-3 btn btn-primary ms-4">UPDATE</button>
</form>
<?php
$conn=mysqli_connect('localhost','root','','daddy');
if(isset($_POST['update'])){
    $class=$_POST['class'];
    $section=$_POST['section'];
    
    $sql="INSERT INTO `add_class`(`Class_Name`, `Section`) VALUES ('$class','$section')";
    if(mysqli_query($conn,$sql)){
        echo "data inserted";
    }
    else {
        echo "not inserted";
    }

}
?>
