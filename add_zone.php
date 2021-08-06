<html>
<head>
        <link href="bootstrap/css/custom.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">	
		 
</head>
<body>
<?php include("templates/header.php"); ?>
<?phpinclude("templates/db.php");?>
<div class="container">
	<form action="insert_zone.php" method="POST">
	<div class="form-group">
		<label for="input_date">Select Date:</label>
		<input type="date" class="form-control" id="input_date" name="input_date">
	</div>
		<div class="form-group">
		<label for="input_zone">Select Zone</label>
                                        <select class="form-control" name="input_zone">
                                            <?php include("templates/dropdown_zone.php"); ?> 
                                        </select>
	</div>
	<div class="form-group">
		<label for="input_area">Enter Area:</label>
		<input type="text" class="form-control" id="input_area" name="input_area">
	</div>
		<?php include("templates/submit_reset_button.php"); ?>    
		</form>
		</div>
</body>
</html>
	