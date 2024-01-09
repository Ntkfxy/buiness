<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ดูข้อมูลselect11.php</title>
</head>
<body>
    
<?php
require 'connect.php';
//ทดสอบเรียกดูข้อมูลจากฐานข้อมูลแบบ loop
$sql = 'Select * from customer';
$stmt = $conn->prepare($sql);
$stmt->execute();
echo'<br/>';
$result = $stmt->fetchAll();
//print_r($result);

foreach ($result as $r) {
    print $r['CustomerID'] . '--' . $r['Name'] . '--' . '<br>';
}
?>

</body>
</html>