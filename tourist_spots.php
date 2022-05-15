<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourist Spots</title>
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
            .top{
            background-color: white;
            padding: 20px;
            text-align:center;
            }
            .top h2{
            font-size: 50px;
            padding: 20px 20px 20px 20px;
            }
            nav ul li{
            list-style: none;
            display: block;
            margin-right: 30px;
            padding: 10px;
            }
            nav ul li a{
            text-decoration: none;
            color: black;
            font-size: 40px;
            font-family: Gothic Century;
            }
            nav ul li a:hover{
            color: red;
            }
            nav img{
            padding: 50px;
            width: 45%;
            }
            @media only screen and (max-width: 1000px){
            .top{
                flex-basis: 100%;
            }
            .top h2{
                font-size: 150%;
                padding: 0px;
            }
            nav ul li a{
                font-size: 30px;
            }
            nav ul li a:hover{
            color: red;
            }
            
            .top img{
                width:70%;
            }
            .top p{
                font-size:15px;
            }
            .wrapper{
                width: 81%;
            }
            }
    </style>
</head>
<body>
<div class="wrapper">
      <div class="top">
        <?php
                echo "<h2> Tourist spots in every town of Marinduque. <i> (Please click the town you want to visit) </i></h2>";
        ?>
        <nav>
          <ul>
            <?php
                echo "<li> <a href='buenavista_spots.php'>Buenavista</a></li>";
                echo "<li> <a href='gasan_spots.php'>Gasan</a></li>";
                echo "<li> <a href='boac_spots.php'>Boac</a></li>";
                echo "<li> <a href='mogpog_spots.php'>Mogpog</a></li>";
                echo "<li> <a href='stacruz_spots.php'>Santa Cruz</a></li>";
                echo "<li> <a href='torrijos_spots.php'>Torijos</a></li>";
            ?>
          </ul>
            <?php
                echo "<img src='images/more fun.jpg'>";
            ?>
        </nav>
      </div>
    </div>
</body>
</html>