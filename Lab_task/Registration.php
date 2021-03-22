<!DOCTYPE html>
<head>
    <title>RegistrationForm</title>
</head>
<body >
    <h1 align='center'>Employee Registration Form</h1>
    <table align='center'>
    <form action="process.php" method="POST">
    <tr>
        <td><label for ="id">Employee ID: </label></td> 
    </tr>
    <tr>
        <td><input type="text" id="id"></td>
        
    </tr>
    <tr>
        <td><label for ="name">Employee Name: </label></td>
    </tr>
    <tr>
        
        <td><input type="text" name="name"></td>
        
    </tr>
    <tr>
        <td><label for="email">Email: </label></td>
    </tr>
    <tr>
        <td><input type="text"  email="email"></td>
        
    </tr>  
    <tr>
    <td>Date of Birth:   
    <br>    
    <input type="date" birthday="birthday"></td>
    </tr> 
    <tr>
        <td><label for ="address">Address:</label></td>
        </tr>
    <tr>
        
        <td><input type="text" address="address"></td>
        
    </tr>
    <tr>
        <td><label for ="state">State: </label></td>
        </tr>
    <tr>
        
        <td><input type="text"  state="state"></td>
        
    </tr>
    <tr>
        <td><label for ="country">Country:</label></td>
        </tr>
    <tr>
        
        <td><input type="text" country="country"></td>
        
    </tr>
    <tr>
        <td><label for ="Phone">Phone:</label></td>
        </tr>
    <tr>
        
        <td><input type="text" phone="phone"></td>
        
    </tr>

    <tr>
    <td><input type="submit" value="SUBMIT">
    
    
    </tr>
    </form>
    </table>
</body>
</html>