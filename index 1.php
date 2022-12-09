<?php
include('./php/connect.php');

$sql = "SELECT * FROM billboard";
$all_product = $conn->query($sql);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>HomePage</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--enable mobile device-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--fontawesome css-->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!--bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!--animate css-->
    <link rel="stylesheet" href="css/animate-wow.css" />
    <!--main css-->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="css/slick.min.css" />
    <!--responsive css-->
    <link rel="stylesheet" href="css/responsive.css" />


  </head>
  <body>

    <header id="header" class="top-head">
      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4 col-sm-12 left-rs">
              <div class="navbar-header">
                <button
                  type="button"
                  id="top-menu"
                  class="navbar-toggle collapsed"
                  data-toggle="collapse"
                  data-target="#navbar"
                  aria-expanded="false"
                >
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand"
                  ><img src="images/logo.png" alt=""
                /></a>
              </div>
              <form class="navbar-form navbar-left web-sh">
                <div class="form">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Boardbooked.com"
                  />
                </div>
              </form>
            </div>
            <div class="col-md-8 col-sm-12">
              <div class="right-nav">
                <div class="login-sr">
                  <div class="login-signup">
                    <ul>
                      <li><a href="login.html">Login</a></li>
                      <li><a class="custom-b" href="login.html">Sign up</a></li>
                    </ul>
                  </div>
                </div>
                <div class="help-r hidden-xs">
                  <div class="help-box">
                    <ul>
                      <li>
                        <a data-toggle="modal" data-target="#myModal" href="Booking.html">
                          <span>Top Billboards</span>
                          <img src="top" alt="" />
                        </a>
                      </li>
                      <li>
                        <a href="#"
                          ><img class="h-i" src="aboutUS" alt="" />
                          About Us
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="nav-b hidden-xs">
                  <div class="nav-box">
                    <ul>
                      <li><a href="">Subscriptin Catagories</a></li>
                      <li>
                        <a href="subscripiton need to be added">Buy Subsription</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/.container-fluid -->
      </nav>

    </header>
    <!-- Modal -->
    <div class="modal fade lug" id="myModal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        </div>
    </div>

    <div class="page-content-product">

      <div class="main-product">
        <div class="container">
          <div class="row clearfix">
            <div class="find-box">
              <h1>Grow your  bussiness <br />book billboard here.</h1>
              <h4>It has never been easier.</h4>
              <div class="product-sh">
                <div class="col-sm-6">
                  <div class="form-sh">


                    <!-- search search -->


                <input type="text" id="lsearch" class="form-control"  autocomplete="off" placeholder= "Search here"/>
                  </div>
                </div>
                <div id="searchresult"></div>
                <div class="col-sm-3">
                  <div class="form-sh">
                    <select class="selectpicker">

                    </select>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-sh"><a class="btn" href="#">Search</a></div>
                </div>
                <p><a href="#"> </a> </p>
              </div>
            </div>
          </div>
          <?php
    while($row = mysqli_fetch_assoc($all_product)){
     ?>
          <div class="row clearfix">
            <div class="col-lg-3 col-sm-6 col-md-3">
              <a href="productpage.html">
                <div class="box-img">
                  <h4><?php echo $row ['location']?></h4>
                  <?php  $profile_image= $row["image"] ?>
					<img class="ml-5 mb-5" height='260px' width='260px' src=<?php echo "php/image/$profile_image"  ?> >

                </div>
              </a>
            </div>
            <!-- <div class="col-lg-3 col-sm-6 col-md-3">
              <a href="productpage.html">
                <div class="box-img">
                  <h4>Billboard</h4>
                  <img src="images/product/2.png" alt="" />
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3">
              <a href="productpage.html">
                <div class="box-img">
                  <h4>Billboard</h4>
                  <img src="images/product/4.png" alt="" />
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3">
              <a href="productpage.html">
                <div class="box-img">
                  <h4>Billboard</h4>
                  <img src="images/product/5.png" alt="" />
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3">
              <a href="productpage.html">
                <div class="box-img">
                  <h4>Billboard</h4>
                  <img src="images/product/10.png" alt="" />
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3">
              <a href="productpage.html">
                <div class="box-img">
                  <h4>Billboard</h4>
                  <img src="images/product/11.png" alt="" />
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3">
              <a href="productpage.html">
                <div class="box-img">
                  <h4>Billboard</h4>
                  <img src="images/product/12.png" alt="" />
                </div>
              </a>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-3">
              <a href="productpage.html">
                <div class="box-img">
                  <h4>Billboard</h4>
                  <img src="images/product/13.png" alt="" />
                </div>
              </a>
            </div> -->
             <?php
    }
          ?>
 <!-- ajax -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <!-- javascript for ajax -->
         <script type="text/javascript">

$(document).ready(function(){

$("#lsearch").keyup(function(){
var input = $(this).val();
//  alert(input);

if(input != ""){
  $.ajax({
    url:"./livesearch.php",
    method:"POST",
    data:{input:input},

    success:function(data){
      $("#searchresult").html(data);
    }
  });
}else{
  $("#searchresult").css("display","none");
}

});
});
// function to search

<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM `billboard` WHERE CONCAT(`location`,`price`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

}
 else {
    $query = "SELECT * FROM `bilboard`";
    $search_result = filterTable($query);
}
?>


         </script>



    </footer>
    <!-- main js-->
     <script src="js/jquery-1.12.4.min.js"></script>
    <!--bootstrap js-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/wow.min.js"></script>
    <!--custom js-->
    <script src="js/custom.js"></script>
  </body>
</html>
