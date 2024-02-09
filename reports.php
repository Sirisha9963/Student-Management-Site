<?php
    session_start();
    if(isset($_POST['submit'])){
        $conn=mysqli_connect('localhost','root','','daddy');
        $fromdate=$_POST['from'];
        $todate=$_POST['to'];
        $query = "SELECT * FROM student
                     WHERE DATE(Date_of_Admission) BETWEEN  '$fromdate' AND '$todate' ;";
                         
        $result=mysqli_query($conn,$query);
         
          if(mysqli_num_rows($result)>0){  
            $row1=mysqli_fetch_array($result);
                echo "<table class='table table-bordered table-primary mt-5'>";
                echo "<tr>";
                echo "<th>"."S.No"."</th>";
                echo "<th>"."Student ID"."</th>";
                echo "<th>"."Student Class"."</th>";
                echo "<th>"."Student Name"."</th>";
                echo "<th>"."Student Email"."</th>";
                echo "<th>"."Admissin Date"."</th>";
                echo "<th colspan=2>"."Actions"."</th>";
                echo "</tr>";
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
                echo "</table>";
            }  
          
        else{
        echo "Enter Correct Details";
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
              <div class="col-sm-8">
                <h4 class="ps-3">Between Dates Reports</h4>
              </div>
              <div class="col-sm-4">
              <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="admindashboard.php" style="text-decoration:none">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Between Dates Reports</li>
              </ol>
            </nav>
              </div>
            </div>


<form method="post" class="bg-white">
    <h4 class="text-center">Between Dates Reports</h4>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputfrom" class="form-label">From Date:</label>
    <input type="date" class="form-control" id="exampleInputfrom" aria-describedby="fromHelp" name="from"> 
  </div>
  <div class="mb-3 ps-3 pe-3">
    <label for="exampleInputto" class="form-label">To Date:</label>
    <input type="date" class="form-control" id="exampleInputto" aria-describedby="toHelp" name="to"> 
  </div>
  <input type="submit" name="submit" value="SUBMIT" class="ms-3 btn btn-primary">
</form>
</body>
</html>
