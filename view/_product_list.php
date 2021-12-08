<?php
include("./db_conn.php");
?>

<div class="container overflow-hidden">
    <div class="row p-2 justify-content-start align-items-start m-1 ">
        <div class="col-md-12 shadow mb-5 bg-body rounded p-4">
            <form>
                <?php
                $show_product = new database();

                $conn = $show_product->get_conn();
                $sql_product_show = "SELECT product_list.product_sku, product_list.product_name, product_list.product_price,
                book.book_weight, disc.disc_size FROM product_list LEFT JOIN book ON product_list.product_id = book.product_id
                LEFT JOIN disc ON product_list.product_id = disc.product_id";
                // if ($conn -> connect_errno) {
                //   echo "Failed to connect to MySQL: " . $conn -> connect_error;
                //   exit();
                // }
                // else {
                //     echo "NICEB";
                // }
                $result =  $conn->query($sql_product_show);
                // echo "Error2: " . $sql_product_show . "<br>" . $conn->error;
                echo "<div class='row  justify-content-start row-cols-2  row-cols-sm-2 row-cols-md-3 row-cols-lg-4 align-items-start'>";
                while ($row = mysqli_fetch_row($result)) {
                    echo "<div class='container'>";
                    // echo "<div class='row row-cols-4 g-1 justify-content-start m-1 '>";
                    echo "<div class='col-12 shadow mb-5 bg-body rounded p-4 overflow-auto'>";
                    echo "<tr>$row[0] </tr><br>"; //this shows the product name
                    echo "<strong>$row[1]</strong><br>";
                    echo "<strong>$row[2] &#36</strong><br>";
                    echo "<strong>$row[3] KG</strong><br>"; 
                    echo "<strong>$row[4] MB</strong><br>";//this shows the product price
                    // echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                echo "</div>";


                $conn->close();

                ?>
            </form>
        </div>
    </div>
</div>