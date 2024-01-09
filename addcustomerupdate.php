<?php
require 'connect.php';

$sql_select = "SELECT * from country order by CountryCode ";
$stmt_s = $conn->prepare($sql_select);
$stmt_s->execute();

?>
<html>

<head>
    <title> update</title>
</head>

<body>
    <h1>Add Customer with update</h1>
    <form action="addcustomerupdate.php" method="POST">

        <input type="text" placeholder="Enter Customer ID" name="customerID">
        <br> <br>
        <input type="text" placeholder="Name" name="Name">
        <br> <br>
        <input type="date" placeholder="Birthdate" name="birthdate">
        <br> <br>
        <input type="email" placeholder="Email" name="email">
        <br> <br>
        <input type="number" placeholder="OutStanding debt" name="outstandingDebt">
        <br> <br>

        <label>Enter CountryCode</label>
        <select name="CountryCode">

            <?php
            while ($cc = $stmt_s->fetch(PDO::FETCH_ASSOC)) :
            ?>

                <option value="<?php echo $cc["CountryCode"];  ?>">
                    <?php echo $cc["CountryName"]; ?>
                </option>
            <?php
            endwhile
            ?>
        </select>
        <br> <br>
        <input type="submit">
    </form>
</body>

</html>

<?php

try {

    if (isset($_POST['customerID']) && isset($_POST['Name'])) :
        //     // echo "<br>" . $_POST['customerID'] . $_POST['Name'] . $_POST['birthdate'] . $_POST['email'] .
        //     //     $_POST['countryCode'] . $_POST['outstandingDebt'];

        require 'connect.php';
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE customer SET Name = :Name, birthdate = :birthdate, email = :email,
        CountryCode = :CountryCode, outstandingDebt = :outstandingDebt WHERE customerID = :customerID";


        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':customerID', $_POST['customerID']);
        $stmt->bindParam(':Name', $_POST['Name']);
        $stmt->bindParam(':birthdate', $_POST['birthdate']);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':CountryCode', $_POST['CountryCode']);
        $stmt->bindParam(':outstandingDebt', $_POST['outstandingDebt']);

        if ($stmt->execute()) :
            $message = 'Suscessfully add update customer';
        else :
            $message = 'Fail to add new customer';
        endif;
        echo $message;

        $conn = null;
    endif;
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>