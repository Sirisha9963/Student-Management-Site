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
                <h4 class="ps-3">Manage Notice</h4>
              </div>
              <div class="col-sm-3">
              <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="admindashboard.php" style="text-decoration:none">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Manage Notice</li>
              </ol>
            </nav>
              </div>
            </div>
  <table class="table table-striped table-responsive table-primary" id="myTable">
    <h4 style="text-align:center">Manage Notice</h4>
    <tr>
    <th>Sno</th>
        <th>Notice Title</th>
        <th>Class</th>
        <th>Section</th>
        <th>Notice Date</th>
        <th>View</th>
        <th>Delete</th>
</tr>
<?php
    $conn=mysqli_connect('localhost','root','','daddy');
    $get ="SELECT tbnotice.sno, Notice_Name, Class_Name, Section, tbnotice.Creation_Date FROM add_class join tbnotice on add_class.sno=tbnotice.Class_Id";
    $result= mysqli_query($conn, $get);
      if(mysqli_num_rows($result) > 0){
            $i=1;
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>" .$i ."</td>";
                echo "<td>" .$row['Notice_Name'] ."</td>";
                echo "<td>" .$row['Class_Name'] ."</td>";
                echo "<td>".$row['Section']."</td>";
                echo "<td>" .$row['Creation_Date'] ."</td>";
                echo "<td>";
                echo '<a href="view_notice.php?sno='.$row['sno'].'"><i class="bi bi-eye-fill"></i></a>';
                echo "</td>";
                echo "<td>";
                echo '<button type="button" onclick="deleteRow(this)" style="border:none; background:none"><i class="bi bi-trash"></i></button>';
                echo "</td>";
                echo "</tr>";
                $i++;
            }  
      }else{
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