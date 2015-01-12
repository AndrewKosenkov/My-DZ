<?
header('Content-type: text/html; charset=utf-8');
//Задание 1

$name = 'Андрей';
$age = 21;
echo 'Меня зовут '.$name. ' мне '.$age. ' год.';

unset($name,$age); //удаление переменных

//Задание 2
define("CITY","Нижний Новгород");
var_dump(CITY);
echo CITY; 
//Конастанту изменить не возможно.

//Задание 3
echo "<br>";
$book = array('title' => "Generation П",
              'author' => "Виктор Пелевин",
              'pages' => 348);
echo "Недавно я прочитал книгу " .$book['title']. " , написанную автором " .$book['author'].
      ", я осилил все " .$book['pages']. " страниц, мне она очень понравилась";

//Задание 4
$books = array($book1 = array('title1' => "Generation П",
                              'author1' => "Виктор Пелевин",
                              'pages1' => 348),
              $book2 = array('title2' => "Морской Волк",
                             'author2' => "Джек Лондон",
                             'pages2' => 428));

echo  "<br>Недавно я прочитал книги " .$books[0]['title1']. " и " .$books[1] ['title2'].
        " , написанные соответственно авторами " .$books[0]['author1']. " и " .$books[1]['author2'].
        ", я осилил в сумме " .($books[0]['pages1']+ $books[1]['pages2']). " страниц, не ожидал от себя подобного";

var_dump($books);

?>
