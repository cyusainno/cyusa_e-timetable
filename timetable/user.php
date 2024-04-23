<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <div class="head">
<h1>E-TIME TABLE</h1>
 </div>   
 <div class="nav">
 <a href="course.php">course</a>
<a href="user.php">user</a>
<a href="period.php">period</a>
<a href="class.php">class</a>
 </div><br><br><br><br>
 <div class="body">
<form action="" method="post">
    username:
    <input type="text" name="username" required><br><br>
    tel:
    <input type="text" name="tel"><br><br>
    email:
    <input type="email" name="email"><br><br>
    status:
    <input type="text" name="status"><br><br>
    role:
    <input type="text" name="role"><br><br>
    <input type="submit" name="send" value="send"><br><br>

</form>
<?php
include"connect.php";
if(isset($_POST['send'])){
    $username=$_POST['username'];
    $tel=$_POST['tel'];
    $email=$_POST['email'];
    $status=$_POST['status'];
    $role=$_POST['role'];
   
    $sql=" INSERT INTO user VALUES('','$username','$tel','$email','$status','$role')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo"inserted";
    }
    else{
        echo"try again";
    }
 }
 ?>
 </div>
</body>
</html>