

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
				<option value="index.php" selected="selected">Select Problem</option>
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
		</div>
	</body>
</html>

