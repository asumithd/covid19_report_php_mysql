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
		<form action="copy_data.php" method="post">
		<div class="row">
		<label>Copy Data From</label>
		<input for="data_from_date" type="date" id="data_from_date" name="data_from_date">
		</div>
		<?php include("templates/submit_reset_button.php"); ?>    
		</form>
	</div>		
	
	
        <div class="container">

            <div class="row">
			<div class="col-xs-4">
			<table class="table table-bordered table-condensed">
                <thead>  
                <th colspan=4">List of Zones Available</th>
                </thead>
                <thead>
                <th>Locality</th>
				<th>Add</th>
                </thead>         
                <tbody>
                    <?php
					 $sql ="SELECT DISTINCT area_2 FROM covid_dashboard WHERE area_1='OOTY' NOT IN (SELECT area_2 FROM covid_dashboard WHERE dt='$input_date' AND area_1='OOTY') ORDER BY area_2";
					 $result = $conn->query($sql);
                    foreach ($conn->query($sql) as $row) {
                        ?>
                        <tr>                                           
                            <td>    <?php print $row['area_2'] . "\t"; ?></td>
							<td>    <button type="button" class="btn btn-danger">ADD</button></td>
                        </tr>
                        <?php
                    }
                    ?>                         
                </tbody>
            </table>
			</div>
			<div class="col-xs-4">
			<?php
			$sql = "SELECT DISTINCT area_1, area_2 FROM covid_dashboard WHERE area_1='OOTY' AND dt='$previous_date' ORDER BY area_1, area_2";
			$result = $conn->query($sql);
			?>
			<table class="table table-bordered table-condensed">
                <thead>  
                <th colspan=4">Containment Zones on <?php echo $previous_date ?></th>
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
				<div class="col-xs-4">
			<?php
			$sql = "SELECT DISTINCT sl_no,area_1, area_2 FROM covid_dashboard WHERE area_1='OOTY' AND dt='$input_date' ORDER BY area_1, area_2";
			$result = $conn->query($sql);
			?>
			<table class="table table-bordered table-condensed">
                <thead>  
                <th colspan=4">Containment Zones on <?php echo $input_date ?> </th>
                </thead>
                <thead>              
                <th>Area</th>
                <th>Locality</th>
				<th>Remove</th>
                </thead>         
                <tbody>
                    <?php
                    foreach ($conn->query($sql) as $row) {
                        ?>
                        <tr>                           
                            <td>    <?php print $row['area_1'] . "\t"; ?></td>                    
                            <td>    <?php print $row['area_2'] . "\t"; ?></td>
							<td>    <button type="button" class="btn btn-warning">Remove</button></td>
                        </tr>
                        <?php
                    }
                    ?>                         
                </tbody>
            </table>
			</div>
			</div>			
        </div>	
<hr>
                    <div class="container">

            <div class="row">
			<div class="col-xs-4">
			<table class="table table-bordered table-condensed">
                <thead>  
                <th colspan=4">List of Zones Available</th>
                </thead>
                <thead>
                <th>Locality</th>
				<th>Add</th>
                </thead>         
                <tbody>
                    <?php
					 $sql ="SELECT DISTINCT area_2 FROM covid_dashboard WHERE area_1='COONOOR' AND area_2 NOT IN (SELECT area_2 FROM covid_dashboard WHERE dt='$input_date')";					 
					 $result = $conn->query($sql);
                    foreach ($conn->query($sql) as $row) {
                        ?>
                        <tr>                                                                                          
                            <td>    <?php print $row['area_2'] . "\t"; ?></td>
							<td>    <button type="button" class="btn btn-danger">ADD</button></td>
                        </tr>
                        <?php
                    }
                    ?>                         
                </tbody>
            </table>
			</div>
			<div class="col-xs-4">
			<?php
			$sql = "SELECT DISTINCT area_1, area_2 FROM covid_dashboard WHERE area_1='COONOOR' AND dt='$previous_date' ORDER BY area_1, area_2";
			$result = $conn->query($sql);
			?>
			<table class="table table-bordered table-condensed">
                <thead>  
                <th colspan=4">Containment Zones on <?php echo $previous_date ?></th>
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
				<div class="col-xs-4">
			<?php
			$sql = "SELECT DISTINCT area_1, area_2 FROM covid_dashboard WHERE area_1='COONOOR' AND dt='$input_date' ORDER BY area_1, area_2";
			$result = $conn->query($sql);
			?>
			<table class="table table-bordered table-condensed">
                <thead>  
                <th colspan=4">Containment Zones on <?php echo $input_date ?> </th>
                </thead>
                <thead>              
                <th>Area</th>
                <th>Locality</th>
				<th>Remove</th>
                </thead>         
                <tbody>
                    <?php
                    foreach ($conn->query($sql) as $row) {
                        ?>
                        <tr>                           
                            <td>    <?php print $row['area_1'] . "\t"; ?></td>                    
                            <td>    <?php print $row['area_2'] . "\t"; ?></td>
							<td>    <button type="button" class="btn btn-warning">Remove</button></td>
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