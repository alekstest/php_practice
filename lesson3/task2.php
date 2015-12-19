<!DOCTYPE html>
<html>
	<head>
	<?php
	include_once 'task2_1.php';
	$title = 'Page title';
	$description = 'The Meta Description Tag';
	?>
	<title><?php print $title;?></title>
	<?php
	print'<meta name='.'"description" '."content=".'"'.$description.'"';?>/> 
	<meta name="keywords" content=<?php print '"'.$keywords.'"';?>/>
	</head>
	<body>
	</body>
</html>