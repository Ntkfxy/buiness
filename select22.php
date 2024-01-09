<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เรียกดูข้อมูล22</title>
</head>

<body>

    <?php
    require 'connect.php';

    //ทดสอบเรียกดูข้อมูลจากฐานข้อมูลแบบ loop
    $sql = 'SELECT * FROM `customer`';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo '<br/>';
    $result = $stmt->fetchAll();
    //print_r($result); 

    foreach ($result as $r) {
        print ' รหัสลูกค้า : ' . $r['CustomerID'] . ' วันเกิด : ' . $r['Birthdate'] . ' ยอดหนี้ : ' . $r['OutstandingDebt'] . '<br>';
    }
    ?>

</body>

</html>