<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traditional Foods in Marinduque</title>
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
        .suman h3{
        padding-top: 10px;
        padding-bottom:20px;
        font-size: 20px;
        }
        .suman img{
        border-radius: 20px;
        width: 50%;
        }
        .suman p{
        padding: 20px 40px 40px 40px;
        text-align: justify;
        text-indent: 50px;
        font-family: cursive;
        }
        .bibingka h3{
        padding-top: 10px;
        padding-bottom:20px;
        font-size: 20px;
        }
        .bibingka img{
        border-radius: 20px;
        width: 35%;
        }
        .bibingka p{
        padding: 20px 40px 40px 40px;
        text-align: justify;
        text-indent: 50px;
        font-family: cursive;
        }
        .saludsod h3{
        padding-top: 10px;
        padding-bottom:20px;
        font-size: 20px;
        }
        .saludsod img{
        border-radius: 20px;
        width: 35%;
        }
        .saludsod p{
        padding: 20px 40px 40px 40px;
        text-align: justify;
        text-indent: 50px;
        font-family: cursive;
        }
        .kari-kari h3{
        padding-top: 10px;
        padding-bottom:20px;
        font-size: 20px;
        }
        .kari-kari img{
        border-radius: 20px;
        width: 35%;
        }
        .kari-kari p{
        padding: 20px 40px 40px 40px;
        text-align: justify;
        text-indent: 50px;
        font-family: cursive;
        }
        .ulang-ulang h3{
        padding-top: 10px;
        padding-bottom:20px;
        font-size: 20px;
        }
        .ulang-ulang img{
        border-radius: 20px;
        width: 35%;
        }
        .ulang-ulang p{
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
                echo "<h2>Traditional Foods of Marinduque</h2>";
            ?>
        </div>
        <div class="nav">
            <div class="suman">
                <?php
                    echo "<h3>Suman with Kalamayhati</h3>";
                    echo "<img src='images/suman.jpg'>";
                    echo "<p>Suman is usually made up of glutinous rice cooked in coconut milk and wrapped in banana leaves or palm leaf strips. These sticky native rice delicacies are often eaten with sugar, latik or kalamayhati. In Marinduque, they have a unique version of suman called tininta suman.</p>";
                ?>
            </div>
            <div class="bibingka">
                <?php
                    echo "<h3>Bibingkang Lalaki</h3>";
                    echo "<img src='images/bibingka.jpg'>";
                    echo "<p>The island province has several native versions of bibingka, a staple rice cake delicacy found all over the Philippines, with Bibingkang Lalaki (male bibingka) being just one of them. Bibingkang Lalaki is also referred to as Bibingkang Boac, named after the province’s capital. It’s a huge portion of bibingka; that’s the size of a pizza. Locals will explain amusedly that this version of bibingka is called as thus because it contains eggs. Bibingkang lalaki also uses coconut wine instead of yeast, which keeps its inside moist after cooking.</p>";
                ?>
            </div>
            <div class="saludsod">
                <?php
                    echo "<h3>saludsod</h3>";
                    echo "<img src='images/saludsod.jpg'>";
                    echo "<p>Saludsod is Marinduque’s native version of pancakes. It’s a popular local delicacy that visitors absolutely must try when in Marinduque as they’ll never find this anywhere else in the Philippines. This local pancake is made with a special batter using native ingredients, including arrowroot powde , coconut milk, flour, and sugar. The batter is then cooked on a hot pan just like a typical pancake. But saludsod is sweeter in flavor and has a creamy/buttery texture.</p>";
                ?>
            </div>
            <div class="kari-kari">
                <?php
                    echo "<h3>Kari-kari</h3>";
                    echo "<img src='images/kari-kari.jpg'>";
                    echo "<p>In most parts of Luzon, Kare-kare is popular comfort food made up of oxtail stew with rich peanut butter sauce. This savory stew is very different from Marinduque’s version of kare-kare. In Marinduque, kare-kare, or as they call it Kari-Kari, is a cross between bopis and dinuguan. It’s like bopis with pork blood and a dried version of dinuguan. Marinduque’s Kari-Kari is made up of the pig’s innards like its heart, small intestines, kidneys, spleen, and blood. It’s also cooked with garlic, onion, and chili peppers. If you want to sample Kari-Kari while in Marinduque, you should visit Casa de Don Emilio and Café Mamita – two of the highly recommended places to eat in Boac, Marinduque.</p>";
                ?>
            </div>
            <div class="ulang-ulang">
                <?php
                    echo "<h3>Ulang-ulang</h3>";
                    echo "<img src='images/ulang-ulang.jpg'>";
                    echo "<p>Ulang-ulang is one of the top must-try native dishes in Marinduque. It’s a seafood dish made of crab meat from a native variety of crab in Marinduque called kagang. The crab meat is cooked with shredded coconut and coconut milk and other ingredients like onion, garlic, and kalamansi juice. It’s then served inside a crab shell wrapped in banana leaves. Opening this wrapped dish is like opening a delicious seafood present.</p>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>