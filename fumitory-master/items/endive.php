<!DOCTYPE php>
<html lang="en">

<head>
    <?php
    include "../other/connect.php";
    $item = "Endive";
    ?>
        <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
        <link rel="icon" type="image/png" sizes="512x512" href="../images/favicon/android-chrome-512x512.png">
        <link rel="manifest" href="../images/favicon/site.webmanifest">
        <link rel="mask-icon" href="../images/favicon/safari-pinned-tab.svg" color="#6e6e6e">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="theme-color" content="#ffffff">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fumitory - Log In</title>
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Cardo:400,400i,700|Charmonman:400,700" rel="stylesheet">
        <script src="../js/all.js"></script>
        <script src="../js/fontawesome.js"></script>
</head>

<body>
    <div id="overflow">
        <nav>
            <a id="logo" href='../index.html'> <img src="../images/logos/fumitory-logo.png" style="height: 4em; display:inline-block;">
                <h1 class="fumiTitle">Fumitory</h1></a>
        </nav>
        <div id="contentTwo">
            <div id="signBox">
                <h1>Log In for your <span style="text-decoration:underline"><?php echo($item);?></span></h1>
                <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $userSubmit = $_POST["username"];
                $passSubmit = $_POST["password"];
                $userResult = $conn->query("SELECT * FROM users WHERE username ='".$userSubmit."';");
                if (password_verify($passSubmit, $userResult->fetch_assoc()['password'])) {
                $userId = $conn->query("SELECT `id` FROM users WHERE `username`='".$userSubmit."';")->fetch_assoc()['id'];
                $inventoryList = $conn->query("SELECT `inventory` FROM users WHERE username ='".$userSubmit."';")->fetch_assoc()['inventory'];
                    if(strpos($inventoryList, $item) === false){
                $inventoryList = explode(", ", $inventoryList);
                array_push($inventoryList, $item);
                $inventoryList = implode(", ", $inventoryList);
                    echo
                $conn->query("UPDATE `users` SET `inventory` = '".$inventoryList."' WHERE username ='".$userSubmit."';");
                    }
                die("<script>window.location.replace('../loggedIn/inventory.php?id=".$userId."')</script>");  
                }
                else{
                    $userNone = true;
                }
            }
                
                ?>
                    <form method="post" enctype="multipart/form-data" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' name="logIn">
                        <h2>Username</h2>
                        <input type="text" placeholder="GuyAtidaux" name="username">
                        <br>
                        <br>
                        <h2>Password</h2>
                        <input type="password" id="PW" placeholder="**********" name="password"><span id="PWClick"><i id="PWView" class="fas fa-eye-slash"></i></span>
                        <br>
                        <?php 
                    if ($userNone == true){echo("<p class='mini redText'>Sorry that's not a  username and password we have in our records.</p>");
                    }
                    ?>
                            <br>
                            <button class="confirm greyed">Log In</button>
                    </form>
            </div>
            <a id="signTab" class="logger" href="../signUp.php">
                <h3>Sign Up</h3> </a>
        </div>
    </div>
    <script src="../js/script.js"></script>
    <script>
        var passview = false;
        var filled = false;
        document.getElementsByClassName("confirm")[0].disabled = true;
        document.getElementById("PWClick").addEventListener("mousedown", function () {
            if (passview == true) {
                document.getElementById("PWClick").children[0].classList.remove("fa-eye");
                document.getElementById("PWClick").children[0].classList.add("fa-eye-slash");
                passview = false;
                document.getElementById("PW").type = "password"
            }
            else {
                document.getElementById("PWClick").children[0].classList.remove("fa-eye-slash");
                document.getElementById("PWClick").children[0].classList.add("fa-eye");
                document.getElementById("PW").type = "text"
                passview = true;
            }
        });
        document.logIn.username.addEventListener("keyup", checker);
        document.logIn.password.addEventListener("keyup", checker);

        function checker() {
            if (document.logIn.username.value != "" && document.logIn.password.value != "") {
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