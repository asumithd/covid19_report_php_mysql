<html>
    <head>  
		<link href="bootstrap/css/custom.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">		
		<?php 	
		include("templates/header.php");
		include("templates/db.php");
		
		$date=$_POST["data_from_date"];
		?>               
    </head>
    <body>
        <?php		
		//$sql = "INSERT INTO covid_dashboard (area_2) = (SELECT area_2 FROM covid_dashboard WHERE date='$date')";
		$sql = "INSERT INTO covid_dashboard (area_1, area_2, dt) SELECT area_1, area_2, ADDDATE(DATE(dt), INTERVAL 1 DAY) FROM covid_dashboard WHERE dt='$date'";
		echo $sql;
		$result = $conn->query($sql);
		echo $result;
        ?>
    </body>
</html>