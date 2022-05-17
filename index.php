<?php
echo '<pre>';
// regex taskas - belekas, d - skaiciai, + jei skaiciai tai visi like skaiiai , .* visi simboliai
// pvz. /\.(.*)\./ - visi cimboliai tarp tasku
preg_replace_callback( '/f(.)(\d+)/','ieskok','iuewfj5564hflksjdf'.rand(1000, 9999).'shgdf');
echo '<br>';
function ieskok($m){
    print_r($m);
    echo '<br>';
    return '-'.$m[0].'-';
}

$m = [7,7,5,4567,6,8,43];
$ar = [];
$m3 = array_slice($m,-3); //offset - nuo galo masyvo

 // fn($a) => $a * 7

$sk = rand(100,999);
$f1 = function($r){
    print_r($r * 3);
    return $r * 3;
};
$ar[]=$f1;
$f2 = function($r){
    print_r($r * 5);
    return $r * 5;
};
$ar[]=$f2;
$f3 = function($r){
    print_r($r * 7);
    return $r * 7;
};
$ar[]=$f3;

foreach ($ar as &$fun){

    echo $fun($sk);
    echo '<br>';
    $fun = $fun($sk);
}
echo '<br>';
print_r($ar);

//GENERATORIAI PHP --==-- yield

function gen_one_to_three() {
    for ($i = 1; $i <= 3; $i++) {
        // Note that $i is preserved between yields.
        yield $i;
    }
}

$generator = gen_one_to_three();
foreach ($generator as $value) {
    echo "$value\n";
}
// PHP pointer
$transport = ['foot', 'bike', 'car', 'user'];
echo  current($transport); echo '<br>';
echo  next($transport);echo '<br>';
echo  next($transport);echo '<br>';
echo  prev($transport);echo '<br>';
echo  end($transport);echo '<br>';
echo  reset($transport);echo '<br>';
// --PHP---









