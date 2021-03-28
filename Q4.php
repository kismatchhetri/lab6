<?php
$schools = array("GBS","FEWA","GANDAKI");
sort($schools);

$clength = count($schools);
for($s = 0; $s < $clength; $s++) {
	echo $schools[$s];
	echo "<br>";
}
?>