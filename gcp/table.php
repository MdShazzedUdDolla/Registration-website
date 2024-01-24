<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Table</title>
  </head>
  <body>
    <table>
      <tr>
      <th>Id</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Books</th>
      <th>OS</th>
      </tr>



    <?php
    $dbServerName = getenv('MYSQL_HOST');
    $dbUserName = getenv('MYSQL_USER');
    $dbPassword = getenv('MYSQL_PASS');
    $dbName = getenv('MYSQL_DB');

  $conn = mysqli.connect(null,$dbUserName, $dbPassword, $dbName, null, $dbServerName);

    $sql = "SELECT * FROM usk;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['id']."</td><td>".$row['fname']."</td><td>".$row['lname']."</td><td>".$row['email']."</td><td>".$row['phone']."</td><td>".$row['book']."</td><td>".$row['OperatingSystem']."</td></td><br>";
      }
      }
    ?>
</table>
  </body>
</html>
