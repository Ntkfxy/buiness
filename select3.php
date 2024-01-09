<?php
    require "connect.php";

    // ลองให้โชว์ข้อมูล customer  
    // น้องมายด์ น้องกิ๊บ น้องจุ๊บแจง
    //$sql = "SELECT * 
       // FROM country
        //WHERE CountryCode LIKE 'A'"; //อ บอกว่าเขียนประโยคหน้าตาเหมือน sql
$sql = "SELECT CustomerID,Name,Countryname,max(OutstandingDebt)
    FROM customer,country
    WHERE  Customer.CountryCode=country.CountryCode 
    AND OutstandingDebt=(SELECT MAX(OutstandingDebt)FROM customer)";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetchAll();
    print_r($result);
?>