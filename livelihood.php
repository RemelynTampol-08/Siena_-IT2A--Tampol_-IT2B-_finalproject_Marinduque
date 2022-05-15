<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livelihood</title>
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
        font-size: 85px;
        padding: 20px 20px 20px 20px;
        }
        .nav{
        text-align: center;
        }
        .fishing h3{
        padding-top: 10px;
        padding-bottom:20px;
        font-size: 20px;
        }
        .fishing img{
        border-radius: 20px;
        width: 50%;
        }
        .fishing p{
        padding: 20px 40px 40px 40px;
        text-align: justify;
        text-indent: 50px;
        font-family: cursive;
        }
        .farming h3{
        padding-top: 10px;
        padding-bottom:20px;
        font-size: 20px;
        }
        .farming img{
        border-radius: 20px;
        width: 45%;
        }
        .farming p{
        padding: 20px 40px 40px 40px;
        text-align: justify;
        text-indent: 50px;
        font-family: cursive;
        }
    </style>
</head>
<body>
    <div class="wrapper">
      <div class="header">
          <?php
            echo "<h2>Livelihood of Marinduque</h2>";
          ?>
      </div>
      <div class="nav">
        <div class="fishing">
            <?php
                echo "<h3>Fishing</h3>";
                echo "<img src='images/fishing.jpg'>";
                echo "<p>Fishing is one of the most considered livelihood in the province of marinduque. Since the province was sorrounded by seas it is very convenient for them to engage in this kind of job. Marinduque Island is also considered as one of the best place where marine wildlife is good and stable. However because of wrong fishing procedures such as dynamite fishing it causes severe effect to the marine wildlife thus as an impact to the human it causes the high prices of fish in market the that the government was trying to reponds in this kind of situation.</p>";
            ?>
        </div>
        <div class="farming">
            <?php
                echo "<h3>Farming</h3>";
                echo "<img src='images/farming.jpg'>";
                echo "<p>In terms of farming Marinduque is indeed ideal in this kind of livelihood. Since it is a provice the agricultural crops are difinitely suitable for every aspect of lands. Farming would not be hard for the people living in the community since the water supply in the province is good enough and the infractures is not a problem.</p>";
            ?>
        </div>
      </div>
    </div>
</body>
</html>