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

    $sql = 'SELECT *
    FROM `customer`,country 
    WHERE customer.CountryCode=country.CountryCode';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    ?>

    <table border="1" width=900 hight=100>
        <tr>
            <th> รหัสลูกค้า </th>
            <th> ชื่อ </th>
            <th> อีเมล </th>
            <th> วันเกิด </th>
            <th> ประเทศ </th>
            <th> ยอดหนี้ </th>
        </tr>

        <?php
        while ($result = $stmt->fetch(PDo::FETCH_ASSOC)) {
        ?>

            <tr>
                <td>
                    <?php echo $result['CustomerID']; ?>
                </td>

                <td>
                    <?php echo $result['Name']; ?>
                </td>

                <td>
                    <?php echo $result['Birthdate']; ?>
                </td>
                <td>
                    <?php echo $result['Email']; ?>
                </td>
                <td>
                    <?php echo $result['CountryName']; ?>
                </td>
                <td>
                    <?php echo $result['OutstandingDebt']; ?>
                </td>

            </tr>
        <?php
        }
        ?>

    </table>


</body>

</html>