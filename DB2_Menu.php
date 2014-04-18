

<html>
	<head>
		<title>Database</title>
		<?php 
            if(!@mysql_connect("134.74.112.65", "gon14", "vincent", "d409")) { 
                echo "<h2>Connection Error.</h2>"; 
                die(); 
            } 
            mysql_select_db("coursedemo"); 
        ?>
	</head>
	<body>
		<?php echo "<p>Hello World</p>" ; ?>  
	</body>
</html>