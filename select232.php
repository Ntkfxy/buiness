<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Natthakan</title>
</head>

<body>

    <?php
    require 'connect.php';

    $sql = 'SELECT * FROM `customer`';
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // while ($result = $stmt -> fetch(PDO::FETCH_ASSOC)){
    //     echo"<br>" . " รหัสลูกค้าของฉันแบบที่ 1 :" . $result["CustomerID"] .
    //     " วันเกิด : " . $result["Birthdate"] .
    //     "ยอดหนี้ :" . $result["OutstandingDebt"] .
    // }

    while ($result = $stmt->fetch(PDo::FETCH_ASSOC)) {
        echo " รหัสลูกค้า : " . $result[0] .
            " วันเกิด : " .  $result[2] .
            "ยอดหนี้ :" . $result[5];
    }

    ?>
</body>

</html>