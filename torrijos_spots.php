<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torrijos Spots</title>
    <style>
        body{
        background-color: yellowgreen;
        font-family: Century Gothic;
        font-size: 14px;
        margin: 0px;
        padding: 0px;
        }

        div.wrapper{
        background-color: white;
        padding: 30px;
        margin: 0 auto;
        width: 1100px;
        border-top: 5px solid gold;
        border-bottom: 5px solid gold;
        }

        div.header{
        padding: 0px;
        margin: 0px;
        }

        div.header h1{
        text-align: center;
        font-size: 85px;
        }

        div.header img{
        margin: auto;
        padding: 40px;
        width: 35%;
        display: block;
        }

        div.spot1{
        padding: 0px;
        margin: 0px;
        }

        div.spot1 h1{
        font-size: 50px;
        }

        div.spot1 p{
        margin: 0px;
        font-size:20px;
        }

        div.spot1 img{
        float: center;
        padding: 20px;
        width: 300px;
        }

        div.spot2{
        padding: 0px;
        margin: 0px;
        }

        div.spot2 h1{
        font-size: 50px;
        }

        div.spot2 p{
        margin: 0px;
        font-size:20px;
        }

        div.spot2 img{
        float: center;
        padding: 20px;
        width: 300px;
        }

        div.spot3{
        padding: 0px;
        margin: 0px;
        }

        div.spot3 h1{
        font-size: 50px;
        }

        div.spot3 p{
        margin: 0px;
        font-size:20px;
        }

        div.spot3 img{
        float: center;
        padding: 20px;
        width: 300px;
        border-radius: 20px;
        }
    </style>
</head>

<body>
<div class="wrapper">
      <div class="header">
        <?php
            echo "<h1> TORRIJOS SPOTTED </h1>";
            echo "<img src='images/map_torrijos.png'>";
        ?>
      </div>
      <div class="spot1">
        <?php
            echo "<h1> 1. White Beach Resort</h1>";
            echo "<p>📌<i><b> Poctoy, Torrijos, Marinduque </br>📞 0930-975-9865 </i></b></br></p>";
            echo "<img src='images/poctoy1.jpg'>";
            echo "<img src='images/poctoy2.jpg'>";
            echo "<img src='images/poctoy3.jpg'>";
            echo "<img src='images/poctoy4.webp'>";
            echo "<img src='images/poctoy6.jpg'>";
            echo "<img src='images/poctoy5.jpg'>";
        ?>
      </div>
      <div class="spot2">
          <?php
            echo "<h1> 2. Exotic Island View Beach Resort</h1>";
            echo "<p>📌<i><b> Poctoy, Torrijos, Marinduque </br>📞 0921-513-9161 </i></b></br></p>";
            echo "<img src='images/exotic1.jpg'>";
            echo "<img src='images/exotic4.jpg'>";
            echo "<img src='images/exotic5.jpg'>";
            echo "<img src='images/exotic6.jpg'>";
            echo "<img src='images/exotic7.jpg'>";
            echo "<img src='images/exotic8.jpg'>";
        ?>
    </div>
    <div class="spot3">
        <?php
            echo "<h1 > 3. Beach Club Cagpo</h1>";
            echo "<p>📌<i><b> Cagpo, Torrijos, Marinduque </br>📞 0908-115-8520 </i></b></br></p>";
            echo "<img src='images/cagpo1.jpg'>";
            echo "<img src='images/cagpo2.jpg'>";
            echo "<img src='images/cagpo3.jpg'>";
            echo "<img src='images/cagpo4.jpg'>";
        ?>
    </div>
    </div>
</body>
</html>