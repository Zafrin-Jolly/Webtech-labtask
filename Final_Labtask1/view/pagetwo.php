<?php
session_start(); 

include('../control/updatecheck.php');


if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

Hii, <h3><?php echo $_SESSION["username"];?></h3><br>
Your Profile Page.
<br><br>
<?php
$radio1=$radio2=$radio3="";
$profession1=$profession2=$profession3="";
$interest1=$interest2=$interest3="";
$firstname=$email=$password=$address=$dob="";
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"student",$_SESSION["username"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {

    
    while($row = $userQuery->fetch_assoc()) {
      $firstname=$row["firstname"];
      $email=$row["email"];
      $password=$row["password"];
      $address=$row["address"];
      $dob=$row["dob"];
      
     
      if(  $row["gender"]=="female" )
      {
           $radio1="checked"; 
      }
      else if($row["gender"]=="male")
      {
           $radio2="checked";
      }
      else
      {$radio3="checked";}

      if($row["profession"]=="Academician" )
      { 
        $profession1="selected";
     }
      else if($row["profession"]=="Student")
      { 
        $profession2="selected";
     }
      else{$profession3="selected";}

      if(  $row["interests"]=="Movie" )
      { 
        $interest1="checked"; 
      }
      else if($row["interests"]=="Travelling")
      {
        $interest2="checked"; 
    }
      else{$interest3="checked";}
   
  } 
}
  else {
    echo "0 results";
  }


?>
<form action='' method='post'>
Firstname : <input type='text' name='firstname' value="<?php echo $firstname; ?>" >
<br> <br>

Email : <input type='text' name='email' value="<?php echo $email; ?>" >
<br><br>
 Gender:
     <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
     <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
     <input type='radio' name='gender' value='other'<?php  $radio3; ?> > Other
    <br><br>
Password: <input type='text' name='password' value="<?php echo $password; ?>" >
<br><br>
Address: <input type='text' name='address' value="<?php echo $address; ?>" > 
<br><br>
Date of Birth: <input type='date' name='dob' value="<?php echo $dob; ?>" > 
<br><br>
Profession:
    <select name="profession" id="profession">
    <option value="Academician" <?php echo $profession1; ?>> Academician</option>
    <option value="Student" <?php echo $profession2; ?>> Student</option>
    <option value="Part_time" <?php echo $profession3; ?>>part time</option>
    </select>
<br><br>
Interests:
    <input type='checkbox' name='interests' value='movie'<?php echo $interest1; ?>>Movie
    <input type='checkbox' name='interests' value='Travelling' <?php echo $interest2; ?> >Travelling
    <input type='checkbox' name='interests' value='Music'<?php echo $interest3; ?> > Music
<br><br>

     <input name='update' type='submit' value='Update'>  

     <?php echo $error; ?>
<br>
<br>
<a href="../view/pageone.php">Back </a>
<br>

<a href="../control/logout.php"> logout</a>

</body>
</html>