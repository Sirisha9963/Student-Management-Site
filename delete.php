<?php
$sno=$_REQUEST['Sno'];
$conn=mysqli_connect('localhost','root','','task');
$data="update studentlg set hide='1' where Sno='$sno'";
if(mysqli_query($conn,$data)){
    header('loaction:manage.php');
}
else{
    echo "something is wrong";
}
?> 