<html>
    <head>  
		<link href="bootstrap/css/custom.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">		
		<?php 	
		include("templates/header.php");
		include("templates/db.php");
		
		$date=$_POST["input_date"];
		$zone=$_POST["input_zone"];
		$area=$_POST["input_area"];	
		?>               
    </head>
    <body>
        <?php  	
		$sql = "INSERT INTO covid_dashboard (dt, area_1, area_2) VALUES ('$date', '$zone', '$area')";
		echo $sql;
		$result = $conn->query($sql);		
		echo $result;
			?>
    </body>
</html>