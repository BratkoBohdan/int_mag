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

//Перевіряємо коректність вводу псевдоніму
// $name=$_POST['name']; if ($name==''){
// echo "Помилка реєстрації - не введено псевдонім<br>"; echo "<a href='index.html'>Спробувати ще раз...</a>"; exit; }
// //Перевіряємо, можливо, такий псевдонім вже зареєстровано
// $sql="SELECT * from user WHERE name='$name'";
// $result=mysqli_query($db,$sql); 
// if (mysqli_num_rows($result)>0){
// echo "Помилка реєстрації - псевдонім вже зареєстровано<br>"; echo "<a href='adduser.html'>Спробувати ще раз...</a>"; exit;
// }

//Перевіряємо чи коректно ім'я
$name =$_POST['name'];
if ($name==''){
echo "Помилка реєстрації - не введено ім'я<br>";
echo "<a href='adduser.html'>Спробувати ще раз...</a>"; exit;
}
//Перевіряємо чи коректно введено прізвище
$prizv =$_POST['prizv'];
$pass =$_POST['pass'];
$misto =$_POST['misto'];
$nom_np =$_POST['nom_np'];
$phone =$_POST['phone'];


//Додаємо дані про користувача у базу даних if (isset($nik)){
$sql="INSERT into user (name,prizv,pass,misto,nom_np,phone) VALUES ('$name', '$prizv','$pass','$misto','$nom_np', '$phone')";
mysqli_query($db,$sql);
//Створюємо сесію користувача session_start();
   $_SESSION['name']=$name;
   $_SESSION['prizv']=$prizv;
   $_SESSION['pass']=$pass;
   $_SESSION['misto']=$misto;
   $_SESSION['nom_np']=$nom_np;
   $_SESSION['phone']=$phone; 
   echo "Користувача $name зареєстровано!";
//У  фреймі leftFrame міняємо гіперпосилання "Реєстрація" на "Вихід" echo '<script>';
echo 'parent.leftFrame.regist.href="exit.php";';
 echo 'parent.leftFrame.regist.innerText="Вихід";';
	 	echo '</script>';

echo "</center>";
?>
