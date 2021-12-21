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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Joining Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact us</a></li>
                <div>
                    <input id="search" class="Sech" type="search" placeholder="Search here">
                    <button type="button" class="btn btn-primary" id="sechbtn">
                    </button>
                </div>
            </ul>
        </nav>
    </header>
    <h3>Joining Form</h3>
    <form action="backend.php" method="post">
        <div>
            <label for="name"> Name: </label>
            <input type="text" name="name" id="name">
        </div>
        <br>
        <div>
            <label for="Roll"> Roll No.:</label>
            <input type="number" name="rnum" id="Roll">
        </div>
        <br>
        <div>
            <label for="email"> Email Id: </label>
            <input type="email" name="email" id="email">
        </div>
        <br>
        <div>
            Gender:
            <input type="radio" name="gender" id="Male"> <label for="Male"> Male: </label>
            <input type="radio" name="gender" id="Female"> <label for="Female"> Female: </label>
            <input type="radio" name="gender" id="Other"> <label for="Other"> Other: </label>
        </div>
        <br>
        <div>
            <label for="Date"> Date of birth: </label>
            <input type="date" name="dob" id="Date">
        </div>
        <br>
        <div>
            <label for="tick"> Are you eligible: </label>
            <input type="checkbox" name="Checkbox" id="tick">
        </div>
        <br>
        <div>
            <label for="Yourself" id="about"> Write about yourself: </label> <br>
            <textarea name="about" id="Yourself" cols="50" rows="10"></textarea>
        </div>
        <br>
        <div>
            <label for="car"> Choose Your Car: </label> <br>
            <select name="car" id="car">
                <option value="Indica"> Indica</option>
                <option value="Swift">Swift</option>
                <option value="BMW">BMW</option>
            </select>
        </div>
        <br>
        <div>
            <input id="submit" class="button" type="submit" value="submit" name="submit">
            <input id="reset" class="button" type="reset" value="Reset">
        </div>
    </form>
</body>

</html>