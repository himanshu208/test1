<footer class="page-footer font-small stylish-color-dark" style="background: #ffffff url(https://www.janbasktraining.in/demo2019/img/foot-bg.png) top center;background-size: cover;padding: 18px 0px 0px 0px;"> 
  
  <!-- Footer Links -->
   
   <div class="footer-menu">
   <div class="container">
   <div class="row">
   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="padding:0px 20px;"> 
   <div class="followus-bg">
   <p class="lead mb0 white lineon" style="font-weight:700;">Follow Us</p>
   <ul class="social" style="padding-left:0px;margin-top:15px; margin-bottom:10px;">
              <a target="_blank" href="https://www.facebook.com/JanBasktraining/ ">
              <li class="fb-icon"> </li>
              </a> <a target="_blank" href="https://twitter.com/janbasktraining ">
              <li class="tw-icon fb-icon"></li>
              </a> <a target="_blank" href="https://www.linkedin.com/company/janbask-training/">
              <li class="ld-icon fb-icon"></li>
              </a> <a target="_blank" href="https://www.youtube.com/janbasktraining">
              <li class="yu-icon fb-icon"></li>
              </a>
            </ul>
	<div class="whtlogo"> 
	<img src="https://www.janbasktraining.com/assets/img/JBT_Logo-white.png" >
  </div>
  </div>
  </div>
   
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12"> 
    <div class="row">
	 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"> 
	 <p class="lead mb0 white lineon" style="font-weight:700;">Janbask Training</p>
     <ul class="list-unstyled footlnk ">

              <li><a href="https://www.janbasktraining.com/about-us">About Us</a></li>
              <li><a href="https://www.janbasktraining.com/blog" target="_blank">Blog</a></li>
              <li><a href="https://www.janbasktraining.com/webinar/free-salesforce-training-for-beginners" target="_blank">Webinar</a></li>
              <li><a href="https://www.janbasktraining.com/contact-us">Contact Us</a></li>
            
            
        </ul>
		   </div>
		   
		   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		   <p class="lead mb0 white lineon" style="font-weight:700;">Join Us</p>
     <ul class="list-unstyled footlnk ">
              <li><a href="https://www.janbasktraining.com/insructor-login">Become an Instructor</a></li>
              <li><a href="https://www.janbasktraining.com/login">Become a Learner</a></li>
              <li><a href="https://www.janbasktraining.com/corporate-training">Corporate Training</a></li>
             
        </ul>
		   </div>
		   
		   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		   <p class="lead mb0 white lineon1" style="font-weight:700;">Useful Links</p>
     <ul class="list-unstyled footlnk ">
           <li><a href="https://www.janbasktraining.com/term-of-use">Term of Use</a></li>
              <li><a href="https://www.janbasktraining.com/privacy-policy">Privacy Policy</a></li>
              <li><a href="https://www.janbasktraining.com/disclaimer">Disclaimer</a></li>
              <li><a href="https://www.janbasktraining.com/trainer" target="_blank">Trainer Login</a></li>

        </ul>
		   </div>
		   </div>
		   </div>
    </div>
    </div>
	
	 <div class="footer-copyright text-center py-3 mb0 white">© 2018 Copyright - Janbasktraining | All Rights Reserved <a href="#" style="color:#E00; text-decoration:none;"></a> </div>
    
    </div>
	
	
  
 
</footer>
<!-- START JAVASCRIPT --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> 

<!-- Bootsnavs --> 
<script src="js/bootsnav.js"></script> 
<script src="js/jquery.validate.min.js"></script> 
<script src="js/additional-methods.min.js"></script> 
<script>

    $().ready(function () {
$("#whitepaper").load("https://www.janbask.com/whitepaper2018-2");
        $("#subscribe_form").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                name: "Please enter your name",
                email: "Please enter a valid email address"
            },
            submitHandler: function (thisform) {
                $("#success6").html('');
                $.post('https://www.janbask.com/ajax/ajax', $(thisform).serialize(), function (data) {

                    response = JSON.parse(data);
                    if (response.error ==false)

                    {

                        jQuery(thisform)[0].reset();

                        jQuery("#msg").html("<b>Thank you for subscribing us.</b>");


                    }

                    else

                    {

                        //jQuery('#contact_form')[0].reset();

                        jQuery("#msg").html("<b>Error Occured, Contact Admin</b>");

                        //jQuery("#success").fadeIn("slow");

                        //jQuery('#success').delay(20000).fadeOut("slow");

                    }

                });
            }
        });
  $("#subscribe_form2").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                message: "required",
                mobile: {
                    required: true,
                    minlength: 10,
                    maxlength: 10
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                name: "Please enter your name",
                mobile: "Please enter a valid Contact No.",
                email: "Please enter a valid email address"
            },
            submitHandler: function (thisform) {
                $("#success6").html('');
                $.post('https://www.janbask.com/ajax/ajax', $(thisform).serialize(), function (data) {

                    response = JSON.parse(data);
                    if (response.error ==false)

                    {

                        jQuery(thisform)[0].reset();

                        jQuery("#msg2").html("<b>Thanks for Your Inquiry.</b>");


                    }

                    else

                    {

                        //jQuery('#contact_form')[0].reset();

                        jQuery("#msg2").html("<b>Error Occured, Contact Admin</b>");

                        //jQuery("#success").fadeIn("slow");

                        //jQuery('#success').delay(20000).fadeOut("slow");

                    }

                });
            }
        });
    });
</script> 
<script>

$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
</script>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".tablink1 a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1400, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script> 


