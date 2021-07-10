
<?php
include 'main.php';
?>

  <main>
  <div class="row g-5">
    <div class="col-md-8">
      <article class="blog-post">
        <h2 class="blog-post-title">READ ME</h2>
        <p class="blog-post-meta">July 10, 2021
        <p>Just click archives on the right side</p>
      </article>
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