<?php
// text.txt
// 김밥
// 샌드위치
// 백반
// 국밥
// 크림우동
// 연어초밥
// 탕수육
// 돈까스 

// 국밥과 크림우동사이에 스테이크 추가

// ---- php
// 1. fopen으로 text.txt열고 (a)
// 배열로 파일 변환해서
// 추가해주고 다시 스트링으로 바꾸고
// fclose로 파일 닫아서 파일 업데이트 하면 될까?

// 2. 배열 안쓰는 법은 없을까?


// $file = fopen('text.txt', 'a');
// $data = file('text.txt', FILE_IGNORE_NEW_LINES);
// $data[] = "스테이크";
// fwrite($file, implode(PHP_EOL, $data));
// fclose($file);


$file = 'text.txt';
$data = file($file, FILE_IGNORE_NEW_LINES);
$position = array_search('크림우동', $data) + 1;
$new_data = '스테이크';
array_splice($data, $position, 0, [$new_data]);
file_put_contents($file, implode(PHP_EOL, $data));

//PHP_EOL
//'End Of Line' 
//file_put_contents() writes data to a file
//FILE_IGNORE_NEW_LINES
//Skip the newline at the end of each array element

?>