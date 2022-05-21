<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5e359c3c35.js"></script>
    <link rel="stylesheet" href="HP.css">     <!-- For the Header where it is the navigation bar -->
    <title> STRIMOLO | Home </title>
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
                                        <a  href="PROFILE.php">Profile</a>
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
    
    <!-- Media Capture and Streaming API -->
    <video id="Strim_Vod" autoplay></video>
    <div class="SS_container">
        <button id="Strt_strm">Stream</button>
        <button id="Stp_strm">Stop Streaming</button>
    </div>

    <div class="OTHERUSER_container">
        <div class="OTUSER_PROFILE">
            <img class="PROFILE" src="pfp3.png" alt="Bot_account">
            <!-- <h3 class="OTUSER_USERNAME">DR. DuckTO</h3> -->
        </div>
        <div class="OTUSERPOST_container">
            <img src="duckto.webp" alt="OTUSER_IMAGE" class="DUCK_post" id="IMG">
        </div>
    </div>

    <div class="DADJOKE_container">
        <br><br>
        <h3 class="SUBJOKETL_container"> hey don't laugh </h3>
        <br>
        <div id="JK_container">
            // Funniest Jokes Ever
        </div>
        <br><br>
        <button id="GENJOKE_container">
            Generate
        </button>
    </div>



    <script src="drpdwn.js"></script>
    <script>
        // JAVASCRIPT FOR DAD JOKES
        const jokeEl = document.getElementById('JK_container');
        const get_joke = document.getElementById('GENJOKE_container');

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

        // MEDIA SCREEN AND STREAM CAPTURE API
        const screen = document.getElementById("Strim_Vod");
        const start = document.getElementById("Strt_strm");
        const stop = document.getElementById("Stp_strm");

        var displayOptions = {
            video:{
                cursor: 'always'
            },
            audio: false
        }

        start.addEventListener("click", function(e){
            startCapture();
        }, false)

        stop.addEventListener("click", function(e){
            stopCapture();
        }, false)

        async function startCapture(){
            try{
                screen.srcObject = await navigator.mediaDevices.getDisplayMedia(displayOptions);
            }catch(err){
                console.error("Error" + err);
            }
        }

        function stopCapture(e){
            let tracks = screen.srcObject.getTracks();

            tracks.forEach(track => track.stop())
            
            screen.srcObject = null;
        }

        // FULL SCREEN API
        function getFullscreenElement()
        {
            return document.fullscreenElement
                || document.webkitFullscreenElement
                || document.mozFullscreenElement
                || document.mozFullscreenElement;
        }

        function toggleFullscreen() 
        {
            if(getFullscreenElement())
            {
                document.exitFullscreen();
            }
            else
            {
                document.getElementById("Strim_Vod").requestFullscreen().catch(console.log);
            }
        }

        document.addEventListener("dblclick", () => {
            toggleFullscreen();
        });

        document.addEventListener("fullscreenchange", () => {
            console.log("full screen changed!");
        });
    </script>
</body>
</html>