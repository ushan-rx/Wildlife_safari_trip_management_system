<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>sign-in</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='styles/styleGen.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='styles/styleLog.css'>
</head>

<body>
    <div class="col-wrapper">
        <!-- sign up -->
        <div class="form-sec" id="reg_form">
            <a href="#" class="site-icon">
                <img src="images/deerlogo.png" alt="website logo">
                <img src="images/sitename.png" alt="website name">
            </a>

            <h1 class="alt-heading">Register now</h2>
                <h1 class="secondary-header">Join with us to have a</h1>
                <h1 class="secondary-header">worry-free safari experience</h1>

                <form action="signUpProcess.php" method="post" class="sign-up-form">
                    <span class="large-field hidden" id="error_msg">
                        <?php echo $_GET['error']  ?>
                    </span>

                    <input  name="fname"
                            type="text" 
                            placeholder="First name"   
                            class="name" 
                            value= "<?php echo (isset($_GET['fname'])) ? $_GET['fname'] : "";  ?>">

                    <input  name="lname" 
                            type="text" 
                            placeholder="Last name" 
                            class="name" 
                            value= "<?php echo (isset($_GET['lname'])) ? $_GET['lname'] : "";  ?>">

                    <input  name="email" 
                            type="email" 
                            placeholder="Email" 
                            class="large-field"
                            value= "<?php echo (isset($_GET['mail'])) ? $_GET['mail'] : "";  ?>">

                    <div class="pw-wrapper tooltip">
                        <input  id="reg_pw" 
                                name="pw" 
                                type="password" 
                                placeholder="Password" 
                                class="large-field" 
                                value= "<?php echo (isset($_GET['pw'])) ? $_GET['pw'] : "";  ?>">
                        <span class="tooltiptxt">Password must contain,<br/>
                        at least 8 characters,<br/>
                        at least one letter,<br/>
                        at least one number.
                        </span>
                        <span class="eye-icon-wrapper" >
                            <img src="images/open_eye.png" alt="show pw" class="eye-icon" id="eye_reg" onclick="showpw(this.id,'reg');">
                        </span>
                    </div>

                    <label class="large-field">Agree to our <a href="#"> terms and conditions</a>
                        <input type="checkbox" name="terms" id="terms" >
                    </label>

                    <button type="submit" 
                            title="submit details" 
                            id="submit_button_1">
                        Create Account
                    </button>

                    <p class="large-field">Already have an account?<span class="form-toggle" > Sign in<span></p>
                </form>
        </div>

        <div class="img-col" id="reg_img">
            <img src="images/site_images/deer_front.jpg" alt="deer image">
        </div>

        <!-- sign in -->
        <div class="img-col sign-img">
            <img src="images/site_images/tiger_front.jpg" alt="tiger image">
        </div>

        <div class="form-sec sign-form" >
            <a href="#" class="icon-inverted">
                <img src="images/sitename.png" alt="website name">
                <img src="images/deerlogo.png" alt="website logo">
            </a>

            <h1 class="alt-heading">Log in now</h2>
                <h1 class="secondary-header">Find your</h1>
                <h1 class="secondary-header">Dream Safari here..</h1>

                <form action="loginProcess.php" method="post" class="sign-in-form">
                    <span class="large-field hidden" id="error_msg2">
                    <?php echo $_GET['error2']  ?>
                    </span>

                    <input name="email" 
                            type="email" 
                            placeholder="Email" 
                            class="large-field" 
                            value="<?php echo (isset($_GET['mail'])) ? $_GET['mail']: null ?>">
                                
                    <div class="pw-wrapper">
                        <input id="log_pw" 
                            name="pw" type="password" 
                            placeholder="Password" 
                            class="large-field" >

                        <span class="eye-icon-wrapper" >
                            <img src="images/open_eye.png" alt="show password" class="eye-icon" id="eye_log" onclick="showpw(this.id,'log');">
                        </span>
                    </div>

                    <label class="large-field">Remember me
                        <input  type="checkbox" 
                                name="remember" 
                                id="remember">
                    </label>

                    <label class="large-field">
                        <a href="#">Forgot Password?</a>
                    </label>

                    <button type="submit" 
                        title="submit details" 
                        id="submit_button_2">
                        Sign In
                    </button>

                    <p class="large-field">New to MasterSafari?<span class="form-toggle" > Create account</span></p>
                </form>
        </div>

    </div>
    <script src='scripts\scriptl.js'></script>
</body>

</html>