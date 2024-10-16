<?php

$isStudent=1;
var_dump($isStudent, true, $isStudent===true);

$scores=[10,"20", 40.1];
var_dump($scores[0] + $scores[1] + $scores[2]);

$marks=[10,(float)"20.5"];
$total=$marks[0]+$marks[1];
var_dump($marks,$total);
echo "Total score is: $total \n";