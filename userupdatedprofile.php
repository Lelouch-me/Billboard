<link href="profile.css" rel="stylesheet"><?php
include("./php/connect.php");
$Name=$_POST['Username'];
$Email=$_POST['email'];
$Password = $_POST['password'];
$phone=$_POST['phone'];
$add=$_POST['add'];
$image = $_FILES['image']['name'];$tmp_name=$_FILES['image']['tmp_name'];$path = "php/profile_picture/".$image;move_uploaded_file($tmp_name, $path);

$puser= $_GET['id'];
$sql="update users set full_name='$Name',email='$Email', address='$add',password='$Password', image='$image',phone_number='$phone' where email='$Email'";
$update_query=mysqli_query($conn,$sql);
if($update_query){
  header('Location:'.'uprofile.php');

} else {
  echo 'TRY AGAIN';
}
?>
