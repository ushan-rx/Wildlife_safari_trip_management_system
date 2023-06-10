<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>MasterSafari</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap"
    rel="stylesheet">
  <link rel='stylesheet' type='text/css' media='screen' href='styles/styleGen.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' type='text/css' media='screen' href='styles/styleContact.css'>

</head>


<body>

    <?php include 'classes/connection.php' ?>
    <?php require 'includes/header.php' ?>


  <!-- your code here -->
  <section class="contact">
    <div class="bground"></div>
    <div class="content">
        <h1>Contact Us</h1>
        <p>Submit a trip request to connect with one of our best safari experts
            and receive the full range of informations and inspirations. 
           You will plan everything with the assistance of our Mstersafari expert.</p>
    </div>
    <div class="container">
        <div class="contactInfo">
            <div class="box">
              <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Headqarters</h3>
                    <p>Colombo,Sri Lanka<br> L-2 90 Seylan Towers<br>Galle Road</p>    
                </div>
            </div>

            <div class="box">
                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Talk to us</h3>
                    <p>Chat with our team to discover
                        how our service useful to you.</p>
                    <p>Hotline - +919876432</p>    
                </div>
            </div>

            <div class="box">
                <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                <div class="text">
                    <h3>Email</h3>
                    <p>mastersafari@gmail.com</p>    
                </div>
            </div>
            <br><br>

            <!--Map-->
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63371.81536311016!2d79.81500561820583!3d6.921836877834591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1685251258958!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
            </div>

        </div>

        <div class="contactForm">
            <form action="form.php" method="post">
                <h2>Let our experts help you to plane your perfect trip!</h2>
                <div class="inputBox">
                    <input type="text" name="inquiry_id" id="inquiry_id" required="required"/>
                    <span>Inquiry_id</span>
                </div>

                <div class="inputBox">
                    <input type="text" name="full_name" id="firstName" required="required"/>
                    <span>Full Name</span>
                </div>

                <div class="inputBox">
                    <input type="text" name="email" id="form_email" required="required"/>
                    <span>Email</span>
                </div>

                <div class="inputBox">
                    <input type="text" name="county" id="form_country" required="required"/>
                    <span>Country</span>
                </div>

                <div class="inputBox">
                    <input type="text" name="tp_no" id="form_phone" required="required"/>
                    <span>Contact Number</span>
                </div>

                
                <div class="inputBox">
                    <textarea id=
                    "form_control" name="subject"required="required"></textarea>
                    <span>Subject...</span>
                </div>

                <div class="inputBox">
                    <textarea id="form_message" name="inquiry_txt" required="required"></textarea>
                    <span>Type your Message...</span>
                </div>

                <div class="inputBox">
                    <input type="submit" value="send"/>
                </div>
            </form>

        </div>
    </div>
</section>

  <!-- to here -->
 <?php include 'includes/footer.php'?>
  
  <script src='script.js'></script>
</body>

</html>