<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5e359c3c35.js"></script>
    <link rel="stylesheet" href="HP.css">     <!-- For the Header where it is the navigation bar -->
    <title> STRIMOLO | Profile </title>
</head>
<body>

        <!-- Creating the Navigation Bar -->
        <div class="navbar">
            <div class="capt">
                <a href="main.php"> strimolo </a>
            </div>
            <div class="navo_righto">
                <ul> 
                    <li class="NR_li">
                        <img src="catwink.webp" alt="prof_img">
                    </li>
                    <li class="NR_li Smol_menu">
                    <i class="fa-solid fa-gear"></i>

                    <div class="DrpDwn_Menu">
                            <!-- Adding Icons for the drop down menu left side -->
                        <div class="DrpDwn_LF">
                            <ul>
                                <li>
                                    <i class="fa-solid fa-user"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-wrench"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                </li>
                            </ul>
                        </div>
                            <!-- Adding Icons for the drop down menu Right side -->
                        <div class="DrpDwn_RT">
                            <ul>
                                <li>
                                    <a href="PROFILE.php">Profile</a>
                                </li>
                                <li>
                                    <a  href="#"> Settings </a>
                                </li>
                                <li>
                                    <a href="LOGOUT.php"> Log out </a> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    
    <div id="TOP_container">
        <div class="PROFILE_container">
            <img class="PROFILING" src="catwink.webp" alt="profile">
        </div>
        <div class="PRFUSER_container">
            <h2 class="USERNAME_container"> MARSHMELLO </h2>
            <p class="BIO_container"> HI!!! LOVE MY ART AND VIDOES HEHEHEHE ( ͡❛ ‿‿ ͡❛) </p>
        </div>
    </div>

    <div class="PROFJOKE_container">
        <br><br>
        <h3 class="PROFSUBJOKE_container"> hey don't laugh </h3>
        <br><br>
        <div id="JK_container">
            // Funniest Jokes Ever
        </div>
        <br><br>
        <button id="GENJK_container">
            Generate
        </button>
    </div>


    <div class="MYPOST_container">
        <img src="pfp2.jpg" alt="" class="POST1">
    </div>

    <script src="drpdwn.js"></script>
    <script>
        // JAVASCRIPT FOR DAD JOKES
        const jokeEl = document.getElementById('JK_container');
        const get_joke = document.getElementById('GENJK_container');

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