<pre>
<?php
$input = file_get_contents('input.txt');
$input = explode(PHP_EOL.PHP_EOL, $input);

$elfs = [];
foreach ($input as $entry) {

    array_push($elfs, array_sum(explode(PHP_EOL, $entry)));
}
// echo(max($elfs)); //Get answer for part 1


arsort($elfs);
var_dump($elfs);
// $one = $elfs[0];
// $two = $elfs[1];
// $three = $elfs[2];

// echo($one + $two + $three);
?>
</pre>