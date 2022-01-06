<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Argonautes</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">
</head>

<body>
	
	<div class="container">
		
		<header class="item-a items">
			<h1> Les Argonautes </h1>
		</header>

		<div class="item-b items">
			<div class="add-form">
				
				<form action="" method="post">
				 	 <label for="name">Ajouter un.e Argonaute :</label>
				  	<input type="text" id="name" name="name">
					<button type="submit" id="button" class="btn" value="Submit">
						<i class="fas fa-feather-alt plume"></i>
					</button>
				</form>
				
			</div>

			<div class="list">
				<h2>Liste des Argonautes:</h2>
				
			
					<?php 
					$host    = "localhost";
					$user    = "root";
					$pass    = "St0p-Danger";
					$db_name = "argonautes";
					
					//create connection
					mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
					$connection = mysqli_connect($host, $user, $pass, $db_name);
					
					//get results from database
					$result = mysqli_query($connection, "SELECT * FROM list");
					$all_property = array();  //declare an array for saving property
					
					//showing property
					echo '<table class="data-table">
							<tr class="data-heading">';  //initialize table tag
					while ($property = mysqli_fetch_field($result)) {
						echo '<td>' . $property->name . '</td>';  //get field name for header
						$all_property[] = $property->name;  //save those to array
					}
					echo '</tr>'; //end tr tag
					
					//showing all data
					while ($row = mysqli_fetch_array($result)) {
						echo "<tr>";
						foreach ($all_property as $item) {
							echo '<td>' . $row[$item] . '</td>'; //get items using property value
						}
						echo '</tr>';
					}
					echo "</table>";
					?>
					
				

			</div>
		</div>
		
		<footer class="item-c items">
			
			<div class="row">
			  	<div class="column left">
					<p>Participation de <a class="vanina" href="https://vaninadiot.fr">Vanina Diot</a></p>
				</div>
			  	<div class="column right">
					<a href="https://www.wildcodeschool.com"><img class="logo" src="images/w.png" alt="WCS"></a>
				</div>
			</div>

		</footer>
		
	</div>
	
</body>
</html>
