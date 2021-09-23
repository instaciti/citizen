<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Font Awesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- CSS Link -->
        <link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/media-query.css" />
 
        <title>Portfolio!</title>
    </head>
    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <?php include 'partials/sidebar.php' ?>
                </div>
                
            </div>
            <div id="main" class="custom-breakpoint p-0">
                <div class="row justify-content-center hero-bg pt-5 pb-5" id="home">
                    <div class="col-md-4 align-self-center">
                        <img src="./assets/img/user-image-1.svg" class="img-fluid" />
                    </div>
                    <div class="col-md-6 align-self-center">
                        <h3 class="hello-heading custom-color font-weight-bold">Hello</h3>
                        <h1 class="font-weight-bold heading">I'm <span class="custom-color">Anjali Kumari </span><br/>UI & Ux Designer</h1>
                        <p class="heading-para">
                            A resturant sometimes known as a diner is a place where cooked food is solid to the public , and where 
                            cooked food is sold to the public, and where people sit down to eat it . It is also a place.
                        </p>
                        <a href="#" class="btn btn-hire">Hire Me</a>
                        <a href="#" class="btn btn-portfolio ml-3">Portfolio</a>
                    </div>
                </div>
                <div class="row justify-content-center about-bg pt-5 pb-5" id="about">
                    <div class="col-md-6 align-self-center">
                        <h5 class="custom-color">MY SKILLS</h5>
                        <h2 class="font-weight-bold">About Me</h2>
                        <a href="#" class="text-dark"><span class="badge custom-badge mr-2">PHP</span></a>
                        <a href="#" class="text-dark"><span class="badge custom-badge mr-2">Laravel</span></a>
                        <a href="#" class="text-dark"><span class="badge custom-badge mr-2">ReactJS</span></a>
                        <a href="#" class="text-dark"><span class="badge custom-badge mr-2">Angular</span></a>
                        <a href="#" class="text-dark"><span class="badge custom-badge mr-2">jQuery</span></a>
                        <a href="#" class="text-dark"><span class="badge custom-badge mr-2">MySQL</span></a>
                        <a href="#" class="text-dark"><span class="badge custom-badge mr-2">Material UI</span></a>
                        <p class="mt-4 about-hi">Hi I am UI/UX Designer.</p>
                        <span>With 5 bars in different areas, including a special room for smokers. The setting has tropical elements,
                            Dance until you can't with the musical content that every night at we prepare for you. tables decorated 
                            with paintings which, if they were paintings on their tops, highlighting the color of the place.
                        </span>
                        <div class="row mt-4">
                            <div class="col-md-9">
                                <a href="#" class="btn btn-hire">Download CV</a>
                                <a href="#" class="btn btn-portfolio ml-3">Contract</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 align-self-center pb-5">
                        <img src="./assets/img/user-profile-pic-2.svg" class="img-fluid" />
                        <div class="row">
                            <div class="col-5 col-md-7 col-lg-5 text-center pb-3 pl-2 pr-2 bg-white sort-experience-div rounded">
                                <div class="pl-4 pr-4 pt-3 experience">
                                    <strong>06</strong>
                                    <p>Years <br/> Experience</p>
                                </div>
                                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-linkedin-in ml-2"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-instagram ml-2"></i></a>
                                <a href="#" class="social-icon"><i class="fab fa-twitter ml-2"></i></a>
                                <a href="#" class="social-icon"><i class="fas fa-basketball-ball ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center" id="resume">
                    <div class="col-md-10">
                        <?php include 'partials/resume.php' ?>
                    </div>
                </div>
                <div class="row about-bg" id="video">
                    <div class="col-md-12">
                        <?php include 'partials/video.php' ?>
                    </div>
                </div>
                <div class="row justify-content-center" id="portfolio">
                    <div class="col-md-10">
                        <?php include 'partials/portfolio-timeline.php' ?>
                    </div>
                </div>
                <div class="row about-bg pt-5 pb-5" id="testimonials">
                    <div class="col-md-12">
                        <?php include 'partials/testimonials.php' ?>
                    </div>
                </div>
                <div class="row pt-5" id="contact">
                    <div class="col-md-12">
                        <?php include 'partials/contact-us.php' ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "230px";
                document.getElementById("main").style.marginLeft = "230px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginLeft = "0";
            }
            $(function() {
                $('.top-navbar-icon').click(function() {
                    $('.top-navbar-icon').hide();
                });

                $('.closebtn').click(function() {
                    $('.top-navbar-icon').show();
                });
            });
            $(function(){
                $('.sidebar-link div a').click(function(){
                    $('.sidenav .active').removeClass("active");
                    $(this).addClass("active");
                });
            });
        </script>
    </body>
</html>