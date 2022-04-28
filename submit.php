<?php
  if(isset($_POST['submit'])) 
  { 
    $name = $_POST['name'];
    echo "<font color=blue>User Has submitted the form and entered this name : <b> $name </b></font>";
    echo "<br/>";
    echo "<br><font color=Red>You can use the following form again to enter a new name.</font>"; 
  }
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Please Enter Your Name: <input type="text" name="name"><br>
   <input type="submit" name="submit" value="Submit Form"><br>
</form>