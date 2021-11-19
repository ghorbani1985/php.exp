<?php
include_once "lib.php";
list($host, $database, $user, $pass) = ["localhost","shop","root",""];

try {
    $db = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $user, $pass);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echoline("Successfully connect to mysql!");
} catch (PDOException $e) {
    //throw $e;
    echoline("PDO Error: Failed to connect: " . $e -> getMessage() . "IN LINE: " .$e-> getLine());
    exit();
}
echo $db -> getAttribute(PDO::ATTR_CONNECTION_STATUS);
if ($db->getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql') {
    echo "Running on mysql; doing something mysql specific here\n";
}
echo $db -> getAttribute(PDO::PARAM_BOOL) .PHP_EOL;
echo $db -> getAttribute(PDO::PARAM_NULL) .PHP_EOL;
#echo $db -> getAttribute(PDO::PARAM_INT) .PHP_EOL;
#echo $db -> getAttribute(PDO::PARAM_STR) .PHP_EOL;
#echo $db -> getAttribute(PDO::PARAM_STR_CHAR) .PHP_EOL;
echo $db -> getAttribute(PDO::FETCH_ASSOC) .PHP_EOL;



$sql = "INSERT INTO customers (FirstName,LastName,Mobile) VALUE (?,?,?)";
$stmt = $db->prepare($sql);
$customers = [
    ["Edwin" , "Ghorbani" , 9939166735],
    ["Navid" , "Ghasemi" , 9112495537],
    ["Nima" , "Moradi" , 99187632187]
];
$db->beginTransaction(); #For Example a Bank Transactions
foreach ($customers as $customers) {
    $stmt->execute($customers);
}
exit;
$db->commit();
