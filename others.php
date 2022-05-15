<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Others</title>
    <style>
        *{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        }
        body{
        background-color: lightblue;
        }
        .wrapper{
        background-color: white;
        padding: 20px;
        margin: 0 auto;
        width: 1150px;
        border-top: 5px solid gold;
        border-bottom: 5px solid gold;
        overflow: hidden;
        }
        .header{
        background-color: white;
        padding: 20px;
        text-align:center;
        }
        .header h2{
        font-size: 100px;
        padding: 20px 20px 20px 20px;
        }
        .nav{
        text-align: center;
        }
        .nav ul li{
        list-style: none;
        display: inline-block;
        margin-right: 150px;
        padding: 1px 85px 10px 200px;
        font-size:20px;
        }
        .nav ul li a{
        text-decoration: none;
        }
        .nav ul li a:hover{
        color: red;
        }
        .left-side-bar{
        float: left;
        }
        .left-side-bar img{
        font-size: 10px;
        width: 350px;
        }
        .image{
        float: center;
        }
        .image img{
        
        width: 1000px;
        padding: 20px 0px 20px 0px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <?php
                echo "<h2>OTHERS</h2>";
            ?>
        </div>
        <div class="nav">
            <ul>
                <li><a href="culture.php">Culture</a></li>
                <li><a href="food.php">Foods</a></li>
                <li><a href="livelihood.php">Livelihood</a></li>
            </ul>
            <div class="image">
                <?php
                    echo "<img src='images/others.jpg'>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>