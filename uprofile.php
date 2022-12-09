<?php
session_start();
if (!isset($_SESSION['logemail'])) {
header("Location: ./login.html");
}
?>

<?php
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
            $image = $row[7];
          }
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>User Profile</title>
  </head>
  <body>
    <link
      href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="profile.css" />
    <!------ Include the above in your HEAD tag ---------->

    <div class="container emp-profile">
      <form method="post">
        <div class="row">
          <div class="col-md-4">
            <div class="profile-img">
              <img
                src=<?php echo "php/profile_picture/$image"  ?>
                alt=""
              />
              <div class="file btn btn-lg btn-primary">
                Change Photo
                <input type="file" name="file" />
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="profile-head">
              <h5><?php echo   $user_name  ?></h5>
              <h6><?php echo   $type  ?></h6>
              <p class="proile-rating">RANKINGS : <span>8/10</span></p>
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    id="home-tab"
                    data-toggle="tab"
                    href="#home"
                    role="tab"
                    aria-controls="home"
                    aria-selected="true"
                    >About</a
                  >

              </ul>
            </div>
          </div>
          <div class="col-md-2">

          <li><a class="btn btn-info" href="userupdateprofile.php?id=<?php echo $user_id;?>">Edit Profile</a></li>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="profile-work">
              <p>WORK LINK</p>
              <a href="">Website Link</a><br />
              <a href="">Social Profile</a><br />
              <a href="">Company Profile</a>

            </div>
          </div>
          <div class="col-md-8">
            <div class="tab-content profile-tab" id="myTabContent">
              <div
                class="tab-pane fade show active"
                id="home"
                role="tabpanel"
                aria-labelledby="home-tab"
              >
                <div class="row">
                  <div class="col-md-6">
                    <label>User Id</label>
                  </div>
                  <div class="col-md-6">
                    <p><?php echo   $user_id  ?></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Name</label>
                  </div>
                  <div class="col-md-6">
                    <p><?php echo   $user_name  ?></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Email</label>
                  </div>
                  <div class="col-md-6">
                    <p><?php echo   $user_email  ?></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Phone</label>
                  </div>
                  <div class="col-md-6">
                    <p><?php echo   $phone_number  ?></p>
                  </div>
                </div>
              </div>
              <div
                class="tab-pane fade"
                id="profile"
                role="tabpanel"
                aria-labelledby="profile-tab"
              >

                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
