<?php 
    $mysql = mysqli_connect('localhost', 'root', '', 'test');
    if (mysqli_connect_errno()) {
        die("Ошибка: не удалось установить соединение с базой данных." . $mysql->connect_error);
    }
        else{
            $ids = array_keys($_POST['isdelete']);
            $query = "DELETE FROM `tovar`  WHERE id  IN('";
            $query .= implode("','", $ids);
            $query .= "')";   
            if ($mysql->query($query) != TRUE) {
                die("Ошибка: " . $mysql->error . " (Запрос: " . $query . ")");
            } 
        mysqli_close($mysql);
    }
?>
<?require('main.php');?>