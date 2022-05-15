<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marinduque</title>
    <style>
        
*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
  }
  body{
    background-color: #8EC5FC;
    background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);
    background-repeat: no-repeat;
  }
  .wrapper{
    width: 100%;
    min-height: 100vh;
    padding-left: 8%;
    padding-right: 8%;
    box-sizing: border-box;
    background-color: white;
    padding: 20px;
    margin: 0 auto;
    width: 1150px;
    border-top: 5px solid yellowgreen;
    border-bottom: 5px solid yellowgreen;
    overflow: hidden;
  }
  .navbar{
    width: 100%;
    display: flex;
    align-items: center;
  }
  .background{
    width: 100px;
    cursor: pointer;
    margin: 10px 0 0 10px;
    padding-left: 0px;
  }
  .menu-icon{
    width: 25px;
    cursor: pointer;
    display: none;
  }
  nav{
    flex: 1;
    text-align: right;
  }
  nav ul li{
    list-style: none;
    display: inline-block;
    margin-right: 30px;
  }
  nav ul li a{
    text-decoration: none;
    color: black;
    font-size: 18px;
  }
  nav ul li a:hover{
    color: red;
  }
  .nav1{
    text-align: center;
    margin: 100px 0;
    padding: 0px;
    margin: 50px 0px 0px 0px;
  }
  .nav1 h2{
    color: black;
    font-size: 95px;
    font-family: cursive;
    color: black;
    padding-top: 0px;
  }
  .nav1 h5{
    color: black;
    font-size: 55px;
    color: black;
  }
  .nav2{
    text-align: center;
    margin: 50px 0;
  }
  .nav2 img{
    width: 400px;
    margin: 0px;
    border-radius: 20px 20px 20px 20px;
    padding-top: 20px;
  
  }
  .nav3{
    text-align: center;
    min-height: 50px;
  }
  .nav3 h2{
    padding: 50px 0px 10px 0px;
    color: black;
  }
  .nav3 img{
    height: 50%;
    padding-left:15px;
    padding-bottom: 20px;
    border-radius: 30px;
  }
  .nav3 p1{
    padding-top: 0px;
  }
  .nav3 p{
    text-align:justify;
    padding: 3px 25px 65px 25px;
    font-family:cursive;
    text-indent: 10%;
  }
  .social-links img{
    height: 40px;
    cursor: pointer;
    padding-top:0px;
    width:40px;
  }
  .social-links{
    padding-top:20px;
    text-align: center;
    border-top: 1px solid black;
  }
  
  
  @media only screen and (max-width: 1000px){
    nav ul{
      width: 50%;
      background: linear-gradient(skyblue, white);
      position: absolute;
      top: 25px;
      right: 0;
      z-index: 2;
    }
    nav ul li{
      display: block;
      margin-top: 5px;
      margin-bottom: 5px;
    }
    nav ul li a{
      color: black;
      font-size: 12px;
    }
    .menu-icon{
      display: block;
    }
    #menuList{
      overflow: hidden;
      transition: 0.5s;
      
    }
    .bar{
      flex-direction: column-reverse;
      margin: 20px 0;
    }
    .nav1{
      flex-basis: 100%;
      
    }
    .nav1 h2{
      font-size:40px;
    }
    .nav1 h5{
      font-size:20px;
    }
    .nav2{
      flex-basis: 100%;
    }
    .nav2 img{
      width:50%;
    }
    .nav3{
      flex-basis: 100%;
    }
    .nav3 h2{
      font-size: 20px;
    }
    .nav3 img{
      width:80%;
    }
     .social-links{
      flex-basis: 100%;
    }
    .social-links p{
      font-size: 15px;
    }
    .wrapper{
      width: 90%;
    }
  
  }
  
    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="navbar">
        <img src="images/background.jpg" class="background">
        <nav>
          <ul id="menuList">
            <li><a href="history.php"><b>HISTORY</b></a></li>
            <li><a href="tourist_spots.php"><b>TOURIST SPOTS</b></a></li>
            <li><a href="contact_us.php"><b>CONTACT US</b></a></li>
            <li><a href="politician.php"><b>POLITICIANS</b></a></li>
            <li><a href="others.php"><b>OTHERS</b></a></li>
          </ul>
        </nav>
        <img src="images/menu.png" class="menu-icon" onclick="togglemenu()">
      </div>
      <div class="nav1">
        <?php
        echo "<h2>Welcome Kabayan</h2>";
        echo "<h5>and Explore the Hidden beauty of Marinduque</h5>";
        ?>
      </div>
      <div class="nav2">
        <img src="images/map.jpg">
      </div>
      <div class="nav3">
        <?php
        echo "<h2>Moriones Festival</h2>";
        echo "<img src='images/moriones.jpg'><br>";
        echo "<p>The Moriones is a lenten festival held annually on Holy Week on the island of Marinduque, Philippines. The 'Moriones' are men and women in costumes and masks replicating the garb of biblical Imperial and Royal Roman soldiers as interpreted by locals. The Moriones tradition has inspired the creation of other festivals in the Philippines where cultural practices is turned into street festivals. It is a colorful festival celebrated on the island of Marinduque in the Philippines. The participants use morion masks to depict the Roman soldiers and Syrian mercenaries within the story of the Passion of the Christ. The mask was named after the 16th and 17th century Morion helmet. The Moriones refers to the masked and costumed penitents who march around the town for seven days searching for Longinus. Morions roam the streets in town from Holy Monday to Easter Sunday scaring the kids, or engaging in antics or surprises to draw attention. This is a folk-religious festival that re-enacts the story of Saint Longinus, a Roman centurion who was blind in one eye. The festival is characterized by colorful Roman costumes, painted masks and helmets, and brightly colored tunics.</p><br><br>";
        ?>
        </div>

      <div class="social-links">
          <?php
        echo "<img src='images/fb.png'>";
        echo "<img src='images/tw.png'>";
        echo "<img src='images/ig.png'>";
        echo "<br>";
        echo "<p><b>Parini na baya sa amin at magsaya sa puso ng Pilipinas</b></p>";
        ?>
      </div>
    </div>
    <script>
      var menuList = document.getElementById("menuList");
      
      menuList.style.maxHeight="0px";
      
      function togglemenu(){
        if(menuList.style.maxHeight=="0px")
        {
          menuList.style.maxHeight="130px"
        }
        else
        {
          menuList.style.maxHeight=="0px"
        }
      }
      
    </script>
  </body>
</html>