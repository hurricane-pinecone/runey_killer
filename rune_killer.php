<?php

$monster_name = "";
$kill_amount = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $monster_name = $_POST["input-monster_name"];
    $kill_amount = $_POST["input-kill_amount"];
}

$command = escapeshellcmd('python3 /usr/rune_killer/scrape.py');
$output = shell_exec($command);
echo $output;

// This will check the input name against a list of monsters to save request time on typos
function check_monster($monster) {

}

?>

<!doctype html>
<html>
<head>
<link rel = "stylesheet"
   type = "text/css"
   href = "main.css" />
</head>
<body>
    <center>
        <h1>Monster Drop Roller</h1>
        <div class="container-input">
            <div class="container-monster_input">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                <input type="text" name="input-monster_name" class="input-main" placeholder="Monster..">
                <input type="text" name="input-kill_amount" id="input-kill_amount" class="input-main" placeholder="Amount..">
                <button type="submit" name="submit" id="btn-kill" class="main_container-kill_button">Kill</button>
            </form>
            </div>
        </div>

        <div class="container-display">
            <h2> <?php echo $monster_name . " " . $kill_amount; ?> </h2>
        </div>

    </center>
</body>
</html> 

<script>

</script>