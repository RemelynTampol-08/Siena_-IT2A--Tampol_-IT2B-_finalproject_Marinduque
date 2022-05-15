<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buenavista Spots</title>
    <style>
        body{
        background-image: radial-gradient(circle farthest-corner at 10% 20%,  rgba(14,174,87,1) 0%, rgba(12,116,117,1) 90% );
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
        border-radius: 20px;
        }

        div.hidden1{
        padding: 0px;
        margin: 0px;
        }

        div.hidden1 h1{
        font-size: 50px;
        }

        div.hidden1 p{
        margin: 0px;
        font-size:20px;
        border-radius: 20px;
        }


        div.hidden1 img{
        float: center;
        padding: 20px;
        width: 500px;
        border-radius: 20px;
        }

        div.hidden2{
        padding: 0px;
        margin: 0px;
        }

        div.hidden2 h1{
        font-size: 50px;
        }

        div.hidden2 p{
        margin: 0px;
        font-size:20px;
        }

        div.hidden2 img{
        float: center;
        padding: 20px;
        width: 500px;
        border-radius: 20px;
        }

        div.hidden3{
        padding: 0px;
        margin: 0px;
        }

        div.hidden3 h1{
        font-size: 50px;
        }

        div.hidden3 p{
        margin: 0px;
        font-size:20px;
        }

        div.hidden3 img{
        float: center;
        padding: 20px;
        width: 500px;
        border-radius: 20px;
        }
        @media only screen and (max-width: 1000px){
            .header{
                flex-basis: 100%;
            }
            .header h1{
                width: 50%;
                font-size: 100px;
            }
        }
    </style>
</head>
<body>
<div class="wrapper">
      <div class="header">
        <?php
        echo "<h1> BUENAVISTA SPOTS </h1>";
        echo "<img src='images/map_buenavista.png'>";
        ?>
      </div>
      <div class="hidden1">
        <?php
            echo "<h1> 1. Hidden Greenery Resort</h1>";
            echo "<p>📌<b><i>Bagtingon, Buenavista, Marinduque </br>📞 0968-290-0091 </i></b></br></p>";
            echo "<img src='images/greenery-background.jpg'>";
            echo "<img src='images/hidden1.jpg'>";
            echo "<img src='images/hidden4.jpg'>";
            echo "<img src='images/hidden5.jpg'>";
        ?>
      </div>
      <div class="hidden2">
       <?php
            echo "<h1> 2. Hotspring Resort</h1>";
            echo "<p>📌<b><i> Malbog, Buenavista, Marinduque </br>📞 0963-295-1584 </i></b></br></p>";
            echo "<img src='images/hotspring3.jpg'>";
            echo "<img src='images/hotspring4.jpg'>";
            echo "<img src='images/hotspring1.jpg'>";
            echo "<img src='images/hotspring5.jpg'>";
        ?>
      </div>
      <div class="hidden3">
        <?php
            echo "<h1> 3. Bellarocca Resort</h1>";
            echo "<p>📌<b><i> Lipata,Buenavista, Marinduque </br>📞 0909-255-1880 </i></b></br></p>";
            echo "<img src='images/bellaroca1.jpg'>";
            echo "<img src='images/bellaroca4.jpg'>";
            echo "<img src='images/bellaroca2.jpg'>";
            echo "<img src='images/bellaroca3.jpg'>";
        ?>
      </div>
      
    </div>
</body>
</html>