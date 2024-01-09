<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เรียกดูข้อมูลselect111</title>
</head>

<body>

    <?php
    require 'connect.php';


    //ทดสอบเรีรยกดูข้อมูลจากฐานข้อมูล แบบ Loop
    $sql = 'select * From country';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo '<br/>';
    $result = $stmt->fetchAll();
    //print_r($result);

    foreach ($result as $r) {
        print $r['CountryCode'] . '--' . $r['CountryName'] . '<br>';
    }
    ?>
</body>

</html>