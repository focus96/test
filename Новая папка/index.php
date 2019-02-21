<?php

// $text = 'abc' . PHP_EOL;

// file_put_contents('./test.txt', $text, FILE_APPEND);
// echo file_get_contents('./test.txt');
// var_dump(file('./test.txt'));

$fp = fopen('./test.txt', 'r');

// // for ($i=0; $i < 100 ; $i++) { 
// // 	// fwrite($fp, $i . ' ' . $text);
// // }

// while (false !== ($char = fgetc($fp))) {
//     echo "$char<br>";
// }

// fclose($fp);






// $fp = fopen('./examples.txt', 'w');
// for ($i=0; $i < 100 ; $i++) { 
// 	$operand1 = random_int(0, 100);
// 	$operand2 = random_int(0, 100);

// 	$example = $operand1 . ' + ' . $operand2 . ' = ' . ($operand1 + $operand2);
// 	fwrite($fp, $i+1 . ') ' . $example . PHP_EOL);
// }
// fclose($fp);


// echo nl2br(file_get_contents('./examples.txt'));




// Перейменовать файл.
// rename('./test.txt', 'test2.txt');

// Копирование файла.
// copy('./test2.txt', './test2_backup.txt');

// Размер файла
// echo filesize('./test2.txt');

// Проверить наличие файла.
// var_dump(file_exists('./test2.txt')); 
// var_dump(file_exists('./test2asdsad.txt'));

// Удалить файл.
// unlink('./test2.txt');

// Создать директирию
// mkdir('./newFolder');

// Перейменовать директорию
// rename('./newFolder', './newFolder1');

// Удалить папку
// rmdir('./newFolder1');

// var_dump(scandir('./', SCANDIR_SORT_DESCENDING));

// var_dump(is_file('./test.txt'));
// var_dump(is_dir('./w'));


$fp = fopen('./users.csv', 'r');

while (($data = fgetcsv($fp)) !== FALSE) {
    $num = count($data);
    echo "<p> $num полей в строке: <br /></p>\n";
    var_dump($data);
    for ($c=0; $c < $num; $c++) {
        echo $data[$c] . "<br />\n";
    }
}


