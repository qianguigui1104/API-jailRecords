<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Search</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <th>ID</th>
        <th>Last Name</th>
        <th>First Name</th>
      </tr>

    <?php
    require "mysqli_connect.php";
    $lastName = $_POST["last_name"];
    $query = "select * from id where last_name = '$lastName'";
    $result = $dbc->query($query);



    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>". $row['id']. "</td>";
      echo "<td>". $row['last_name']. "</td>";
      echo "<td>". $row['first_name']. "</td>";
    }
    ?>

    </table>
  </body>
</html>
