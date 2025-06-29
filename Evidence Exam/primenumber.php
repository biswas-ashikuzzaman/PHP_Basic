<?php

$num =17;
$isPrime = true;
if ($num <= 1){
    $isPrime = false;
};
for ($i = 2; $i < $num; $i++){
    if ($num % $i ==0){
        $isPrime = false;
        break;

    };
};
if($isPrime){
    echo "$num This is Prime Number";
}
else{
    echo "$num This is not Prime Number";
};

?>