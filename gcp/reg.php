<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration Form</title>
  </head>
  <body>
    <h1>Registration Form</h1> <br><hr>
    <p>Please fill in all fields and click Register.</p> <br>
    <h2>User Information</h2>

    <form action="network.php" method="POST">
      <label for="fname">First Name: </label>
      <input type="text" name="fname" id="fname" required><br><br>

      <label for="lname">Last Name: </label>
      <input type="text" name="lname" id="lname" required><br><br>

      <label for="email">Email: </label>
      <input type="email" name="email" id="email" required><br><br>

      <label for="phone">Phone:</label>
      <input type="tel" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="555-555-5555" required><br><br>

      <h2>Publications</h2>
      <p>Which book would you like information about?</p>
      <select name="book" id="book">
        <option value="Internet and www How to program">Internet and www How to program</option>
        <option value="C++ How to program">C++ How to program</option>
        <option value="Java How to program">Java How to program</option>
        <option value="Visual basics How to program">Visual basics How to program</option>
      </select><br>

      <h2>Operating System</h2>
      <p>Which operating system do you use?</p>

      <input type="radio" name="OperatingSystem"  id="OperatingSystem" value="Windows">
      <label for="Windows">Windows</label>
      <input type="radio" name="OperatingSystem" id="OperatingSystem" value="Mac OS">
      <label for="Mac Os">Mac Os</label>
      <input type="radio" name="OperatingSystem" id="OperatingSystem" value="Linux">
      <label for="Linux">Linux</label>
      <input type="radio" name="OperatingSystem" id="OperatingSystem" value="Other">
      <label for="Other">Other</label>

      <br><br>

      <input type="submit" name="submit" id="submit">
  </body>
</html>
