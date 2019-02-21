<?php


// $test = 'abc2312321312asdsadasd' . PHP_EOL;
// file_put_contents('./test.txt', $test, FILE_APPEND);


// $fp = fopen('tsadasdasdasest.txt', 'a');
// fwrite($fp, $test);
// fclose($fp);

// echo file_get_contents('./tesadasdst.txt');


// $fp = fopen('test.txt', 'r');

// while(($row = fgets($fp)) !== false) {
// 	echo $row;
// }

// fclose($fp);

// echo "SUCCESS";


// for ($i=1; $i <= 100; $i++) { 
// 	$operand_1 = random_int(1, 100);
// 	$operand_2 = random_int(1, 100);
// 	$result = $operand_1 + $operand_2;

// 	$examplesStr .= $i . ') ' .  $operand_1 . ' + ' . $operand_2 . ' = ' . $result . ';' . PHP_EOL;
// }

// file_put_contents('./examples.txt', $examplesStr);

// echo nl2br($examplesStr);

// var_dump(file('./test.txt'));

// Перейменовывание файла.
// rename('./test.txt', 'testNew.txt');

// copy('./testNew.txt', './sdsdfds/testNew_beckup.txt');

// echo filesize('./testNew.txt');

// var_dump(file_exists('testNew.txt'));
// var_dump(file_exists('testNewsdasdsa.txt'));

// unlink('./testNew.txt');

// mkdir('./new_folder');
// rename('./new_folder', './asasdasd');
// rmdir('./asasdasd');

// var_dump(scandir('./', SCANDIR_SORT_DESCENDING));

// var_dump(is_file('./w'));
// var_dump(is_dir('./examples.txt'));

// $fp = fopen('./users.csv', 'r');

// while (($data = fgetcsv($fp)) !== FALSE) {
//     $num = count($data);
//     echo "<p> $num полей в строке: <br /></p>\n";
//     for ($c=0; $c < $num; $c++) {
//         echo $data[$c] . "<br />\n";
//     }
// }


$xmlstr = <<<XML
<?xml version='1.0' standalone='yes'?>
<movies>
 <movie>
  <title>PHP: Появление Парсера</title>
  <characters>
   <character>
    <name>Ms. Coder</name>
    <actor>Onlivia Actora</actor>
   </character>
   <character>
    <name>Mr. Coder</name>
    <actor>El Act&#211;r</actor>
   </character>
  </characters>
  <plot>
   Таким образом, это язык. Это все равно язык программирования. Или
   это скриптовый язык? Все раскрывается в этом документальном фильме,
   похожем на фильм ужасов.
  </plot>
  <great-lines>
   <line>PHP решает все мои проблемы в вебе</line>
  </great-lines>
  <rating type="thumbs">7</rating>
  <rating type="stars">5</rating>
 </movie>
</movies>
XML;

$simpleXmlObj = new SimpleXMLElement($xmlstr);
// $simpleXmlObj = simplexml_load_string($xmlstr);
// var_dump($simpleXmlObj);
// var_dump($simpleXmlObj->movie[0]->characters);

// foreach ($simpleXmlObj->movie[0]->characters->character as $actor) {
// 	echo $actor->name;
// }

$movie = $simpleXmlObj->addChild('movie');
$movie->addChild('title', 'asdsadsad');
$rating = $movie->addChild('rating', 7);
$rating->addAttribute('type', 'qwerty');

$characters = $movie->addChild('characters');
$character = $characters->addChild('character');
$character->addChild('name', 'sadsadas');
file_put_contents('./asdas.txt', $simpleXmlObj->asXML());


