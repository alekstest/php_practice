<?php

//Sub-task a). Even and uneven letters should be filled differently. 

function colorFill($string)
{
	for ($ii=0; $ii<=strlen($string); $ii++)
	{
	
		if (($ii % 2) != 0)
		{
			echo "<span style=color:red;>" . substr($string, $ii, 1). "</span>";
		}
		else if (($ii % 2) == 0)
		{
			echo "<span style=color:blue;>" . substr($string, $ii, 1). "</span>";
		}
		else
		{
			echo "<span style=color:red;>" . substr($string, $ii, 1). "</span>";
		}
	}	
}
colorFill(Ukraine);

//Sub-task b). Fills words with different color by pairs. COULDN'T GET IT WORK!!!

// function colorFill($string)
// {
// 	$divided=explode(' ', $string);
// 	$filled=array();

// 	for ($ii=0; $ii<count($divided); $ii++)
// 	{
// 	$divided[]=$filled[$ii].' '.$filled[$ii+1];	
// 	}
// 	$filled[] = $divided[$ii];

// }
// colorFill('test string');
?>
