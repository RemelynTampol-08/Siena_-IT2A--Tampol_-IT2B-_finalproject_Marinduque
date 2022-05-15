<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sta.Cruz Spots</title>
    <style>
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
            echo "<h1> SANTA CRUZ SPOTS </h1>";
            echo "<img src='images/map_stacruz.png'>";
        ?>
      </div>
      <div class="spot1">
        <?php
            echo "<h1> 1. Holy Cross Parish, Sta.Cruz Marinduque</h1>";
            echo "<p>📌<i><b>Santa Cruz, Marinduque Church </br>📞 0955-669-0180 </br></i></b></p>";
            echo "<img src='images/santa1.jpg'>";
            echo "<img src='images/santa2.jpg'>";
        ?>
      </div>
      <div class="spot2">
        <?php
            echo "<h1> 2. Bathala Cave</h1>";
            echo "<p>📌<i><b>Ipil, Santa Cruz, Marinduque </br>📞 0916-750-1442 </br></i></b></p>";
            echo "<img src='images/bathala.jpg'>";
            echo "<img src='images/bathala2.jpg'>";
            echo "<img src='images/bathala1.jpg'>";
            echo "<img src='images/bathala3.jpg'>";
        ?>
    </div>
    <div class="spot3">
        <?php
            echo "<h1> 3. Maniwaya Island</h1>";
            echo "<p>📌<i><b>Maniwaya Island, Santa Cruz Marinduque </br>📞 0990-765-1230 </br></i></b></p>";
            echo "<img src='images/maniwaya1.jpg'>";
            echo "<img src='images/maniwaya5.JPG'>";
            echo "<img src='images/maniwaya4.png'>";
            echo "<img src='images/maniwaya6.jpg'>";
        ?>
    </div>
    </div>
</body>
</html>