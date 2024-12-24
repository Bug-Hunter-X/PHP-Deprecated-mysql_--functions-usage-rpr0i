This code uses the `mysql_*` functions, which are deprecated and no longer supported in newer PHP versions.  Using them can lead to security vulnerabilities and compatibility issues.

```php
$link = mysql_connect("localhost", "my_user", "my_password");
if (!$link) {
die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
```