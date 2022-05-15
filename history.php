<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <style>
         a*{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            }
            body{
            background-color: #F4D03F;
            background-image: linear-gradient(132deg, #F4D03F 0%, #16A085 100%);
            background-repeat: no-repeat;
            }
            .wrapper{
            background-color: white;
            padding: 20px;
            margin: 0 auto;
            width: 1150px;
            border-top: 5px solid black;
            border-bottom: 5px solid black;
            overflow: hidden;
            }
            .top{
            background-color: white;
            padding: 20px;
            text-align:center;
            }
            .top h1{
            font-size: 60px;
            padding: 20px 20px 20px 20px;
            }
            .top img{
            width: 550px;
            margin: 0px;
            border-radius: 20px;
            padding-top: 20px;
            }
            .top p{
            padding: 20px;
            text-align:justify;
            font-family: cursive;
            font-size: 20px;
            text-indent: 20px;
            }
            @media only screen and (max-width: 1000px){
            .top{
                flex-basis: 100%;
            }
            .top h1{
                font-size: 50px;
            }
            .top img{
                width:90%;
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
        echo "<h1>History of Marinduque</h1>";
        echo "<img src='images/history.jpeg'>";
        echo "<p>Marinduque started as a story of two lovers . The only story is about its ancient beginnings when the Island was first formed. It was said that two lovers went out to sea and drowned for their love was forbidden on land. The earth felt so sorry for the two lovers, it decided to leave a mark in the place where they drowned. An island named Marinduque - a combination of both of their names, Marina and Garduk - arose out of the sea in a heart shaped form.</p>";
        echo "<p> In the Spanish accounts, the people called the island Malandik or Malindig because that was the name of the volcano on the island. But the Spanish could not pronounce it, so they called it Marinduk and it eventually, became Marinduque (maybe due to extra spanish influence or maybe after the spanish left, they just wanted it to sound spanish.). It was settled by people mainly from Batangas and Mindoro. Marinduque was an extension of a settlement whose permanent base was in Batangas. Dumagsil and Balkasusa were the two Bornean Datus who ruled over these settlements called the Bonbon settlements.</p>";
        echo "<p> I believe Mindoro has influences because that is the only island which can be easily reached from Marinduque. The Visayas and the Bikol region are unreachable from Marinduque by boat because of unfavorable currents. Tagalog became the main dialect in Marinduque because Tagalogs were the more dominant ethnic group in the area. These Tagalog influences came from Batangas. Other people in Marinduque, like Mangyans from Mindoro, probably were assimilated into the Tagalog culture, because they had a less dominant culture. I believe there are some superstitions which Mangyans and Marinduquenos share, but that still has to be further researched. Other proof of the link between Mindoro and Marinduque is the Moriones festival and the use of the Kalutang, a wooden instrument.</p>";
        ?>
        </div>
    </div>
</body>
</html>