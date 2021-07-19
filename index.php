<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:myservertest.database.windows.net,1433; Database = myserver", "rishit", "RA.8168#ra");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "rishit", "pwd" => "RA.8168#ra", "Database" => "myserver", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:myservertest.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

$sql="Select * from Persons;";
$result = $con->query($sql);
$result->setFetchMode(PDO::FETCH_ASSOC);
foreach($result as $row){
    echo $row['FirstName'];
    echo $row['LastName'];
}
?>
