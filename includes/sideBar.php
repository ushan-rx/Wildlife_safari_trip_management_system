<?php
include 'classes/connection.php';

session_start();

if (empty($_SESSION['staff_ses'])) {
    header("Location: adminLogProcess.php");
    exit();
} else {
    $sid = $_SESSION['staff_ses'];
    $querystaff = "SELECT * FROM staff WHERE sid = '$sid'";
    $resultset = Database::search($querystaff);
    if ($resultset) {
        $staffDet = $resultset->fetch_assoc();
        $sname = $staffDet['f_name'] . " " . $staffDet['l_name'];

        ?>

        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 fs-4 fw-bold text-uppercase border-bottom">
                <a href="adminDashboard.php" class="site-icon">
                    <img src="images/deerlogo.png" alt="website logo"><img src="images/sitename.png" alt="website name">
                </a>
            </div>
            <div class="text-center py-4 fs-4 fw-bold text-uppercase border-bottom">
                <i class="fa-solid fa-user-tie fa-xl navbar-brand"></i><span class="fs-6" id="user_name">
                    <?php echo $sname ?>
                </span>
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="sidebar-txt list-group-item list-group-item-action bg-transparent  selected">
                    <i class="fa-solid fa-gauge-high me-2"></i>Dashboard
                </a>
                <a href="#" class="sidebar-txt list-group-item list-group-item-action bg-transparent fw-bold">
                    <i class="fa-solid fa-comments me-2"></i>Feedback/Inquiry
                </a>
                <a href="#" class="sidebar-txt list-group-item list-group-item-action bg-transparent fw-bold">
                    <i class="fa-solid fa-table-list me-2"></i>Reservations
                </a>
                <a href="#" class="sidebar-txt list-group-item list-group-item-action bg-transparent fw-bold">
                    <i class="fa-solid fa-user-gear me-2"></i>Accounts
                </a>
                <a href="#" class="sidebar-txt list-group-item list-group-item-action bg-transparent fw-bold">
                    <i class="fa-solid fa-briefcase me-2"></i>Packages</a>

                <a href="#" class=" text-danger list-group-item list-group-item-action bg-transparent fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>


        <?php

    } else {
        header("Location: adminLogProcess.php");
        exit();
    }

}
?>