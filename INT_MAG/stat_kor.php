<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель адміна</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="del.css">

</head>

<header>

  <div id="wrapper">
      <div class="overlay"></div>
      
      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
      <ul class="nav sidebar-nav">
      <li class="sidebar-brand">
      <a href="paneladmina.html">
      Головна
      </a>
      </li>
      <li>
      <a href="#">Перегляд</a>
      </li>
      <li>
      <a href="onov.html">Редагування</a>
      </li>
      <li>
      <a href="vivid.html">Додавання</a>
      </li>
      <li>
      <a href="del.html">Видалення</a>
      </li>
     
     </li>
     <li>
     <a href="stat_zam.html">Статистика замовлень</a>
     </li>
     
     <li>
         <a href="stat_kor.html">Статистика користувачів</a>
     </li>
     
      </ul>
      </nav>
     
     
      <div id="page-content-wrapper">
      <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
      <span class="hamb-top"></span>
      <span class="hamb-middle"></span>
      <span class="hamb-bottom"></span>
      </button>
      </div>
      </div>

</header>
<script>
  $(document).ready(function () {
   var trigger = $('.hamburger'),
   overlay = $('.overlay'),
   isClosed = false;
  
   trigger.click(function () {
   hamburger_cross(); 
   });
  
   function hamburger_cross() {
  
   if (isClosed == true) { 
   overlay.hide();
   trigger.removeClass('is-open');
   trigger.addClass('is-closed');
   isClosed = false;
   } else { 
   overlay.show();
   trigger.removeClass('is-closed');
   trigger.addClass('is-open');
   isClosed = true;
   }
   }
   
   $('[data-toggle="offcanvas"]').click(function () {
   $('#wrapper').toggleClass('toggled');
   }); 
  });
  </script>


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
$sql="SELECT * FROM `kilk_kor`";
$res=mysqli_query($db,$sql);
foreach($res as $row)
// require('golovnastor.html');
{?>


    
<h2> Кількість користувачів - <?= $row['kilk_korist'] ?></h2> 
<h2> Кількість авторизацій - <?= $row['kilk_avtorez'] ?></h2> 


    
<?php
}

  

?>