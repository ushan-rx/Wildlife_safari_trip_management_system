<?php

require 'classes/connection.php';
require 'classes/generateId.php';


if (isset($_POST['submit'])) {

    $price = $_POST['price'];
    $date = $_POST['date'];
    $guests = $_POST['guests'];
    $rooms = $_POST['rooms'];

    if (!empty($price) AND !empty($date) AND !empty($guests)AND !empty($rooms)) {

        $query1 = "SELECT * FROM accommodation WHERE accommodation.price <= '$price'  AND Pkg_id ='pk000001' AND accommodation.aid NOT IN (SELECT a.aid FROM accommodation a JOIN room_record r WHERE a.aid = r.aid AND r.room_count < '$rooms' AND r.date = '$date')";
        $result = Database::search($query1);
       ?>
        <div class="left-slide">

        <?php while ($row = $result->fetch_assoc()) {

           $rating = $row['rating'];
            ?>
            <div>
                <h2>
                <?php echo $row['hotel_name']; ?>
                </h2>
                <span class="star-container">
                <?php

                for ($i = 0; $i < $rating; $i++) {
                ?>
                <span class="fa fa-star fa-1x checked"></span>
                <?php
                }

                for ($i = 0; $i < (5 - $rating); $i++) {
                ?>
                <span class="fa fa-star fa-1x "> </span>
                <?php
                }
                ?>
                    </span>
            <?php echo $row['hotel_description']; ?>

                <h3>
                <?php echo $row['price'] . "$"; ?>
                </h3>
                <a href="#" class="button-reserve">RESERVE</a>

                </div>
            <?php } ?>
        </div>


        <?php
        $query2 = "SELECT accommodation.image FROM accommodation WHERE accommodation.price <= '$price'  AND accommodation.aid NOT IN (SELECT a.aid FROM accommodation a JOIN room_record r WHERE a.aid = r.aid AND r.room_count < '$rooms' AND r.date = '$date')";
        $result = Database::search($query2);
        ?>
        <div class="right-slide">
           
            <div style="background-image: url(images/hotels/h15.jpg);"></div>
            <div style="background-image: url(images/hotels/h2.jpg);"></div>
            <div style="background-image: url(images/hotels/h3.jpg);"></div>
            <div style="background-image: url(images/hotels/h13.jpg);"></div>
            <div style="background-image: url(images/hotels/h4.jpg);"></div>
            <div style="background-image: url(images/hotels/h6.jpg);"></div>
            <div style="background-image: url(images/hotels/h7.jpg);"></div>
            <div style="background-image: url(images/hotels/h8.jpg);"></div>
            <div style="background-image: url(images/hotels/h9.jpg);"></div>
            <div style="background-image: url(images/hotels/h10.jpg);"></div>
            <div style="background-image: url(images/hotels/h12.jpeg);"></div>
            <div style="background-image: url(images/hotels/h5.jpg);"></div>
            <div style="background-image: url(images/hotels/h11.jpg);"></div>
            <div style="background-image: url(images/hotels/h14.jpg);"></div>
            <div style="background-image: url(images/hotels/h1.webp);"></div>

        </div>

        <div class="action-buttons">

            <button class="up-button">
                <img src="images/up.png" alt="btn">
            </button>

            <button class="down-button">
                <img src="images/down.png" alt="btn">
            </button>

        </div>



        <?php

    }
    else {
    
        echo "<script> alert('please input all the details...');</script>";
    }

} else {

    echo "<script> alert('please input all the details...');</script>";
}

?>