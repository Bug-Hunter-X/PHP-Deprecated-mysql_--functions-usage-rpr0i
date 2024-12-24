# PHP Deprecated mysql_* functions
This repository demonstrates a common error in PHP involving the use of deprecated `mysql_*` functions.  These functions are insecure and no longer supported. The `bug.php` file shows the incorrect usage, while `bugSolution.php` provides a secure and updated solution using MySQLi or PDO.

**Problem:** Using deprecated `mysql_*` functions introduces security vulnerabilities and makes the code incompatible with newer PHP versions.

**Solution:** Migrate to either MySQLi or PDO, which offer improved security, performance, and object-oriented features.