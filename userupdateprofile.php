<?php
include("./php/connect.php");
$puser= $_GET['id'];
$user_query="select * from users where id='$puser'";
$sql=mysqli_query($conn,$user_query);
$row=mysqli_fetch_assoc($sql);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link href="profile.css" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <center><h2>Update your profile Here</h2></.center>

<center>
  <br><br><br>
<form class="box" action="./userupdatedprofile.php" method="post" enctype="multipart/form-data">
Your Profile Name: <br> <input type="text" name="Username" value="<?=$row['full_name']; ?>"><br>
Your Password: <br> <input type="text" name="password" value="<?=$row['password']; ?>"><br>
Your Picture:  <br> <input  type="file" id="img" name="image" accept="image/*" /> <br>

Your E-mail: <br> <input type="text" name="email" value="<?=$row['email']; ?>"><br>
Your Phone Number: <br> <input type="text" name="phone" value="<?=$row['phone_number']; ?>"><br>
Your Address: <br> <input type="text" name="add" value="<?=$row['address']; ?>"><br>




<input type="submit" name="Click" value="Update">
</center>
</form>
</body>
</html>
