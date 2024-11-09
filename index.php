<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проверка на траян</title>
</head>
<body>
<?php
echo'<br>';
echo 'Задание 10';
echo'<br>';
$arr=['Коля'=>'52000 рублей', 'Олега'=>'69000 рублей', 'Леша'=>'-5 рублей','Вова' =>'14880 рублей'];
echo $arr['Коля'];
echo'<br>';
echo 'Задание 11';
echo'<br>';
$arr=[1, 2, 3, 4, 5];
$aau=[1,2,3,4,5];
$aar[]=$aau;
var_dump($aau) ;
var_dump($arr);
echo'<br>';
echo 'Задание 12';
echo'<br>';
$arr=['a'=>1, 'b'=>2, 'c'=>3];
echo $arr['b'];
echo'<br>';
echo 'Задание 13';
echo'<br>';
$arr=['a'=>1, 'b'=>2, 'c'=>3];
echo $arr['a']+$arr['b']+$arr['c'];
echo'<br>';
echo 'Задание 14';
echo'<br>';
$arr=[1=>'понедельник', 2=>'вторник', 3=>'среда', 4=>'четверг', 5=>'пятница', 6=>'суббота', 7=>'воскресение'];
echo $arr[4];
echo'<br>';
echo 'Задание 15';
echo'<br>';
$day=3;
$arr=[1=>'понедельник', 2=>'вторник', 3=>'среда', 4=>'четверг', 5=>'пятница', 6=>'суббота', 7=>'воскресение'];
echo $arr[$day];
echo'<br>';
echo 'Задание 16';
echo'<br>';
$x=0;
$arr=['html', 'css', 'js', 'iq','php'];
foreach ($arr as $value){
    echo '<br>';
    var_dump($arr[$x]);
    $x++;
};
echo'<br>';
echo 'Задание 17';
echo'<br>';
$arr=[1, 2, 3, 4, 5];
$result=0;
$x=0;
foreach($arr as $value){
$result=$arr[$x]+$result;
$x++;
}
var_dump($result);
echo'<br>';
echo 'Задание 18';
echo'<br>';
$arr=[1, 2, 3, 4, 5];
$result=0;
$x=0;
foreach($arr as $value){
$result=$arr[$x] * $arr[$x] +$result;
$x++;
}
var_dump($result);
echo'<br>';
echo 'Задание 19';
echo'<br>';
$arr=['green'=>'зеленый','red'=> 'красный','blue'=> 'синий'];
foreach ($arr as $colorru=>$color){
   echo $arr[$colorru];
   echo'-' . $colorru;
echo'<br>';
};
echo'<br>';
echo 'Задание 20';
echo'<br>';
$arr=['Леша'=>'0','Ваня'=> '0,00000000001','Дима'=> '-52'];
foreach ($arr as $colorru=>$color){
   echo $colorru . ' - зарплата ' . $arr[$colorru] . ' долларов';
echo'<br>';
};
echo'<br>';
echo 'Задание 21';
echo'<br>';
$x=0;
$y=0;
$arr=[-52, 52, -69, 69, -1488, 1488];

foreach($arr as $vaulue){
    if($arr[$x]>0){
$y=$arr[$x]+$y;
    }
    $x++;
}
echo $y;
echo'<br>';
echo 'Задание 22';
echo'<br>';
$x=0;
$y=0;
$arr=[-1, 1, -4, 6, -3, 11];

foreach($arr as $vaulue){
    if($arr[$x]>0){
        if($arr[$x]<10){
$y=$arr[$x]+$y;}
    }
    $x++;
}
echo $y;
echo'<br>';
echo 'Задание 23';
echo'<br>';
$x=0;
$arr=[1,2,3,4];
foreach($arr as $value){
    if($x<count($arr)){
    $arr[]=$arr[$x];
    $x++;}
}
var_dump($arr);
echo'<br>';
echo 'Задание 24';
echo'<br>';
$text='2025-12-31';
$arr=explode('-', $text);
$aar=[];
$aar['year']=$arr[0];
$aar['month']=$arr[1];
$aar['day']=$arr[2];
var_dump($aar);
echo'<br>';
echo 'Задание 25';
echo'<br>';
$arr=[1,2,3,4,5];
$x=array_reverse($arr);
var_dump($x);
echo'<br>';
echo 'Задание 26';
echo'<br>';

$arr=[1,2,3,3,4,5];
foreach($arr as $value){
    $x=$value+1;
    if($y<5){
    if($arr[$value]=$arr[$x]){
echo 'Два подряд равных элемента найдены! Это ' . $arr[$x];
    }
    }
}
?>
</body>
</html>