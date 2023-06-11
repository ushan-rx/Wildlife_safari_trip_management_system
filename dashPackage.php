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
    <link rel="stylesheet" href="styles/styleDashPackage.css" />
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
                    <h2 class="fs-2 m-0 navbar-txt">Dashboard</h2>
                </div>
            </nav>

            <!-- your code here -->
            <div class="row g-5 my-5">
                <div class="col">
               
                <section class="container">
                <?php require 'process_DashPackage.php'; ?> 

                <header>Package Details <header> 
                <form action = "process_DashPackage.php" method="post">
                    
                        <div class="form">
                            <div class="input-box">
                                <label>Package Name </lable>
                                <input type="text"  name="name"> 
                    
                            </div>

                            <div class="input-box">
                                <label>Pakage ID</lable>
                                <input type="text"  name="pk_id" >
                                
                            </div>

                            <div class="input-box">
                                <label>Price</lable>
                                <input type="text" name="price">
                            </div>

                            <div class="input-box">
                                <label>Description</lable>
                                <input type="text"  name="description">
                            </div>

                            <div class="input-box">
                                <label>No of days</lable>
                                <input type="text"  name="days">
                            </div>

                            <div class="input-box">
                                <label>Start date </lable>
                            <div class ="select-box">
                                    <select name="start_date">
                                        <option value="2023-06-05">Monday</option>
                                        <option value="2023-06-06">Tuesday</option>
                                        <option value="2023-06-07">Wednesday</option>
                                        <option value="2023-06-08">Thursday</option>
                                        <option value="2023-06-09">Friday</option>
                                        <option value="2023-06-10">Saturday</option>
                                        <option value="2023-06-11">Sunday</option>
                                    </select>
                            </div>
                            </div>
                               <input type="submit" name="insert"    value="Insert"> 
                               <input type="submit" name="delete"    value="Delete">
                               <input type="submit" name="update"    value="Update"> 
                            
                        </div>      
                   </form>
                  </section>

                </div>
            </div>

            <!-- to here -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="scripts/scriptDash.js"></script>
</body>

</html>