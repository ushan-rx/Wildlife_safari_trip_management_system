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
    <title>Admin Dashboard</title>

    <!-- chart -->
    
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- sidebar -->
        <?php
        include('includes/sideBar.php');
        require_once 'classes/connection.php';

        //retrieve data from database
        $date = date("Y-m-d");
        $pkgCount;
        $accomoCount;
        $transaction;
        $reserve;

        $q1 = "SELECT COUNT(pkg_id) AS 'count' FROM package";
        $q2 = "SELECT COUNT(aid) AS 'count' FROM accommodation";
        $q3 = "SELECT COUNT(reservation_id) AS 'count' FROM reservation WHERE reservation_date = '$date'";
        $q4 = "SELECT COUNT(pay_id) AS 'count' FROM payment WHERE date = '$date'";

        $r1 = Database::search($q1);
        if ($r1) {
            $r1f = $r1->fetch_assoc();
            $pkgCount = $r1f['count'];
        } else {
            $pkgCount = 0;
        }
        $r2 = Database::search($q2);
        if ($r2) {
            $r2f = $r2->fetch_assoc();
            $accomoCount = $r2f['count'];
        } else {
            $accomoCount = 0;
        }
        $r3 = Database::search($q3);
        if ($r3) {
            $r3f = $r3->fetch_assoc();
            $reserve = $r3f['count'];
        } else {
            $accomoCount = 0;
        }
        $r4 = Database::search($q4);
        if ($r4) {
            $r4f = $r4->fetch_assoc();
            $transaction = $r4f['count'];
        } else {
            $transaction = 0;
        }
        ?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fa-solid fa-arrow-right-arrow-left primary-txt fs-3 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0 navbar-txt">Dashboard</h2>
                </div>
            </nav>

            <!-- your code here -->
            <div class="row g-5 my-1 mx-4 py-4 px-5">
                <div class="col p-4 m-2 content-wrapper bg-light rounded">
                    <div class="grid gap-5 row ms-5">
                        <div class="card text-bg-light  text-center p-3 g-col-6 " style="max-width: 13rem;">
                            <div class="card-header">Todays' Reservations</div>
                            <div class="card-body bg-primary text-light">
                                <h5 class="card-title">
                                    <?php echo $reserve; ?>
                                </h5>
                            </div>
                        </div>
                        <div class="card text-bg-light  text-center  p-3 g-col-6 h-100" style="max-width: 13rem;">
                            <div class="card-header">Todays' Transactions</div>
                            <div class="card-body bg-primary text-light">
                                <h5 class="card-title">
                                    <?php echo $transaction; ?>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col p-4 m-2 content-wrapper bg-light rounded">
                    <div class="grid gap-5 row ms-5">
                        <div class="card text-center p-3 g-col-6 " style="max-width: 13rem;">
                            <div class="card-header">No Of Normal Packages</div>
                            <div class="card-body  bg-success text-light">
                                <h3 class="card-title">
                                    <?php echo $pkgCount; ?>
                                </h3>
                            </div>
                        </div>
                        <div class="card  text-center  p-3 g-col-6 h-100" style="max-width: 13rem;">
                            <div class="card-header">Accommodation Locations</div>
                            <div class="card-body bg-success text-light ">
                                <h3 class="card-title">
                                    <?php echo $accomoCount; ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 my-2 mx-4  px-5">
                <div class="col py-5 m-4 content-wrapper bg-light">
                    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                </div>
            </div>


            <!-- to here -->
        </div>
    </div>

    <?php 
        $dataChart = array();
        $arrIndex = 0;

        $qchart = "SELECT CAST(reservation_date AS DATE) AS 'date', SUM(total_price) AS 'sum' FROM reservation GROUP BY CAST(reservation_date AS DATE)";
        $rChart = Database::search($qchart);
        if($rChart){
            while($row = $rChart->fetch_assoc()){
                    $dataChart[$arrIndex]["label"] = $row['date'];
                    $dataChart[$arrIndex]["y"] = $row['sum'];
                    $arrIndex++;
            }
        }
    ?>

    <script>
        window.onload = function () {
            
            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2", 
                title: {
                    text: "Weekly Transactions"
                },
                axisY: {
                    title: "Revenue ($)"
                },
                data: [{
                    type: "column",
                    legendText: "dates",
                    dataPoints: <?php echo json_encode($dataChart, JSON_NUMERIC_CHECK)?>
                }]
            });
            chart.render();

        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="scripts/scriptDash.js"></script>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>

</html>