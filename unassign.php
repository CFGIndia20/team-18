<?php
    include "config.php";
    $sql = "select * from products where Assign='no'";
    $output = mysqli_query($con,$sql) or die("connection failded");
    if (mysqli_num_rows($output) > 0) {
        // output data of each row
        echo "<table><tr> <th>Products</th> <th>Resources</th> <th>Deadline</th></tr>";
        while($row = mysqli_fetch_assoc($output)) {
          echo "<tr class='assign' data-id='{$row['Name']}_{$row['Resource']}_{$row['Deadline']}'><td>" . $row["Name"]. "</td><td>" . $row["Resource"]. "</td><td>" . $row["Deadline"]. "</td>";
        }
      } else {
        echo "0 results";
      }
      
      mysqli_close($con);

      
?>