<?php
    include "config.php";
    $sql = "select * from products where Assign='yes'";
    $output = mysqli_query($con,$sql) or die("connection failed");
    if (mysqli_num_rows($output) > 0) {
        // output data of each row
        echo "<table><tr> <th>Products</th> <th>Resources</th> <th>Deadline</th><th>Allocation</th><th>Progress</th></tr>";
        while($row = mysqli_fetch_assoc($output)) {
          $sql = "select * from participant where Products='{$row['Name']}'";
          $result = mysqli_query($con,$sql);
          $done=78;
          $total=90;
          while($row1 = mysqli_fetch_assoc($result)){
                $done = $row1['TotalProducts'];
                $total = $row1['ProductMade'];
          }
          $percent = round(((1.00*$done)/$total)*100);
          echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Resource"]. "</td><td>" . $row["Deadline"]. "</td><td>".$row['Allocation']."</td><td>{$percent}%</td>";
        }
      } else {
        echo "0 results";
      }
      
      mysqli_close($con);

      
?>