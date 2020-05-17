<?php
include('../config/config.php');
if(isset($_POST['insert_customer'])){
$name =    $_POST['name'];
$contact = $_POST['contactno'];
$address = $_POST['address'];
$detail =  $_POST['detail'];

$insert_stmt = "CALL spInsertCustomer(:name,:contact,:address,:detail)";
                
$execute_stmt= $con->prepare($insert_stmt);
$execute_stmt->execute([':name' =>      $name,
                        ':contact'=>    $contact,
                        ':address'=>    $address,
                        ':detail'   =>  $detail
                    
                       ]);

                      
}

?>