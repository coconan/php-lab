<?php

$connection = mysqli_connect("mysql-test", "root", "root", "bank");

$result = mysqli_query($connection, "select * from accounts");
$count = mysqli_num_rows($result);
echo "count: " . $count . "\n";
while ($row = mysqli_fetch_array($result)) {
    echo $row['id'] . " | " . $row['number'] . " | " . $row['balance'] . "\n";
}
