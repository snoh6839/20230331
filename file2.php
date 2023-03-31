<?php
// $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");

// // fputs($myfile, "This is demo text!");


// for ($i = 2; $i <= 9; $i++) {
//     echo $i . "단 입니다.\n";
//     for ($j = 1; $j <= 9; $j++) {
//         echo $i . " X " . $j . " = " . ($i * $j) . "\n";
//     }
//     echo "\n";
// };

// fputs($myfile,

// );

// fclose($myfile);

$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");

for ($i = 2; $i <= 9; $i++) {
    $text = $i . "단 입니다.\n";
    fputs($myfile, $text);

    for ($j = 1; $j <= 9; $j++) {
        $text = $i . " X " . $j . " = " . ($i * $j) . "\n";
        fputs($myfile, $text);
    }
    $text = "\n";
    fputs($myfile, $text);
}

fclose($myfile);

$myfile2 = fopen("newfile2.txt", "a") or die("Unable to open file!");

$text_arr = array();
for ($i = 2; $i <= 9; $i++) {
    $text = $i . "단 입니다.\n";
    $text_arr[] = $text;

    for ($j = 1; $j <= 9; $j++) {
        $text = $i . " X " . $j . " = " . ($i * $j) . "\n";
        $text_arr[] = $text;
    }
    $text_arr[] = "\n";
}

$text = implode("", $text_arr);
fputs($myfile2, $text);

fclose($myfile2);

?>
