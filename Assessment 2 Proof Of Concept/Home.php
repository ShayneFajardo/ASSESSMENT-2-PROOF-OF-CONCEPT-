<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="LOGIN.css">
    <title> STRIMOLO </title>
</head>
<body>
    <h1> WELCOME TO <font color="#fff"> STRIMOLO </font> </h1> 

    <div class="DADJKAPI_container">
        <h3 class="title">don't laugh</h3>
        <div id="jk_container"> 
            // Funny Jokes
        </div>
        <button id="Gen_Jokes">
            Generate
        </button>
    </div>

    <div class="Lo_container">
        <div class="Li_container">
            <h2 class="heading"> Login </h2>
            <form action="Login.php" method="POST">
                <div class="formo">
                    <input type="text" name="EMAIL" placeholder="EMAIL" required>
                </div>
                <div class="formo">
                    <input type="text" name="PASSWORD" placeholder="Password" required>
                </div>
                <input type="submit" name="submit" value="Submit" class="btn_l">
            </form>

            <div class="Si_container">
                <p> Don't have an Account? <a href="SIGNUP.php"> Sign Up </a> </p>
                <a href="#">Forgot Password?</a>
            </div>
        </div>
    </div>
    <script>
        // JAVASCRIPT FOR DAD JOKES
        const jokeEl = document.getElementById('jk_container');
        const get_joke = document.getElementById('Gen_Jokes');

        get_joke.addEventListener('click', generateJoke);

        generateJoke();

        async function generateJoke() {
            const jokeRes = await fetch('https://icanhazdadjoke.com/', {
                headers: {
                    'Accept': 'application/json'
                }
            });
            const joke = await jokeRes.json();
            jokeEl.innerHTML = joke.joke;
        }
    </script>
</body>
</html>