
<?php
include ('db_conn.php');



class product_box {
    public function create_box(){
        $show_product = new database();
        $conn = $show_product->get_conn();
        $sql_product_show = "SELECT product_list.product_id, product_list.product_sku, product_list.product_name, product_list.product_price,
        book.book_weight, disc.disc_size, furniture.furniture_height, furniture.furniture_width, furniture.furniture_length FROM product_list LEFT JOIN book ON product_list.product_id = book.product_id
        LEFT JOIN disc ON product_list.product_id = disc.product_id LEFT JOIN furniture ON product_list.product_id = furniture.product_id ORDER BY product_list.product_id ASC";
        // if ($conn -> connect_errno) {
        //   echo "Failed to connect to MySQL: " . $conn -> connect_error;
        //   exit();
        // }
        // else {
        //     echo "NICEB";
        // }
        $result =  $conn->query($sql_product_show);
        // echo "Error2: " . $sql_product_show . "<br>" . $conn->error;
        echo "<div class='row justify-content-start row-cols-2  row-cols-sm-2 row-cols-md-3 row-cols-lg-4 align-items-start' id='allProducts'>";
        while ($row = mysqli_fetch_array($result)) {
    
        
            echo "<div class='container-lg overflow-auto'>";
            echo "<div class='col-12 shadow mb-5 bg-body rounded p-4 overflow-auto justify-content-center align-item-center' style='min-height: 260px;'>";
            echo "<div class='form-check'>";
            echo "<input class='form-check-input delete-checkbox' name='displayboxcheck' id='delete-checkbox' type='checkbox' value='$row[0]'>";
            echo "</div>";
            echo "<p class='text-center'>$row[1] </p>"; //this shows the product SKU
            echo "<p class='text-center'>$row[2] </p>";//this shows the product NAME
            echo "<p class='text-center'>$row[3] &#36</p>";//this shows the product PRICE
            if (!empty($row[4])) {
                echo "<p class='text-center'>Weight: $row[4] KG</p>"; //this shows the book WEIGHT
            }
            if (!empty($row[5])) {
                echo "<p class='text-center'>Size: $row[5] MB</p>";//this shows the disc SIZE
            }
            if (!empty($row[6])) {
                echo "<p class='text-center'>Dimension: $row[6] x $row[7] x $row[8]  </p>";//this shows the disc SIZE
            }
            
            
            
            
            // echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";


        $conn->close();      
    }

    public function product_delete($data_id){
        $id = [];
        $db = new database();
        $id = $data_id;
        $conn = $db->get_conn();
        foreach ($id as $product_id){
            
            $sql_delete = "DELETE FROM product_list WHERE product_list.product_id = $product_id";
        
            if ($conn->query($sql_delete) === TRUE){
        
               }
               else {
                echo "Error1: " . $sql_delete . "<br>" . $conn->error;
               }
        }
        
        $conn->close();
        exit; 
    }
}

?>