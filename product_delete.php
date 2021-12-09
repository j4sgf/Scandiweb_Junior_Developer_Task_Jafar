<?php
include ('db_conn.php');

// $data['name'] = $_POST['firstName'];
 
// echo json_encode($data);


$db = new database();
$id = $_POST['data_id'];
echo $id;
$conn = $db->get_conn();
$sql_delete = "DELETE FROM product_list WHERE product_list.product_id = 88";

if ($conn->query($sql_delete) === TRUE){
    echo "success";
   }
   else {
    echo "Error1: " . $sql_disc . "<br>" . $conn->error;
   }
$conn->close();
exit;
?>