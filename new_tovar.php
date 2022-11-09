
<?
require('header.inc')
?>
</div>
<div class="container">
  <section class="mt-5">
<table class="table table-bordered border-primary">
<?php
    $mysql = mysqli_connect('localhost','root','','test');
    if (mysqli_connect_errno()) {
        die("Ошибка: не удалось установить соединение с базой данных." . $mysql->connect_error);
    }
    else {
        $query = "select * from `tovar`";
        $result = mysqli_query($mysql, $query);
        $num_results = mysqli_num_rows($result);
        }
        echo "<p>&nbsp;</p>";
        ?>
<div class="container">

      </form>
</section>

   <section class="mt-5">
<div class="d-flex justify-content-between align-items-baseline mb-4">    
  </div>
<form action="create.php" method="post">
<div class="container">
    <div class="column">
    <div class="col-md-3 mb-3">
      <label for="validationServer03">Производитель</label>
      <input type="text" class="form-control is-invalid" id="validationServer03" placeholder="производитель" required="Заполните поле" name="manufacturer">
      <div class="invalid-feedback">
        Введите производителя
      </div>
      </div> 
      <div class="column">
    <div class="col-md-3 mb-3">
      <label for="validationServer04">Наименование</label>
      <input type="text" class="form-control is-invalid" id="validationServer04" placeholder="Наименование" required="Заполните поле"name="name">
      <div class="invalid-feedback">
        Введите наименование
      </div> 
      </div> 
      <div class="column">
      <div class="col-md-3 mb-3">
      <label for="validationServer04">Стоимость</label>
      <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Стоимость" required="Заполните поле"name="price">
      <div class="invalid-feedback">
        Введите Стоимость
      </div> 
      </div> 
      <div class="column">
      <div class="col-md-3 mb-3">
      <label for="validationServer04">Кол-во</label>
      <input type="text" class="form-control is-invalid" id="validationServer06" placeholder="Кол-во" required="Заполните поле"name="Quantity">
      <div class="invalid-feedback">
        Введите Кол-во
      </div> 
      </div> 
     <div class="col-12 col-12 mt-12 mt-12">
    </div>
    
</section>
<form action="new_tovar.php" method="post">
<div class="container">
<input class="btn btn-success btn-sm form-control test-5-book" type="submit" name="submit" id="submit" value="Добавить">
</div>  
    </form>
<div class="col-12 col-x1-2 mt-3 mt-x1-0">
    <form action="main.php" >
<div class="container">
<input class="btn btn-success btn-sm form-control test-5-book" type="submit" name="submit" id="submit" value="Назад">
</div> 
    </form>  

<?
require('footer.inc');
?>