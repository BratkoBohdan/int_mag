<?php

echo 'PHP';

$db=mysqli_connect("localhost","root","root","DB_MAG"); 
mysqli_select_db($db,"DB_MAG");


 
//Виводимо файл параметрів з'єднання із сервером MySQL include 'mysql.inc'; echo "<center>";
//if (! mysqli_connect(mysql_host,mysql_user,mysql_password)){ echo "Не можу з'єднатися із сервером MySQL"; exit;
//};
if (!mysqli_select_db($db,"DB_MAG")){
    echo "Не можу з'єднатися із БД"; exit;
}



//Перевіряємо чи коректно введено прізвище
$id =$_POST['id'];


//Додаємо дані про користувача у базу даних if (isset($nik)){
$sql="delete from inf_tov where id ='$id'";
mysqli_query($db,$sql);
   $_SESSION['id']=$id; 
  
//У  фреймі leftFrame міняємо гіперпосилання "Реєстрація" на "Вихід" echo '<script>';
echo 'parent.leftFrame.regist.href="exit.php";';
 echo 'parent.leftFrame.regist.innerText="Вихід";';
	 	echo '</script>';

echo "</center>";
?>
