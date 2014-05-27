<?php
$x = array();
for ($i = 0; $i < 100; $i++) {
	$x[$i] = rand(0,10000);
}

$notSorted = true;
$start = microtime(true);
while ($notSorted) {
	$count = 0;
	for ($i = 1; $i < count($x); $i++) {
		
		if ($x[$i] < $x[$i - 1]) {
			$temp = $x[$i - 1];
			$x[$i - 1] = $x[$i];
			$x[$i] = $temp;
			$count += 1;
		}
	}
	if ($count == 0) {
		$notSorted = false;
	}
}
$end = microtime(true);
$final = $end - $start;
for ($i = 0; $i < count($x); $i++) {
?>
	<h5><?= $x[$i]?></h5><br>
<?php } 	?>
<h5>Final time: <?= $final?></h5>