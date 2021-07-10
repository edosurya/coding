
<?php
include 'main.php';
?>

  <main>
  <div class="row g-5">
    <div class="col-md-8">
      	<section id="p_2">
	        <h2 class="blog-post-title">Problem No. 2</h2>
	        <p class="mb-0"> <strong> Merge 2 sorted arrays</strong> -Use any language as you desire to do this task. Give me a clear instruction on how to run your code. Given 2 arrays of sorted numbers, merge them efficiently, expected O(n). Do not use built-in functions.</p>
	        <p> Example: </p>
	        <p> A = [1, 7, 13, 15] </p>
	        <p> B = [1, 4, 5, 9, 20] </p>
			<p> Result = [1, 1, 4, 5, 7, 9, 13, 15, 20] </p>
	        <div class="p-4 mb-3 bg-light rounded">
	        <strong> Solution: </strong>
	        <pre>
function mergeArrays(&$arr1, &$arr2) {	

	$n1 	= sizeof($arr1);
	$n2 	= sizeof($arr2);
	$arr3[$n1 + $n2] = array();

	$i = 0;
	$j = 0;
	$k = 0;

	while ($i < $n1 && $j < $n2)
	{	
		if ($arr1[$i] < $arr2[$j]) {
			$arr3[$k++] = $arr1[$i++];
		} else {
			$arr3[$k++] = $arr2[$j++];
		}
	}

	while ($i < $n1) {
		$arr3[$k++] = $arr1[$i++];
	}

	while ($j < $n2) {
		$arr3[$k++] = $arr2[$j++];
	}


	return $arr3;
}
	        </pre>
	       	</div>
	        <div class="p-4 mb-3 bg-light rounded">
	          <h5 class="fst-italic">Input</h5>
	          <pre class="mb-0">
$arr1  = array(1, 7, 13, 15);
$arr2  = array(1, 4, 5, 9, 20);
			</pre>
	        </div>
	        <div class="p-4 mb-3 bg-light rounded">
	          <h5 class="fst-italic">Output</h5>
	          <p class="mb-0">
          	
	          	<?php

	          		// input array
					$arr1 		= array(1, 7, 13, 15);
					$arr2 		= array(1, 4, 5, 9, 20);
					
					// Call function
					$result = mergeArrays($arr1, $arr2);

					// output
					foreach ($result as $value) {
					    echo $value, " ";
					}
	          	?>

	          </p>
	        </div>
        </section>

    </div>

<?php
include 'footer.php';

function mergeArrays(&$arr1, &$arr2) {	

	$n1 	= sizeof($arr1);
	$n2 	= sizeof($arr2);
	$arr3[$n1 + $n2] = array();

	$i = 0;
	$j = 0;
	$k = 0;

	while ($i < $n1 && $j < $n2)
	{	
		if ($arr1[$i] < $arr2[$j]) {
			$arr3[$k++] = $arr1[$i++];
		} else {
			$arr3[$k++] = $arr2[$j++];
		}
	}

	while ($i < $n1) {
		$arr3[$k++] = $arr1[$i++];
	}

	while ($j < $n2) {
		$arr3[$k++] = $arr2[$j++];
	}


	return $arr3;
}




