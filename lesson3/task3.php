<?php
$url = 'http://php.net/manual-lookup.php?pattern=test&scope=quickref#quickref_functions';
$url_components = (parse_url($url));
echo '<pre>';
foreach ($url_components as $key => $val) {
    print "$key: $val\n";
}
echo '<pre>';
?>
