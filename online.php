<html>
	<body>
	
	<?php
        echo "<link rel='stylesheet' type='text/css' href='style.css' />";
    ?>
    
    Thanks for the purchase <?php echo $_POST["firstname"]." ". $_POST["lastname"]; ?>.<br>
    An email confirmation has been sent to:  <?php echo $_POST["email"]; ?>, <br>
    to serve as a confirmation for this purchase.<br><br>
    	
	<i>Here is your receipt:</i><br>
	Item Purchased: <b><?php echo $_POST["selector"]; ?></b> items.<br>
	Total Quantity: <b><?php echo $_POST["amount"]; ?></b> books.<br>

	</body>
</html>