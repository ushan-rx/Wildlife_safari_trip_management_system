<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/styleDash.css" />
    <link rel="stylesheet" href="styles/styleAdminReservationCancel.css" />
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- sidebar -->
        <?php
        include('includes/sideBar.php');
        ?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-arrow-right-arrow-left primary-txt fs-3 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 navbar-txt">Reservations</h2>
                </div>
            </nav>

            <!-- your code here -->

            <?php require_once 'Process_adminCancelReservation.php'; ?>

            <div class="row g-5 my-5">
                <div class="col">
                    <div class="contain">
                        <div class="rsvtn_table">
                            <h1>Recent Booking Details</h1>
                            <table>
                                <tr>
                                    <td class="refresh" colspan="6">
                                        <button onclick="refreshPage()">Refresh</button>
                                    </td>
                                            
                                            <!-- js part for refersh the page -->
                                        <script>
                                            function refreshPage() {
                                            location.reload(); 
                                            }
                                        </script>   

                                </tr>

                                <tr>
                                    <th>Reservation ID</th>
                                    <th>Reservation Date</th>
                                    <th>Total Price</th>
                                    <th>Reserved Date</th>
                                    <th>Package ID</th>
                                    <th>Cancel</th>
                                </tr>


                                <tr>

                            <?php    
                                while ($row = $result->fetch_assoc()) {
                            ?>
                                
                                    <td> <?php echo $row['reservation_id'] ?> </td>
                                    <td> <?php echo $row['reservation_date'] ?> </td>
                                    <td> <?php echo $row['total_price'] ?> </td>
                                    <td> <?php echo $row['reserved_date'] ?> </td>
                                    <td> <?php echo $row['pkg_id'] ?> </td>
                                    <td class="cancle_button"> 
                                        <a href='Process_adminCancelReservation.php?id=<?php echo $row['reservation_id']; ?>'>Delete</a>  
                                    </td>

                                </tr>
                            
                            <?php    
                                }
                            ?>

                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- to here -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="scripts/scriptDash.js"></script>
</body>

</html>