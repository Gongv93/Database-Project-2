<html>
	<head>
		<title>Database</title>
		<style type="text/css"> 
			body{margin:0;padding:0} 
			#body{width:800px; margin:auto} 
			table,th,td
			{
			border:1px solid black;
			}
		</style> 
	</head>
	
	<body>
		<div id="body">
			<?php 
				if(!@mysql_connect("134.74.112.65", "gon14", "vincent")) { 
					echo "<h2>Connection Error.</h2>"; 
					die(); 
				} 
				mysql_select_db("d409"); 
			?>
			<font size="24"><b>MTA DATABASE</b></font>
			
			<br>
			CSC 336 Project 2 By Vincent Gong
			<br>
			<select name="Problem" id="problem">
				<option value="0" selected="selected">Select Problem</option>
				<option value="A.php">Problem A</option>
				<option value="B.php">Problem B</option>
				<option value="C.php">Problem C</option>
				<option value="D.php">Problem D</option>
				<option value="E.php">Problem E</option>
				<option value="F.php">Problem F</option>
			</select>
			<script type="text/javascript">
			 var urlmenu = document.getElementById( 'problem' );
			 urlmenu.onchange = function() {
				  location.assign(  this.options[ this.selectedIndex ].value );
			 };
			</script>
		</div>

		<hr>


		<div id="body">
		<b>E) Tabulate station names, ids and total numbers of control areas in the middle town area, e.g., latitude between 40.750 and 40.760 and longitude between -74.000 and -73.95.</b>
		<br>
		<br>
			<?php
				$strSQL = "SELECT S.stationID, S.stationName, COUNT(controlArea) AS ControlAreas
						   FROM Station S, ControlArea CA, (SELECT stationID
														    FROM Station
														    WHERE latitude > 40.750 AND latitude < 40.760 AND longitude > -74.000 AND longitude < -73.95
														   ) R1
						   WHERE R1.stationID = CA.stationID AND R1.stationID = S.stationID
						   GROUP BY CA.stationID";
				
				$rs = mysql_query($strSQL);
				
				echo "<table>
						<tr><th>Station ID</th><th>Station Name</th><th>Control Areas</th></tr>";
				
				while($row = mysql_fetch_array($rs)) {

				echo "<tr><th>" . $row['stationID'] . "</th><th>" . $row['stationName'] . "</th><th>" . $row['ControlAreas'] . "</th></tr>";

				}
				echo "</table>";
			mysql_close();
			?>		
		</div>
		<br>
		<br>
		<br>
	</body>
</html>