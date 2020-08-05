<?php
//phpinfo();
//echo "ky-ky";
//$a = 10;
//$b = 2.23;
//$c = [10, 22, 'ky-ky', 3 => 2.88, 4 => true];
////$c[] = 'qwertyu';
//if (is_string($a)){
//    $a += 5;
//}else $a += 1;
//echo $a;
//print $c;
//print_r($c);
//var_dump ($c);
//echo $c;
//echo $b,"  ",  123,'  ', 2109;
//print $b + $b + $a;
//var_dump(25/7);         // float(3.5714285714286)
//var_dump((int) (25/7)); // int(3)
//var_dump(round(25/7));
//echo (int) ( (0.1+0.7) * 10 );
//$x = 8 - 6.4;// which is equal to 1.6
/////($x);
//$y = 1.6;
//var_dump($x == $y); // is not true


//$expand = 1;
//$either = 2;
//echo <<<AAA
//'Переменные {$expand} также {$either} не разворачиваются'
//AAA;

//var_dump(array(<<<EOD
//foobar!
//EOD
//));


//$array = array(1, 2, 3, 4, 5);
//print_r($array);
//foreach ($array as $i => $value){
//    unset($array[$i]);
//}
////print_r($array);
//$array[] = 6;
//print_r($array);
//
//$array = array_values($array);
//$array[] = 7;
//print_r($array);


//class A {
//    private $A; // Это станет '\0A\0A'
//}
//
//class B extends A {
//    private $A; // Это станет '\0B\0A'
//    public $AA; // Это станет 'AA'
//}
//
//var_dump((array) new B());

//$a = array();
//$a['color'] = 'red';
//$a['taste'] = 'sweet';
//$a['shape'] = 'round';
//$a['name']  = 'apple';
//$a[]        = 4;
//var_dump($a);

//$colors = array('red', 'blue', 'green', 'yellow');
//
//foreach ($colors as $color) {
//    echo "Вам нравится $color?";
//}


//$d = 1;
//$d += $d++ + ++$d;
//var_dump($d);

//$arr['Language'] = 'php';
//$str = " I am learning {$arr['Language']}";
//$final = `dir`;
////$str1 = $final . 'I am learning' . $arr['Language'];
//$final .= $str;
//
////var_dump($str1);
//var_dump($final);



//class Fother {
//    public $daughter1 = 'Ann';
//    public $daughter2 = 'Anastasia';
//    public $son = 'Niki';
//};
//
//$femyli = new Fother;
////echo $femyli;
//foreach($femyli as $elm) {
//    echo $elm/* . ''*/ . '<br>';
//}


//$a =array(1);
//$b = 2;
//$c = 3;
//
//switch (true){
//    case $b == 1:
//        echo 1;
//        break;
//
//    case $b === 2:
//        echo 2;
//        break;
//
//    case $b ===3:
//        echo 3;
//        break;
//
//    default:
//        echo 'default';
//        break;
//}

//===============  FOR
//$a = array(1);
//$b = 2;
//$c = 3;

//for ($i = 0; $i < 10; $i++){
//    echo 2 .  '<br>';
//}

//$i = 0;
//for (; $i < 10; ){
//    echo 2 .  '<br>';
//    $i++;
//}

//for (;;){
//    echo 2 .  '<br>';
//    $i++;
//    if ($i === 10)break;
//}


//===================  WHILE

//$i = 10;
//while ($i < 10){
//    echo 2 . '<br>';
//}

// =================== DO WHILE один раз сработает все равно
//do {
//    echo 'и того: -3' . '<br>';
//    $i++;
//}while($i < 10);



//  =================== ARRAY perebor
//$meshok = [
//    'koshelek' => 750,
//    'bloknot' => 'vajnie zapisi',
//    'chehol' => true,
//    'barsetka' => ['iphone', 'mcbook', ['info', 'files']]
//];

 //dlia zifrovih massivov!!!
//for ($i = 0; $i < count($meshok['barsetka']); $i++){
//    var_dump($meshok['barsetka'][$i]) . '<br>';
//}
//
//foreach($meshok as $key => $item){
//
////    $key .= '!!!';
//    echo '$key -';
//    var_dump($key) . '<br>';
//
////    $item .= '!!!';
//    echo '$item -';
//    var_dump($item) . '<br>';
//}
//var_dump($meshok);
//var_dump($meshok['barsetka']);


$x =10;
$x = $x + 5;
unset($x);
ini_set('display_errors', 0);
var_dump($x);




