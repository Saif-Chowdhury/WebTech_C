<!DOCTYPE html>
<html>

<head>
  <?php
  $msg = "";
  $validatename = "";
  $validateemail = "";
  $validatefname = "";
  $validatepass = "";
  $validatecpass = "";
  $validateradio = "";
  $gender = "";
  $birthday = "";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_REQUEST["fname"];
    $uname = $_REQUEST["uname"];
    $email = $_REQUEST["email"];
    $pass = $_REQUEST["pass"];
    $cpass = $_REQUEST["cpass"];
    $pattern1 = "'/^[a-zA-Z-.-_' ]*$/'";
    $pattern2 = "'/^[a-zA-Z-.-_' ]*$/'";
    $pattern3 = "'/^[a-zA-Z-.-_' ]*$/'";

    if (empty($uname) || empty($email) || empty($fname) || empty($pass) || empty($cpass)) {
      $msg = "All fields are requied";
    } else if ((strlen($uname) < 5) || (!preg_match($pattern1, $uname)))
    {
      $msg = "User name name should be at least 5 characters and alpha numeric characters, period, dash or underscore";
    } else if ((strlen($pass) < 8) && (strlen($pass) < 8)) {
      $msg = "Password should be contain 8 characters";
    } else if (strpos($email, "@") === false) {
      $msg = "Email address must contain @";
    } else if (!isset($_REQUEST["gender"])) {
      $msg = "Select gender";
    } else if ($pass != $cpass) {
      $msg = "you have to write both password correctly";
    } else if (!isset($_REQUEST["birthday"])) {
      $msg = "you have to select birthday";
    } else {
      echo "Output";
      $validatefname = "Your Name is " . $fname;
      $validateemail = "Your Email is " . $email;
      $validatename = "Your Username is " . $uname;
      $validatepass = "your password is " . $pass;
      $validatecpass = "Confirm password is " . $cpass;
      $gender = "Your Gender is " . $_REQUEST["gender"];
      $birthday = "Your Birthday is " . $_REQUEST["birthday"];
    }
  }

  ?>

  <title>Registration Page</title>
</head>

<body>
  <h1>Registation</h1>
  <?php echo $msg; ?> <br>
  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <table>
      <tr>
        <td><td><h3>
          First Name:
        </td></h3>
        <td>
          <input type="text" name="fname">
        </td>
      </tr>
      <tr>
        <td><td><h3>
          Email:
        </td></h3>
        <td>
          <input type="text" name="email">
        </td>
      </tr>
      <tr>
        <td><td><h3>
          User Name:
        </td></h3>
        <td>
          <input type="text" name="uname">
        </td>
      </tr>
      <tr>
        <td><td><h3>
          Password:
        </td></h3>
        <td>
          <input type="password" name="pass">
        </td>
      </tr>
      <tr>
        <td><td><h3>
          Confirm Password:
        </td></h3>
        <td>
          <input type="password" name="cpass">
        </td>
      </tr>
      <tr>
        <td><td><h3>
          Gender:
        </td></h3>
        <td>
          <input type="radio" id="male" name="gender" value="male"> Male
          <input type="radio" id="female" name="gender" value="female">Female
          <input type="radio" id="other" name="gender" value="other">Other
        </td>
      </tr>
      <tr>
        <td><td><h3>
          Date of Birth:
        </td></h3>
        <td>
          <input type="date" id="birthday" name="birthday">
        </td>
      </tr>
      <tr>
        <td>
          <input type="submit" value="Submit">
          <input type="reset" value="Reset">
        </td>
      </tr>

    </table>
  </form>

  <?php echo $validatefname; ?> <br>
  <?php echo $validateemail; ?> <br>
  <?php echo $validatename; ?> <br>
  <?php echo $validatepass; ?><br>
  <?php echo $validatecpass; ?><br>
  <?php echo $gender; ?><br>
  <?php echo $birthday; ?><br>
</body>

</html>
