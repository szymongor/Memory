<?php   
	
$pairsNumber = 32;
$gameBoard = array_fill(0, 2*$pairsNumber, null);
for ($i = 0; $i < $pairsNumber; $i++) {
	do{
		$a = rand(0,20);
		$b = rand(0,20);
		$operation = rand(0,1);
		$result;
		$formula;
		if($operation == 0){
			$result = $a+$b;
			$formula = $a."+".$b;
		}
		if($operation == 1){
			$result = $a*$b;
			$formula = $a."*".$b;
		}
	}
	while(in_array($formula,$gameBoard));
	$gameBoard[2*$i] = $formula;
	$gameBoard[2*$i+1] = $result;
		
}
shuffle($gameBoard);
echo(json_encode($gameBoard));
?>