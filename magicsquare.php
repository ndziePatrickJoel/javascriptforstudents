<?php
const OUTPUT_PATH = 'output.txt';



//function forming magic square
function formingMagicSquare($sq)
{
  foreach($sq as $a)
  {
     array_map('print_r', $a); 
  }
}



$fptr = fopen(OUTPUT_PATH, "w");

$stdin = fopen("php://stdin", "r");

$s = array();

for($i = 0; $i < 3; $i++)
{
    fscanf($stdin, "%[^\n]", $s_temp);
    $s[] = array_map('intval', preg_split('/ /', $s_temp, -1, PREG_SPLIT_NO_EMPTY));

}


$result = formingMagicSquare($s);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);