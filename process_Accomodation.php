<?php

require_once 'classes/connection.php';


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['submit'])) {

        $pkg_id = htmlspecialchars($_POST['pkg_id']);
        $price = htmlspecialchars($_POST['price']);
        $date = htmlspecialchars($_POST['date']);
        $guests = htmlspecialchars($_POST['guests']);
        $rooms = htmlspecialchars($_POST['rooms']);

        if (!empty($price) and !empty($date) and !empty($guests) and !empty($rooms) and !empty($pkg_id)) {

            $query1 = "SELECT * FROM accommodation WHERE accommodation.price <= '$price'  AND pkg_id ='$pkg_id' AND accommodation.aid NOT IN (SELECT a.aid FROM accommodation a JOIN room_record r WHERE a.aid = r.aid AND r.room_count < '$rooms' AND r.date = '$date')";
            $result = Database::search($query1);
            ?>
            <form action="process_comformPaymentDetails.php" method="post">
            
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
                            <input type="hidden" name="accommodation" value="<?php echo   $row['aid']; ?>">
                          
                            <input type="submit" name="submit" value="RESERVE" class="button-reserve">
                        </div>
                    <?php } ?>
                </div>
                <input type="hidden" name="pkg_id" value="<?php echo $pkg_id; ?>">
                <input type="hidden" name="date" value="<?php echo $date; ?>">
                <input type="hidden" name="no_Of_People" value="<?php echo $guests; ?>">
                <input type="hidden" name="no_Of_Rooms" value="<?php echo $rooms; ?>">
            </form>


            <?php
            $query2 = "SELECT accommodation.image FROM accommodation WHERE accommodation.price <= '$price' AND pkg_id ='$pkg_id' AND accommodation.aid NOT IN (SELECT a.aid FROM accommodation a JOIN room_record r WHERE a.aid = r.aid AND r.room_count < '$rooms' AND r.date = '$date')";
            $result2 = Database::search($query2);
            ?>
            <div class="right-slide">
                <?php
                if ($result2) {
                    while ($row2 = $result2->fetch_assoc()) {
                        $imageUrl = $row2['image'];
                        ?>
                        <div style="background-image: url(<?php echo $imageUrl ?>);"></div>
                        <?php
                        
    
                    }
                }
                ?>
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

        } else {

            echo "<script> alert('please input all the details...');</script>";
        }

    } else {

        echo "<script> alert('please input all the details...');</script>";
    }

}
?>