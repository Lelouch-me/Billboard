<?php
include './php/connect.php' ;
if(isset($_POST['input'])){

    $input = $_POST['input'];
    $query = "SELECT * FROM billboard  WHERE location LIKE '{$input}%'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0){?>
     <table  class=" table table-dark table-borderd table-striped mt-4">
        <thead>
        <tr>
        <th>Owner</th>
        <th>Location</th>
        <th>Price</th>
        <th>More</th>
        </tr>
        </thead>

        <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)){
            $owner = $row['Owner'];
            $location= $row['location'];
            $price= $row['price'];
            $id= $row['ID'];
        }
        ?>
        <tr>
        <td><?php echo $owner ;?></td>
        <td><?php echo $location;?></td>
        <td><?php echo $price;?></td>
        <td><a href="productpage.php?id= <?php echo $id?>"> Click Here to see details. </a></td>
        </tr>
        </tbody>
        </table>

        <?php

}else{
    echo "<h6  class='text-danger text-center mt-4'>No data found </h6>";
}
}

?>
<style>
    thead {
    color: white;
    font-size: 15px;
}
</style>