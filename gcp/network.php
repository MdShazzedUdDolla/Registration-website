<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$book = $_POST['book'];
$OperatingSystem = $_POST['OperatingSystem'];



  $dbServerName = getenv('MYSQL_HOST');
  $dbUserName = getenv('MYSQL_USER');
  $dbPassword = getenv('MYSQL_PASS');
  $dbName = getenv('MYSQL_DB');

$conn = mysqli.connect(null,$dbUserName, $dbPassword, $dbName, null, $dbServerName);


  $stmt = $conn->prepare("Insert into usk(fname, lname, email, phone, book, OperatingSystem) values(?,?,?,?,?,?)");
  $stmt->bind_param("ssssss",$fname,$lname,$email,$phone,$book,$OperatingSystem);
  $stmt->execute();

  echo "Hi " .$fname. "Thank you for completing the survey. You have been added to the Internet and WWW How to Program mailing list.";
  echo "<h3>The following information has been saved in our database:</h3> <br>";
  echo "Name: ".$fname." " .$lname. " <br>";
  echo "Email: " .$email. "<br>";
  echo "Phone: " .$phone. "<br>";
  echo "OS: " .$OperatingSystem. "<br>";
  echo "<h3>This is only a sample form. You have not been added to a mailing list.</h3>";
  $stmt-> close();
  $conn-> close();

?>
