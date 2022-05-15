<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
        .top{
        background-color: white;
        padding: 20px;
        text-align:center;
        }
        .top h3{
        font-size: 100px;
        padding: 20px 20px 20px 20px;
        }
        nav{
        flex: 1;
        text-align: center;
        }
        nav ul li{
        list-style: none;
        margin-right: 30px;
        text-decoration: none;
        color: black;
        font-size: 18px;
        }
        nav ul li:hover{
        color: red;
        }
        .top a img{
        width: 50px;
        margin: 0px;
        border-radius: 20px 20px 20px 20px;
        padding-top: 20px;
        }
        .image img{
        width: 32%;
        margin: 0px;
        padding: 5px 5px 5px 5px;
        }
        @media only screen and (max-width: 1000px){
        .top{
            flex-basis: 100%;
        }
        .top h3{
            font-size: 350%;
            padding: 0px;
        }
        nav ul li{
            padding: 10px 20px 10px 20px;
        }
        .image img{
            width:29%;
            align-items: center;
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
           <?php echo "<h3>Contact Us</h3>";?>
            <nav>
                <ul>
                    <?php
                        echo  "<li><b>TNT:</b> 0934-345-7361</li>";
                        echo  "<li><b>SMART:</b> 0991-611-8829</li>";
                        echo  "<li><b>GLOBE:</b> 0988-123-9512</li>";
                        echo  "<li><b>Email:</b> marinduquespotted@gmail.com</li>";
                        echo  "<li><b>Instagram:</b> marinduquespotted.com</li>";
                        echo  "<li><b>Twitter:</b> marinduquespotted.com</li>";
                    ?>
               </ul>
            </nav>
                <a href=""><img src='images/fb.png'></a>
                <a href=""><img src='images/tw.png'></a>
                <a href=""><img src='images/ig.png'></a>
        </div>
        <div class="image">
            <?php
               echo  "<img src='images/contact1.jpg'>";
               echo  "<img src='images/contact5.jpg'>";
               echo  "<img src='images/contact6.jpg'>";
            ?>
        </div>
    </div>
</body>
</html>