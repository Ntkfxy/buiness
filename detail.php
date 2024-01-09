<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if (isset($_GET["CustomerID"])) {
        $strCustomerID = $_GET["CustomerID"];
    }
    echo $strCustomerID;

    require "connect.php";
    $sql = "Select * From customer where CustomerID = ?";
    $params = array($strCustomerID);
    $stmt = $conn->prepare($sql);
    $stmt->execute($params);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
    <table border="1">
        <tr>
            <th> รหัสลูกค้า </th>
            <td>
                <?php echo $result["CustomerID"]; ?>
            </td>
        </tr>
        <tr>
            <th> ชื่อ </th>
            <td>
                <?php echo $result["Name"]; ?>
            </td>
        </tr>
        <tr>
            <th> วันเกิด </th>
            <td>
                <?php echo $result["Birthdate"]; ?>
            </td>
        </tr>
        <tr>
            <th> อีเมล</th>
            <td>
                <?php echo $result["Email"]; ?>
            </td>
        </tr>
        <tr>
            <th> CountryCode </th>
            <td>
                <?php echo $result["CountryCode"]; ?>
            </td>
        </tr>

        <tr>
            <th> ยอดหนี้ </th>
            <td>
                <?php echo $result["OutstandingDebt"]; ?>
            </td>
        </tr>
    </table>

</body>

</html>