<!-- THIS IS THE HTMLFRAME -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	
	<head>
	
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	  <meta name="robots" content="noindex">
	  <title></title>
	  <link rel="stylesheet" type="text/css" href="">
	  <link rel="alternate" type="application/atom+xml" title="" href="">
	  <link rel="search" type="" title="" href="">
	  
	  
	  <!-- BEGIN ANGULAR.JS CDN LINK -->
	  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-rc.1/angular.min.js"></script>
	  <!-- END ANGULAR.JS CDN LINK -->
	  
	  <!-- BEGIN ANGULAR SCRIPT LINK -->
	  <script src="js/myApp.js" type="text/javascript" charset="utf-8"></script>
	  <!-- END ANGULAR SCRIPT LINK -->
	</head>
	
	<!-- BEGIN THE BODY -->
	<body>
		
		<!-- BEGIN MAIN CONTENT -->
		<div class="container">
		
		<?php 
		
			require(person.php);
	
			$person = new Person('Obed', 29);
	
			echo $person->sentence();
		?>
		
		</div>
		<!-- END MAIN CONTENT -->
		
	</body>
	<!-- END THE BODY -->
</html>