<?php
/* It could've been done using the Switch cases.
 * It's probably even better to do it using them.
 * But....meh.
*/   
function doValidation ($email) {
	if (empty($email))
	{
		echo "False";
	}

	else if (is_numeric($email))
	{	 	
		echo "False";
	}

	else if (is_float($email))
	{
		echo "False";
	}
	else if (is_bool($email)) 
	{
		echo "False";
	}
	else if (strlen($email) < 5)
	{
		echo "False";
	}
	else if (strpos($email, "@") == false) 
	{
		echo "False";
	}
	else if (strpos($email, ".") == false) 
	{
		echo "False";
	}	
	else 
	{
		echo "True";
	}
}

//Pass your email value into the function to validate.	
	doValidation('aleksandras@internetdevels.com');

?>