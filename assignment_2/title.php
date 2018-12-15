<?php
/**
 * Created by PhpStorm.
 * User: 11914
 * Date: 2018/12/12
 * Time: 19:40
 */

include "BookMySql.php";
$db = new DBConnection();
$db->showBookTitleList();


?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

<form>
    <input type="submit" action="Index.html" value="back"></input>
</form>

</body>
</html>
