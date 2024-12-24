The solution is to replace the deprecated `mysql_*` functions with either MySQLi or PDO.  Here's an example using MySQLi:

```php
<?php
$servername = "localhost";
$username = "my_user";
$password = "my_password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$conn->close();
?>
```

Remember to install the necessary MySQLi driver if it's not already enabled in your PHP configuration.