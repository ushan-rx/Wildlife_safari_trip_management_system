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

            <div class="row g-5 my-5">
                <div class="col">
               
                <section class="container">
                <?php require 'process_Staff.php'; ?> 

                <header>Staff Details <header> 
                <form action = "process_Staff.php" method="post">
                    
                        <div class="form">
                            <div class="input-box">
                                <label>First Name </lable>
                                <input type="text"  name="fname"> 
                                
                            </div>

                            <div class="input-box">
                                <label>Last  Name </lable>
                                <input type="text"  name="lname" >
                            
                            </div>

                            <div class="input-box">
                                <label>Email</lable>
                                <input type="text" name="email">
                                
                            </div>

                            <div class="input-box">
                                <label>Staff ID</lable>
                                <input type="text"  name="sid">
                                
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