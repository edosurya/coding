
<?php
include 'main.php';
?>

  <main>
  <div class="row g-5">
    <div class="col-md-8">
      	<section id="p_1">
	        <h2 class="blog-post-title">Problem No. 1</h2>
	        <p class="mb-0"> <strong> Maximum diff</strong> -  Use any language as you desire to do this task. Give me a clear instruction on how to run your code. Given an array A of integers larger than 0, find the maximum difference between any element where A[i] < A[j] and i < j.<p>
		    <p>Example: For, A = [4, 2, 1, 5], the answer is 4.</p>
	        <div class="p-4 mb-3 bg-light rounded">
	        <strong> Solution: </strong>
	        <pre>

function maximumDiff(&$arr) {

	$a = 0;

	for ($x = 0; $x < count($arr); $x++) {
		for ($y = 0; $y < $x; $y++) {
			$b = $arr[$y] - $arr[$x];
			if ($a > $b) {
				$a = $b;
			}
		}
	}

	return $a;
}
	        </pre>
	       	</div>
	        <div class="p-4 mb-3 bg-light rounded">
	          <h5 class="fst-italic">Input</h5>
	          <pre class="mb-0">$array = array(4 , 2 , 1 , 5);</pre>
	        </div>
	        <div class="p-4 mb-3 bg-light rounded">
	          <h5 class="fst-italic">Output</h5>
	          <p class="mb-0">

					<?php
					// input array
					$array = array(4 , 2 , 1 , 5 , 4);

					// call function
					$a = maximumDiff($array);

					// output
					echo abs($a);
				?>	          	

	          </p>
	        </div>
        </section>
    </div>

<?php
include 'footer.php';

function maximumDiff(&$arr) {

	$a = 0;

	for ($x = 0; $x < count($arr); $x++) {
		for ($y = 0; $y < $x; $y++) {
			$b = $arr[$y] - $arr[$x];
			if ($a > $b) {
				$a = $b;
			}
		}
	}

	return $a;
}