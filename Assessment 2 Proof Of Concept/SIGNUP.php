<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="SIGNUP.css">
    <title> STRIMOLO | Sign Up </title>
</head>
<body>
    <h1> SIGN UP TO <font color="#fff"> STRIMOLO </font> </h1> 

        <div class="REGISTER_container">
            <div class="SIGNUP_container">
                <form action="REGISTER.php" method="POST">
                    <div class="TYPING_container">
                        <input type="text" name="EMAIL" placeholder="Email" required>
                        <br>
                        <input type="text" name="FIRST_name" placeholder="Full Name" required>
                        <br>
                        <input type="text" name="USERNAME" placeholder="Username" required>
                        <br> 
                        <input type="password" name="PASSWORD" placeholder="Password" required>
                        <br> 
                        <input type="password" name="CONPASS" placeholder="Confirm Password" required>
                        <br>
                        <input type="submit" class="btn" name="submit" value="Sign Up">  
                    </div>
                </form>
            </div>
        </div>
</body>
</html>