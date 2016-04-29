<!-- Megan Yates: Contact Page - CS1520 Part Two -->

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Include Header -->
	<?php include '../php/header.php'; ?>
	<script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../js/submitForm.js"></script>
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
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.085560124982!2d-79.95485843253876!3d40.44379073639976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8834f22bd95af11f%3A0x52e119b60d23ad0f!2sUniversity+of+Pittsburgh!5e1!3m2!1sen!2sus!4v1461945246002" style="width:600px; height:400px; border:0; display: inline"></iframe>			 
				</div>
				<p>Phone:
					<strong>412.770.8663</strong>
				</p>
				<p>Email:
					<strong><a href="mailto:mey29@pitt.edu">mey29@pitt.edu</a></strong>
				</p>
				<p>Address:
					<strong>3530 Louisa
						<br>Pittsburgh, PA 15213</strong>
				</p>
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
                    <form id="contact" role="form" method="POST">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" id="name" class="form-control" name="Name">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" id="email" class="form-control" name="Email">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label>
                                <input type="tel" id="phone" class="form-control" name="Phone">
                            </div>
                            <div class="clearfix"></div>
                        	<div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" id="message" rows="6" name="Message"></textarea>
                            </div> 
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" onclick="SubmitFormData()" class="btn btn-default">Submit</button>
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

