<?php $actual_link = "$_SERVER[REQUEST_URI]"; ?>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="one.php" class="<?php if($actual_link == '/test/one.php') echo "active"?>">Problem 1</a></li>
            <li><a href="two.php" class="<?php if($actual_link == '/test/two.php') echo "active"?>">Problem 2</a></li>
            <li><a href="three.php" class="<?php if($actual_link == '/test/three.php') echo "active"?>">Problem 3</a></li>
            <li><a href="four.php" class="<?php if($actual_link == '/test/four.php') echo "active"?>">Problem 4</a></li>
            <li><a href="five.php" class="<?php if($actual_link == '/test/five.php') echo "active"?>">Problem 5</a></li>
          </ol>
        </div>

      </div>
    </div>
  </div>

  </main>
    <footer class="pt-5 my-5 text-muted border-top">
    Themes By Bootstrap &copy; 2021
  </footer>
</div>

  </body>
</html>