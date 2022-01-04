<?php

$x = 1;
$y = 10;

if($x<$y && $x>$y){
    echo "true";
} else{
    echo "false";
}

if($x<$y || $x>$y){
    echo "true";
} else{
    echo "false";
}

if($x<$y xor $x>$y){
    echo "true";
} else{
    echo "false";
}

if(!$x){
    echo "true";
} else{
    echo "false";
}

?>