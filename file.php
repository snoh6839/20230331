<?php
$handle = fopen("./lunch/text.txt", "r");

// while (!feof($handle)) {
//     $line = fgets($handle);
//     echo $line ;
// }


// while (($line = fgets($handle)) !== false) {
//     $trimmed = trim($line);
//     echo $trimmed . "\n";
// }

//trim 없이도 작동 되지만 오버플로우 일어날 수 있음!


fclose($handle);

// $handle = fopen("./lunch/text.txt", "a");

// // fputs($handle, "\n돈까스");



// fclose($handle);
?>