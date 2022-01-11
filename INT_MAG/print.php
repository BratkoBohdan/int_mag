<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель адміна</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="print.css">

</head>

<header><div class="menu"> 
        <a href="#" id="activator"><img src="https://bootstraptema.ru/snippets/menu/2016/button/menu.png" alt="" /></a>
        <div class="box" id="box">
        <div class="box_content">
        <div class="menu_box_list">
        <ul>
        <li class="active"><a href="#">Головна</a></li>
        <li><a href="#">Чоловічий одяг</a></li>
        <li><a href="#">Жіночий одяг</a></li>
        <li><a href="#">Дитячий одяг</a></li>
        <li><a href="#">Умови відправки</a></li>
        <div class="clearfix"></div>
        </ul>
        </div>
        <a class="boxclose" id="boxclose"><img src="https://bootstraptema.ru/snippets/menu/2016/button/close.png" alt="" /></a>
        </div> 
        </div>
        </div>
        <div style="width: max; height: 150px;" ></div>
<header>


        </html>





<?php

// echo 'PHP';

$db=mysqli_connect("localhost","root","root","DB_MAG"); 
mysqli_select_db($db,"DB_MAG");


 
//Виводимо файл параметрів з'єднання із сервером MySQL include 'mysql.inc'; echo "<center>";
//if (! mysqli_connect(mysql_host,mysql_user,mysql_password)){ echo "Не можу з'єднатися із сервером MySQL"; exit;
//};
if (!mysqli_select_db($db,"DB_MAG")){
    echo "Не можу з'єднатися із БД"; exit;
}








//Додаємо дані про користувача у базу даних if (isset($nik)){
$sql="SELECT * FROM `inf_tov`";
$res=mysqli_query($db,$sql);
foreach($res as $row)
// require('golovnastor.html');
{?>


    



<body class ="bgs1_1">

<saction class="container-fluid pos ">
    
    <div style="width: max; height: 350px;">
      <div class="container-fluisd">
        <div class="col-md-4 offset-md-4">
          <div class="form-container">
          <div class="text-center">

 <form action="zam.php"  method="post" class = "" >
  <div class="rozm_f">
      
        <img src="<?=$row['foto']?>" alt="" style="width: 300px; height: 400px;">
        <h2> Назва - <?= $row['nazva'] ?></h2> 
        <h3> Розмір - <?= $row['rozm'] ?></h3>
        <h3>Сезонність -<?= $row['sezon'] ?></h3>
        <h3> Стать -  <?= $row['stat'] ?></h3>
        <h3> Ціна - <?= $row['china'] ?> грн</h3> 
        <input type="submit" value="Замовити" class="btn btn-outline-warning btn-sm">
        
    </div>
    </form>
</div>
</div>
</div>

</div>
</div>

</saction>
</body>
<script>
    var $ = jQuery.noConflict();
    $(function() {
    $('#activator').click(function(){
    $('#box').animate({'top':'0px'},500);
    });
    $('#boxclose').click(function(){
    $('#box').animate({'top':'-700px'},500);
    });
    });
   </script> 
    
<?php
}

  
//У  фреймі leftFrame міняємо гіперпосилання "Реєстрація" на "Вихід" echo '<script>';
// echo 'parent.leftFrame.regist.href="exit.php";';
//  echo 'parent.leftFrame.regist.innerText="Вихід";';
// 	 	echo '</script>';

// echo "</center>";
?>