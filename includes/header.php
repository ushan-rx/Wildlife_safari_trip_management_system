<header>
    <div class="navbar">
        <a href="index.php" class="site-icon">
            <img src="images/deerlogo.png" alt="website logo">
            <img src="images/sitename.png" alt="website name">
        </a>
        <ul id="nav-links">
            <li><a href="index.php" class="links">Home</a></li>
            <li><a href="PackageCard.php" class="links">Packages</a></li>
            <li><a href="safari.php" class="links">Destinations</a></li>
            <li><a href="Testimonial.php" class="links">Testimonials</a></li>
            <li><a href="contact.php" class="links">Contact Us</a></li>
        </ul>
        <div class="nav-buttons">
            <?php  
            session_start();
            if(empty($_SESSION['user_ses'])){
                ?>
                <button class="button-default button-nav sign-in"><a href="signInUp.php?type=log">Sign In</a></button>
                      <button class="button-default button-nav"><a href="signInUp.php?type=reg" >Sign Up</a></button>
                <?php
            }else{
                ?>
                <img src="images/user-icon.png" alt="user icon" class="user-icon"  id="nav_user_icon">
                <span class="user-list hidden" id="nav_user_list">
                    <ul>
                        <li><a href="acc.php">Account</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                    </ul>
                </span>
            <?php
            }
            ?>
        </div>
        <img src="images/menu_black.png" alt="menu icon" class="menu-icon">
    </div>
</header>