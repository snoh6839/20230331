<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");

// fputs($myfile, "This is demo text!");


for ($i = 2; $i <= 9; $i++) {
    echo $i . "단 입니다.\n";
    for ($j = 1; $j <= 9; $j++) {
        echo $i . " X " . $j . " = " . ($i * $j) . "\n";
    }
    echo "\n";
};

fputs($myfile,

);

fclose($myfile);
?>