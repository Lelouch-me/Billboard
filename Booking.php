<?php
session_start();
if (!isset($_SESSION['logemail'])) {
header("Location: ./login.html");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="reg.css" />
    <title>Billboard Posting</title>
  </head>
  <body>
    <center>
      <div class="container glass">
        <h1>Post Your Billboard Advertise</h1>
        <br />
        <br />
        <form class="box" action="./php/after_booking.php" method="post" enctype="multipart/form-data">
          <div class="user">
            <div class="input-box">
              <span class="details"> Phone-Number </span> <br />
              <input
                type="number"
                name="Phone-Number"
                placeholder="Phone-Number"
              />
            </div>

            <div class="input-box">
              <span class="details"> Location</span> <br />

              <select name="place">
                <option value="" selected="selected">
                  Select an option...
                </option>
                <optgroup label="Uttara">
                  <option value="Uttara Sector 7 -10">Sector 7 -10</option>
                  <option value="Uttara Sector 1 -6">Sector 1 -6</option>
                  <option value="Uttara Sector 11 -17">Sector 11 -17</option>
                </optgroup>
                <optgroup label="Gulshan">
                  <option value="Gulshan Block A-D">Block A-D</option>
                  <option value="Gulshan Block E-K">Block E-K</option>
                  <option value="Gulshan Block L-P">Block L-P</option>
                </optgroup>
                <optgroup label="Bashundara">
                  <option value="Bashundara Block A-D">Block A-D</option>
                  <option value="Bashundara Block E-K">Block E-K</option>
                  <option value="Bashundara Block L-P">Block L-P</option>
                </optgroup>
                <optgroup label="Mirpur">
                  <option value="Mirpur 1">Mirpur 1</option>
                  <option value="Mirpur 9">Mirpur 9</option>
                  <option value="Mirpur 12">Mirpur 12</option>
                </optgroup>
              </select>
            </div>

            <div class="input-box">
              <span class="details"> Available From </span> <br />
              <input type="date" name="date" />
            </div>

            <div class="input-box">
              <span class="details"> Description about your Billboard </span>
              <textarea name="desc" rows="4" cols="40"> </textarea>
            </div>

            <div class="input-box">
              <span class="details"> Price</span> <br />
              <input type="number" name="fee" placeholder="Rent Per-Month" />
            </div>

            <input type="file" id="img" name="image" accept="image/*" />

            <div class="button">
              <input
                type="submit"
                name="registration"
                value="Post Your Billboard"
              />
            </div>
          </div>
        </form>
      </div>
    </center>
  </body>
</html>
