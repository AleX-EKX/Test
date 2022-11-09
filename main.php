<?
require('header.inc')
?>
</div>

<?php
    $mysql = mysqli_connect('localhost','root','','test');
    if (mysqli_connect_errno()) {
        die("Ошибка: не удалось установить соединение с базой данных." . $mysql->connect_error);
    }
    else {
            $query = "select `manufacturer`, `name`, `price`, `Quantity` from `tovar` where tovar.price=tovar.price";             
            $result = mysqli_query($mysql, $query);
            $num_results = mysqli_num_rows($result);
         }
            echo "<p>&nbsp;</p>";
?>
<section class="table">
    <?php
        echo "<form method='post' action='del.php'>";
        $query = "select `id`, `manufacturer`, `name`, `price`, `Quantity` from 
         `tovar` where tovar.price=tovar.price";
        $result = mysqli_query($mysql, $query);
        $num_results = mysqli_num_rows($result);
        echo '<table id="mytab" class="table_sort"><thead><tr><th>✓</th><th>Код</th><th>производитель</th><th>Наименование</th><th>Цена</th><th>Кол-во</th></tr></thead>';
        for ($i = 0; $i < $num_results; $i++) {
            $row = mysqli_fetch_assoc($result);
            echo '<tr>';
            echo '<td>' . "<input type='checkbox' class='checkbox' name='isdelete[" . $row['id'] . "]'>" . '</td>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['manufacturer'] . '</td>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['price'] . '</td>';
            echo '<td>' . $row['Quantity'] . '</td>';
            echo '</tr>';  
        }   
        mysqli_free_result($result);
    ?>  
        </table>
        <div class="itogo">
            Итого:<span title="текст" id="itog"></span>
        </div>

    <form  method='post' action="del.php" >
        <div class="delete_table">
            <input class="cheking" type="submit" name="submit" id="submit"  value="Удалить">
        </div>
    </form>

</section>

<section>
    <form action="create.php" method="post">
        <div class="create-tovar">
            <div class="column">             
                <select class="select" name="manufacturer" >
                        <option selected> Выберите производителя: </option>
                        <option value="1">iPhone</option>
                        <option value="2">Xiaomi</option>
                        <option value="3">Samsung</option>
                    </select>
                <!-- <input type="text" id="validationServer03" placeholder="производитель" required="Заполните поле" name="manufacturer"> -->
            </div>
            <div class="column">
                <select class="select" name="name">
                <option selected> Выберите модель: </option>
                        <option data-id="1" value="iPhone 13 128GB">iPhone 13 128GB</option>
                        <option data-id="1" value="iPhone 14 256GB">iPhone 14 256GB</option>
                        <option data-id="1" value="iPhone 12 64GB">iPhone 12 64GB</option>
                        <option data-id="2" value="Xiaomi">Xiaomi redmi note 10</option>
                        <option data-id="2" value="Xiaomi">Xiaomi redmi note 10 pro</option>
                        <option data-id="2" value="Xiaomi">Poco X3</option>
                        <option data-id="3" value="Samsung">Samsung Galaxy A</option>
                        <option data-id="3" value="Samsung">Samsung Galaxy S</option>
                        <option data-id="3" value="Samsung">Samsung Galaxy Z</option>
                    </select>
                <!-- <input type="text" id="validationServer04" placeholder="Наименование" required="Заполните поле"name="name"> -->
            </div>
            <div class="column">
                <label for="validationServer04">Стоимость</label>
                <input type="text" id="validationServer05" placeholder="Стоимость" required="Заполните поле"name="price">
            </div>
            <div class="column">
                <label for="validationServer04">Количество</label>
                <input type="text" id="validationServer06" placeholder="Количество" required="Заполните поле"name="Quantity">
            </div> 
        </div>
        <input class="cheking" type="submit" name="submit" id="submit" value="Добавить">

    </form>
    <?php
        $file = 'textfile.txt';
        $person = $row['manufacturer'] ."::". $row['name'] ."::". $row['price'] ."::". $row['Quantity']."\n";
        file_put_contents($file, $person, FILE_APPEND | LOCK_EX);
    ?>
</section>


<?
require('footer.inc');
?>
