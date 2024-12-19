<?php error_reporting(E_ALL);

$i = 4;

/*$resault = match ($i) {
    1 => 'One',
    2 => 'Two',
    3 => 'Three',
    4 => 'Four',
    5 => 'Five',

};

$resault = match ($i) {
    1, 2, 3 => 'Var < 4',
    4 => 'Var == 4',
    default => 'Var > 4',

};


$grade = 1;
$resault = match (true) {
    ($grade >= 10) => 'execellent',
    ($grade >= 7) => 'good',
    ($grade >= 4) => 'bad',
    default => 'very bad',
};
*/


$grade = 11;
$resault = match (true) {
    ($grade >= 7) && ($grade < 10) => 'good',
    ($grade >= 10) && ($grade < 12) => 'execellent',

    ($grade >= 4) && ($grade < 17) => 'bad',
    default => 'very bad',
};

echo $resault;


?>
