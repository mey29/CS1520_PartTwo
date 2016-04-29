<!-- Megan Yates: Resume Page - CS1520 Milestone One -->

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Include Header -->
	<?php include '../php/header.php'; ?>
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
                        <strong>Resume</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <p>Please feel free to save my resume to your local device! Any questions can be answered via email or phone found on the contacts page.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
    
	<!-- Add Resume to page via iframe -->
    <div class="sub">
    	<iframe src="../YatesResume.pdf" scrolling="yes" width="600" height="600" frameborder="0" style=padding-bottom:50px></iframe>
	</div>
	
	<!-- Include Footer -->
    <?php include '../php/footer.php'; ?>
</body>
</html>
