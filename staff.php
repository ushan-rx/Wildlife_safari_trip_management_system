<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles/styleDash.css" />
    <link rel="stylesheet" href="styles/styleStaff.css" />
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
                    <h2 class="fs-2 m-0 navbar-txt">Staff Management</h2>
                </div>
            </nav>

            <div class="row g-5">
                <div class="col">
               
                <section class="container">

                <h2 class="fs-3 text-center m-2">Staff Details </h2> 
                <form action = "process_Staff.php" method="post" class="text-center">
                    
                        <div class="form">
                            <div class="input-box">
                                <label>First Name </lable>
                                <input type="text"  name="fname" value="<?php
                                    echo (isset($_GET['fname']))? ($_GET['fname']) : '';
                                ?>"> 
                                
                            </div>

                            <div class="input-box">
                                <label>Last Name </lable>
                                <input type="text"  name="lname" value="<?php
                                    echo (isset($_GET['lname']))? ($_GET['lname']) : '';
                                ?>">
                            
                            </div>

                            <div class="input-box ">
                                <label>Staff ID </lable>
                                <input type="text"  name="sid" value=<?php
                                    echo '"';
                                    if(isset($_GET['sid'])){
                                    echo ($_GET['sid']);
                                    echo '" readonly';  //disable sid field
                                    }else{
                                        echo '"';  
                                    }
                                ?>> 
                                
                            </div>

                            <div class ="select-box">
                                <label>Staff type</lable>
                                    <select name="staff_type">
                                        <option value="ADM" <?php echo (isset($_GET['type']) AND $_GET['type'] == "ADM")? "selected": "";?> >Admin</option>
                                        <option value="MNG" <?php echo (isset($_GET['type']) AND $_GET['type'] == "MNG")? "selected": "";?>>Manager</option>
                                        <option value="CSA" <?php echo (isset($_GET['type']) AND $_GET['type'] == "CSA")? "selected": "";?>>Customer Care</option>
                                    </select>
                            </div>

                            <div class="input-box">
                                <label>Email </lable>
                                <input type="email"  name="email" value="<?php
                                    echo (isset($_GET['mail']))? ($_GET['mail']) : '';
                                ?>">
                            
                            </div>

                            
                            <div class="input-box">
                                <label>Password </lable>
                                <input type="password"  name="pw">
                                
                            </div>
                            
                            
                               <input class="mx-2 mt-4" type="submit" name="insert"    value="Insert"> 
                               <input class="mx-2 mt-4" type="submit" name="delete"    value="Delete">
                               <input class="mx-2 mt-4" type="submit" name="update"    value="Update"> 
                               <input class="mx-2 mt-4" type="submit" name="show"    value="show">
                               <input class="mx-2 mt-4" type="submit" name="reset"    value="reset">
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