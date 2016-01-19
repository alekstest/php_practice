<?php
// Start timer
$start = microtime(TRUE);
// Find out factorial
$factorial = function( $n ) use ( &$factorial ) {
    if( $n === 1 ) {
        return 1;

    }
//    return $factorial( $n - 1 ) * $n;
    //    while ($n>1)
    for ($i=2; $n!=1; $i++)
    {
        $n/=$i;
        //echo "BLA1 $n";
        //		echo "BLA2 $i";
    }
    return $n=$i-1;
};

print $factorial( 720 );
//
// Output execution time for script
$time = microtime(TRUE) - $start;
echo "<br />" . "<br />";
printf('Script are executed %.8F sec.', $time);