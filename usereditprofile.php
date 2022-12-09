<?php
session_start();
if (!isset($_SESSION['logemail'])) {
header("Location: ./signin.php");
}
?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <link href="#" rel="stylesheet">
      <title></title>
    </head>
    <body >
      <center>
      <h2>welcome <br> <?php echo $_SESSION['logemail'] ?></h2></center>
  <center>
      <table class="motable" cellspacing='15px' width=80%>
      <thead>
        <tr><center>
        <th> Name</th>
          <th style="width: 15.3%; vertical-align: top;">
        <th>Email</th>
          <th style="width: 15.3%; vertical-align: top;">
        <th>Phone Number</th>
          <th style="width: 15.3%; vertical-align: top;">
          <th>Address</th>
            <th style="width: 15.3%; vertical-align: top;">

      <th></th>
        </tr>
      </thead>
      <center>
  <?php
  include("connect.php");
  $currentuser=$_SESSION['logemail'];

  $viewinfo="select * from users where email='$currentuser'";
  $sql=mysqli_query($conn,$viewinfo);
  if($row=mysqli_fetch_array($sql)){
    $user_id=$row[0];
$name=$row[1];
  $email=$row[2];
$phome=$row[3];
  $add=[4];
}
   ?>
   <tbody>

   <tr>
<h1>
   <td><?php echo $name;  ?></td>
     <th style="width: 15.3%; vertical-align: top;">
       <td><?php echo $email;  ?></td>
         <th style="width: 15.3%; vertical-align: top;">
           <td><?php echo $phome;  ?></td>
             <th style="width: 15.3%; vertical-align: top;">
               <td><?php echo $add;  ?></td>





   <td>
     </h1>
     <br>
     <br>
     <a href="./userupdateprofile.php?id=<?php echo $user_id;?>">Click Here To Edit</a>
   </td>

   </tr>
   </tbody>
     </table>

    </body>
  </html>
