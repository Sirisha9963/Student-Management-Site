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
                <h4 class="ps-3">View Students Profile</h4>
              </div>
              <div class="col-sm-3">
              <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="student_dashboard.php" style="text-decoration:none">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">View Students Profile</li>
              </ol>
            </nav>
              </div>
            </div>
            <?php
    $conn=mysqli_connect('localhost','root','','daddy');
    
        $stdname=$_SESSION['student_name'];
        $sql="SELECT * FROM student WHERE User_Name='$stdname' ";
        $result= mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){  
            $row1=mysqli_fetch_array($result);
           
                echo "<table class='table table-bordered table-primary mt-5'>";
                echo "<tr>";
                echo "<th>"."Student Name"."</th>";
                echo "<td>" .$row1['Student_Name'] ."</td>";
                echo "<th>"."Student Email"."</th>";
                echo "<td>" .$row1['Student_Email'] ."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>"."Student Class"."</th>";
                echo "<td>" .$row1['Student_Section'] ."</td>";
                echo "<th>"."Gender"."</th>";
                echo "<td>" .$row1['Student_Gender'] ."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>"."Date of Birth"."</th>";
                echo "<td>" .$row1['Student_DOB'] ."</td>";
                echo "<th>"."Student ID"."</th>";
                echo "<td>" .$row1['Student_ID'] ."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>"."Father Name"."</th>";
                echo "<td>" .$row1['Father_Name'] ."</td>";
                echo "<th>"."Mother Name"."</th>";
                echo "<td>" .$row1['Mother_Name'] ."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>"."Contact Number"."</th>";
                echo "<td>" .$row1['Contact_Number'] ."</td>";
                echo "<th>"."Altenate Number"."</th>";
                echo "<td>" .$row1['Alt_Number'] ."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>"."Address"."</th>";
                echo "<td>" .$row1['Address'] ."</td>";
                echo "<th>"."User Name"."</th>";
                echo "<td>" .$row1['User_Name'] ."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>"."Profile Pics"."</th>";
                echo "<td>"."<img src=pics/$row1[Student_Photo] width='100px' height='100px'>"."</td>";
                echo "<th>"."Date of Admission"."</th>";
                echo "<td>" .$row1['Date_of_Admission'] ."</td>";
                echo "</tr>";
                echo "</table>";
            }  
?> 
</div>
</div>
</div>
</body>
</html>          