<?php
if(isset($_POST['insert_product'])){
$pname = $_POST['productname'];
$price =  $_POST['price'];

$insert = "CALL spInsertProduct(:pname,:price)";
$prep_insert = $con->prepare($insert);
$prep_insert->execute([':pname' =>  $pname,
                        ':price'=>  $price]);


echo "<pre>";
echo print_r($pname,$price);
echo    "</pre>";
}
?>