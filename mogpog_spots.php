<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mogpog Spots</title>
    <style>/*External CSS*/
        body{
        background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(14,174,87,1) 0%, rgba(12,116,117,1) 90% );
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
        width: 500px;
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
        width: 500px;
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
        width: 500px;
        }
</style>
</head>
<body>
<div class="wrapper">
      <div class="header">
      <?php
            echo "<h1> MOGPOG SPOTS </h1>";
            echo "<img src='images/map_mogpog.png'>";
      ?>
      </div>
      <div class="spot1">
        <?php
            echo "<h1> 1. Luzon Datum of 1911</h1>";
            echo "<p>📌<b><i> Hinanggayon, Mogpog, Marinduque</br>📞 0929-575-5580</i></b> </br></p>";
            echo "<img src='images/luzon3.jpg'>";
            echo "<img src='images/luzon2.jpg'>";
            echo "<img src='images/luzon8.jpg'>";
            echo "<img src='images/luzon1.jpg'>";
            echo "<img src='images/luzon9.jpg'>";
            echo "<img src='images/luzon10.jpg'>";
        ?>
      </div>
      <div class="spot2">
        <?php
            echo "<h1> 2. Natangco Island</h1>";
            echo "<p>📌<b><i>Silangan, Mogpog, Marinduque</br><b>📞 0999-510-9141</i></br></p>";
            echo "<img src='images/natangco1.jpg'>";
            echo "<img src='images/natangco3.jpg'>";
            echo "<img src='images/natangco2.jpg'>";
            echo "<img src='images/natangco4.jpg'>";
        ?>
    </div>
        <div class="spot3">
        <?php
            echo "<h1> 3. Balanacan View Deck</h1>";
            echo "<p>📌<b><i>Balanacan View Deck, Mogpog Marinduque</br>📞 0955-987-7330 </i></br></p>";
            echo "<img src='images/view1.jpg'>";
            echo "<img src='images/view2.jpg'>";
            echo "<img src='images/view3.jpg'>";
            echo "<img src='images/view4.jpg'>";
        ?>
    </div>
    </div>
    
</body>
</html>