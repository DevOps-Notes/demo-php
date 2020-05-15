<?php
    echo $_SERVER['SERVER_NAME'] . '<br>';

    require("config.php");

    $link = mysql_connect(HOST, USER, PASS);
    if (!$link) {
        die('Could not connect: ' . mysql_error());
    }

    mysql_select_db("mysql");

    $result = mysql_query("select description from help_topic limit 1;");

    while($row = mysql_fetch_array($result)) {
        echo $row['description'];
    }

    mysql_close($link);