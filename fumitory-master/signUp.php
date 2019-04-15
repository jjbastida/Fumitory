<!DOCTYPE php>
<html lang="en">

<head>
    <?php
    include "other/connect.php";
    ?><link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="512x512" href="images/favicon/android-chrome-512x512.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#6e6e6e">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
        <meta charset="utf-8"><!-- Global site tag (gtag.js) - Google Analytics --> <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113867348-2"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());    gtag('config', 'UA-113867348-2'); </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fumitory - Sign Up</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Cardo:400,400i,700|Charmonman:400,700" rel="stylesheet">
        <script src="js/all.js"></script>
        <script src="js/fontawesome.js"></script>
</head>

<body>
    <div id="overflow">
        <nav> <a id="logo" href='index.html'>
                <img src="../images/logos/fumitory-logo.png" style="height: 4em; display:inline-block;"><h1 class="fumiTitle">Fumitory</h1></a>
        </nav>
        <div id="contentTwo">
            <div id="signBox">
                <h1>Sign Up</h1>
                <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $userSubmit = $_POST["username"];
                $nameSubmit = $_POST["name"];
                $passSubmit = $_POST["password"];
                $check = $conn->query("SELECT * FROM users WHERE username ='".$userSubmit."';");
                if ($check->num_rows > 0) {
                $used = true;
                }
                else{
                    $passSubmit = password_hash($passSubmit, PASSWORD_DEFAULT);
                    $conn->query("INSERT INTO users (`username`, `name`, `password`,`inventory`) VALUES ('".$userSubmit."','".$nameSubmit."','".$passSubmit."', 'Geranium, Med Kit, Paper Talisman')");
                    $userNum = $conn->query("SELECT `id` FROM users WHERE username = '".$userSubmit."'")->fetch_assoc()['id'];
                    $userSubmit = preg_replace("/[^a-zA-Z]+/", "", $userSubmit);
                    $conn->query("CREATE TABLE ".$userSubmit."_progress (patientNumber int(3), patientName varchar(75), patientStatus varchar(10), patientHealth int(3), bestItemType varchar(30), worstItemType varchar(30), usedItems text default '', usedDialogue int(3), unlockTime int(20), healthTimer int(20), lockTimer int(20))");
                die("<script>window.location.replace('loggedIn/training.php?id=".$userNum."')</script>");  
                }
            }
                ?>
                    <form method="post" enctype="multipart/form-data" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>
                        <h2>First Name</h2>
                        <input type="text" placeholder="Julien" name="name" id="nameBox">
                        <br>
                        <br>
                        <h2>Username</h2>
                        <input type="text" placeholder="GuyAtidaux" name="username" id="userBox">
                        <?php 
                    if ($used == true){
                        echo("<p class='mini redText'>Sorry that username is already in use!</p>");
                    };
                    ?>
                            <br>
                            <br>
                            <h2>Password</h2>
                            <input type="password" id="PW" placeholder="••••••••••" name="password"><span id="PWClick"><i id="PWView" class="fas fa-eye-slash"></i></span>
                            <br>
                            <br>
                            <button class="confirm red greyed">Sign Up</button>
                            <p class="mini agree">By clicking confirm you are
                                <br>agreeing to our <a href="other/TOA_Fumitory.pdf" target="_blank">Terms of Agreement</a></p>
                    </form>
            </div>
            <a id="signTab" class="signer" href="logIn.php">
                <h3>Log In</h3> </a>
        </div>
    </div>
    <script src="js/script.js"></script>
    <script>
        var passview = false;
        var filled = false;
        document.getElementsByClassName("confirm")[0].disabled = true;
        document.getElementById("PWClick").addEventListener("mousedown", function () {
            if (passview == true) {
                document.getElementById("PWClick").children[0].classList.remove("fa-eye");
                document.getElementById("PWClick").children[0].classList.add("fa-eye-slash");
                passview = false;
                document.getElementById("PW").type = "password";
                document.getElementById("PW").placeholder = "••••••••••";
            }
            else {
                document.getElementById("PWClick").children[0].classList.remove("fa-eye-slash");
                document.getElementById("PWClick").children[0].classList.add("fa-eye");
                document.getElementById("PW").type = "text";
                document.getElementById("PW").placeholder = "Endiver241";
                passview = true;
            }
        });
        document.getElementById("nameBox").addEventListener("keyup", checker);
        document.getElementById("userBox").addEventListener("keyup", checker);
        document.getElementById("PW").addEventListener("keyup", checker);

        function checker() {
            if (document.getElementById("nameBox").value != "" && document.getElementById("userBox").value != "" && document.getElementById("PW").value != "") {
                filled = true;
                document.getElementsByClassName("confirm")[0].disabled = false;
                document.getElementsByClassName("confirm")[0].classList.remove("greyed")
            }
            else {
                if (document.getElementsByClassName("confirm")[0].classList.contains("greyed") == false) {
                    document.getElementsByClassName("confirm")[0].classList.add("greyed");
                    document.getElementsByClassName("confirm")[0].disabled = true;
                }
            }
        }
    </script>
</body>

</html>