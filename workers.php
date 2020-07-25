<?php
 include "config.php";
 $sql = "select * from participant where Products=''";
    $output = mysqli_query($con,$sql) or die("connection failed");
    if (mysqli_num_rows($output) > 0) {
        // output data of each row
        echo "<h1 style='color:white;background-color:blue; padding:10px;'>Employee</h1><table><tr> <th>Name</th></tr>";
        while($row = mysqli_fetch_assoc($output)) {
          echo "<tr><td>" . $row["Name"]. "</td><td><button class='work' data-id='{$row['Name']}'>Assign</button></td>";
        }
      } else {
        echo "0 results";
      }
?>