<?php include ("connect.php");


?>
<link rel="stylesheet" href="css/contentzakaz.css">
<body>
<div class="container">
  <form action="zapros.php" method="POST">
  <div class="row">
    <div class="col-25">
      <label >Выберите имя</label>
    </div>
    <div class="col-75">
      <input type="text"  name="fname" placeholder="Ваше имя...">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label >Введите телефон</label>
    </div>
    <div class="col-75">
      <input type="text"  name="phone" placeholder="Ваша телефон...">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label  >Введите email</label>
    </div>
    <div class="col-75">
      <input type="text" name="email" placeholder="Ваш почта...">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label >Выберите подуслугу</label>
    </div>
                <div class="col-75">
                  <select name="id_services" id="id_services">
                    <option value="" >--Выбор подуслуги--</option>
                    <?php
                    $query = "SELECT * FROM servicestest";
                    $results = $connect->query($query);
                    while ($row = $results->fetch_assoc()){
                    echo '
                    <option>'.$row["name"].'</option>';
                    }
            ?>
                  </select>
                </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label >Комментарий</label>
    </div>
    <div class="col-75">
      <textarea  name="description" placeholder="Оставьте ваш коментарий..." style="height:100px"></textarea>
    </div>
    <div class="col-95">
    <p>
        <label >Выберите дату: </label>
        <input type="date"  name="date" id="date"/>
    </p>
    </div>
  </div>
  
  <br>
  <div class="row">
    <button name="btn_zakaz">Отправить</button>
  </div>
  </form>
</div>
    
</form>
</body>