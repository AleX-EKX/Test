<?php
$proiz = $_POST['manufacturer'];
$name =$_POST['name'];
$cena =$_POST['price'];
$kol = $_POST['Quantity'];

$mysql = mysqli_connect('localhost','root','','test');   
        if (mysqli_connect_errno()) {
        die("Ошибка: не удалось установить соединение с базой данных." . $mysql->connect_error);
        }
    $query = "INSERT INTO `tovar` (`manufacturer`, `name`, `price`,`Quantity`) 
    VALUES ("."'"."$proiz"."'".", "."'"."$name"."'".", "."$cena".","."$kol".");";
     
if ($mysql->query($query) != TRUE) {
    die("Ошибка: " . $mysql->error . " (Запрос: " . $query );
} 
if (empty($_POST['manufacturer'])) {
    $result['result'] = 'error';
    $result['error']['manufacturer'] = 'Это поле не заполнено!';
  } else {
    $proiz = $_POST['manufacturer'];
    if (!preg_match("/^[a-zа-яё\s]+$/iu", $proiz)) {
      $result['result'] = 'error';
      $result['error']['manufacturer'] = 'Производитель содержит недопустимые символы!';
    }
  }

if (empty($_POST['name'])) {
    $result['result'] = 'error';
    $result['error']['name'] = 'Это поле не заполнено!';
  } else {
    $name = $_POST['name'];
    if (!preg_match("/^[a-zа-яё\s]+$/iu", $name)) {
      $result['result'] = 'error';
      $result['error']['name'] = 'Имя содержит недопустимые символы!';
    }
  }

  if (empty($_POST['price'])) {
    $result['result'] = 'error';
    $result['error']['price'] = 'Это поле не заполнено!';
  } else {
    $cena = $_POST['price'];
    if (!preg_match("/^([0-9])+$/", $cena)) {
      $result['result'] = 'error';
      $result['error']['price'] = 'Цена содержит недопустимые символы!';
    }
  }

  if (empty($_POST['Quantity'])) {
    $result['result'] = 'error';
    $result['error']['Quantity'] = 'Это поле не заполнено!';
  } else {
    $kol = $_POST['Quantity'];
    if (!preg_match("/^([0-9])+$/", $kol)) {
      $result['result'] = 'error';
      $result['error']['Quantity'] = 'Количество содержит недопустимые символы!';
    }
  }
mysqli_close($mysql);
require('main.php')
?>
