<?php 
    $usernameV = $emailV = $passV = $cpassV = "";
    $generalError = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_REQUEST["username"];
        $email = $_REQUEST["email"];
        $password = $_REQUEST["password"];
        

        if(empty($username) || empty($email) || empty($password) ) {
            $generalError = "Please fill up all the fields";
        } else {
            if(!preg_match("/[a-zA-Z0-9._]+/", $username)) {
                $usernameV =" Username can only have alphanumeric characters/period/underscore";
            }
            if(strlen($username) < 5) {
                $usernameV .= "Username must contain atleast 5 characters";
            }

            if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,6})$/i", $email)) {
                $emailV = "Please enter a valid email";
            }

            if(!preg_match("/(?=.*[@#$%^&+=]).*$/", $password)) {
                $passV = "Password atleast contain 1 special character";
            } 
            if(strlen($password) < 6) {
                $passV = "Password must contain atleast 6 characters";
            }
        
            }
        }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Here is your form! </h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="username">Username: </label>
        <input type="text" name="username"> <br>
        <?php echo $usernameV ?><br>
        <label for="email">Email  :</label>
        <input type="text" name="email"><br>
        <?php echo $emailV ?><br>
        <label for="password">Password: </label>
        <input type="password" name="password"><br>
        <?php echo $passV ?><br>
       

        
     <label for="Gender">gender: </label>
        <input type="radio"value="Male" name="Gender">Male <input type="radio" name="Gender">Female <br>
        
        <label for="Hobbies :">Hobbies: </label>
                        <input type="checkbox" value="Movies" name="hobbies[]">Movies
                         <input type="checkbox" name="musics" name="hobbies[]">musics
                         <input type="checkbox"name="mames" name="hobbies[]">singing  <br>


        <label for="Profession">Profession : </label> <br>               
                        <select name="profession">
                        <option>Student</option>
                        <option>part-time</option>
                        <option> Service</option>
        <input type="submit" value="submit">
    </form>
</body>
</html>