
<?php
include 'connection.php';
include 'main.php';
?>

  <main>
  <div class="row g-5">
    <div class="col-md-8">
      	<section id="p_1">
	        <h2 class="blog-post-title">Problem No. 4</h2>
	        <p class="mb-0"> <strong>  Transaction balance</strong><p>
	        <div class="p-4 mb-3 bg-light rounded">
            <strong> Query SQL: </strong>
	        <pre>
SELECT id, amount, sum(amount) OVER (ORDER BY id) AS total
FROM `transactions`
	        </pre>
	       	</div>
          <strong> Result: </strong>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Amount</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
            <?php 

            $sql = "SELECT id, amount, sum(amount) OVER (ORDER BY id) AS total FROM transactions";
            $result = $host->query($sql);

            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {

            ?>
              <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['amount']?></td>
                <td><?php echo $row['total']?></td>
              </tr>

            <?php
              }
            } else {
              echo "0 results";
            }
            $host->close();

            ?>

            </tbody>
          </table>
        </section>
    </div>

<?php
include 'footer.php';