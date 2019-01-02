<html>
	<body>
	
	<?php
        echo "<link rel='stylesheet' type='text/css' href='style.css' />";
    ?>
	
	<b>Hello there, great practice! Here is your sentence:</b> <br><br>
	
	<?php 
    	$adj1 = $_POST['adj1'];
    	$adj2 = $_POST['adj2'];
    	$non1 = $_POST['non1'];
    	$non2 = $_POST['non2'];
    	$non3 = $_POST['non3'];
    	$ver1 = $_POST['ver1'];
    	$ver2 = $_POST['ver2'];
    	$num1 = $_POST['num1'];
    	$arr= array($adj1, $adj2, $non1, $non2, $non3, $ver1, $ver2, $num1);
    	
    	shuffle($arr);
    	$comma_separated = implode(" ", $arr);
    	echo $comma_separated;
	?>
	.

	</body>
</html>