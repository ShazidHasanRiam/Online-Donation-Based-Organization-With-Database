<!DOCTYPE html>
<html>
<head>
     <title>Signup Successful</title>
            <link rel="stylesheet" href="css/style.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body style="background-color: cornflowerblue">

    <div class="menu_bar">
                <ul>
                    <li> <a href="index.php">Home</a></li>
                    <li> <a href="gallery.php">Gallery</a></li>
                     <li> <a href="">Donate</a></li>
                    <li> <a href="form.php">Contact Us</a></li>
                    <li> <a href="login.php">LogIn</a></li>
                     <li> <a href="">About </a></li>
                    <li> <a href="terms.php">More info</a></li>
                    <li> <a href="joinn.php">Join Us</a></li>
                </ul>
    </div>

</body>
</html>

<?php
include('dbconnect.php'); ?>
<?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$contact=$_POST['contact'];

$query="INSERT INTO signup (name,email,password,contact)
VALUES('{$name}','{$email}','{$password}', '{$contact}');";
$performQuery=mysqli_query($connection, $query);
if(!$performQuery)
echo 'Submission Unsuccessful';
else
echo 'Signup Successful';
$insertedId=mysqli_insert_id($connection);
}
?>
<?php include('dbclose.php'); ?>
