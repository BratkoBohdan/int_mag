<?php



$db=mysqli_connect("localhost","root","root","DB_MAG"); 
mysqli_select_db($db,"DB_MAG");


 
//Виводимо файл параметрів з'єднання із сервером MySQL include 'mysql.inc'; echo "<center>";
//if (! mysqli_connect(mysql_host,mysql_user,mysql_password)){ echo "Не можу з'єднатися із сервером MySQL"; exit;
//};
if (!mysqli_select_db($db,"DB_MAG")){
    echo "Не можу з'єднатися із БД"; exit;
}



//Перевіряємо чи коректно введено прізвище
$name_a =$_POST['name_a'];
$prizv_a =$_POST['prizv_a'];
$pass_a =$_POST['pass_a'];
$phone_a =$_POST['phone_a'];



//Додаємо дані про користувача у базу даних if (isset($nik)){
$sql="INSERT into admin (name_a,prizv_a,pass_a,phone_a) VALUES ('$name_a', '$prizv_a','$pass_a','$phone_a')";
mysqli_query($db,$sql);
//Створюємо сесію користувача session_start();
   $_SESSION['name_a']=$name_a;
   $_SESSION['prizv_a']=$prizv_a;
   $_SESSION['pass_a']=$pass_a;
   $_SESSION['phone_a']=$phone_a;
  
   ?> <div>

<p>Дінна успішно введені</p>

<a href="print.php"><button>Переглянути</button></a>
<a href="reg_adm.html"><button>Ввести ще</button></a>

   </div> <?php 
//У  фреймі leftFrame міняємо гіперпосилання "Реєстрація" на "Вихід" echo '<script>';
// echo 'parent.leftFrame.regist.href="exit.php";';
//  echo 'parent.leftFrame.regist.innerText="Вихід";';
// 	 	echo '</script>';

// echo "</center>";
?>
