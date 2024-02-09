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
                <h4 class="ps-3">Manage Students</h4>
              </div>
              <div class="col-sm-3">
              <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="admindashboard.php" style="text-decoration:none">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Manage Students</li>
              </ol>
            </nav>
              </div>
            </div>
              
  <table class="table table-striped table-responsive table-borderd table-primary" id="myTable">
    <h4 class="mt-5 ms-3 text-center">Manage Students</h4>
    <tr>
        <th>Sno</th>
        <th>Student ID</th>
        <th>Student Section</th>
        <th>Student Name</th>
        <th>Student Email</th>
        <th>Date of Admission</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php

        $conn=mysqli_connect('localhost','root','','daddy');     
        $get1 = "SELECT sno, Student_ID , Student_Section, Student_Name, Student_Email, Date_of_Admission FROM student ";
        $result1= mysqli_query($conn, $get1);
         
        if(mysqli_num_rows($result1)>0){ 
           
            while($row1=mysqli_fetch_array($result1)){
                echo "<tr>";
                echo "<td>" .$row1['sno'] ."</td>";
                echo "<td>" .$row1['Student_ID'] ."</td>";
                echo "<td>" .$row1['Student_Section'] ."</td>";
                echo "<td>" .$row1['Student_Name'] ."</td>";
                echo "<td>" .$row1['Student_Email'] ."</td>";
                echo "<td>" .$row1['Date_of_Admission'] ."</td>";
                echo "<td>";
                echo '<a href="view_student.php?sno='.$row1['sno'].'"><i class="bi bi-eye-fill"></i></a>';
                echo "</td>";
                echo "<td>";
                echo '<button type="button" onclick="deleteRow(this)" style="border:none; background:none"><i class="bi bi-trash"></i></button>';
                echo "</td>";
                echo "</tr>";
            }  
      } else{
          echo "No Records";
      }
      
    ?>
</table>
<script>
function deleteRow(r) {
  var i = r.parentNode.parentNode.rowIndex;
  document.getElementById("myTable").deleteRow(i);
}
</script>
</body>
</html>


































