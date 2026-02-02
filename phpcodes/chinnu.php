<html>
    <head></head>
    <body>
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "userdb";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Database connection failed");
}

echo "Database Connected Successfully";
?>
    </body>
</html>