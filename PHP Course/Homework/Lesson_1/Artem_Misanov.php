<pre>
	<?php
		function countMinimalSteps($arrayOfNumbers) {
			print_r($arrayOfNumbers);
			$stepCounter = 0;
			foreach ($arrayOfNumbers as $key=>$value) {
				echo "[$key], ", isset($arrayOfNumbers[$key + 1]) ? "true" : "false", "! ";
				if (isset($arrayOfNumbers[$key + 1])) {
			
					if ($arrayOfNumbers[$key] >= $arrayOfNumbers[$key + 1]) {

						$steps = $arrayOfNumbers[$key] - $arrayOfNumbers[$key + 1];
						
						$arrayOfNumbers[$key + 1] += $steps + 1;

						$stepCounter += $steps;

						echo "steps: $steps \n";
					}
				}
			}
			echo "stepCounter: $stepCounter \n";
			print_r($arrayOfNumbers);
		}
		$testArray = [-1000, 1,-10,-2,-13,2,1,30,-1];
		countMinimalSteps($testArray);
	?>
</pre>