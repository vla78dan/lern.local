<?php error_reporting(E_ALL & ~E_NOTICE);

function test(&$num)
{
    $num += 10;
}

$num = 20;
test($num);
var_dump($num);





/*$a = 5;
function test($a)
{
    global $a;
    $a += 10;
    var_dump($a);
}

var_dump($a);

test($a);

var_dump($a);






 *function sum($b, $a = 1, $c = 2,)
{
    echo ($a + $b) * $c;

}

;

sum(1, 2);
 * function hello($name = "Guest")
{
   echo "<p>Hello $name!</p>";

};
//$name = '';
hello('Bobb');
my_func();


function my_func()
{
    echo '<p>Hello Bobb</p>';

};
my_func();
 */
