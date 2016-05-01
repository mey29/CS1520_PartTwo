<!-- Megan Yates: Code Page - CS1520 Part Two -->

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Include Header -->
	<?php include '../php/header.php'; ?>
	
	<!-- Accordion CSS -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
</head>

<body>
	<!-- Include Navigation Bar -->
	<?php include '../php/navHeader.php'; ?>
	
	<!-- Introduce the title of the page and actions -->
    <div class="container"> 
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Megan Yates
                        <strong>Coding Examples</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <p>Please check out some of my coding examples below!</p>
                </div>
                <div id="accordion">
					<h3> GitHub Account </h3>
					<div>
						<h3> Check out my GitHub </h3>
						<p><a href="https://github.com/mey29">mey29</a> </p>
						<p> Class work </p>
						<ul>
							<li>CS 1520 </li>
							<li>CS 1699 </li>
							<li>Capstone </li>
						</ul>
					</div>
					<h3>University of Pittsburgh School of Pharmacy<h3>
					<div>
						<p style="text-align:center; font-family: Arial, serif; font-weight: normal; font-size: 12px; font-variant: normal;">Our capstone project was to devise a kiosk system that could be utilized by any range of pharmacies to allow patients or customers more efficiency to acquire their medications. Lines at the pharmacy can occasionally be lengthy, inversely increasing customer time within the store while decreasing customer satisfaction. 
						Not only would a kiosk station streamline the process of dropping off or picking up medications, it would also free the pharmacist to either answer questions or fill out orders. Having a pharmacist free would be critical to a pharmacy, giving patients an alternate route to have questions answered about medications and 
						prescriptions rather than traveling to a clinic or doctor’s office. Technicians would be able to receive real time data and fill orders arriving via the kiosk station. Dr. Patel, a faculty member at the University of Pittsburgh School of Pharmacy, proposed the project. The end product was the joint collaboration between 
						Eric Chou, Fabian Pisztora and myself. The final project was shifted by two major components during the semester: a change from a graphic user interface to a web application and the more specific implementation of a University of Pittsburgh pharmacy site rather than generic software for any pharmacy to implement.</p>
						<img src="../img/Kiosk/kiosk1.png">
						<img src="../img/Kiosk/kiosk2.png">
						<img src="../img/Kiosk/kiosk3.png">
						<img src="../img/Kiosk/kiosk4.png">					
					</div>
				</div>
            </div>
        </div>
    </div>
    <!-- /.container -->

	<!-- Include Footer -->
    <?php include '../php/footer.php'; ?>
    
	<!-- Include JS and jQuery for accordion function -->
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="../js/accordion.js"></script>
</body>
</html>
