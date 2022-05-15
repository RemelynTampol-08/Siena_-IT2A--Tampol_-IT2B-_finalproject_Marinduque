<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politian</title>
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
        font-size: 65px;
        }

        div.header img{
        margin: auto;
        padding: 40px;
        width: 35%;
        display: block;
        }

        div.spot h1{
        font-size: 40px;
        text-align: center;
        }

        div.spot p{
        margin: 0px;
        font-size:20px;
        text-align: center;
        }

        div.spot img{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 20%;
        }
    </style>
</head>
<body>
<div class="wrapper">
      <div class="header">
          <?php
        echo "<h1> Current Politicians in Marinduque </h1>";
        echo "<img src='images/politics.png'>";
        ?>
      </div>
      <div class="spot">
        <?php
            echo "<h1> Governor</h1>";
            echo "<p><b><i>Presby Velasco </i></b></p></br>";
            echo "<img src='images/gov.jpg'>";
            
        ?>
    </div>
    <div class="spot">
        <?php
            echo "<h1> Vice Governor</h1>";
            echo "<p><b><i>Angeles Lyn</i></b></br></p>";
            echo "<img src='images/vice-gov.jpg'>";
        ?>    
    </div>
    <div class="spot">
        <?php
            echo "<h1> Boac Mayor</h1>";
            echo "<p><b><i> Ami Carrion </i></b></br></p>";
            echo "<img src='images/boac-mayor.jpg'>";
        ?>
    </div>
    <div class="spot">
        <?php
            echo "<h1> Torrijos Mayor</h1>";
            echo "<p><b><i> Lorna Velasco </i></b></br></p>";
            echo "<img src='images/torrijos_mayor.jpg'>";
        ?>
    </div>
    <div class="spot">
        <?php
            echo "<h1> Gasan Mayor</h1>";
            echo "<p><b><i> Rolando Tolentino </i></b></br></p>";
            echo "<img src='images/gasan_mayor.jpg'>";
        ?>
    </div>
    <div class="spot">
        <?php
            echo "<h1> Buenavista Mayor</h1>";
            echo "<p><b><i> Bong Siena </i></b></br></p>";
            echo "<img src='images/buenavista_mayor.jpg'>";
        ?>
    </div>
    <div class="spot">
        <?php
            echo "<h1> Mogpog Mayor</h1>";
            echo "<p><b><i> Augusto Leo Livelo</i></b></br></p>";
            echo "<img src='images/mogpog_mayor.jpg'>";
        ?>
    </div>
    <div class="spot">
        <?php
            echo "<h1> Sta.Cruz Mayor</h1>";
            echo "<p><b><i> Marisa Red</i></b></br></p>";
            echo "<img src='images/sta.cruz_mayor.jpg'>";
        ?>
    </div>
    </div>
</body>
</html>