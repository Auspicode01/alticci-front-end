<?php
  if(!isset($_SESSION)) 
  { 
      session_start(); 
  } 
  include("request.php");
  $_SESSION["response"]="";
?>
<!DOCTYPE html>
<html lang="en">
  <?php 
    include("header.php")
    ?>
  <body>
    <div class="simple-form">
      <form action="<?php
      htmlspecialchars($_SERVER["PHP_SELF"]);
      ?>" method="post">
        <label>Choose a Number:</label><br>
        <input type="number" name="input" placeholder="Numerical value from 0 to 10000"><br>
        <input type="submit" name="submit" value="request">
      </form>
    </div>
    <?php
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        if (empty($_POST["input"]) && $_POST["input"] != 0){
          $_SESSION["response"]="Missing numeric input";
        } else {
          $_SESSION["input"] = $_POST["input"];
          $_SESSION["response"]=CallAPI();
        }
      }
      include("response.php");
    ?>
  </body>
</html>
