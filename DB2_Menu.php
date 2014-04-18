

<html>
	<head>
		<title>Database</title>
	</head>
	<body>
		<?php 
            if(!@mysql_connect("134.74.112.65", "gon14", "vincent")) { 
                echo "<h2>Connection Error.</h2>"; 
                die(); 
            } 
            mysql_select_db("d409"); 
        ?>
		<?php
		$strSQL = "SELECT controlArea
				   FROM ControlArea CA
				   WHERE CA.controlareaID IN
				 ( SELECT controlAreaID 
				   FROM TurnStiles 
				   GROUP BY controlAreaID 
				   HAVING COUNT(controlAreaID) >15
				  )";
		
		$rs = mysql_query($strSQL);
		
		while($row = mysql_fetch_array($rs)) {

		echo $row['controlArea']."<br/>";

		}

	mysql_close();
	?>		
	</body>
</html>

