<?php
session_start();
// if(isset($_GET['log'])){
//     session_destory();
//     unset($_SESSION['admin_name']);
//     header('location:login.php');
// }
$conn = mysqli_connect('localhost', 'root', '', 'daddy');

if($_SERVER['REQUEST_METHOD']=="POST"){
  $name=$_POST['name'];
  $password=$_POST['pass'];
  

   $sql="select * from admin where user_name='$name' and password='$password'";
   $result= mysqli_query($conn, $sql);
   
    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_array($result);
        $_SESSION['admin_name']=$name;
        $email=$row['email'];
        $_SESSION['admin_email']=$email;

        
       
     header('location:admindashboard.php');
    }else{
        $sql1="select * from student where User_Name='$name' and Password='$password'";
        $result1=mysqli_query($conn, $sql1);
   
        if(mysqli_num_rows($result1)==1){ 
            $row1=mysqli_fetch_array($result1); 
            $_SESSION['student_name']=$name;
            $_SESSION['student_email']=$row1['Student_Email'];
            $_SESSION['student_section']=$row1['Student_Section'];

            

            header('location:student_dashboard.php');
        }
        else{
            echo "enter correct details";
        }
        
    } 
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
       
</head>
<body style="background-color:gray">
<div class="container-fluid">
   
        <form class="mt-5 justify-content-center align-items-center" style="background-color:white;margin-left:400px;height:500px;width:450px" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h3 class="ms-5 mt-5">Hello! let's get started</h3>
            <p class="ms-5">Sign in to continue.</p>
            <div class="row g-3 mt-3 ms-5">
                <div class="col-auto ">
                    <input type="text" id="inputholdername" class="form-control" name="name" placeholder="Enter User name" style="width:300px;">
                </div>
            </div>
            <div class="row g-3 mt-3 ms-5">
                <div class="col-auto">
                    <input type="password" id="inputholdername" class="form-control" name="pass" placeholder="Enter User Password" style="width:300px;">
                </div>
            </div>
            <div class="row g-3 mt-3">
                <button type="submit" class="btn  btn-md" style="width:300px;margin-left:50px;background-color:green;color:white">Login</button>
            </div>   
            <div class="row g-3 mt-3 ms-4">
            <div class="form-check col-sm-6">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Keep me signed in</label>          
            </div>
            <div class="col-sm-6">
                <p><a href="#">Forget Password?</a></p>
            </div>
               
            </div>
            <button type="submit" class="btn btn-primary btn-md btn-primary" style="width:300px;margin-left:50px">Back Home</button>
            
        </form>
    
</div>
</body>
</html>

