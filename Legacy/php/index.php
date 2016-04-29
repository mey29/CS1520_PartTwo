<!-- Megan Yates: Home Page - CS1520 Milestone One -->

<!DOCTYPE html>
<html lang="en">

<head>
   	<!-- Include Header -->
    <?php include '../php/header.php'; ?>
</head>

<body>
    <!-- Include Navigation Bar -->
    <?php include '../php/navHeader.php'; ?>   
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="../img/Home/croatia.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="../img/Home/phoebe.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="../img/Home/sunset.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h1 class="brand-name">Welcome</h1>
                    <hr class="tagline-divider">
                </div>
            </div>
        </div>
		
		<!-- Text box with description of page -->
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">University of Pittsburgh
                        <strong>Undergraduate</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="../img/Home/profile.jpg" alt="">
                    <hr class="visible-xs">
                    <p>Hello! Welcome to my webpage with links to my resume, contact information and snapshots of my life!</p>
                    <p>This webpage is currently under construction as an University of Pittsburgh class project for CS 1520 Programming languages for Web Applications. Thank you to <a href="http://getbootstrap.com/" target="_blank">Bootstrap</a> for the beautiful layout, the Business Casual template! </p>
                    <p>I am an undergraduate senior at the University of Pittsburgh studying Biology and Computer Science with minors in Chemistry and Political Science. I intend to graduate in August 2016 after completion of one last CS upper elective and a general education requirement. </p>
                    <p>I currently am employing the Biological Sciences Department in the Brodsky Lab researching the epithelial sodium channel's (ENaC) regulation through Endoplasmic-reticulum-associated protein degradation (ERAD)! I hope to apply to medical school this term in June.</p>
                </div>
            </div>
        </div>
    	
    	<!-- New Textbox -->
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Explore this
                        <strong>PHP Website</strong>
                    </h2>
                    <hr>
                    <p>This website currently has four pages. A Home, Photography, Resume and Contact</p>
                    <p>Under photography, pictures that I have taken will be on display. The resume tab will lead you to a PDF of my current resume. And finally the contact page will allow you to reach myself by email! Enjoy :)</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
    
	<!-- Include Fotter -->
	<?php include '../php/footer.php'; ?>
	
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</body>
</html>