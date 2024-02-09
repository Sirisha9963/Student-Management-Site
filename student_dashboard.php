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
    
            <div class="row mt-5 ms-3 me-3" style="background-color:white;height:100px">
                <div class="col-sm-7 ps-5 pt-4">
                    <p>Notices from the school kindly check!</p>
                </div>
                <div class="col-sm-5 pt-4">
                    <button type="submit" class="btn btn-primary"><a href="student_notice.php" class="text-white" style="text-decoration:none">View Notice</a></button>
                </div>
            </div>
</div>
</div>
</body>
</html>