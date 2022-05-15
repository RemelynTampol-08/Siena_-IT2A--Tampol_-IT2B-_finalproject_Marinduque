<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Culture</title>
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
        font-size: 95px;
        padding: 20px 20px 20px 20px;
        }
        .nav{
        text-align: center;
        }
        .putong h3{
        padding-top: 10px;
        padding-bottom:20px;
        font-size: 20px;
        }
        .putong img{
        border-radius: 20px;
        width: 50%;
        }
        .putong p{
        padding: 20px 40px 40px 40px;
        text-align: justify;
        text-indent: 50px;
        font-family: cursive;
        }
        .butterfly h3{
        padding-top: 10px;
        padding-bottom:20px;
        font-size: 20px;
        }
        .butterfly img{
        border-radius: 20px;
        width: 35%;
        }
        .butterfly p{
        padding: 20px 40px 40px 40px;
        text-align: justify;
        text-indent: 50px;
        font-family: cursive;
        }
        .morion h3{
        padding-top: 10px;
        padding-bottom:20px;
        font-size: 20px;
        }
        .morion img{
        border-radius: 20px;
        width: 50%;
        }
        .morion p{
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
            echo "<h2>Cultures of Marinduque</h2>";
           ?>
      </div>
      <div class="nav">
        <div class="putong">
            <?php
                echo "<h3>Putong</h3>";
                echo "<img src='images/putong.jpg'>";
                echo "<p>Putong or tubong is a ceremony occasionally performed in the Province of Marinduque, Philippines, in which visitors are honored and welcomed. The ceremony takes the form of the eponymous song which is a call for thanksgiving, hope and prayer for a long, blessed life. The ceremony begins with the celebrants gathering around the home of the host, they begin singing slowly as they enter the house, accompanied by a guitarist. They women wear costumes such as a kimono or a saya, while the men wear a barong, and they carry baskets of flowers, palm leaves, or coins. Once in the home, the tempo of the song picks up until a crown is placed on the honoree's head. After being crowned, the honoree is then showered with the contents of the celebrant's baskets. The celebration ends with all the participants shouting Mabuhay, which means long life.</p>";
            ?>
        </div>
        <div class="butterfly">
            <?php
                echo "<h3>Butterfly Farming</h3>";
                echo "<img src='images/butterfly.jpg'>";
                echo "<p>Butterflies are one of the most fascinating and beautiful insects. Watching them flutter on rows of colorful and scented flowers makes you smile. In Marinduque there is a place where in you can watch butterflies!!! Welcome to  “Marinduque Lepidoptera Farm and Garden” which is located at Baranggay Uno, Gasan Marinduque.</p>";
            ?>
        </div>
        <div class="morion">
            <?php
                echo "<h3>Moriones Festival</h3>";
                echo "<img src='images/moriones.jpg'>";
                echo "<p>The Moriones is a lenten festival held annually on Holy Week on the island of Marinduque, Philippines. The Moriones are men and women in costumes and masks replicating the garb of biblical Imperial and Royal Roman soldiers as interpreted by locals. The Moriones tradition has inspired the creation of other festivals in the Philippines where cultural practices is turned into street festivals. It is a colorful festival celebrated on the island of Marinduque in the Philippines. The participants use morion masks to depict the Roman soldiers and Syrian mercenaries within the story of the Passion of the Christ. The mask was named after the 16th and 17th century Morion helmet. The Moriones refers to the masked and costumed penitents who march around the town for seven days searching for Longinus. Morions roam the streets in town from Holy Monday to Easter Sunday scaring the kids, or engaging in antics or surprises to draw attention. This is a folk-religious festival that re-enacts the story of Saint Longinus, a Roman centurion who was blind in one eye. The festival is characterized by colorful Roman costumes, painted masks and helmets, and brightly colored tunics.</p>";
            ?>
        </div>
      </div>
    </div>
</body>
</html>