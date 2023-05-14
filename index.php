<?php

session_start();
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
        <form action="room-selection.php" method="post">
            <article>
                <div>
                    <header>
                        <h1>Starting money:</h1>
                    </header>
                    <input type="number" name="money" value="100" required max="100000" min="10">
                    <footer><button type="submit">Go</button></footer>
                </div>
            </article>
        </form>
    </main>

</body>

</html>