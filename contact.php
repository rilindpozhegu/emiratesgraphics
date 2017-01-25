<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Emirates Graphics</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Tab Logo -->
    <link rel="icon" href="img/emirates-transparent-logo-01.png">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/contact.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="css/quote-modal.css">  
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">  
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


<!-- Navigationbar  -->


<?php
    include('navigation_bar.php');
?>

<!-- Header, social media Section1 -->
<header>
    <div class="top-header">
        <div class="container">
            <div class="header-social_media mobile-d-n">
                <div>
                     <a href="https://web.facebook.com/EmiratesGraphic/?fref=ts"><img src="img/social/facebook-social-media.svg" class="facebook-icon-header wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s"></a>
                    <!-- <img src="img/social/twitter-social-media.svg"> -->
                    <a href="https://www.instagram.com/designxemirates/"><img src="img/social/instagram-social-media.svg"  class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s"></a>

                </div>
            </div>
            <div class="contact-header">
                <div class="col-md-12 col-xs-12">
                    <h1 class="wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".5s">LET’S MAKE <br> YOUR VISION A REALITY</h1>
                    <p class="wow zoomIn" data-wow-duration="1.5s" data-wow-delay=".9s">Looking for a new website design, brand development or <br> social marketing? We would love to hear from you!</p>
                    <button  data-toggle="modal" data-target="#myModal" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">GET A FREE QUOTE</button>
                </div> 
            </div>
                <div class="contact-zone row"> 
                    <div class="col-md-4 col-xs-12" style="padding: 30px 0px; ">
                        <img src="img/l_icon.png" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="contact-text">
                            <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s">Cluster Y, Swiss Tower,<br> 34th Floor, Office 15<br>
Jumeirah Lake Towers, Dubai, UAE</span>
                        </div>
                    </div>  
                    <div class="col-md-4 col-xs-12" style="padding: 30px 0px; ">
                        <img src="img/c_icon.PNG" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="contact-text">
                            <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s">Tel : +372 (546) 05000 <br>
                            Mob : +971 (050) 912 4567</span>
                        </div>
                    </div>        
                    <div class="col-md-4 col-xs-12" style="padding: 30px 0px; ">
                        <img src="img/email.png" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                        <div class="contact-text">
                            <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s">info@emiratesgraphic.com</span>
                        </div>
                    </div> 
                </div>
                <div class="col-md-12 more-social-b desktop-d-n">
                    <button><i class="fa fa-facebook" aria-hidden="true"></i></button>
                    <button><i class="fa fa-twitter" aria-hidden="true"></i></button>
                    <button><i class="fa fa-instagram" aria-hidden="true"></i></button>
                </div> 
        </div>
    </div>
</header>


<div class="map_section mobile-d-n maps">

<p><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3250.5938072185672!2d55.15317880112633!3d25.07670410623817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6ca6c3b41b27%3A0x6e53cc34740737c1!2sSwiss+Tower+-+Dubai+-+United+Arab+Emirates!5e0!3m2!1sen!2s!4v1483093009212" width="100%" height="450" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
<style type="text/css">
    .maps iframe{
    pointer-events: none;
}
</style>
<div class="clearfix"></div>
</div>

<!-- Footer -->
<footer>
    <div class="col-md-12" style="color: black; background-color: white; text-align: center;">
        <h4 style="font-size: 15px;" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">© 2016 All Rights Reserved Emirates Graphic</h4>
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div> -->
      <div class="modal-body row">
        <div class="col-md-6 col-xs-6 brand_grid mobile-d-n">
            <img src="img/logo1.png">
            <h1>MAKE <br> YOUR <br>VISION <br>REALITY</h1>
        </div>
        <div class="col-md-6 col-xs-12 inputs_grid row">
            <div class="col-md-12 col-xs-12">
                <h4>REQUEST A <span>FREE QUOTE</span></h4>
                <p>At Emirates Graphic we love to challenge the conventional and we won't hesitate to push boundaries in order to  fulfil your version.</p>
            </div>
            <form id="em_contact">
                <div class="col-md-6 col-xs-6 sm-padding" style="margin: 10px 0px;">
                    <input id="n" type="email" name="em_email" placeholder="E-mail">
                </div>
                <div class="col-md-6 col-xs-6 sm-padding" style="margin: 10px 0px;">
                    <input id="p" type="text" name="em_phone" placeholder="Phone">
                </div>
                <div class="clearfix"></div>
                <div class="col-md-6 col-xs-6 sm-padding" style="margin: 10px 0px;">
                    <input type="text" name="em_company" placeholder="Company name">
                </div>
                <div class="col-md-6 col-xs-6 select-grid sm-padding" style="margin: 10px 0px;">
                    <div >
                      <select required name="em_dropdown" class="chose_service">
                        <option value="Web Design" class="option-s">Web Design</option>
                        <option value="Branding" class="option-s">Branding</option>
                        <option value="App Development" class="option-s">App Development</option>
                        <option value="Digital Marketing" class="option-s">Digital Marketing</option>
                        <option value="Film Making" class="option-s">Film Making</option>
                      </select>
                    </div>

                </div>
                <div class="col-md-12 col-xs-12 textarea-s sm-padding" style="margin: 10px 0px; ">
                    <textarea name="em_description" placeholder="help us understand what you need." rows="4" name="message" id="m"></textarea>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12" class="modal_button" style="padding-top: 15px; padding-left: 0px;">
                    <!-- <button type="submit" name="submit" value="Submit form" id="mybtn">Submit</button> -->
                        <button class="btn btn-success has-spinner">
                                <i id="spinerMail"></i>
                                Submit
                        </button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/notify.js"></script>

    <script type="text/javascript">
        $("#em_contact").submit(function(e) {

                var url = "mailer.php"; // the script where you handle the form input

                $.ajax({
                       type: "POST",
                       url: url,
                       data: $("#em_contact").serialize(), // serializes the form's elements.
                       beforeSend: function()
                       {
                            $("#spinerMail").addClass("fa fa-spinner fa-spin");
                       },   
                       complete: function(data)
                        {
                            $.notify(data.responseText, "success");
                            $("#spinerMail").removeClass("fa fa-spinner fa-spin");
                        }

                     });

                e.preventDefault(); // avoid to execute the actual submit of the form.
            });

    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    

<!-- Navigationbar Scripts -->
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/velocity.min.js"></script>      

<!-- Animation CSS -->
    <script src="js/wow.js"></script>
    <script>
        new WOW().init();
    </script>
    <script>    $('.maps').click(function () {
    $('.maps iframe').css("pointer-events", "auto");
    });
    
    $( ".maps" ).mouseleave(function() {
      $('.maps iframe').css("pointer-events", "none"); 
    });</script>
</body>
</html>