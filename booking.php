




<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Booking</title>
<meta name="description" content="At NextGen homes we aim to provide Luxury and affordabtowardsle living solutions that can suit every budget.">
<link rel="shortcut icon" type="image/jpg" href="/images/Favicon.png"/>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/stellarnav.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.required {
    color: red;
}
  label {
    display: inline-block;
    margin-bottom: 0.5rem;
}
.inquery input[type="number"], input[type="text"], input[type="email"], input[type="password"], input[type="tel"], input[type="datetime-local"], input[type="url"], input[type="search"], select, textarea {
    display: block;
    width: 100%;
    height: 55px;
    font-size: 16px;
    color: #676767;
    line-height: normal;
    padding: 0px 15px;
    font-weight: 600;
    margin-bottom: 20px;
    border-radius: 8px;
    background: #f5f8ff;
    border: transparent;
    font-family: "Rajdhani", sans-serif;
    border: 1px solid;
}
input[type="submit"] {
    position: relative;
    background-color: #011e44;
    border: none;
    font-size: 17px;
    line-height: 24px;
    color: #fff;
    padding: 18px 40px;
    font-weight: 600;
    letter-spacing: 0;
    border-radius: 8px;
    outline: none;
    font-family: "Rajdhani", sans-serif;
    width: 100%;
}
.project p {
    font-size: 17px;
    font-family: 'first';
    color: #282828;
    line-height: 25px;
    letter-spacing: .7px;
    padding: 0 0;
}
p.usersubmit {
    margin-top: 4px;
}
textarea#email{
    padding-top:15px;
}
.cform.booking {
    box-shadow: 0px 0px 10px 0px rgb(0 0 0 / 50%);
    transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
    padding: 40px;
    margin: 5% 20%;
}
	.booking h2 {
    font-size: 20px;
    font-family: 'first';
    color: #282828;
    font-weight: 700;
    line-height: 1.6;
    text-align: center;
}
	@media only screen and (max-width: 600px) {
 .cform.booking {
    
    margin: 5% 0%;
}
}
</style>
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="top-bar full-width">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 logo-resp">
                                <a href="index.html"><img src="images/logo.jpg" class="img-fluid logo-img"></a>
                            </div>

                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                              <div class="stellarnav">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
                                      <li class="has-sub"><a href="#">Our products</a>
                                      <ul style="display: none;">
                                         <li><a href="pods.html">Pods</a></li>
                                         <li><a href="mobile-homes.html">Mobile homes</a></li>
                                         <li><a href="modular-homes.html">Modular homes</a></li>
                                        <li><a href="lodges.html">Lodges</a></li>
                                        <li><a href="spa.html">Spa Houses</a></li>
                                      </ul>
                                    </li>
                                    <li><a href="contact-us.php">Contact Us</a></li>
                                    
                                </ul>
                              </div>
                              
                            </div>
                          </div>
                       </div>
                 </div>
            </div>
           
        </div>
    </header>

 

  
 

 <section class="project">
  <div class="container-fluid">
      <div class="container">
          
 <?php
if(isset($_POST['submit'])){
    $to = "info@nextgenhomesireland.com"; // this is your Email address
    $from = $_POST['enquiry_email']; // this is the sender's Email address
    $n=$_POST['enquiry_firstName'];
    $e=$_POST['enquiry_email'];
    $de=$_POST['enquiry_date'];
    $ph=$_POST['enquiry_contact'];
    $d=$_POST['enquiry_lastName'];
    $subject = "Contact Form submission";
    $subject2 = "Thank you for your enquiry";
    $message ="  Name: $n
                 Last Name:$d
                 Email ID: $e
                 Mobile No:$ph
                 Detail:$de ";
            // Compose a simple HTML email message
$message2 = '<html><body style="width: 65%; border: 5px solid #ecd179; padding: 40px; background: #fbebde; border-radius: 8px;">';
$message2 .= '<img style="display: block;
  margin-left: auto;
  margin-right: auto;" src="https://nextgenhomesireland.com/images/logo.jpg" class="img-fluid logo-img">';

$message2 .= '<h1 style="color:#f40;">Thank you for your enquiry!</h1>';
$message2 .= '<p style="color: #000; font-size: 16px; text-align: justify;">We are delighted that you have chosen Next Gen Homes as your Modular  home supplier. All homes can be made fully mobile and are fully customisable  to meet your requirements. Please enjoy our brochure attached below. Here  you will see floor plans and home designs from Lark homes our registered  supplier.</p>';
$message2 .= '<p style="display: none; color: #000; font-size: 16px; text-align: justify;">
<a href="https://drive.google.com/file/d/1hmO2yPzRMnkJwigeo9FpuXBxX3wEFYFn/vi  ew?usp=drivesdk
">https://drive.google.com/file/d/1hmO2yPzRMnkJwigeo9FpuXBxX3wEFYFn/vi  ew?usp=drivesdk
</a>
</p>';
$message2 .= '<h3 style="color:#000;">Sincerely,</h3>';
$message2 .= '<h3 style="color:#000;">Sales and marketing team</h3>';
$message2 .= '<h3 style="text-align: center; color:#000;">Call: 085 868 4898</h3>';
$message2 .= '<h3 style="text-align: center; color:#000;">Email: Info@nextgenhomesIreland</h3>';
$message2 .= '</body></html>';     


    $headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $n . ", we will contact you shortly.";
    
    }
?>

<div class="cform booking">
	<h2>DUBLIN SHOWROOM NOW OPEN - BOOK YOUR VIEWING APPOINTMENT TODAY. </h2>
  <form class="form"  method="POST" action="">
        <div class="row">
        <div class="col-md-12">
    <p class="Name">
      <label for="name">Name<span class="required">*</span></label><br>
      <input type="text" name="enquiry_firstName" id="name" placeholder="Enter your name" required>
    </p>
     </div>
    <div class="col-md-12">
    <p class="Name">
      <label for="name">Last Name<span class="required">*</span></label><br>
      <input type="text" name="enquiry_lastName" id="name" placeholder="Enter your last name" required>
    </p>
    </div></div>
    <div class="row">
    <div class="col-md-12">
    <p class="useremail">
              <label for="email">Email<span class="required">*</span></label><br>

      <input type="email" name="enquiry_email" id="email" placeholder="mail@example.com" required>
    </p></div>
    <div class="col-md-12">
        <p class="Name">
     <label for="name">contact<span class="required">*</span></label><br>
      <input type="text" name="enquiry_contact" id="name" placeholder="Contact" required>
    </p>
    </div>
    </div>
    <div class="row">
    
      <div class="col-md-12">
     <p class="useremail">
    <label for="email">Date and Time<span class="required">*</span></label><br>
  <input type="datetime-local" id="email" name="enquiry_date">


    </p></div>
    
    <div class="col-md-12">
    <p class="usersubmit">
      <label for="contact"></label>
      <input type="submit" name="submit" value="Send" >
    </p></div>
        </div>
    
   
   
  </form>

    

          
      </div>
          
  </div>

 </section>

 <section class="getintouch">
  <div class="container">
    <div class="row">
<div class="offset-md-2 col-md-8 col-sm-12 text-center">
         <img style="width: 150px;" src="images/logo.png">
         <h2>Get In Touch</h2>

<div class="btn-black centered"><a href="/contact-us.php">Contact Us</a></div>
      </div>
      </div>
      </div>
 </section>



 <footer>
  <div class="footer-panel">
  <div class="container-fluid">
    <div class="row">
     <div class="container-xxl container-xl container-md container-sm">
          <div class="row">
            <div class="col-xl-6 col-lg-4 col-md-12 col-sm-12 border-rig">
              <div class="ftr-box">
                <div>
                    <a href="index.html">
                    <img src="images/logo.jpg" alt="" class="img-fluid ftr-logo">
                    </a>
                  </div>
                <p class="ftr-logo-text">An affordable and cost-effective solution to living / working can maximise your extra space without the need to apply for planning permission to your property. Our pods are delivered fully assembled and can be furnished to your requirements.</p>
               
              </div>
            </div>
            
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 border-rig">
              <div class="ftr-box">
                
                <ul class="ftr-links pt-4">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="warranty-guaranteed.html">warranty guaranteed</a></li>
                  <li><a href="privacy-policy.html">Privacy Policy</a></li>
                  <li><a href="contact-us.php">Contact Us</a></li>
                </ul>
                </div>
            </div>
            
            
            
            <div class="col-xl-3 col-lg-5 col-md-12 col-sm-12">
              <div class="ftr-box">
                <ul class="ftr-socials text-center pt-4">
                  <li class="fb"><a href="https://www.facebook.com/NextGenHomes1" target="_blank"><i class="fa fa-facebook"></i></a></li>
                  <li class="linkedin"><a href="https://www.instagram.com/nextgenhomes1/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                </ul>
                <ul class="ftr-contact">
                  <li class="contact-link"><span>Call: </span><a href="tel:085 868 4898">085 868 4898</a></li>
                  <li class="contact-link"><span>Email: </span><a href="#">Info@nextgenhomesIreland</a></li>
                 
                  
                  </ul>
                </div>
            </div>
            
          </div>
        </div>
      
      
      
    </div>
  </div>
  </div>
  <div class="copyright-panel">
    <div class="row"><div class="col-lg-12 col-md-12 col-sm-12">
     <h4>Copyright  2021 | Designed by <a href="https://dmcconsultancy.com/" target="_blank" style="text-decoration:none">DMC Consultancy.com</a></h4></div>
 </div>
   </div>
</footer>
</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellarnav.min.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      jQuery('.stellarnav').stellarNav({
        theme: 'dark',
        breakpoint: 991,
        position: 'right',
        
      });
    });
  </script>
  
</html>