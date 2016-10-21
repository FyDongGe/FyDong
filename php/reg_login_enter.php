<?php
/**
 * Created by PhpStorm.
 * User: situ
 * Date: 2016/8/14
 * Time: 15:38
 */

require_once ('util/db.php');

$username = $_GET['username'];
$password = $_GET['password'];

$sql = "select * from reg_login where username='$username' and password='$password'";

// echo $sql;

$user = $db -> rawQuery($sql);

if (empty($user)) {
    echo '登录失败，请<a href="../form/logIndex.html">重试</a>';
} else {
    echo '<script>location.href="../form/sucIndex.html";</script>';
}

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

</body>
</html>
