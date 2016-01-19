<?php
//Declaring a function inside a function (sounds funny I know)
function randomize($array)
{
    foreach ($array as $value)
    {
        $value = rand();
    }
    return $value;
}

//Declaring a most complicated array in the world and test it with the function above
$test = array(1, 2, 3, 4, 5,);
echo randomize($test);
?>