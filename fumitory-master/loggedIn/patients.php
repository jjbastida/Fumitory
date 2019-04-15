<!DOCTYPE php>
<html lang="en">
<head>
    <?php
    include "../other/connect.php";
    include "../other/userKeywords.php";
    ?>
        <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon/favicon-16x16.png">
        <link rel="icon" type="image/png" sizes="512x512" href="../images/favicon/android-chrome-512x512.png">
        <link rel="manifest" href="../images/favicon/site.webmanifest">
        <link rel="mask-icon" href="../images/favicon/safari-pinned-tab.svg" color="#6e6e6e">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta charset="utf-8">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113867348-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-113867348-2');
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fumitory - Training</title>
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Cardo:400,400i,700|Charmonman:400,700" rel="stylesheet"> </head>
<script src="../other/patientInformation.js"></script>

<body>
    <div id="overflower">
        <nav>
            <a id="logo" href='<?php echo ( "homepage.php?id=".$userId);?>'> <img class="logo" src="../images/logos/fumitory-logo.png" style="height: 100%;"></a>
        </nav>
        <div id="map">
            <?php
            $timeStamp = date("Y-m-d H:i:s");
            $unix = time();
            //if someone is posting then that is sending information and itll refresh with method being get I can add in the patient health and status here after an item is used do all of the calculations here basically and then post that value up after it's been calcluated
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $item = $_POST["item"];
                $patientVal = $_POST["patientVal"];
                echo("LOADING...");
                if ($item != "" && $patientVal != ""){
                $patientRow = $conn->query("SELECT * FROM  `".$userUsername."_progress` WHERE patientNumber =".$patientVal);
                if ($patientRow->num_rows > 0){
            //if there are patients get the data from each row and put it into JS so that shit is workable.
                foreach($patientRow as $row){
                $patientNum = $row["patientNumber"];
                $patientName = $row["patientName"];
                $patientStatus = $row["patientStatus"];
                $patientHealth = $row["patientHealth"];
                $patientUsedItems = $row["usedItems"];
                $patientBest = $row["bestItemType"];
                $patientWorst = $row["worstItemType"];
                $patientUsedDialogue = $row["usedDialogue"];
                $patientLockTimer = $row["lockTimer"];
                $patientHealthTimer = $row["healthTimer"];
                $patientUsedDialogue ++;
                if($patientUsedItems != ""){
                $patientUsedItems = explode(", ", $patientUsedItems);
                array_push($patientUsedItems, $item);
                $itemArray = implode(", ", $itemArray);
                }
                else{
                    $itemArray = $item;
                };
                $itemType = $conn->query("SELECT `itemType` FROM `items` WHERE `itemName` = '".$item."'")->fetch_assoc()["itemType"];
                if($itemType == $patientBest){
                    $itemHealthVal = 20;
                }
                else if($itemType == $patientWorst){
                    $itemHealthVal = -10;
                }
                else if($itemType == "toxic"){
                    $itemHealthVal = -40;
                }
                else{
                    $itemHealthVal = 10;
                }
                
                $patientHealthNew = $patientHealth + $itemHealthVal;
                
                  $conn->query("UPDATE ".$userUsername."_progress SET `usedItems` = '".$itemArray."', patientHealth = ".$patientHealthNew.", patientStatus = 'curing', usedDialogue = ".$patientUsedDialogue.", lockTimer = ".$unix." WHERE patientNumber =".$patientVal); 
                }
                }
                }
                die("<script>window.location.replace('patients.php?id=".$userId."')</script>"); 
                }
            else{
            //get patient data and store and manipulate it but also for the first one it starts right as they get to the page but for future ones be sure that that shit happens after they've healed them or whatever.
            $patientRow = $conn->query("SELECT * FROM  `".$userUsername."_progress`");
            if ($patientRow->num_rows > 0){
            //if there are patients get the data from each row and put it into JS so that shit is workable.
            //if the patient number is cured unlock certain ones
            foreach($patientRow as $row){
            $patientNum = $row["patientNumber"];
            $patientName = $row["patientName"];
            $patientStatus = $row["patientStatus"];
            $patientHealth = intval($row["patientHealth"]);
            $patientUsedItems = $row["usedItems"];
            $patientUsedDialogue = $row["usedDialogue"];
            $patientUnlockTimer = $row["unlockTime"];
            $patientLockTimer = $row["lockTimer"];
            $patientHealthTimer = $row["healthTimer"];
            //each time someone views the page it checks the timer if its been 14400 from last time they checked it subtracts however much times over it is and removes that from his health.
                if($patientHealth <= 0){                    
                    $conn->query("UPDATE ".$userUsername."_progress SET patientStatus = 'dead' WHERE `patientNumber` = ".$patientNum);
                    $patientStatus = "dead";
                }
                else if($patientHealth >= 100){
                    $conn->query("UPDATE ".$userUsername."_progress SET patientStatus = 'cured' WHERE `patientNumber` = ".$patientNum);
                }
                else if ($patientLockTimer + 14400 <= $unix){
                  $conn->query("UPDATE ".$userUsername."_progress SET patientStatus = 'sick' WHERE `patientNumber` = ".$patientNum); 
                    $patientStatus = "sick";
                    $patientLockTimer = $unix;
                };
                //Unlocks characters
            if($patientNum == 0 && $unix >= $patientUnlockTimer+86400 && $patientRow->num_rows == 1){
                $conn->query("INSERT INTO `".$userUsername."_progress` (patientNumber, patientName, patientStatus, patientHealth, usedDialogue, bestItemType, worstItemType, healthTimer, unlockTime) VALUES (1,'Agnella', 'sick', 60, 0, 'Disinfectant', 'Sweet',".$unix.",".$unix.")");
            }
            else if($patientNum == 1 && $unix >= $patientUnlockTimer+172800 && $patientRow->num_rows == 2){
                $conn->query("INSERT INTO `".$userUsername."_progress` (patientNumber, patientName, patientStatus, patientHealth, usedDialogue, bestItemType, worstItemType, healthTimer, unlockTime) VALUES (2,'Maffeo', 'sick', 70, 0, 'General', 'Spiritual',".$unix.",".$unix.")");
            }
            else if($patientNum == 2 && $unix >= $patientUnlockTimer+172800 && $patientRow->num_rows == 3){
                $conn->query("INSERT INTO `".$userUsername."_progress` (patientNumber, patientName, patientStatus, patientHealth, usedDialogue, bestItemType, worstItemType, healthTimer, unlockTime) VALUES (3,'Novella', 'sick', 48, 0, 'Acidic', 'Herbal',".$unix.",".$unix.")");
            };
            $timeAwayRound = round(($unix -$patientHealthTimer)/14400, 0, PHP_ROUND_HALF_DOWN);
            if($patientNum == 0){
                if($patientStatus == "cured"){
                $inventoryList = $conn->query("SELECT `inventory` FROM users WHERE username ='".$userUsername."';")->fetch_assoc()['inventory'];
                if(strpos($inventoryList, "Barberry") === false){
                $inventoryList = explode(", ", $inventoryList);
                array_push($inventoryList, "Barberry");
                $inventoryList = implode(", ", $inventoryList);
                $conn->query("UPDATE `users` SET `inventory` = '".$inventoryList."' WHERE username ='".$userUsername."';");
                    };
                }
                else{
                    $patientHealth = $patientHealth - ($timeAwayRound); 
                };
            }
            else if($patientNum == 1){
                  
                if($patientStatus == "cured"){
                $inventoryList = $conn->query("SELECT `inventory` FROM users WHERE username ='".$userUsername."';")->fetch_assoc()['inventory'];
                if(strpos($inventoryList, "Wooden Fish Charm") === false){
                $inventoryList = explode(", ", $inventoryList);
                array_push($inventoryList, "Wooden Fish Charm");
                $inventoryList = implode(", ", $inventoryList);
                $conn->query("UPDATE `users` SET `inventory` = '".$inventoryList."' WHERE username ='".$userUsername."';");
                    };
                }
                else{
                    $patientHealth = $patientHealth - ($timeAwayRound * 2);   
                };
            }
                else if($patientNum == 2){
                  
                    if($patientStatus == "cured"){
                $inventoryList = $conn->query("SELECT `inventory` FROM users WHERE username ='".$userUsername."';")->fetch_assoc()['inventory'];
                if(strpos($inventoryList, "Bread") === false){
                $inventoryList = explode(", ", $inventoryList);
                array_push($inventoryList, "Bread");
                $inventoryList = implode(", ", $inventoryList);
                $conn->query("UPDATE `users` SET `inventory` = '".$inventoryList."' WHERE username ='".$userUsername."';");
                    };
                }
                    else{
                        $patientHealth = $patientHealth - ($timeAwayRound * 3);  
                    };
                }
                else if($patientNum == 3){
                    if($patientStatus == "cured"){
                $inventoryList = $conn->query("SELECT `inventory` FROM users WHERE username ='".$userUsername."';")->fetch_assoc()['inventory'];
                if(strpos($inventoryList, "White Champignon Mushroom") === false){
                $inventoryList = explode(", ", $inventoryList);
                array_push($inventoryList, "White Champignon Mushroom");
                $inventoryList = implode(", ", $inventoryList);
                $conn->query("UPDATE `users` SET `inventory` = '".$inventoryList."' WHERE username ='".$userUsername."';");
                    };
                }
                    else{
                        $patientHealth = $patientHealth - ($timeAwayRound * 5);  
                    };
                };
            if(intval($timeAwayRound) >= 1 && $patientStatus != "cured"){
            $conn->query("UPDATE `".$userUsername."_progress` SET `patientHealth` = ".$patientHealth.", `healthTimer` = ".$unix." WHERE patientNumber = ".$patientNum.";");
              $patientHealthTimer = $unix;
                };
           
            echo('<script>
            var patient'.$patientName.' = {
                PNumber : '.$patientNum.',
                PName : "'.$patientName.'",
                PStatus : "'.$patientStatus.'",
                PHealth : '.$patientHealth.',
                PUsedItems : "'.$patientUsedItems.'",
                PUsedDialogue : '.$patientUsedDialogue.',
                PHealthTimer : "'.$patientHealthTimer.'",
                PLockTimer : "'.$patientLockTimer.'",
            };
            </script>');
            };
            }
            else{
            //get the first char in here
            $conn->query("INSERT INTO `".$userUsername."_progress` (patientNumber, patientName, patientStatus, patientHealth, usedDialogue, bestItemType, worstItemType, healthTimer, unlockTime) VALUES (0,'Biordo', 'sick', 80, 0, 'Sweet', 'Bitter',".$unix.",".$unix.")");
            
            echo('<script>
            var patientBiordo = {
                PNumber : 0,
                PName : "Biordo",
                PStatus : "sick",
                PHealth : 70,
                PUsedItems : "",
                PUsedDialogue : 0
                };
            </script>');
                $PHealth = 70;
            }
           }
            ?>
                <div id="UIContainer">
                    <div id="userText">
                        <div id="exitText">x</div>
                        <div><img src="../images/user.svg">
                            <h2><?php
                echo ($userName)
                ?></h2>
                            <h2 id="health"></h2> </div>
                        <p id="speech">Select a home to treat a patient...</p>
                        <form name="submitForm" style="display:none" id="submitter" method="post" action="<?php echo ('patients.php?id='.$userId);?>"> Use the
                            <input name="item" value="" readonly>
                            <input name="patientVal" value="" style="width:10%; user-select:none; color: #FEFEF8; opacity:.1" readonly class="hiddenSelect">
                            <button class="button
thickB" style="cursor:pointer;" type="submit">Use Item</button>
                        </form>
                    </div>
                    <div id="inv">
                        <?php
                    //create items
            $userItems = explode(", ", $userInventory);
            foreach ($userItems as $element) {
            $desc = $conn->query("SELECT `itemDesc` FROM items WHERE `itemName` = '".$element."';")->fetch_assoc()["itemDesc"];
            createItem($element, $desc);
            };
            function createItem($itemName, $itemDesc){
             $fileName = str_replace(' ', '-', $itemName);
                echo('<div class="usableItem"><div class="overHoverMap"><img src="../images/inventory/'.$fileName.'.png"  style="width: 100%; display:block;"></div>
                <p style="font-size: .8em">'.$itemName.'</p>
            </div>');
            };
                    ?> </div>
                    <div id="invButton"><img src="../images/logos/inventory.png">
                        <h2 class="center">Inventory</h2></div>
                </div>
                <div id="houses">
                    <div class="noSelect locked" data-patient="0"><img src="../images/map/mansion.png"></div>
                    <div class="noSelect locked" data-patient="1"><img src="../images/map/houseTwo.png"></div>
                    <div class="noSelect locked" data-patient="2"><img src="../images/map/bakery.png"></div>
                    <div class="noSelect locked" data-patient="3"><img src="../images/map/textile.png"></div>
                </div> <img id="bgMap"> </div>
    </div>
    <script src="../js/script.js"></script>
    <script>
        //start counting patients from zero
        var patientName = ["Biordo", "Agnella", "Maffeo", "Novella"]
        var houses = document.getElementById("houses").children;
        var items = document.getElementsByClassName("usableItem");
        var dead = false;
        document.getElementById("exitText").addEventListener("click", function () {
            if (window.innerWidth <= 52 * rem && document.getElementById("UIContainer").style.zIndex == 4) {
                document.getElementById("UIContainer").style.zIndex = 2;
                document.getElementById("userText").style.visibility = "hidden";
                document.getElementById("userText").style.opacity = 0;
            }
        });
        document.getElementById("invButton").addEventListener("click", function () {
            openInv(false)
        });
        for (let i = 0; i < houses.length; i++) {
            if (eval("typeof patient" + patientName[i]) === undefined || eval("typeof patient" + patientName[i]) === "undefined") {}
            else {
                if (eval("patient" + patientName[i] + ".PStatus ") == "sick" || eval("patient" + patientName[i] + ".PStatus ") == "cured") {
                    houses[i].classList.remove("noSelect");
                    houses[i].classList.remove("locked");
                    dead == false;
                    houses[i].addEventListener("click", function () {
                        if (this.classList.contains("locked") == false) {
                            if (eval("patient" + patientName[i] + ".PStatus ") == "cured") {
                                var dialogue = patients[i].cured + "<a href='../endings/"+patientName[i]+"_cured.php?id=<?php echo $userId?>' class='link'> Click here to see what happened to "+patientName[i]+"</a>";
                                document.getElementById("health").style.display = 'none';
                                dead=true;
                            }
                            else {
                                if (eval("patient" + patientName[i] + ".PUsedDialogue") >= patients[i].dialogue.length){
                                eval("patient" + patientName[i] + ".PUsedDialogue") = patients[i].dialogue.length;
                                };
                                var dialogue = patients[i].dialogue[eval("patient" + patientName[i] + ".PUsedDialogue")];
                                openInv(true);
                            }
                            if (window.innerWidth <= 52 * rem) {
                                document.getElementById("userText").style.visibility = "visible";
                                document.getElementById("userText").style.opacity = 1;
                            }
                            document.getElementById("UIContainer").style.zIndex = 4;
                            document.getElementById("userText").children[1].children[0].src = patients[i].img;
                            document.submitForm.patientVal.value = this.getAttribute("data-patient");
                            document.getElementById("userText").children[1].children[0].classList.add("userTalk");
                            document.getElementById("health").innerHTML = "Health: " + eval('patient' + patientName[i] + '.PHealth');
                            document.getElementById("userText").children[1].children[1].innerHTML = patients[i].name;
                            document.getElementById("speech").innerHTML = dialogue;
                        }
                    })
                }
                else if (eval("patient" + patientName[i] + ".PStatus ") == "curing") {
                    houses[i].classList.remove("locked");
                    houses[i].classList.add("curing");
                    var node = document.createElement("p");
                    var quickTime = (parseInt(eval("patient" + patientName[i] + ".PLockTimer")) + 14400) - (new Date().getTime() / 1000).toFixed(0);
                    var h = Math.floor(quickTime / 3600);
                    var m = Math.floor(quickTime % 3600 / 60);
                    var textNode = document.createTextNode("Done in " + h + " hours & " + m + " minutes.");
                    node.appendChild(textNode);
                    houses[i].appendChild(node);
                    houses[i].children[1].style.textAlign = "center";
                }
                else if (eval("patient" + patientName[i] + ".PStatus ") == "dead") {
                    //                    dialogue = eval("'"+patientName[i]+" has passed away...'") +  "<a href='../endings/"+patientName[i]+"_dead.php?id=<?php echo $userId?>'  class='link'> Click here to see what happened to "+patientName[i]+"</a>";
                    houses[i].classList.remove("locked");
                    houses[i].classList.add("dead");
                    houses[i].addEventListener("click", function () {
                    var dialogue = eval("'"+patientName[i]+" has passed away...'");
                        if (window.innerWidth <= 52 * rem) {
                                document.getElementById("userText").style.visibility = "visible";
                                document.getElementById("userText").style.opacity = 1;
                            }
                     document.getElementById("UIContainer").style.zIndex = 4;
                     document.getElementById("userText").children[1].children[0].src = patients[i].img;
                      document.getElementById("userText").children[1].children[0].style.filter = "brightness(90%) grayscale(100%)";
                     document.getElementById("userText").children[1].children[0].classList.add("userTalk");
                    document.getElementById("userText").children[1].children[1].innerHTML = patients[i].name;
                    document.getElementById("speech").innerHTML = dialogue;
                         document.getElementById("speech").style.fontWeight = "bold";
                    dead = true;
                    document.getElementById("health").style.display = 'none';
                    })
                    
                }
            };
        };
        for (let i = 0; i < items.length; i++) {
            items[i].addEventListener("click", function () {
                document.submitForm.item.value = items[i].children[1].innerHTML;
                if (document.submitForm.style.display == "none") {
                    document.submitForm.style.display = "block";
                }
            })
        };

        function openInv(user) {
            if (document.getElementById("inv").style.visibility == "visible" && user == true && dead == false) {}
            else if (document.getElementById("inv").style.visibility != "visible") {
                document.getElementById("inv").style.visibility = "visible";
                document.getElementById("inv").style.opacity = 1
                document.getElementById("UIContainer").style.zIndex = 4;
            }
            else {
                document.getElementById("UIContainer").style.zIndex = 2;
                document.getElementById("inv").style.visibility = "hidden";
                document.getElementById("inv").style.opacity = 0
            }
        };
    </script>
</body>

</html>