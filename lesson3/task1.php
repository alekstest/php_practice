<?php
//Subtask a)
echo "Subtask a)<br/><br/>";
$search = 'computer';
$string =  'Assume you wanted to find every file in the current directory and all subdirectories that contained the word computer, regardless of the letter case. To list every file containing the word computer, type the following:<br/> findstr ' . '/s /i / m/ "'."\\"."&lt".$search.'\\&gt" '.'*.*';
echo $string . '<br/><br/>';

//Subtask b)
echo "Subtask b)<br/><br/>";
$string2 = 'Execute commands on files found by the find command: find -iname "MyCProgram.c" -exec md5sum {} \;';
echo $string2 . '<br/><br/>';

//Subtask c)
echo "Subtask c)<br/><br/>";
$file = 'thegeekstuff.txt';
$string3 = "Add line number for all non-empty-lines in a file: " . '$ sed '."'/./=' $file | sed 'N; s/\\n/". strtok("'/'", "/");
echo $string3;
?>