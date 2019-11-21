<style>
  .error {
    color: #FF0000;
  }
</style>

<?php
/*
    $_SERVER — is an array containing information such as headers, paths, and script locations.

    REQUEST_METHOD — An associative array that by default contains the contents of $_GET, $_POST and $_COOKIE.
*/

$nameErr = $name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
  }
}

?>


<form method="post" action="">
  <p>Name: <input type="text" name="name">
    <span class="error"> <?php echo $nameErr; ?> </span>
  </p>

  <input type="submit" name="submit" value="Submit">
</form>

<?php echo "name: " . $name; ?>