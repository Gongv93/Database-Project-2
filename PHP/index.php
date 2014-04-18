

<html>
	<head>
		<title>Database</title>
		<style type="text/css"> 
		body{margin:0;padding:0} 
		#body{width:800px; margin:auto} 
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
		<br>		
		Select the problem you want the answer to...
		<br>
		<br>
		A) Find all control areas whose numbers of turnstiles are greater than 15. (7%)
		<br>
		B) List remote unit ids that have more than one control areas. (8%)
		<br>
		C) List station names with at least one control area that has more than 15 turnstiles (SCP tuples). (10%)
		<br>
		D) List station names that Line A (A train) stops in descending order of latitude (from north to south) (10%)
		<br>
		E) Tabulate station names, ids and total numbers of control areas in the middle town area, e.g., latitude between 40.750 and 40.760 and longitude between -74.000 and -73.95 (10%). 
		<br>
		F) Tabulate station names, ids, total numbers of control areas and total numbers of turnstiles in the middle town area, e.g., latitude between 40.750 and 40.760 and longitude between -74.000 and -73.950. (10%)
	<br>
		</div>
	</body>
</html>

