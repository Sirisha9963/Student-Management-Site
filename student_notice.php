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
                <h4 class="ps-3">View Notice</h4>
              </div>
              <div class="col-sm-3">
              <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="student_dashboard.php" style="text-decoration:none">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">View Notice</li>
              </ol>
            </nav>
              </div>
            </div>
   
    <h4 style="text-align:center">View Notice</h4>
    
<?php
    $conn=mysqli_connect('localhost','root','','daddy');
    $sec=$_SESSION['student_section'];
    $get ="SELECT * from tbnotice where Class_Id='$sec' ";
    $result= mysqli_query($conn, $get);
      if(mysqli_num_rows($result) > 0){
            
            while($row = mysqli_fetch_array($result)){
               
                echo "<table class='table table-striped table-responsive table-primary' id='myTable'>";
                echo "<tr>";
                echo "<th>"."Notice Date"."</th>";
                echo "<td>" .$row['Creation_Date']."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>"."Notice Name"."</th>";
                echo "<td>" .$row['Notice_Name']."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>"."Notice Message"."</th>";
                echo "<td>".$row['Notice_Message']."</td>";
                echo "</tr>";
                echo "</table";
                            
            }  
      }else{
          echo "No Records";
      }
      
      ?>
</table>
</body>
</html>