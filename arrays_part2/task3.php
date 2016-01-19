<?php
//Initializing array and index (cause why the fuck not?)
$init = array();

/*
 *Making a for loop with index staring with 1 and not greater than 7 (so it is equal to our required array index)
 *Each array's element is a randomly generated value from 0 to 9.
 */
for ($i = 1; $i <= 7; $i++)
{
    $init[$i] = (mt_rand(0, 9));
}

/*
 *Sorting the array in descending order and trim it by two last elements.
 *We'll display it as a string afterwards
 */
rsort($init);
print_r($init);
array_pop($init);
array_pop($init);
echo "<br /><br />".(implode($init));

//Random bullshit
//foreach ($init as $item)
//{
//    if ($item >= 9)
//    {
//        array_unshift($init, $item);
//    }
//    else
//    {
//    //nothing here
//    }
//}
//print_r (arsort($init));
?>

