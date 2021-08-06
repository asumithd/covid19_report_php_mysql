<html>
    <head>
        <link href="bootstrap/css/custom.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">			
		<?php
		if (!empty($_POST["input_date"])) {
				$input_date=$_POST["input_date"];
		} else {  
			$input_date="2020-01-01";
		}
		?>
    </head>
    <body>
	<?php include("templates/header.php"); ?>
    <?php include("templates/db.php");?>
	<?php $previous_date = date( 'Y-m-d', strtotime( $input_date . ' -1 day' )); ?>

	   	<div class="container">
		<form action="" method="post">
		<div class="row">
		<label>Select Date</label>
		<input for="input_date" type="date" id="input_date" name="input_date">
		</div>
		<?php include("templates/submit_reset_button.php"); ?>    
		</form>
		</div>		
	
	
        <div class="container">
            <div class="row">
			<div class="col-xs-3">
			<?php
			$sql = "SELECT DISTINCT area_1, area_2 FROM covid_dashboard WHERE area_1='COONOOR' AND dt='$input_date' ORDER BY area_1, area_2";
			$result = $conn->query($sql);
			?>
			<table class="table table-bordered table-condensed">
                <thead>  
                <th colspan=3">Containment Zones on <?php echo $input_date ?> in COONOOR</th>
                </thead>
                <thead>              
                <th>Area</th>
                <th>Locality</th>
                </thead>         
                <tbody>
                    <?php
                    foreach ($conn->query($sql) as $row) {
                        ?>
                        <tr>                           
                            <td>    <?php print $row['area_1'] . "\t"; ?></td>                    
                            <td>    <?php print $row['area_2'] . "\t"; ?></td>							
                        </tr>
                        <?php
                    }
                    ?>                         
                </tbody>
            </table>
			</div>
				<div class="col-xs-3">
			<?php
			$sql = "SELECT DISTINCT area_1, area_2 FROM covid_dashboard WHERE area_1='GUDALUR' AND dt='$input_date' ORDER BY area_1, area_2";
			$result = $conn->query($sql);
			?>
			<table class="table table-bordered table-condensed">
                <thead>  
                <th colspan=3">Containment Zones on <?php echo $input_date ?> in GUDALUR</th>
                </thead>
                <thead>              
                <th>Area</th>
                <th>Locality</th>
                </thead>         
                <tbody>
                    <?php
                    foreach ($conn->query($sql) as $row) {
                        ?>
                        <tr>                           
                            <td>    <?php print $row['area_1'] . "\t"; ?></td>                    
                            <td>    <?php print $row['area_2'] . "\t"; ?></td>							
                        </tr>
                        <?php
                    }
                    ?>                         
                </tbody>
            </table>
			</div>
					<div class="col-xs-3">
			<?php
			$sql = "SELECT DISTINCT area_1, area_2 FROM covid_dashboard WHERE area_1='KOTAGIRI' AND dt='$input_date' ORDER BY area_1, area_2";
			$result = $conn->query($sql);
			?>
			<table class="table table-bordered table-condensed">
                <thead>  
                <th colspan=3">Containment Zones on <?php echo $input_date ?> in KOTAGIRI</th>
                </thead>
                <thead>              
                <th>Area</th>
                <th>Locality</th>
                </thead>         
                <tbody>
                    <?php
                    foreach ($conn->query($sql) as $row) {
                        ?>
                        <tr>                           
                            <td>    <?php print $row['area_1'] . "\t"; ?></td>                    
                            <td>    <?php print $row['area_2'] . "\t"; ?></td>							
                        </tr>
                        <?php
                    }
                    ?>                         
                </tbody>
            </table>
			</div>
				<div class="col-xs-3">
			<?php
			$sql = "SELECT DISTINCT area_1, area_2 FROM covid_dashboard WHERE area_1='OOTY' AND dt='$input_date' ORDER BY area_1, area_2";
			$result = $conn->query($sql);
			?>
			<table class="table table-bordered table-condensed">
                <thead>  
                <th colspan=3">Containment Zones on <?php echo $input_date ?> in OOTY</th>
                </thead>
                <thead>              
                <th>Area</th>
                <th>Locality</th>
                </thead>         
                <tbody>
                    <?php
                    foreach ($conn->query($sql) as $row) {
                        ?>
                        <tr>                           
                            <td>    <?php print $row['area_1'] . "\t"; ?></td>                    
                            <td>    <?php print $row['area_2'] . "\t"; ?></td>							
                        </tr>
                        <?php
                    }
                    ?>                         
                </tbody>
            </table>
			</div>
			</div>			
        </div>	
    </body>
</html>