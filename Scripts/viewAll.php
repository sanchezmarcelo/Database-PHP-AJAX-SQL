<?php
session_start();

$con = mysqli_connect("xxx.xx.xxx.xxx", "ljohnso8Arden", "webbook", "ljohnso8DBwebbook");
if (! $con) {
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    die('Could not connect: ' . mysqli_error($con));
} else {
    echo "Successful Connection to Database<br>";}

    $index = intval($_GET['index']);
    $sql = "SELECT * FROM ljohnso8DBwebbook.Contacts order by id limit 100 ;  ";
    $result = mysqli_query($con, $sql);
    
    if (mysqli_errno($con) != 0) {
        echo mysqli_errno($con) . ": " . mysqli_error($con) . "\n";
    } else {
        echo "Successful Table Return";
    }
    echo "<table>
    <tr>
    <th>id</th>
    <th>first</th>
    <th>last</th>
    <th>phone</th>
    <th>mobile</th>
    <th>fax</th>
    <th>email</th>
    <th>web</th>
    </tr>";
    
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['first'] . "</td>";
        echo "<td>" . $row['last'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $row['mobile'] . "</td>";
        echo "<td>" . $row['fax'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['web'] . "</td>";
        echo "<td>" . $row['PRIMARY KEY'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($con);
    session_destroy();
?>