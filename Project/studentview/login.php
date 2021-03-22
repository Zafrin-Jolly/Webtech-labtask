<?php
include('../studentcontrol/logincheck.php');

if(isset($_SESSION['username'])){
header("location:../studentview/pageone.php");
}
?>
<!DOCTYPE html>
<html>
<body>

<h2 align="center">AMERICAN INTERNATIONAL<br>
           UNIVERSITY-BANGLADESH</h2>

           <h6 align="center">---Where leaders are created</h6>
           <h6 align="center">Sign in to your AIUB account</h6>
           
<form align="center" action="" method="post"><br>
    <input type="text" name="username" placeholder="username" ><br><br>
    <input type="password" name="password" placeholder=" password" ><br><br>
    <input name="submit" type="submit" value="LOGIN">
</form>

<br>

<?php echo $error; ?>

</body>
</html>

    