<?php 

function fizzbuzz($x){
for($x=1; $x <= 100; $x++)
	if($x % 3 == 0 && $x % 5 == 0 ){
		echo "fizzbuzz <br />";
	} elseif($x % 3 == 0) {
		echo "fizz <br />"; 
	} elseif($x % 5 == 0) {
		echo "buzz <br />";
	} else{
		echo $x . " <br />";
	}
}

echo fizzbuzz(100);

?>