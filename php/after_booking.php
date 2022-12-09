<?php
include("connect.php");
session_start();
if (!isset($_SESSION['logemail'])) {
header("Location: ./login.html");
}

$email=$_SESSION['logemail'];
include('./php/connect.php');
$user="select * from users where email= '$email'";
$run=mysqli_query($conn,$user);
while($row=mysqli_fetch_array($run)) {
    $user_id = $row[0];
    $user_name = $row[1];
    $user_email = $row[2];
    $phone_number = $row[3];
    $address = $row[4];
    $type = $row[6];
}


if (isset($_POST['registration'])) {
  $phnnum= $_POST['Phone-Number'];
  $fee=$_POST['fee'];
  $date=date('Y-m-d',strtotime($_POST['date']));
  $places=$_POST['place'];
  $description=$_POST['desc'];
  $image = $_FILES['image']['name'];$tmp_name=$_FILES['image']['tmp_name'];$path = "image/".$image;move_uploaded_file($tmp_name, $path);

  if($places  == '')
  {
    echo "<script>alert ('Please enter place') </script>";
    echo "<script>window.open('../Booking.php','_self') </script>";
    exit();
  }
  if($description == '')
  {
    echo "<script>alert ('Please enter Description') </script>";
    echo "<script>window.open('../Booking.php','_self') </script>";
    exit();
  }

  if($image  == '')
  {
    echo "<script>alert ('Please enter Image') </script>";
    echo "<script>window.open('../Booking.php','_self') </script>";
    exit();
  }
  if($phnnum  == '')
  {
    echo "<script>alert ('Please enter Phone Number') </script>";
    echo "<script>window.open('../Booking.php','_self') </script>";
    exit();
  }
  if($date  == '')
  {
    echo "<script>alert ('Please enter Date') </script>";
    echo "<script>window.open('../Booking.php','_self') </script>";
    exit();
  }

  if($fee  == '')
  {
    echo "<script>alert ('Please enter Fee') </script>";
    echo "<script>window.open('../Booking.php','_self') </script>";
    exit();
  }

  $insert_billboard = "insert into billboard(Owner,phone,date,price,location,description,image) value
  ('$user_name','$phnnum','$date','$fee','$places','$description','$image')";
  if (mysqli_query($conn,$insert_billboard)) {
    echo "<script>alert ('Account Creation Successfull!!!!') </script>";
    echo "<script>window.open('../index_s.php','_self') </script>";
}
}

else {
  echo "<script>alert ('Account Creation failed!!!!') </script>";
  echo "<script>window.open('./Booking.php','_self') </script>";
}?>
