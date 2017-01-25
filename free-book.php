<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Emirates Graphics</title>

    <!-- Tab Logo -->
    <link rel="icon" href="img/es_logo.png">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Tab Logo -->
    <link rel="icon" href="img/emirates-transparent-logo-01.png">
    
<!-- Tab Logo -->
    <link rel="icon" href="img/es_logo.png">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/quote-modal.css">

    <!-- Galery -->
    <link rel="stylesheet" type="text/css" href="css/default-skin.css">
    <link rel="stylesheet" href="css/photoswipe.css"><!-- End Of Galery -->

    <link rel="stylesheet" type="text/css" href="css/free-book.css">
    
        <!--GOOGLE ANALYTICS-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-88061472-1', 'auto');
      ga('send', 'pageview');
    
    </script>
    
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


<!-- Navigationbar  -->


<?php
    include('navigation_bar.php');
?>

<!-- Header social media Section1 -->
<header>
    <div class="top-header">
        <div class="container">
            <div class="header-social_media">
                <div>
                    <a href="https://web.facebook.com/EmiratesGraphic/?fref=ts"><img src="img/social/facebook-social-media.svg" class="facebook-icon-header"></a>
                    <!-- <img src="img/social/twitter-social-media.svg"> -->
                    <a href="https://www.instagram.com/designxemirates/"><img src="img/social/instagram-social-media.svg"></a>

                </div>
            </div>

        </div>
    </div>
</header>

<!-- first section -->

<section class="section1 container info_grid">
    <div class="col-md-6">
        <h4>TOPICS COVERED IN THE BOOK</h4>
        <hr width="40%" align="left">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <p>Introduction: Online Marketing</p>
        <p>Inbound Marketing</p>
        <p>Contextual Advertising</p>
        <p>Display & Banner</p>
        <p><span>and MORE!</span></p>
    </div>

    <div class="col-md-6 row" class="input_grid" style="text-align: center;">
        <h4>GET THE EBOOK FOR FREE!</h4>
        <hr width="40%" align="left">
        <p>Subscribe to get full access to our new online marketing guide!</p>
        <div class="col-md-12 input_grid-inp">
            <input type="text" placeholder="Enter Your Full Name" name="">
        </div>
        <div class="col-md-12 input_grid-inp">
            <input type="email" placeholder="Enter Your Mail" name="">
        </div>

        <div class="col-md-12 input-grid-btn">
            <button>FREE EBOOK</button>
        </div>
    </div>
</section>

    <!-- Footer Section -->
    <footer id="contact" class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3>Looking for a new website design, brand development <br> or social marketing? We would love to hear from you!</h3>
                </div>
                <div class="col-md-5 button">
                    <button  data-toggle="modal" data-target="#myModal">GET A FREE QUOTE</button>
                </div>
                <div class="col-md-12" style="text-align: center;">
                    <p>© Copyright 2016 All Rights Reserved Emirates Graphic</p>
                </div>
            </div>
        </div>
    </footer>

<!-- Get a free Quote Modal Popup -->
<script type="text/javascript">
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        
      </div> -->
      <div class="modal-body row">
        <div class="col-md-6 col-xs-6 brand_grid mobile-d-n">
            <img src="img/logo1.png">
            <h1>MAKE <br> YOUR <br>VISION <br>REALITY</h1>
        </div>
        <div class="col-md-6 col-xs-12 inputs_grid row">
            <div class="col-md-12 col-xs-12">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4>REQUEST A <span>FREE QUOTE</span></h4>
                <p>At Emirates Graphic we love to challenge the conventional and we won't hesitate to push boundaries in order to  fulfil your version.</p>
            </div>
            <form id="my_form" onsubmit="submitForm(); return false;">
                <div class="col-md-6 col-xs-6 sm-padding" style="margin: 10px 0px;">
                    <input id="n" type="email" name="first_name" placeholder="E-mail" required>
                </div>
                <div class="col-md-6 col-xs-6 sm-padding" style="margin: 10px 0px;">
                    <input id="p" type="text" name="phone_nr" placeholder="Phone">
                </div>
                <div class="clearfix"></div>
                <div class="col-md-6 col-xs-6 sm-padding" style="margin: 10px 0px;">
                    <input type="text" name="company_name" placeholder="Company name">
                </div>
                <div class="col-md-6 col-xs-6 select-grid sm-padding" style="margin: 10px 0px;">
                    <div >
                      <select required class="chose_service">
                        <option value="1" class="option-s">Web Design</option>
                        <option value="2" class="option-s">Branding</option>
                        <option value="3" class="option-s">App Development</option>
                        <option value="4" class="option-s">Digital Marketing</option>
                        <option value="5" class="option-s">Film Making</option>
                      </select>
                    </div>

                </div>
                <div class="col-md-12 col-xs-12 textarea-s sm-padding" style="margin: 10px 0px; ">
                    <textarea placeholder="help us understand what you need." rows="4" name="message" id="m"></textarea>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12" class="modal_button" style="padding-top: 15px; padding-left: 0px;">
                    <!-- <button type="submit" name="submit" value="Submit form" id="mybtn">Submit</button> -->
                    <input type="submit" name="submit" value="Submit form" id="mybtn" class="submit_btn"><span id="status"></span></input>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    function _(id) { return document.getElementById (id); }
    function submitForm () {
        _("mybtn").disabled = true;
        _("status").innerHTML = 'please wait ...';
        var formdata = new FormData ();
        formdata.append( "n", _("n").value );
        formdata.append( "e", _("e").value );
        formdata.append( "m", _("m").value );
        var ajax = new XMLHttpRequest ();
        ajax.open( "POST", "sent_email.php" );
        ajax.onreadystatechange = function () {
            if (ajax.readyState == 4 && ajax.status == 200) {
                if (ajax.respnseText == "success") {
                    _("my_form").innerHTML = '<h2>Thanks '+_("n").value+', your message has been sent.</h2>'; 
                } else {
                    _("status").innerHTML = ajax.responseText;
                    _("mybtn").disabled = false;
                }
            }
        }
        ajax.send( formdata );
    }
</script>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>


<!-- Navigationbar Scripts -->
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/velocity.min.js"></script>
    <script type="text/javascript" src="js/video-iframe.js"></script>


</body>
</html>
