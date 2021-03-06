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
		<b>F) Tabulate station names, ids, total numbers of control areas and total numbers of turnstiles in the middle town area, e.g., latitude between 40.750 and 40.760 and longitude between -74.000 and -73.950.</b>
		<br>
		<br>
			<?php
				$strSQL = "SELECT S.stationID, S.stationName, COUNT(controlArea) AS ControlAreas,SUM(TurnStiles) AS TurnStiles
						   FROM Station S, ControlArea CA, ( SELECT controlAreaID, COUNT(controlAreaID) AS TurnStiles
														    FROM TurnStiles
														    GROUP BY controlAreaID
													      ) R1
						   WHERE CA.controlAreaID = R1.controlAreaID AND CA.stationID = S.stationID AND latitude > 40.750 AND latitude < 40.760 AND longitude > -74.000 AND longitude < -73.95
						   GROUP BY CA.stationID";
				
				$rs = mysql_query($strSQL);
				
				echo "<table>
						<tr><th>Station ID</th><th>Station Name</th><th>Control Areas</th><th>TurnStiles</th></tr>";
				
				while($row = mysql_fetch_array($rs)) {

				echo "<tr><th>" . $row['stationID'] . "</th><th>" . $row['stationName'] . "</th><th>" . $row['ControlAreas'] . "</th><th>" . $row['TurnStiles'] . "</th></tr>";

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