<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Webside</title>
    <script src="./js_nak/jquery-3.6.4.min.js"></script>
    <script src="./js_nak/main.js"></script>
    <link rel="stylesheet" href="./styleCss_nak/style.css">
</head>
<body>
        <div id="top_div"></div>
        <div id="left_div">
            <?php
                require './elements_nak/left.php'
            ?>
        </div>
        <div id="center_div">
            <?php
                require './elements_nak/center.php'
                // require 'pageJS/exjs02.php';
            ?>
        </div>
        <div id="right_div"></div>
        <div id="bottom_div"></div>
</body>
</html>