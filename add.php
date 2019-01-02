<html>
	<body>
	
	<?php
        echo "<link rel='stylesheet' type='text/css' href='style.css' />";
    ?>
    
    <b>Hello there, great practice! Here is your calculation:</b> <br><br>
    

  	You entered <b><?php echo ' '.floatval($_POST['num1']).
    ' '.$_POST['radio'].' '.floatval($_POST['num2'])?></b>. <br><br>
  	
  	The result is <b><?php 
  	$a = $_POST['num1'];
  	$b = $_POST['num2'];
  	$op = $_POST['radio'];
  	$c = eval("return $a $op $b;");
   	echo $c?>.</b>

	</body>
</html>
