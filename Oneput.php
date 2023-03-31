<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");

$text = "";
for ($i = 2; $i <= 9; $i++) {
    $text .= $i . "단 입니다.\n";
    for ($j = 1; $j <= 9; $j++) {
        $text .= $i . " X " . $j . " = " . ($i * $j) . "\n";
    }
    $text .= "\n";
}

fputs($myfile, $text);

fclose($myfile);
?>
