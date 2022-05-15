<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boac Spots</title>
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
        echo "<h1> BOAC SPOTS </h1>";
        echo "<img src='images/map_boac.png'>";
        ?>
      </div>
      <div class="spot1">
        <?php
            echo "<h1> 1. Church of Boac</h1>";
            echo "<p>📌<b><i>Town of Boac, Marinduque </br>📞 0902-702-6561 </i></b></br></p>";
            echo "<img src='images/church1.jpg'>";
            echo "<img src='images/church2.jpg'>";
            echo "<img src='images/church3.jpg'>";
            echo "<img src='images/church4.jpg'>";
        ?>
    </div>
    <div class="spot2">
        <?php
            echo "<h1> 2. Balar Hotel and Spa</h1>";
            echo "<p>📌<b><i> Balaring Building, Boac, Marinduque </br>📞 0917-882-2527 </i></b></br></p>";
            echo "<img src='images/balar1.jpg'>";
            echo "<img src='images/balar2.jpg'>";
            echo "<img src='images/balar3.jpg'>";
            echo "<img src='images/balar4.jpg'>";
        ?>
    </div>
    <div class="spot3">
        <?php
            echo "<h1> 3. Kusina sa Plaza</h1>";
            echo "<p>📌<b><i> Mercader St, Boac, Marinduque </br>📞 0942 332 1699 </i></b></br></p>";
            echo "<img src='images/kusina1.jpg'>";
            echo "<img src='images/kusina6.jpg'>";
        ?>
    </div>
    </div>
</body>
</html>