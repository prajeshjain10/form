<?php
$servername="localhost";
$username="root";
$password="";
$database="form";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
    die("Error deleting record:".mysqli_error($con));
}
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $rnum=$_POST['rnum'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $about=$_POST['about'];
    $car=$_POST['car'];
   
    $sql="insert into form(name,rnum,email,gender,dob,about,car) 
    values('".$name."','".$rnum."','".$email."','".$gender."','".$dob."','".$about."','".$car."')";
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('Successfully Registered')</script>";
    }
    else
    {
        echo "error:".mysqli_error($con);
    }
    mysqli_close($con);
}
?>