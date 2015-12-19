<?php
function colorFill($string){
	if (strlen($string)<=3)
	{
		echo strtoupper("Provided data is not acceptable. Strings are the only acceptable values!");
	}  
	
	else
	{
		echo '<span style = color:red>' . substr($string, 0, 1) . '</span>' . substr($string, 1); 
	}
}
colorFill(Google);
?>
