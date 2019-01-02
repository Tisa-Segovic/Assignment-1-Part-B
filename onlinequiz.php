<html>
	<body>

    <?php
        echo "<link rel='stylesheet' type='text/css' href='style.css' />";
    ?>
    
    <b>Hello there, great practice! Here are your results:</b> <br><br>
    
	Your answers are the following:<br>
	<b><?php echo $_POST["radio1"]; ?></b><br>
	<b><?php echo $_POST["radio2"]; ?></b><br>
	<b><?php echo $_POST["radio3"]; ?></b><br>
	<b><?php echo $_POST["radio4"]; ?></b><br>
    
    </body>
</html>