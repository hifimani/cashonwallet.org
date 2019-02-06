<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from laaris.com/coming-soon-25/youtube.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 12 Jan 2019 23:18:17 GMT -->
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Cash On Wallet - Coming Soon</title>
    <meta name="description" content="Laaris - Coming Soon">
    <meta name="author" content="laaris.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="img/fav.png" />

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,400,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:700|Lobster+Two" rel="stylesheet">

    <!-- ICON FONTS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.css">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-71483603-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>
<body>
<div class="wrapper">
    <div class="left">
        <div class="menu-collapsed">
            <div class="bar"><span></span></div>
            <div class="content">
                <div class="content-left">
                    <h2 class="title font_bold">About us</h2>
                    <div class="space_5"></div>
                    <p>Comming Soon</p>
                    <div class="space_5"></div>
                    <div class="ccc">
                        <div class="cc">
                            <img src="img/map.png" class="img-responsive" alt="">
                            <p class="color_grey font_bold"><br> </p>
                        </div>
                        <div class="cc">
                            <img src="img/envelope.png" class="img-responsive" alt="">
                            <p class="color_grey font_bold"><a href="#"></a></p>
                        </div>
                        <div class="cc">
                            <img src="img/telephone.png" class="img-responsive" alt="">
                            <p class="color_grey font_bold"><a href="tel:+00 123 456 789" class="letter-spacing_1 font_bold">+91 6389027907</a></p>
                        </div>
                    </div>
                </div>
                <?php $this->load->view('getintouch');?>
            </div>
        </div>
        <div class="share">
            <div class="sh">
                <i class="fa fa-share-alt"></i>
                SHARE
            </div>
            <ul>
                <li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div>
        <div class="copyright">
            © 2017 niktechsoftware.com - All Rights Reserved.
        </div>
    </div>
    <div class="home">
        <div class="background_youtube">
            <!-- YouTube link -->
            <img src="img/poster.png" class="img-responsive" alt="">
            <a class="player" data-property="{videoURL:'https://youtu.be/0pXYp72dwl0'}"></a>
        </div>
        <div class="content">
            <h1 class="big-title font_serif ssa js-spanize">Coming Soon...</h1>
            <h2 class="font_serif sa js-spanize">CASH ON WALLET</h2>
            <br>
            
            <br>
            <div class="countdown fadeInUpBig animated3">
                <table>
                    <tr width=60%>
                        <td><h3>Launching in : </h3></td>
                        <td>&nbsp;&nbsp;</td>
                        <td>&nbsp;</td>
                        <td align="center"><h3 id="counter"></h3></td>
                    </tr>
                </table>
                
            </div>
        </div>
    </div>
    <div class="subscribe fadeIn animated">
        <h4>Subscribe to be notified  <i class="fa fa-minus"></i></h4>
        <form id="subscribe-form" method="post" action="#">
            <div class="messages"></div>
            <div class="controls">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input id="form_fname" type="text" name="name" class="form-control"
                                   placeholder="Full Name" required="required" data-error="Full Name is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input id="form_email" type="email" name="email" class="form-control"
                                   placeholder="Your Email" required="required" data-error="Valid email is required.">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="submit" class="btn-send btn disabled" value="Subscribe">
                    </div>
                </div>
            </div>
        </form>
        <span>*we’ll get in touch with you at the email</span>
    </div>
</div>
<script>
// Set the date we're counting down to
var countDownDate = new Date("feb 9, 2019 12:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="counter"
  document.getElementById("counter").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("counter").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/contact.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/validator.js"></script>
<!--<script type="text/javascript" src="<?php echo base_url();?>assets/js/countdown.js"></script>-->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.mb.YTPlayer.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/script.js"></script>
</body>

<!-- Mirrored from laaris.com/coming-soon-25/youtube.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 12 Jan 2019 23:18:36 GMT -->
</html>