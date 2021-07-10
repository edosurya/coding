
<?php
include 'main.php';
?>

  <main>
  <div class="row g-5">
    <div class="col-md-8">
      <article class="blog-post">
        <h2 class="blog-post-title">READ ME</h2>
        <p class="blog-post-meta">July 10, 2021

        <p>This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.</p>
        <ul>
          <li>First list item</li>
          <li>Second list item with a longer description</li>
          <li>Third list item to close it out</li>
        </ul>
        <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout.</p>
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