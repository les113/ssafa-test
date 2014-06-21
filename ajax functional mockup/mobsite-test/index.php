<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="initial-scale=1.0, width=device-width"/> <!-- for iphone -->
<title>SSAFA - Wiltshire &amp; Swindon</title>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
<link rel="stylesheet" href="style.css" />

<!-- postcode script -->
<script src="../postcodeselect.js" type="text/javascript"></script>
	
</head>

<body>

<!--- home page -->
<div data-role="page" data-url="index.php"  data-theme="b">

	<div data-role="header">
    </div>

	<div data-role="content">
	
		<?php include('logo.php') ?> 
		
		<div>
			<p>&nbsp;</p>
			<h1>SSAFA - Wiltshire &amp; Swindon</h1>
			<p>Welcome to SSAFA Wiltshire.</p>
			<p>We help and support those who serve in our Armed Forces and those who used to serve, including reserve forces and national servicemen - even if it was only for a single day. We also care for the families and dependents of both.</p>
		</div>

	
        <ul data-role="listview" data-inset="true">
		<li><a href="#Postcodes">Local SSAFA contacts.</a></li>
        </ul>
    </div>
    
    <?php include('footer.php') ?> 

</div>

<!-- Postcode Lookup -->    
<div data-role="page" data-theme="b" id="Postcodes">

	<div data-role="header">
    </div>
	
	<div data-role="content">
		
	<?php include('logo.php') ?> 
	
		<p>Select your postcode to lookup your local contact's address</p>

			<!-- postcode selection form -->
	
	<form>
	<select id="selectpostcode">
	<option id="default" selected>Your Postcode</option>
	</select>
	</form>
	
	<!-- addresses go here -->
	<div id="addresses">		
	</div>
		
    </div>
 
    <?php include('footer.php') ?> 
    
</div>


</body>
</html>

