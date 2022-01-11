<?php



// $db=mysqli_connect("localhost","root","root","DB_MAG"); 
// mysqli_select_db($db,"DB_MAG");

// Страница авторизации

// Функция для генерации случайной строки
// function generateCode($length=6) {
//     $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
//     $code = "";
//     $clen = strlen($chars) - 1;
//     while (strlen($code) < $length) {
//             $code .= $chars[mt_rand(0,$clen)];
//     }
//     return $code;
// }

// Соединямся с БД
$db=mysqli_connect("localhost","root","root","DB_MAG"); 
mysqli_select_db($db,"DB_MAG");

if(isset($_POST['submit']))
{
    // Вытаскиваем из БД запись, у которой логин равняеться введенному
    $query = mysqli_query($link,"SELECT id, pass FROM user WHERE user_login='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    // Сравниваем пароли
    if($data['pass'] === md5(md5($_POST['pass'])))
    {
        // Генерируем случайное число и шифруем его
        

        // Записываем в БД новый хеш авторизации и IP
        

        // Ставим куки
        setcookie("id", $data['id'], time()+60*60*24*30, "/");
        

        // Переадресовываем браузер на страницу проверки нашего скрипта
        header("Location: check.php"); exit();
    }
    else
    {
        print "Вы ввели неправильный логин/пароль";
    }
}

?>
