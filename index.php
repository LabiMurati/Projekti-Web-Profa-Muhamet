<?php 
include "crud/databaseconfig.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <link href="index.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="wrapper">
        <div class="Nav-Bar">
            <a href="#home">Home</a>
            <a href="#news">News</a>
            <a href="contact.php" target="_blank">Contact</a>
            <a href="Findus.php" target="_blank">About</a>
            <a href="Login.php" target="_blank">Log in</a>
            <a href="Aboutus.php" target="_blank">About Us</a>
            <a href="Findus.php" targer="_blank">Find Us</a>
            <a href="Register.php" target="_blank">Register</a>
            <?php 
              if(isset( $_SESSION['userId'] )){
           //echo ' <a href="logout.php">Log out</a>';
              }else{
            
            echo'<a href="Login.php" target="_blank">Log in</a>
            <a href="Register.php" target="_blank">Register</a>';
          }

          if($_SESSION['userId'] == 11){
            echo ' <a href="admin.php">Admin</a>';
            echo ' <a href="logout.php" target=_blank">Log out</a>';
        }else{

        }
            ?>
        </div>
        <div class="Down-Bar">
            <img class="Blueprint" src="Blueprint.png" style="max-width: 100%; height: auto;" />

            <img class="Wordpress" src="Anotherwordpresstheme.png" />
            <img class="Wireless" src="Wireless.png" />

            <img class="Twitter" src="Twitter1.png" />
            <h5 class="Subscribes1">Subscribes</h5>
            <h5 class="Followers1">Followers</h5>
            <h3 class="Numberone">1055</h3>
            <h3 class="Numbertwo">2134</h3>

            <div class="Menu">
                <a class="Technology" href="#Technology">Technology</a>
                <a class="Webdesign" href="#Webdesign">Webdesign</a>
                <a class="Interview" href="#Interview">Interview</a>
                <a class="Freebies" href="#Freebies">Freebies</a>
                <a class="Social_Media" href="#SocialMedia">Social Media</a>
                <a class="Entertainment" href="#Entertainment">Entertainment</a>
            </div>
        </div>
        <div class="Down-Bar2">
            <div class="Column1">
                <div class="AboutBlueprint">
                    <h2>About Blueprint</h2>
                    <p>
                        Id fermentum in platea. Nulla donec nullam congue volutpat
                        sceleris- que,vitae arcu,idsed vestibulum in convallis sit.Augue
                        ac elit sapien mauris integer ut.
                    </p>
                </div>
                <div class="Categoriestext">
                    <h2>Categories</h2>
                    <ul>
                        <li>
                            <a class="Technologyy">-Technology</a>
                        </li>
                        <li>
                            <a class="WebDesignn">-WebDesign</a>
                        </li>
                        <li>
                            <a class="Intervieww">-Interview</a>
                        </li>
                        <li>
                            <a class="Freebiess">-Freebies</a>
                        </li>
                        <li>
                            <a class="SocialMediaa">-SocialMedia</a>
                        </li>
                        <li>
                            <a class="Entertainmentt">-Entertainment</a>
                        </li>
                    </ul>
                </div>
                <div class="Archives">
                    <h2>Archives</h2>
                    <ul>
                        <li>
                            <a class="July2010">-July 2010</a>
                        </li>
                        <li>
                            <a class="June2010">-June 2010</a>
                        </li>
                        <li>
                            <a class="May2010">-May 2010</a>
                        </li>
                        <li>
                            <a class="April2010">-April 2010</a>
                        </li>
                        <li>
                            <a class="March2010">-March 2010</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="Column2">
                <img class="Iphone" src="iphone.png" />
                <div class="Secondiphone">
                    <img class="iphone2" src="iphone2.png" />
                    <img id="Date" src="Date.png" />
                    <p id="July_14th_2010">July_14th_2010</p>
                    <img id="Lapsi" src="Lapsi.png" />
                    <p id="Technologysmall">Technology</p>
                    <img id="Adminlogo" src="Admin.png" />
                    <p id="Admintext">Admin</p>
                    <button id="Mybuttonn2" onclick="myFunctionn()">Read More</button>
                    <p class="Textinside">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt
                        consequatur corrupti beatae veritatis velit dolorem voluptatum
                        dolorum vitae est iste reiciendis, alias ipsa? Quae quod voluptate
                        nihil maiores nemo magni.
                    </p>
                    <p class="Iphone4great">
                        What is so great about the new iphone 4 ?
                    </p>
                    <div class="lastphoto">
                        <p id="Characterillustrion">
                            Character Illustrion / Creative Session
                        </p>
                        <img class="Character" src="Characterilustrion.png" />
                        <img id="Datee" src="Date.png" />
                        <p id="July_14th_20100">July_14th_2010</p>
                        <img id="Lapsii" src="Lapsi.png" />
                        <p id="Technologysmalll">Technology</p>
                        <img id="Adminlogoo" src="Admin.png" />
                        <p id="Admintextt">Admin</p>
                        <p class="Buildtext">
                            Sessions are blocks of articles, interviews,turorials and
                            content on a particular creative subject.<span id="dots">Sessions are hosted around the
                                Tust+each article fits best.So
                                for example web design posts might appear on Psdtuts+ ir
                                Nettuts+.</span>
                            <button id="Mybuttonn1" onclick="myFunction()">
                                Read More
                            </button>
                        </p>
                        <script>
                        function myFunction() {
                            var dots = document.getElementById("dots");
                            var moreText = document.getElementById("more");
                            var btnText = document.getElementById("Mybutton1");

                            if (dots.style.display === "none") {
                                dots.style.display = "inline";
                                btnText.innerHTML = "Read less";
                                moreText.style.display = "none";
                            } else {
                                dots.style.display = "none";
                                btnText.innerHTML = "Read less";
                                moreText.style.display = "inline";
                            }
                        }
                        </script>
                    </div>
                </div>
            </div>
            <div class="Column3">
                <input type="text" class="Search" placeholder="Enter keywords" />
                <img src="icon1.png " id="icon" />
            </div>
            <div class="Rightsideback">
                <p id="Oursponsors">Our Sponsors</p>
                <img class="designphoto" src="Design.png" />
                <img class="Buildamazingmobileapps" src="Buildamazingmobileapps.png" />
            </div>

            <div class="secondTwwiter">
                <img class="smalltwitter" src="smalltwitter.png" />
                <h4 class="FromTwwiter">From Twitter</h4>
                <p class="Text1">
                    Phasellus posuere bibendum sem eu tincidunt. Pellentesque turpis
                    neque.
                </p>
                <p class="Time1">12 hours ago</p>
                <p class="Text2">
                    Phasellus posuere bibendum sem eu tincidunt. Pellentesque turpis
                    neque.
                </p>
                <p class="Time2">12 hours ago</p>
                <p class="Text3">
                    Phasellus posuere bibendum sem eu tincidunt. Pellentesque turpis
                    neque.
                </p>
                <p class="Time3">12 hours ago</p>
            </div>
        </div>
    </div>
</body>

</html>