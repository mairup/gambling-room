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

    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
</head>

<body>
    <main>
        <form action="room-selection.php" method="post">
            <article style="position: relative;">
                <div>
                    <header>
                        <h1>Starting money:</h1>
                    </header>
                    <input type="number" name="money" value="100" required max="100000" min="10">
                    <footer><button type="submit">Go</button><button type="button" id="theme-toggle"></button></footer>
                </div>
            </article>
        </form>
    </main>
    <script>
        let isDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        document.documentElement.setAttribute('data-theme', isDark ? 'dark' : 'light');
        // Add an event listener to the theme toggle button
        const themeToggle = document.getElementById('theme-toggle');
        themeToggle.addEventListener('click', function () {
            // Check if the current color scheme is dark


            if (document.documentElement.getAttribute('data-theme') === 'dark')
                isDark = true;
            else
                isDark = false;
            // Toggle the color scheme
            console.log('====================================');
            console.log(isDark);
            console.log('====================================');
            document.documentElement.setAttribute('data-theme', isDark ? 'light' : 'dark');
        });
    </script>
</body>

</html>