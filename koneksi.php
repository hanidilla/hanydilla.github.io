
<?php
$db_host = "localhost";
$db_user = "id15797194_admin";
$db_pass = "3&k\x&)H?&REt-Xf";
$db_name = "id15797194_dbakademik";

try {
    //create PDO connection
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}

?>
