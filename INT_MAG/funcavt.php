<?php



$db=mysqli_connect("localhost","root","root","DB_MAG"); 
mysqli_select_db($db,"DB_MAG");


$name=$_POST['name']; 
$pass=$_POST['pass'];

if ($name==''){
    echo "Помилка реєстрації - не введено псевдонім<br>"; echo "<a href='index.html'>Спробувати ще раз...</a>"; exit; }
     //Перевіряємо, можливо, такий псевдонім вже зареєстровано
     $sql="SELECT * from user WHERE name='$name'and pass='$pass'";
     $result=mysqli_query($db,$sql);
     if (mysqli_num_rows($result)>0){
     header('Location: print.php');
     } else echo " ви ввели не вірні данні ";




     
    //  $kilk_korist=$_POST['kilk_korist'];
    //  mysqli_query($db,$sql);
    //  $sql="INSERT into kilk_kor (kilk_korist) VALUES ('$kilk_korist')";
    //  $_SESSION['kilk_korist']= $kilk_korist = "1";

   ?>
