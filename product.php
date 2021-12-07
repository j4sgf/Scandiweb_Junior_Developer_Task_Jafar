<?php
include ("db_conn.php");

class product_list {
  public $product_id;
  public $product_sku;
  public $product_name;
  public $product_price;

  function __construct($product_sku, $product_name, $product_price) {
    $this->product_sku = $product_sku;
    $this->product_name = $product_name;
    $this->product_price = $product_price;
    $this->insert_new_data();
    
  }
  function get_product_id() {
    return $this->product_id;
  }
  function get_product_sku() {
    return $this->product_sku;
  }
  function get_product_name() {
    return $this->product_name;
  }
  function get_product_price() {
    return $this->product_price;
  }
  function insert_new_data(){
      $product_db = new database();
      $conn = $product_db->get_conn();
      $sql = "INSERT INTO product_list (product_sku, product_name, product_price) VALUES ('$this->product_sku', '$this->product_name', '$this->product_price')";
      if ($conn -> connect_errno) {
        echo "Failed to connect to MySQL: " . $conn -> connect_error;
        exit();
      }
      if ($conn->query($sql) === TRUE) {
        echo "New records created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

  }
}

class book {
    
}

// $p_sku = $_POST['product_sku'];
// $p_name = $_POST['product_name'];
// $p_price = $_POST['product_price'];
$new_entry = new product_list($_POST['product_sku'], $_POST['product_name'], $_POST['product_price']);
?>