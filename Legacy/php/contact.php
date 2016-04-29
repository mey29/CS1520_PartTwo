<!-- Megan Yates: Contact Page - CS1520 Milestone One -->

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Include Header -->
	<?php include '../php/header.php'; ?>
</head>

<body>
	<!-- Include Navigation Bar -->
    <?php include '../php/navHeader.php'; ?>
    
    <!-- Textbox for actions of page -->
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>Megan Yates</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe -->
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6516.502748978972!2d-79.90973173810602!3d40.55093853319224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8834928f30a12da3%3A0x200ff65be2ec9c94!2s52+Mallard+Dr%2C+Pittsburgh%2C+PA+15238!5e1!3m2!1sen!2sus!4v1457896110289" width="600" height="450" frameborder="0" style="border:0" align="left" allowfullscreen></iframe>				
				</div>
                <div class="col-md-4" style="position:relative; padding-left:100px" >
                    <p>Phone:
                        <strong>412.770.8663</strong>
                    </p>
                    <p>Email:
                        <strong><a href="mailto:mey29@pitt.edu">mey29@pitt.edu</a></strong>
                    </p>
                    <p>Address:
                        <strong>52 Mallard Drive
                            <br>Pittsburgh, PA 15238</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        
		<!-- Submit Message -->
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <p class="text-center">Please leave a message if you would like to contact me with any questions or comments! </p>
                    <form role="form" method="POST" action="email.php">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" class="form-control" name="Name">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="Email">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" name="Phone">
                            </div>
                            <div class="clearfix"></div>
                        	<div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" rows="6" name="Message"></textarea>
                            </div> 
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->
    
	<!-- Footer -->
    <?php include '../php/footer.php'; ?>
</body>
</html>

