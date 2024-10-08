<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:driver1.database.windows.net,1433; Database = db", "Driver", "abc@123456789");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "Driver", "pwd" => "abc@123456789", "Database" => "db", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:driver1.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
