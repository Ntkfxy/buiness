<?php
if (isset($_GET["CustomerID"])) {
    $strCustomerID = $_GET["CustomerID"];
}
echo "CustomerID" . $strCustomerID;

require 'connect.php';

// sql to delete a record
$sql = "DELETE  FROM customer WHERE CustomerID=:CustomerID ";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':CustomerID', $strCustomerID);
$stmt->execute();

if ($conn->prepare($sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " .  $conn->prepare($sql);
}

$conn->prepare($sql);
