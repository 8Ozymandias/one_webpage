<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="Style.css" rel="stylesheet">
    <script src="scripts.js"></script>
    <!-- https://www.tutorialrepublic.com/faq/how-to-launch-bootstrap-modal-on-page-load.php -->
    <!-- https://codepen.io/bradtraversy/pen/zEOrPp -->
    <!-- https://www.appcues.com/blog/67-open-source-modal-window-plugins-made-with-jquery-javascript-css-and-more -->
    <!-- https://www.youtube.com/watch?v=gLWIYk0Sd38 -->
    <script>

        $(document).ready(function(){
            $("#myModal").modal('show');
        });

        $(function() {
        $('#myModal').click(function() {
         $('#myModal').modal('hide');
        });
        })

    </script>
</head>
<body>

    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <div class="modal-body">

                                   <a class="container-with-centered-content" href="#"><img src="img/architecture.jpg"  height="80" width="80"></a> 
                                   <div class="container-with-centered-content" id="top">CA Quality </div>
                                   <div class="container-with-centered-content" id="loc"> Montego Bay </div>
                                   <div class="container-with-centered-content" id="welcome" style="padding-top: 5%"><b>Welcome To Quality Construction</b></div>
                                   <!-- https://dribbble.com/shots/6007469-Shaking-hands-deal-Saas-illustration -->
                                   <div class="container-with-centered-content"><img src="img/image.png"  height="100%" width="100%"></div>
                                   <div class="container-with-centered-content" id="loc"> Thank you for doing business with us!</div>
                                   <div></div>
                                   <div id="middling" style="padding-top:5%">
                                   <button type="button" class="btn btn-outline-primary" >Continue</button>
                                   </div>

                                                             

                        </div>
                </div>
            </div>
        </div>
    </div>

<!-- ||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||| -->

    <div id="successfulMAIL" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <div class="modal-body">

                                    
                            <a id="showSUCCESS"></a>
                                                                

                        </div>
                </div>
            </div>
        </div>
    </div>

     


<!-- Navigation -->    
<!-- https://stackoverflow.com/questions/16453537/bootstrap-transparent-navbar -->
<nav class="navbar transparent navbar-inverse navbar-fixed-top navbar-expand-md navbar-light  sticky-top">

    <div class="container-fluid navbar-inner">
        <!-- https://www.w3schools.com/tags/att_img_width.asp -->
        <a class="navbar-brand" href="#"><img src="img/architecture.jpg"  height="80" width="80"></a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="#team">Team</a>

            </li>

            <li class="nav-item">
                <a class="nav-link" href="#connect">Connect</a>

            </li>

        </ul>
    </div>

</div>
</nav>


<!-- Image Slider -->


<!--
    ####################################################
    C A R O U S E L
    https://bootstrapcreative.com/create-full-width-bootstrap-4-responsive-carousel/
    https://codepen.io/JacobLett/full/weqOjq
    https://stackoverflow.com/questions/32687283/optimal-size-for-an-image-in-a-bootstrap-carousel-for-mobile-and-web
    http://responsiveimages.org/
    ####################################################
    -->
    <div id="carousel-2" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
        <ol class="carousel-indicators">
            <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-2" data-slide-to="1"></li>
            <li data-target="#carousel-2" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          
            <div class="carousel-item active">
                <a href="#services">
<!-- A great image dimension to work with is 4032 x 1600. Ideally, the image needs to be taken in landscape from the get go-->
                 <img src="img/roadconstruction.png" alt="responsive image" class="d-block img-fluid">

                    <div class="carousel-caption">
                        <div>
                            <h2 class="topSection">What We Do</h2>
                            <!-- <p class="we">We meticously build each site to get results</p> -->
                            <!-- https://www.w3schools.com/howto/howto_css_outline_buttons.asp -->
                            <span class="btn btn-sm btn-outline-secondary change btnlearnmore" style="color:white">Learn More</span>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /.carousel-item -->
          
          
            <div class="carousel-item">
                <a href="https://bootstrapcreative.com/">
                 <img src="img/office.png" alt="responsive image" class="d-block img-fluid">

                    <!-- <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                            <h2>Every project begins with a sketch</h2>
                            <p>We work as an extension of your business to explore solutions</p>
                            <span class="btn btn-sm btn-outline-secondary">Our Process</span>
                        </div>
                    </div> -->
                </a>
            </div>
            <!-- /.carousel-item -->
            <div class="carousel-item">
                <a href="https://bootstrapcreative.com/">
  
                 <img src="img/roaddevelopment.png" alt="responsive image" class="d-block img-fluid">


                    <!-- <div class="carousel-caption justify-content-center align-items-center">
                        <div>
                            <h2>Performance Optimization</h2>
                            <p>We monitor and optimize your site's long-term performance</p>
                            <span class="btn btn-sm btn-secondary">Learn How</span>
                        </div>
                    </div> -->
                </a>
            </div>
            <!-- /.carousel-item -->
            
        </div>
        <!-- /.carousel-inner -->
        <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- /.carousel -->


<!-- <div class="container-fluid">
    <p>Full width carousel</p>
</div> -->
<!-- /.container -->



<!-- Jumbotron -->
<div class="container-fluid">

    <div class="row jumbotron">
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
            <p class="lead">Our clientele spans both the public and private sector over the last several years.</p>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
            <a href="#"><button type="button" class="btn btn-outline-secondary btn-lg clientele">Clientele</button></a>
        </div>

    </div>

</div>




<!-- Welcome Section -->

<div class="container-fluid padding">


    <div class="row welcome text-center">

        <div class="col-12">
            <h1 class="display-4" id="about">
                Built with care.
            </h1>
            <hr>
            <div class="col-12">
                <p class="lead2">Welcome to CA. We believe in the mastery of the craft and the value that provides to you  the customer. It is on this premise why we continue to grow amidst fierce competition.</p>
            </div>
        </div>

    </div> 


</div>


<!-- Three Column Section -->

<div class="container-fluid padding" >

<div class="row text-center padding">

    <div class="col-xs-12 col-sm-6 ">
        <i class="fas fa-code"></i>
        <h3>AutoCAD</h3>
        <p class="lead3">Our architectual work is done with AutoCAD.</p>

    </div>

    <div class="col-xs-12 col-sm-6 ">
        <i class="fas fa-code"></i>
        <h3>Quantity Surveying</h3>
        <p class="lead3">Our quanity surveying is done with Excel.</p>

    </div>

 

</div>

<hr class="my-4"

</div>

<!-- Two Column Section -->


<!-- Fixed Background -->
<figure>
    <div class="fixed-wrap">
        <div id="Fixed">

        </div>
    </div>
</figure>

<!-- Emoji Section --> 

<button class="fun" data-toggle="collapse" data-target="#emoji" id="services">
    What We Do 
</button>
<div id="emoji" class="collapse">
    <div class="container-fluid padding">
        <div class="row text-center"> 
            <div class="col-sm-6 col-md-3">
<!-- I am having issue centering a single gif in the center of the page -->
<!-- Currently, I have 4 of the same gifs but I only want one and I want that one to center the page -->
                <img class="gif" src="img/gif/hardwork.gif">

            </div>

            <div class="col-sm-6 col-md-3">
                <img class="gif" src="img/gif/autocad.gif">

            </div>

            <div class="col-sm-6 col-md-3">
                <img class="gif" src="img/gif/machine.gif">

            </div>

            <div class="col-sm-6 col-md-3">
                <img class="gif" src="img/gif/working.gif">

            </div>



        </div>

        

    </div>
</div>

<!-- Services -->
<div class="container-fluid padding">
        <div class="row welcome text-center">

            <div class="col-12">

                <h1 class="display-4" id="services">Services</h1>

            </div>

            <hr>

        </div>
    </div>

<!-- Cards -->

<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/road.png" alt="">
                <div class="card-body align-items-center d-flex justify-content-center">
                    <h4 class="card-title">Roads</h4>
                    <!-- <a href="#" class="btn btn-outline-secondary clientele">See Profile</a> -->
                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/painting.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title align-items-center d-flex justify-content-center">Painting</h4>
                    <!-- <a href="#" class="btn btn-outline-secondary clientele">See Profile</a> -->
                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="card ">
                <img class="card-img-top" src="img/construction.png" alt="">
                <div class="card-body">
                    <h4 class="card-title align-items-center d-flex justify-content-center">Refurbishment</h4>
                    <!-- <a href="#" class="btn btn-outline-secondary clientele">See Profile</a> -->
                </div>

            </div>
        </div>

<!-- https://stackoverflow.com/questions/43461718/bootstrap-4-center-just-two-cards-not-three-just-two -->

        <!-- <div class="col-md-4 " >
            <div class="card">
                <img class="card-img-top" src="img/team1.jpeg" alt="">
                <div class="card-body">
                    <h4 class="card-title align-items-center d-flex justify-content-center">Landscaping</h4>
                    <!-- <a href="#" class="btn btn-outline-secondary clientele">See Profile</a> -->
                </div>
            </div> 

        <!-- <div class="col-md-4">
              <div class="card">
                <img class="card-img-top" src="img/team1.jpeg" alt="">
                <div class="card-body">
                    <h4 class="card-title align-items-center d-flex justify-content-center">Painting</h4>
                    <!-- <a href="#" class="btn btn-outline-secondary clientele">See Profile</a> -->
                </div>

    </div>
</div>

<!-- Meet the team -->
    <div class="container-fluid padding">
        <div class="row welcome text-center">

            <div class="col-12">

                <h1 class="display-4" id="team">Meet the Team</h1>

            </div>

            <hr>

        </div>
    </div>

<!-- Cards -->

<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/team1.jpeg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Javid Wilson</h4>
                    <p class="card-text">Javid Wilson is a junior architect and quantity surveyor. He's the most recent addition ot the team.</p>
                    <a href="#" class="btn btn-outline-secondary clientele">See Profile</a>
                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/team1.jpeg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Javid Wilson</h4>
                    <p class="card-text">Javid Wilson is a junior architect and quantity surveyor. He's the most recent addition ot the team.</p>
                    <a href="#" class="btn btn-outline-secondary clientele">See Profile</a>
                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="img/team1.jpeg" alt="">
                <div class="card-body">
                    <h4 class="card-title">Javid Wilson</h4>
                    <p class="card-text">Javid Wilson is a junior architect and quantity surveyor. He's the most recent addition ot the team.</p>
                    <a href="#" class="btn btn-outline-secondary clientele">See Profile</a>
                </div>

            </div>
        </div>

    </div>
</div>

<!-- Two Column Section -->

<div class="container-fluid padding">

    <div class="row padding">
        <div class="col-lg-6">
            <h2>Core Values</h2>
            <p class="lead3">
                Time is money. We will push towards a quick completion of your project. 
            </p>
            <p class="lead3">
                Quality over quantity.  At the same time, we emphasize high standards for both ourselves and you the customer.
            </p>
            <p class="lead3">
                Reputation is everything. Our past, present and future success is irrelevant if we are not honest and forthright.
            </p>
            <br>
            <a href="#" class="btn clientele">Learn More</a>
        </div>

        <div class="col-lg-6">
            <img src="img/labor.jpg" alt="" class="img-fluid">            
        </div>

    </div>
    <hr class="my-4">
</div>



<!-- Connect -->


<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
             <h2 id="connect">Connect</h2>   
        </div>
        <div class="col-12 social padding">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-google-plus-g"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>
<!-- 
https://github.com/codingmarket07/Contact-us-form-validation-Using-Javascript-M8 -->
<div id="middling">
<div class="wrapper">
    <h2>Contact us</h2>
    <div id="error_message"></div>
    <form id="myform" method="post" action="" onsubmit="validate();">
      <div class="input_field">
          <input type="text" placeholder="Name" id="name" name="name">
      </div>
      <div class="input_field">
          <input type="text" placeholder="Subject" id="subject" name="subject">
      </div>
      <div class="input_field">
          <input type="text" placeholder="Phone" id="phone" name="phone">
      </div>
      <div class="input_field">
          <input type="text" placeholder="Email" id="email" name="email">
      </div>
      <div class="input_field">
          <textarea placeholder="Message" id="message" name="message"></textarea>
      </div>
      <div class="newbtn">
          <input type="submit" name="submit">
      </div>
    </form>
</div>
</div>

<script>

// https://stackoverflow.com/questions/16616250/form-submit-with-ajax-passing-form-data-to-php-without-page-refresh 
$(document).ready(function(){    
$('form').on('submit',function(e) {
    
e.preventDefault();    
    $.ajax({
        url: 'mail.php',
        type: 'post',
        data:$('form').serialize(),
        success: function(msg) {
            console.log(msg);
            // https://stackoverflow.com/questions/28924551/how-to-open-bootstrap-modal-in-ajax-success
            $("#showSUCCESS").html(msg);
            $("#successfulMAIL").modal('show')
        }               
    });
    // https://stackoverflow.com/questions/8701812/clear-form-after-submission-with-jquery
    this.reset();
});
})

</script>
 

<!-- Footer -->
<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
                <hr class="light">
                <h5 class="lead4">Contact</h5>
                <hr class="light">
                <p class="lead4">876-589-6655</p>
                <p class="lead4">876-627-9227</p>
                <p class="lead4">Cliftonaccount@hotmial.com</p>
                <p class="lead4">2nd River Bay Road</p>
                <p class="lead4">Montego Bay,St.James</p>
            </div>

            <div class="col-md-4">
                <hr class="light">
                <h5 class="lead4">Our hours</h5>
                <hr class="light">
                <p class="lead4">Monday:9am-5pm</p>
                <p class="lead4">Saturday:9am-5pm</p>
                <p class="lead4">Sunday:9am-5pm</p>
            </div>

            <div class="col-md-4">
                <hr class="light">
                <h5 class="lead4">Service Area</h5>
                <hr class="light">
                <p class="lead4">St.James</p>
                <p class="lead4">Trelawny</p>
                <p class="lead4">Other Parishes</p>       
            </div>
            <div class="col-12">
                <hr class="light-100">
                <h5>&copy; caquality.com</h5>
            </div>


        </div>
    </div>
</footer>

<!-- https://codepen.io/michalwyrwa/pen/GBaPPj -->

<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button">
    <i class="fas fa-chevron-up"></i>
</a>

<script>
    $(document).ready(function(){
	$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
});
</script>


    
</body>
</html>