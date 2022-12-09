<?php
include("connect.php");

if (isset($_POST['signup'])) {
  $email= $_POST['signup_email'];
  $user_name =$_POST['signup_name'];
  $password= $_POST['signup_pass'];
  $phnnum= $_POST['signup_phone'];
  $address=$_POST['signup_address'];
  $user=$_POST['User'];
  $image = $_FILES['image']['name'];$tmp_name=$_FILES['image']['tmp_name'];$path = "profile_picture/".$image;move_uploaded_file($tmp_name, $path);
  if($email  == '')
  {
    echo "<script>alert ('Please enter e-mail') </script>";
    echo "<script>window.open('../login.html','_self') </script>";
    exit();
  }
  if($user_name  == '')
  {
    echo "<script>alert ('Please enter Full Name') </script>";
    echo "<script>window.open('../login.html','_self') </script>";
    exit();
  }

  if($password  == '' || strlen($password) < 8 || strlen($password) > 32)
  {
    echo "<script>alert ('Please enter Password between 8-32 characters or must contain at least one number.') </script>";
    echo "<script>window.open('../login.html','_self') </script>";
    exit();
  }
  if($phnnum  == '')
  {
    echo "<script>alert ('Please enter Phone Number') </script>";
    echo "<script>window.open('../login.html','_self') </script>";
    exit();
  }
  if($address == '')
  {
    echo "<script>alert ('Please enter Address') </script>";
    echo "<script>window.open('../login.html','_self') </script>";
    exit();
  }
  if($user  == '')
  {
    echo "<script>alert ('Please select user type') </script>";
    echo "<script>window.open('../login.html','_self') </script>";
    exit();
  }
  $check_email = "select * from users where email ='$email'";
  $result = mysqli_query($conn,$check_email );
  if (mysqli_num_rows($result)>0) {
      echo "<script>alert ('Email $email Already Exist....') </script>";
      echo "<script>window.open('../login.html','_self') </script>";
      exit();
    }
    else {
      $insert_user = "insert into users(full_name,email,phone_number,address,password,type,image) value
      ('$user_name','$email','$phnnum','$address','$password','$user','$image')";
      if (mysqli_query($conn,$insert_user )) {
        echo "<script>alert ('Account Creation Successfull!!!!') </script>";
        echo "<script>window.open('../login.html','_self') </script>";
      }
    }
}
elseif(isset($_POST['login'])){
  $log_in_email= $_POST['logemail'];
  $log_in_password= $_POST['logpass'];
  if($log_in_email  == '')
  {
    echo "<script>alert ('Please enter e-mail') </script>";
    echo "<script>window.open('../login.html','_self') </script>";
    exit();
  }
  if($log_in_password  == '')
  {
    echo "<script>alert ('Please enter Password') </script>";
    echo "<script>window.open('../login.html','_self') </script>";
    exit();
}
  $check_log_in =  "select * from users where email ='$log_in_email' and password ='$log_in_password '";
  $return_login = mysqli_query($conn, $check_log_in );
  while($row=mysqli_fetch_array($return_login)) {
      $user_id = $row[0];
      $user_name = $row[1];
      $user_email = $row[2];
      $phone_number = $row[3];
      $address = $row[4];
      $type = $row[6];
    }
if (mysqli_num_rows($return_login) && $type == "Buyer") {
  session_start();
  $_SESSION['logemail']=$log_in_email;
  echo "<script>window.open('../index_b.php','_self') </script>";
}
elseif (mysqli_num_rows($return_login) && $type == "Seller") {
  session_start();
  $_SESSION['logemail']=$log_in_email;
  echo "<script>window.open('../index_s.php','_self') </script>";
}
else {
  echo "<script>alert('Wrong E-mail or Password')</script>";
  echo "<script>window.open('../login.html','_self') </script>";
}
}
else {
  echo "<script>alert ('Account Creation Failed') </script>";
  echo "<script>window.open('../login.html','_self') </script>";
}
?>
