<html>
    <head>
<title>php test</title>
    </head>
<body0>   
<?php
$date = $_POST["date"];
echo "Ваш запрос: ".$date ."";
echo "<link rel='stylesheet' type='text/css' href='main.css'>";
$link = mysqli_connect( "localhost", "root", "1111", "AaAa");
if ($link == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно");
}
?>
<?php

$array = ['qwe', 'ewq', '123'];

foreach ($array as $i) {
      ?> <br><?php echo $i;
}
?>
</body>
</html>