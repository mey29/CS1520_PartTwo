<!-- Megan Yates: Photography Page - CS1520 Milestone One -->

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- CodePen CSS -->
	<link href="../css/codepen.css" rel="stylesheet">
	
	<!-- Include Header -->
	<?php include '../php/header.php'; ?>
</head>

<body>
    <!-- Include Navigation Bar -->
	<?php include '../php/navHeader.php'; ?>
  	
  	<!-- Introduction to Page -->
  	<div class="container">
    	<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>SnapShots</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <p>Check out some of my photos!</p>
                    <p>Thank you to <a href="http://codepen.io/" target="_blank">CodePen</a> and especially <a href="http://codepen.io/nodws/" target="_blank">@Nodws</a> for the lovely layout (HTML and CSS) and JavaScript that enables the selection of different categories!</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- /.container -->
    
    <!-- Photolayout -->
	<div class="container">
    	<div class="row">
            <div class="box">
                <div class="col-lg-12">
					<div class="filter">
						<a href="#all">ALL</a>
						<a href="#city">CITIES</a>
						<a href="#food">FOOD</a>
						<a href="#flowers">FLOWERS</a>
					</div> 
					
					<!-- Apply use of arrays, variables and interweaving PHP to circle through photos to anchor on page -->		
					<?php
						$class = ['flowers', 'city', 'food']; // Array for css class identifications (lowercase)
						$category = ["Flowers", "City", "Food"]; // Array for path (folders)
					?>	
					<div class="sets">
						<?php
							$count = 1; // Position in loop (9 photos presented total)
							$position = 0; // Position in $class and $category arrays
							while($count < 10){ // Post 9 photos to site with anchor (EXAMPLE: img src = "../img/City/city2.img)
						?>
								<a href="#" class="<?php echo $class[$position];?>" ><img src="../img/<?php echo $category[$position]; ?>/<?php echo $class[$position] . $count; ?>.jpg"></a>
							<?php
								$position++; // Increase position in array
								if($position == 3) // If the position is the over the length of the arrays
									$position = 0; // Set to zero
								$count++; // Increase count
							} // End While Loop
							?>	
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Include Footer -->
    <?php include '../php/footer.php'; ?>  
    
    <!-- CodePen JavaScript -->
    <script src="../js/codepen.js"></script>
    
</body>
</html>
