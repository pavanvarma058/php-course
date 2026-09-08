<?php
$names = array('john', 'jack', 'jill');
$numbers = [1, 2, 3, 4];

function inspect($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}
inspect($names);
inspect($numbers);
?>