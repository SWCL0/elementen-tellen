<?php

$regel = array();

$regel = file('steden.txt');

print_r(array_count_values($regel));

?>