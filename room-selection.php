<?php
session_start();
isset($_POST["money"]) && $_SESSION["money"] = $_POST["money"];
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
                <h1>Gambling room:</h1>
                <h1><span>
                        <?php echo $_SESSION["money"]; ?>
                    </span>
                    <img id="coin-img" src="img/coin.png" alt="-C">
                </h1>
            </header>
            <div class="grid">
                <form action="crash.php" method="post" class="room-select-box">
                    <article>
                        <header>
                            <h2>Crash</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                                <path fill="currentColor"
                                    d="M110.391 945.609v-89.566l77.522-77.522v167.088h-77.522Zm165.565 0V695.478l77.523-77.523v327.654h-77.523Zm165.565 0V617.955l77.523 77.958v249.696h-77.523Zm165.566 0V694.782l77.522-76.957v327.784h-77.522Zm165.565 0V533.782l76.957-76.957v488.784h-76.957Zm-662.261-225.26V607.652L400 320.043l160 160 289.609-290.61v112.132L560 592.74l-160-160-289.609 287.609Z" />
                            </svg>
                        </header>
                        <input type="submit" value="Play">
                    </article>
                </form>
                <form action="dice.php" method="post" class="room-select-box">
                    <input type="text" name="control-input" style="display: none;">
                    <article>
                        <header>
                            <h2>Dice</h2>
                            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48">
                                <path fill="currentColor"
                                    d="M303.705 802.413q20.882 0 35.382-14.618 14.5-14.617 14.5-35.5 0-20.882-14.618-35.382-14.617-14.5-35.5-14.5-20.882 0-35.382 14.618-14.5 14.617-14.5 35.5 0 20.882 14.618 35.382 14.617 14.5 35.5 14.5Zm0-352.826q20.882 0 35.382-14.618 14.5-14.617 14.5-35.5 0-20.882-14.618-35.382-14.617-14.5-35.5-14.5-20.882 0-35.382 14.618-14.5 14.617-14.5 35.5 0 20.882 14.618 35.382 14.617 14.5 35.5 14.5ZM480.118 626Q501 626 515.5 611.382q14.5-14.617 14.5-35.5Q530 555 515.382 540.5q-14.617-14.5-35.5-14.5Q459 526 444.5 540.618q-14.5 14.617-14.5 35.5Q430 597 444.618 611.5q14.617 14.5 35.5 14.5Zm176.413 176.413q20.882 0 35.382-14.618 14.5-14.617 14.5-35.5 0-20.882-14.618-35.382-14.617-14.5-35.5-14.5-20.882 0-35.382 14.618-14.5 14.617-14.5 35.5 0 20.882 14.618 35.382 14.617 14.5 35.5 14.5Zm0-352.826q20.882 0 35.382-14.618 14.5-14.617 14.5-35.5 0-20.882-14.618-35.382-14.617-14.5-35.5-14.5-20.882 0-35.382 14.618-14.5 14.617-14.5 35.5 0 20.882 14.618 35.382 14.617 14.5 35.5 14.5ZM182.152 941.978q-27.599 0-47.865-20.265-20.265-20.266-20.265-47.865V278.152q0-27.697 20.265-48.033 20.266-20.337 47.865-20.337h595.696q27.697 0 48.033 20.337 20.337 20.336 20.337 48.033v595.696q0 27.599-20.337 47.865-20.336 20.265-48.033 20.265H182.152Zm0-68.13h595.696V278.152H182.152v595.696Zm0-595.696v595.696-595.696Z" />
                            </svg>
                        </header>
                        <input type="submit" value="Play">
                    </article>
                </form>
            </div>
        </article>

    </main>
</body>

</html>