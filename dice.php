<?php
session_start();
$_SESSION["money"];
$bool = false;
$tempMoney = $_SESSION["money"];
if (!isset($_POST["control-input"])) {
    $die1 = rand(1, 6);
    $betCount = 0;
    for ($i = 0; $i < 6; $i++)
        if ($_POST["diceSelector"][$i] == "1")
            $betCount--;
    $moneyMinus = $_POST["bet-amount"] * $betCount;
    if ($_POST["diceSelector"][$die1 - 1] == "1") {
        $_SESSION["money"] += $moneyMinus + $_POST["bet-amount"] * 5;
        $bool = true;
    } else
        $_SESSION["money"] += $moneyMinus;

} else {
    $die1 = 0;
}
if ($_SESSION["money"] < 0) {
    $_SESSION["money"] = $tempMoney;
    $die1 = 0;
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gambling Room</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <main>
        <article class="wrapper">
            <header>
                <button type="button" id="menu-btn" onclick="location.replace('room-selection.php')"></button>
                <h1><span id="money"></span>
                    <img id="coin-img" src="img/coin.png" alt="-C">
                </h1>
            </header>
            <form action="dice.php" method="post" class="room-select-box">
                <article>
                    <div class="grid" id="dice-box">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 530 530">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: rgba(0, 0, 0, 0);
                                    }
                                </style>
                            </defs>
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <rect stroke="var(--contrast)" class="cls-1" x="10" y="10" width="510" height="510"
                                        rx="82.78" />
                                    <path
                                        d="M437.22,20A72.86,72.86,0,0,1,510,92.78V437.22A72.86,72.86,0,0,1,437.22,510H92.78A72.86,72.86,0,0,1,20,437.22V92.78A72.86,72.86,0,0,1,92.78,20H437.22m0-20H92.78A92.78,92.78,0,0,0,0,92.78V437.22A92.78,92.78,0,0,0,92.78,530H437.22A92.78,92.78,0,0,0,530,437.22V92.78A92.78,92.78,0,0,0,437.22,0Z" />
                                    <circle cx="264.78" cy="264.78" r="41.7"
                                        transform="translate(-109.68 264.78) rotate(-45)" />
                                    <path
                                        d="M264.78,230.58a34.2,34.2,0,1,1-34.2,34.2,34.24,34.24,0,0,1,34.2-34.2m0-15h0a49.2,49.2,0,0,0-49.2,49.2h0a49.2,49.2,0,0,0,49.2,49.2h0a49.19,49.19,0,0,0,49.2-49.2h0a49.2,49.2,0,0,0-49.2-49.2Z" />
                                </g>
                            </g>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 530 530">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: rgba(0, 0, 0, 0);
                                    }
                                </style>
                            </defs>
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <rect class="cls-1" x="10" y="10" width="510" height="510" rx="82.78" />
                                    <path
                                        d="M437.22,20A72.86,72.86,0,0,1,510,92.78V437.22A72.86,72.86,0,0,1,437.22,510H92.78A72.86,72.86,0,0,1,20,437.22V92.78A72.86,72.86,0,0,1,92.78,20H437.22m0-20H92.78A92.78,92.78,0,0,0,0,92.78V437.22A92.78,92.78,0,0,0,92.78,530H437.22A92.78,92.78,0,0,0,530,437.22V92.78A92.78,92.78,0,0,0,437.22,0Z" />
                                    <circle cx="166.5" cy="166.5" r="41.7" />
                                    <path
                                        d="M166.5,132.3a34.2,34.2,0,1,1-34.2,34.2,34.24,34.24,0,0,1,34.2-34.2m0-15h0a49.2,49.2,0,0,0-49.2,49.2h0a49.2,49.2,0,0,0,49.2,49.2h0a49.2,49.2,0,0,0,49.2-49.2h0a49.2,49.2,0,0,0-49.2-49.2Z" />
                                    <circle cx="355.78" cy="355.78" r="41.7"
                                        transform="translate(-147.37 355.78) rotate(-45)" />
                                    <path
                                        d="M355.78,321.58a34.2,34.2,0,1,1-34.2,34.2,34.24,34.24,0,0,1,34.2-34.2m0-15h0a49.2,49.2,0,0,0-49.2,49.2h0a49.2,49.2,0,0,0,49.2,49.2h0a49.19,49.19,0,0,0,49.2-49.2h0a49.2,49.2,0,0,0-49.2-49.2Z" />
                                </g>
                            </g>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 530 530">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: rgba(0, 0, 0, 0);
                                    }
                                </style>
                            </defs>
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <rect class="cls-1" x="10" y="10" width="510" height="510" rx="82.78" />
                                    <path
                                        d="M437.22,20A72.86,72.86,0,0,1,510,92.78V437.22A72.86,72.86,0,0,1,437.22,510H92.78A72.86,72.86,0,0,1,20,437.22V92.78A72.86,72.86,0,0,1,92.78,20H437.22m0-20H92.78A92.78,92.78,0,0,0,0,92.78V437.22A92.78,92.78,0,0,0,92.78,530H437.22A92.78,92.78,0,0,0,530,437.22V92.78A92.78,92.78,0,0,0,437.22,0Z" />
                                    <circle cx="117.78" cy="117.78" r="41.7"
                                        transform="translate(-48.79 117.78) rotate(-45)" />
                                    <path
                                        d="M117.78,83.58a34.2,34.2,0,1,1-34.2,34.2,34.24,34.24,0,0,1,34.2-34.2m0-15h0a49.2,49.2,0,0,0-49.2,49.2h0a49.2,49.2,0,0,0,49.2,49.2h0a49.19,49.19,0,0,0,49.2-49.2h0a49.2,49.2,0,0,0-49.2-49.2Z" />
                                    <circle cx="264.78" cy="264.78" r="41.7"
                                        transform="translate(-109.68 264.78) rotate(-45)" />
                                    <path
                                        d="M264.78,230.58a34.2,34.2,0,1,1-34.2,34.2,34.24,34.24,0,0,1,34.2-34.2m0-15h0a49.2,49.2,0,0,0-49.2,49.2h0a49.2,49.2,0,0,0,49.2,49.2h0a49.19,49.19,0,0,0,49.2-49.2h0a49.2,49.2,0,0,0-49.2-49.2Z" />
                                    <circle cx="411.78" cy="411.78" r="41.7"
                                        transform="translate(-170.57 411.78) rotate(-45)" />
                                    <path
                                        d="M411.78,377.58a34.2,34.2,0,1,1-34.2,34.2,34.24,34.24,0,0,1,34.2-34.2m0-15h0a49.2,49.2,0,0,0-49.2,49.2h0a49.2,49.2,0,0,0,49.2,49.2h0a49.19,49.19,0,0,0,49.2-49.2h0a49.2,49.2,0,0,0-49.2-49.2Z" />
                                </g>
                            </g>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 530 530">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: rgba(0, 0, 0, 0);
                                    }
                                </style>
                            </defs>
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <rect class="cls-1" x="10" y="10" width="510" height="510" rx="82.78" />
                                    <path
                                        d="M437.22,20A72.86,72.86,0,0,1,510,92.78V437.22A72.86,72.86,0,0,1,437.22,510H92.78A72.86,72.86,0,0,1,20,437.22V92.78A72.86,72.86,0,0,1,92.78,20H437.22m0-20H92.78A92.78,92.78,0,0,0,0,92.78V437.22A92.78,92.78,0,0,0,92.78,530H437.22A92.78,92.78,0,0,0,530,437.22V92.78A92.78,92.78,0,0,0,437.22,0Z" />
                                    <path
                                        d="M117.78,159.48a41.7,41.7,0,1,1,41.7-41.7A41.75,41.75,0,0,1,117.78,159.48Z" />
                                    <path
                                        d="M117.78,83.58a34.2,34.2,0,1,1-34.2,34.2,34.24,34.24,0,0,1,34.2-34.2m0-15h0a49.2,49.2,0,0,0-49.2,49.2h0a49.2,49.2,0,0,0,49.2,49.2h0a49.19,49.19,0,0,0,49.2-49.2h0a49.2,49.2,0,0,0-49.2-49.2Z" />
                                    <circle cx="411.78" cy="117.78" r="41.7" />
                                    <path
                                        d="M411.78,83.58a34.2,34.2,0,1,1-34.2,34.2,34.24,34.24,0,0,1,34.2-34.2m0-15h0a49.2,49.2,0,0,0-49.2,49.2h0a49.2,49.2,0,0,0,49.2,49.2h0a49.19,49.19,0,0,0,49.2-49.2h0a49.2,49.2,0,0,0-49.2-49.2Z" />
                                    <path d="M412,452.7A41.7,41.7,0,1,1,453.7,411,41.75,41.75,0,0,1,412,452.7Z" />
                                    <path
                                        d="M412,376.8A34.2,34.2,0,1,1,377.8,411,34.24,34.24,0,0,1,412,376.8m0-15A49.2,49.2,0,0,0,362.8,411h0a49.2,49.2,0,0,0,98.4,0h0A49.2,49.2,0,0,0,412,361.8Z" />
                                    <circle cx="118" cy="411" r="41.7"
                                        transform="translate(-256.06 203.82) rotate(-45)" />
                                    <path
                                        d="M118,376.8A34.2,34.2,0,1,1,83.8,411,34.24,34.24,0,0,1,118,376.8m0-15h0A49.2,49.2,0,0,0,68.8,411h0A49.2,49.2,0,0,0,118,460.2h0A49.2,49.2,0,0,0,167.2,411h0A49.2,49.2,0,0,0,118,361.8Z" />
                                </g>
                            </g>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 530 530">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: rgba(0, 0, 0, 0);
                                    }
                                </style>
                            </defs>
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <rect class="cls-1" x="10" y="10" width="510" height="510" rx="82.78" />
                                    <path
                                        d="M437.22,20A72.86,72.86,0,0,1,510,92.78V437.22A72.86,72.86,0,0,1,437.22,510H92.78A72.86,72.86,0,0,1,20,437.22V92.78A72.86,72.86,0,0,1,92.78,20H437.22m0-20H92.78A92.78,92.78,0,0,0,0,92.78V437.22A92.78,92.78,0,0,0,92.78,530H437.22A92.78,92.78,0,0,0,530,437.22V92.78A92.78,92.78,0,0,0,437.22,0Z" />
                                    <circle cx="117.78" cy="117.78" r="41.7" />
                                    <path
                                        d="M117.78,83.58a34.2,34.2,0,1,1-34.2,34.2,34.24,34.24,0,0,1,34.2-34.2m0-15h0a49.2,49.2,0,0,0-49.2,49.2h0a49.2,49.2,0,0,0,49.2,49.2h0a49.19,49.19,0,0,0,49.2-49.2h0a49.2,49.2,0,0,0-49.2-49.2Z" />
                                    <circle cx="411.78" cy="117.78" r="41.7" />
                                    <path
                                        d="M411.78,83.58a34.2,34.2,0,1,1-34.2,34.2,34.24,34.24,0,0,1,34.2-34.2m0-15h0a49.2,49.2,0,0,0-49.2,49.2h0a49.2,49.2,0,0,0,49.2,49.2h0a49.19,49.19,0,0,0,49.2-49.2h0a49.2,49.2,0,0,0-49.2-49.2Z" />
                                    <path d="M412,452.7A41.7,41.7,0,1,1,453.7,411,41.75,41.75,0,0,1,412,452.7Z" />
                                    <path
                                        d="M412,376.8A34.2,34.2,0,1,1,377.8,411,34.24,34.24,0,0,1,412,376.8m0-15A49.2,49.2,0,0,0,362.8,411h0a49.2,49.2,0,0,0,98.4,0h0A49.2,49.2,0,0,0,412,361.8Z" />
                                    <path d="M118,452.7A41.7,41.7,0,1,1,159.7,411,41.75,41.75,0,0,1,118,452.7Z" />
                                    <path
                                        d="M118,376.8A34.2,34.2,0,1,1,83.8,411,34.24,34.24,0,0,1,118,376.8m0-15A49.2,49.2,0,0,0,68.8,411h0a49.2,49.2,0,0,0,98.4,0h0A49.2,49.2,0,0,0,118,361.8Z" />
                                    <circle cx="265.07" cy="265.2" r="41.7" />
                                    <path
                                        d="M265.07,231a34.2,34.2,0,1,1-34.2,34.2,34.24,34.24,0,0,1,34.2-34.2m0-15h0a49.19,49.19,0,0,0-49.2,49.2h0a49.2,49.2,0,0,0,49.2,49.2h0a49.2,49.2,0,0,0,49.2-49.2h0a49.2,49.2,0,0,0-49.2-49.2Z" />
                                </g>
                            </g>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 530 530">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: rgba(0, 0, 0, 0);
                                    }
                                </style>
                            </defs>
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <rect class="cls-1" x="10" y="10" width="510" height="510" rx="82.78" />
                                    <path
                                        d="M437.22,20A72.86,72.86,0,0,1,510,92.78V437.22A72.86,72.86,0,0,1,437.22,510H92.78A72.86,72.86,0,0,1,20,437.22V92.78A72.86,72.86,0,0,1,92.78,20H437.22m0-20H92.78A92.78,92.78,0,0,0,0,92.78V437.22A92.78,92.78,0,0,0,92.78,530H437.22A92.78,92.78,0,0,0,530,437.22V92.78A92.78,92.78,0,0,0,437.22,0Z" />
                                    <circle cx="117.78" cy="117.78" r="41.7" />
                                    <path
                                        d="M117.78,83.58a34.2,34.2,0,1,1-34.2,34.2,34.24,34.24,0,0,1,34.2-34.2m0-15h0a49.2,49.2,0,0,0-49.2,49.2h0a49.2,49.2,0,0,0,49.2,49.2h0a49.19,49.19,0,0,0,49.2-49.2h0a49.2,49.2,0,0,0-49.2-49.2Z" />
                                    <circle cx="411.78" cy="117.78" r="41.7" />
                                    <path
                                        d="M411.78,83.58a34.2,34.2,0,1,1-34.2,34.2,34.24,34.24,0,0,1,34.2-34.2m0-15h0a49.2,49.2,0,0,0-49.2,49.2h0a49.2,49.2,0,0,0,49.2,49.2h0a49.19,49.19,0,0,0,49.2-49.2h0a49.2,49.2,0,0,0-49.2-49.2Z" />
                                    <path d="M412,452.7A41.7,41.7,0,1,1,453.7,411,41.75,41.75,0,0,1,412,452.7Z" />
                                    <path
                                        d="M412,376.8A34.2,34.2,0,1,1,377.8,411,34.24,34.24,0,0,1,412,376.8m0-15A49.2,49.2,0,0,0,362.8,411h0a49.2,49.2,0,0,0,98.4,0h0A49.2,49.2,0,0,0,412,361.8Z" />
                                    <path d="M118,452.7A41.7,41.7,0,1,1,159.7,411,41.75,41.75,0,0,1,118,452.7Z" />
                                    <path
                                        d="M118,376.8A34.2,34.2,0,1,1,83.8,411,34.24,34.24,0,0,1,118,376.8m0-15A49.2,49.2,0,0,0,68.8,411h0a49.2,49.2,0,0,0,98.4,0h0A49.2,49.2,0,0,0,118,361.8Z" />
                                    <circle cx="118.07" cy="264.2" r="41.7" />
                                    <path
                                        d="M118.07,230a34.2,34.2,0,1,1-34.2,34.2,34.24,34.24,0,0,1,34.2-34.2m0-15h0a49.19,49.19,0,0,0-49.2,49.2h0a49.2,49.2,0,0,0,49.2,49.2h0a49.2,49.2,0,0,0,49.2-49.2h0a49.2,49.2,0,0,0-49.2-49.2Z" />
                                    <circle cx="412.07" cy="264.2" r="41.7" />
                                    <path
                                        d="M412.07,230a34.2,34.2,0,1,1-34.2,34.2,34.24,34.24,0,0,1,34.2-34.2m0-15h0a49.19,49.19,0,0,0-49.2,49.2h0a49.2,49.2,0,0,0,49.2,49.2h0a49.2,49.2,0,0,0,49.2-49.2h0a49.2,49.2,0,0,0-49.2-49.2Z" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="grid" id="dice-else-box">
                        <input type="range" name="bet-range" id="bet-range" min="1"
                            max="<?php echo floor($_SESSION["money"]) ?>" value="1" step="1">
                        <input type="number" name="bet-amount" id="bet-amount" min="1"
                            max="<?php echo floor($_SESSION["money"]) ?>" value="1">
                    </div>
                </article>
                <div class="grid">
                    <article>
                        <?php if (!isset($_POST["control-input"]))
                            echo "<header style='display: flex; justify-content: space-evenly' id='die-container'>
                        </header>";
                        else
                            echo "<header style='display: none;' id='die-container'>
                        </header>"; ?>
                        <input type="submit" value="Roll" name="spinner"
                            style="width:30%;margin-left:50%;transform:translateX(-50%)">
                    </article>
            </form>
            </div>
        </article>

    </main>

    <script>
        const moneyDisplay = document.getElementById("money");
        let money = <?php echo json_encode(floor($_SESSION["money"])); ?>;
        const res = <?php echo json_encode($die1); ?>;
        const bool = <?php echo json_encode($bool); ?>
    </script>
    <script src="js/dice.js"></script>
</body>

</html>