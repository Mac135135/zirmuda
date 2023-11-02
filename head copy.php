<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Хороший сайт</title>
    <style>
        body {
            height: 100vh;
            margin: 0;
            align-items: center;
            justify-content: center;
            font-family: Arial, sans-serif;
            color: #ffffff;
            background: aquamarine;
            box-shadow: 
                        0px -20px 15px 9px #60cccc inset, 
                        1px 11px 20px 0px #3254cd inset, 
                        0px -20px 70px -120px #c8da5e inset;
            animation: background 10s infinite alternate;
            display: inline-table;
        }

        h1 {
            font-size: 2em;
            text-align: center;
        }

        @keyframes background {
            50% {
                background: rgb(70, 0, 211);
                box-shadow: 
                            0 -140px 70px 0px rgb(85, 98, 211) inset,
                            0px -20px 10px 0px #001c80 inset, 
                            0 -280px 70px -120px rgb(174, 160, 221) inset;
            }
        }
    </style>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class style="height: 2vh;"></div>
    <div id="head"></div>
    <div id="menu">
        <li>
            <h3>
                <a href="index.php">Голубой</a>
                <a href="red.php">Красный</a>
            </h3>
        </li>
    
    </div>