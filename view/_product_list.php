<?php
include ("../db_conn.php");
	?>

<div class="container overflow-hidden">
    <div class="row g-4 justify-content-center m-1 ">
      <div class="col-lg-12 shadow p-3 mb-5 bg-body rounded p-4">
        <form>
            <p>
        <?php
        $show_product = new database();
        $conn = $show_product->get_conn();
        $sql_product_show = "SELECT * FROM product_list";
        if ($conn -> connect_errno) {
          echo "Failed to connect to MySQL: " . $conn -> connect_error;
          exit();
        }
        if ($conn->query($sql_product_show) === TRUE) {
         
          echo "New records created successfully";
         }
          
         else {
          echo "Error2: " . $sql_product_insert . "<br>" . $conn->error;
        }
        $conn -> close();

	?>
    </p>
    </form>
    </div>
    </div>
    </div>