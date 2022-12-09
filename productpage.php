<?php
include('./php/connect.php');
$id = $_GET['id'];
$billboard="select * from billboard where ID= '$id'";
$run=mysqli_query($conn,$billboard);
while($row=mysqli_fetch_array($run)) {
    $bill_owner = $row[1];
    $bill_phone = $row[2];
    $bill_time = $row[3];
    $bill_price = $row[4];
    $bill_location = $row[5];
    $bill_desc = $row[6];
    $bill_image = $row[7];
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Product</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
     <!--enable mobile device-->
     <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <!--bootstrap css-->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!--animate css-->
      <link rel="stylesheet" href="css/animate-wow.css">
      <!--main css-->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/bootstrap-select.min.css">
      <link rel="stylesheet" href="css/slick.min.css">
      <link rel="stylesheet" href="css/select2.min.css">
      <!--responsive css-->
      <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <div class="terms-conditions product-page">
         <div class="terms-title">
            <div class="container">
               <div class="row">
                  <ol class="breadcrumb">
                     <li><a href="index_b.php">Home </a></li>
                     
                  </ol>
               </div>
            </div>
         </div>
      </div>
      <div class="product-page-main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="prod-page-title">
                     <h2>Billboard</h2>
                     <p>By <span><?php echo $bill_owner ?></span></p>
                  </div>
               </div>
            </div>
            <div class="row">
              
               <div class="col-md-7 col-sm-8">
                  <div class="md-prod-page">
                     <div class="md-prod-page-in">
                        <div class="page-preview">
                           <div class="preview">
                              <div class="preview-pic tab-content">
                                 <div class="tab-pane active" id="pic-1"><img src=<?php echo "php/image/$bill_image"  ?>
              width="70%"
              height="75%" /></div>
                      
                              </div>
                              <!-- <ul class="preview-thumbnail nav nav-tabs">
                                 <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="images/lag-60.png" alt="#" /></a></li>
                                 <li><a data-target="#pic-2" data-toggle="tab"><img src="images/lag-61.png" alt="#" /></a></li>
                                 <li><a data-target="#pic-3" data-toggle="tab"><img src="images/lag-60.png" alt="#" /></a></li>
                                 <li><a data-target="#pic-4" data-toggle="tab"><img src="images/lag-61.png" alt="#" /></a></li>
                              </ul> -->
                           </div>
                        </div>
                        <div class="btn-dit-list clearfix">
                       
                        
                        </div>
                     </div>
                     <div class="description-box">
                        <div class="dex-a">
                           <h4>Description</h4>
                           <p><?php echo $bill_desc ?>
                           </p>
                           
                        </div>
                        <div class="spe-a">
                           <h4>Details</h4>
                           <ul>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Location</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p><?php echo $bill_location ?></p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Price</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p><?php echo $bill_price ?></p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Status:</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p>Availabe</p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Availabe From:</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p><?php echo $bill_time ?></p>
                                 </div>
                              </li>
                              <li class="clearfix">
                                 <div class="col-md-4">
                                    <h5>Contact:</h5>
                                 </div>
                                 <div class="col-md-8">
                                    <p><?php echo $bill_phone ?></p>
                                 </div>
                              </li>
                              
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  
               </div>
               <div class="col-md-3 col-sm-12">
                
                  <div class="price-box-right">
                     <h4>Price</h4>
                     <h3><?php echo $bill_price ?><span> Taka per month</span></h3>
                     
                     <!-- <select class="form-control select2">
                        <option>Flying Carpet Green rug</option>
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NM">New Mexico</option>
                        <option value="ND">North Dakota</option>
                        <option value="UT">Utah</option>
                        <option value="WY">Wyoming</option>
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="IL">Illinois</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                     </select> -->
                     <a href="cart.html">Book Now</a>
                     <a href="uprofile.php">Contact Seller</a>
                     
                     
                     
                  </div>
                  
                  
               </div>
            </div>
         </div>
      </div>
   
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
