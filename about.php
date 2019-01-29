<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Makayla Heemstra</title>
	  
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	  
	<link href="css/style-2.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
	 
	  <script>
		  $(document).ready(function(){
			  
			 //Click the h2 of the mobile navigation to toggle
			 //display of the navigation links.
			 $("#navigation-mobile h2").click(function(){
			 	if( $(".mobile-nav-link").css("display") == "block" ) {
   					$("a").filter(".mobile-nav-link").css("display", "none");
					$("#navigation-mobile").css("background-color", "#FFF9F9");
				} else {
   					$("a").filter(".mobile-nav-link").css("display", "block");
					$("#navigation-mobile").css("background-color", "#C6DABF");
			 	}
		
			})
			  
			  
		  })
	  
	  </script>
	  
	  
	  
  	<div class="container">
		
	  <div class="row">
		<div class="col-sm" id="navigation-mobile">
		 <?php 
			include('includes/navigation-mobile.php');
		 ?>
		</div>
	   </div>
	<div class="row" id="about-me-container">
		 <div class="col-md">
		  <h2>About Me</h2>
		 	<img src="images/about-me-picture.png" id="about-me-picture" class="image-container-medium" alt="picture of me">
	  </div>
	  <div class="col-md" id="about-me-desc">
	  	<p>My name is Kayla. I'm from the suburbs of Grand Rapids and currently attending Purdue University. There I'm pursuing two majors in the Computer Graphics Technology department: Web Programming and Design, and Data Visualization. I can create art and I can code in multiple languages. The reason I chose to major in CGT is because the combination of art and programming is exciting. My passion for creative activities influences my goals in life. Other things I enjoy are writing stories and making music.</p><br/>
		  <a href="https://www.linkedin.com/in/makayla-heemstra-b33348157/" target="_blank"><button>LinkedIn</button></a>
	  </div>
	</div>
	  	
	  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>