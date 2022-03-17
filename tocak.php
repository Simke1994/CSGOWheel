<?php

    require 'steamauth/steamauth.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <title>CSGO Wheel</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--favicon-->
        <link rel="apple-touch-icon" sizes="180x180" href="slike/cswheel-apple.png">
        <link rel="icon" type="image/png" sizes="32x32" href="slike/cswheel32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="slike/cswheel16x16.png">
        <!--navigacija-->
        <link rel="stylesheet" href="css/navigacija.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!--donji deo-->
        <link rel="stylesheet" href="css/donjideo.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!--chat-->
        <link rel="stylesheet" href="css/chat.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js" 
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
        <!--tocak-->
        <link rel="stylesheet" href="css/tocak.css">
        <script type="text/javascript" src="js/tocak.js"></script>

        <style>
            *:focus {
                outline: none!important;
            }
            body{
                background: rgb(28, 28, 32);
            }
            .disclaimer{
                display:none!important;
            }
            .btn{
                font-family: sans-serif!important;
            }
            .btn:focus,.btn:active {
                outline: none !important;
            }
            .navbar-right .btn-success{
                height:4.9vh;
                margin-top:2.7%;
                padding-bottom:5px;
            }
            .navbar-right .btn-success:hover{
                color:red!important;
            }
            .slicka{
                color:white;
            }
            .dropdown-toggle{
                top:13%;
            }
            .dropdown-toggle img{
                border-radius:100%;
                width:36%;
                position:absolute;
                right:100%;
                top:13%;
            }
            #dugmence{
                position:absolute;
                top:15%;
                right:3%;
            }
            #dugmence img{
                border-radius:3px;
            }
            #dugme1{
                margin-left:-40%;
            }
            .dropdown .dropdown-menu{
                margin-left:10%;
            }
            .dropdown-menu li a{
                color:white;
            }
            .footer-distributed{
                width: 100%;
                bottom:-90%;
            }
            .footer-left p{
                font-size:13px;
                color:white;
                font-weight: normal;
            }
            .chat{
                visibility:hidden;
                position:fixed;
                top:7.9%;
                z-index: 9;
            }
            .divchat{
                width: 200%;
                height:90.4vh;
                padding-bottom:15px;
                background: rgb(28, 28, 32);
            }
            .chat .form-control{
                width: 165%;
                border-radius: 0%;
            }
            .chat .btn-success{
                position: absolute;
                left:166%;
                bottom:0%;
                border-radius: 0%;
                color:black;
                width:34.2%;
            }
            .porukica{
                color:green
            }
            .porukica img{
                border-radius:100%;
                max-width:5%;
                margin-top:1.5%;
            }
            .divchat .porukica strong{
                color:white;
                font-weight:bold;
                font-size:13px;
                margin-left:15px;
                max-width:150px;
            }
            .crtka{
                width:200%;
                height: 4.5vh;
                font-size:15px;
                font-weight:bold;
                text-align:center;
                padding-top:10px;
            }
            .navigacija{
                z-index:10;
            }
            .nav .btn{
                height:3.8vh;
            }
            .nav .btn:hover{
                color:white!important;
            }
            #stanje{
                color:white;
                position:absolute;
                top:14%;
                right:2%;
                background:transparent;
                border:2px solid green;
                border-radius:3px;
                width:5.5%;
                height:3.8vh;
                padding:5px;
            }
            #stanje img{
                width:30%;
            }
            #mojmodal{
                display:none;
            }
            ::-webkit-scrollbar {
                width: 7px;
                height:4px;
            }
            ::-webkit-scrollbar:hover{
                width:15px;
            }
            ::-webkit-scrollbar-track {
                background: #f1f1f1; 
                border-radius:30px;
            }
            ::-webkit-scrollbar-track:hover {
            }
            ::-webkit-scrollbar-thumb {
                background: #888; 
                border-radius:30px;
            }
            ::-webkit-scrollbar-thumb:hover {
                background: #555; 
            }
            .malodugme img{
                display:none;
            }
            #dugme3, #dugme4{
                display:none;
            }
            .navbar-nav .dropdown1{
                display:none;
            }
            #spin{
                z-index: 1;
            }
            .arrow{
                z-index: 2;
            }
            #timer{
                border:5px solid white;
                border-radius:15%;
                position: absolute;
                top:33.5%;
	            left:45.5%;
                width:120px;
                height:70px;
                z-index: 12;
                text-align:center;
                font-size:40px;
                padding-top:5px;
                color:white;
                border-top:none;
                border-bottom:none;
                font-weight:bold;
                text-shadow: 3px 3px green;
            }
            .dugmici{
                display:flex;
                position: absolute;
                top: 75%;
                left:43%;
            }
            .dugmici .btn{
                margin:3px;
                color:black;
            }
            .tocak .form-control{
                position:absolute;
                top:75.5%;
                left:23%;
                width:19.5%;
                height:3.5vh;
                border-radius:3px;
            }
            .btn1{
                width: 22.2%;
                height: 6vh;
                background: transparent;
                border: 3px solid rgb(136, 3, 3);
                position: absolute;
                top: 82%;
                left: 4.5%;
                color: white;
                padding-top: 0.5%;
                border-radius:4px;
                text-align: center;
                text-decoration: none!important;
                transition:0.5s background;
                font-size:20px;
            }
            .btn2{
                width: 22.2%;
                height: 6vh;
                background: transparent;
                border:3px solid rgb(6, 138, 161);
                position: absolute;
                top: 82%;
                left:27.5%;
                color: white;
                padding-top: 0.5%;
                border-radius:4px;
                text-align: center;
                text-decoration: none!important;
                transition:0.5s background;
                font-size:20px;
            }
            .btn3{
                width: 22.2%;
                height: 6vh;
                background: transparent;
                border:3px solid goldenrod;
                position: absolute;
                top: 82%;
                left: 50.5%;
                color: white;
                border-radius:4px;
                padding-top: 0.5%;
                text-align: center;
                text-decoration: none!important;
                transition:0.5s background;
                font-size:20px;
            }
            .btn4{
                width: 22.2%;
                height: 6vh;
                background: transparent;
                border: 3px solid rgb(1, 99, 1);
                position: absolute;
                top: 82%;
                left: 73.5%;
                color: white;
                padding-top: 0.5%;
                border-radius:4px;
                text-align: center;
                text-decoration: none!important;
                transition:0.5s background;
                font-size:20px;
            }
            .btn1:hover{
                background: rgb(136, 3, 3);
                color: white;
            }
            .btn2:hover{
                background: rgb(6, 138, 161);
                color: white;
            }
            .btn3:hover{
                background: goldenrod;
                color: white;
            }
            .btn4:hover{
                background: rgb(1, 99, 1);
                color: white;
            }
            .btn1:focus,.btn2:focus,.btn3:focus,.btn4:focus{
                color: white;
            }
            #ulozi1{
                width: 22.2%;
                height: 5vh;
                background: transparent;
                position: absolute;
                top: 91%;
                left: 4.5%;
                border-radius: 2px;
                border: 1px solid black;
                color:white;
            }
            #ulozi2{
                width: 22.2%;
                height: 5vh;
                background: transparent;
                position: absolute;
                top: 91%;
                left: 27.5%;
                border-radius: 2px;
                border: 1px solid black;
                color:white;
            }
            #ulozi3{
                width: 22.2%;
                height: 5vh;
                background: transparent;
                position: absolute;
                top: 91%;
                left: 50.5%;
                border-radius: 2px;
                border: 1px solid black;
                color:white;
            }
            #ulozi4{
                width: 22.2%;
                height: 5vh;
                background: transparent;
                position: absolute;
                top: 91%;
                left: 73.5%;
                border-radius: 2px;
                border: 1px solid black;
                color:white;
            }
            #ulozi1 img, #ulozi2 img, #ulozi3 img, #ulozi4 img{
                width:6%;
            }
            #ulozi1 p{
                color:white;
                width:100%;
                padding-left:13px;
                padding-top:13px;
                padding-bottom:8px;
                font-size:12px;
                font-weight: bold;
                font-style: italic;
            }
            #ulozi2 p{
                color:white;
                width:100%;
                padding-left:13px;
                padding-top:13px;
                padding-bottom:8px;
                font-size:12px;
                font-weight: bold;
                font-style: italic;
            }
            #ulozi3 p{
                color:white;
                width:100%;
                padding-left:13px;
                padding-top:13px;
                padding-bottom:8px;
                font-size:12px;
                font-weight: bold;
                font-style: italic;
            }
            #ulozi4 p{
                color:white;
                width:100%;
                padding-left:13px;
                padding-top:13px;
                padding-bottom:8px;
                font-size:12px;
                font-weight: bold;
                font-style: italic;
            }
            #pkulo1{
                width: 22.2%;
                height: 45vh;
                background: transparent;
                position: absolute;
                top: 96%;
                left: 4.5%;
                border-radius: 2px;
                border: 1px solid black;
                color:white;
                overflow:hidden;
            }
            #pkulo2{
                width: 22.2%;
                height: 45vh;
                background: transparent;
                position: absolute;
                top: 96%;
                left: 27.5%;
                border-radius: 2px;
                border: 1px solid black;
                color:white;
                overflow:hidden;
            }
            #pkulo3{
                width: 22.2%;
                height: 45vh;
                background: transparent;
                position: absolute;
                top: 96%;
                left: 50.5%;
                border-radius: 2px;
                border: 1px solid black;
                color:white;
                overflow:hidden;
            }
            #pkulo4{
                width: 22.2%;
                height: 45vh;
                background: transparent;
                position: absolute;
                top: 96%;
                left: 73.5%;
                border-radius: 2px;
                border: 1px solid black;
                color:white;
                overflow:hidden;
            }
            .ulogic{
                margin:8px;
            }
            .ulogic img{
                width:5.5%;
                margin-right:5px;
            }
            .ulogic #avatar{
                border-radius:100%;
            }
            .ulogic strong{
                font-size:12px;
            }
            .zadnji{
                position:absolute;
                top:68%;
                left:5%;
                width:85%;
            }
            .pzadnji{
                font-weight:bold;
                color:white;
                font-style:italic;
            }
            #images{
                position:absolute;
                top:-5%;
                left:13%;
                width:80%;
                height:2.5vh;
                overflow:hidden;
            }
            #images img{
                display: inline-block;
                width:1.3%;
                height:1.0vh;
                margin-left:4px;
                border-radius:100%;
            }
            .ppzadnji{
                font-weight:bold;
                color:white;
                font-style:italic;
                position:absolute;
                left:77%;
                top:1%;
            }
            .crveno img, .plavo img, .zuto img, .zeleno img{
                position:absolute;
                top: 15%;
                width:1%;
                height:1.2vh;
                border-radius:100%;
            }
            .crveno img{
                left:87%;
            }
            .plavo img{
                left:92%;
            }
            .zuto img{
                left:97%;
            }
            .zeleno img{
                left:102%;
            }
            #bcrveno, #bplavo, #bzuto, #bzeleno{
                position:absolute;
                top:1%;
                color:white;
                font-weight:bold;
                font-style:italic;
                margin-left:7px;
            }
            #bcrveno{
                left:88%;
            }
            #bplavo{
                left:93%;
            }
            #bzuto{
                left:98%;
            }
            #bzeleno{
                left:103%;
            }
            .containertocak div{
                width:200px;
            }
            @media (max-width:880px){
                .footer-distributed{
                    bottom:-68%;
                }
                .dugmence1{
                    display:none;
                }
                #dugmence{
                    display:block;
                }
                .navbar-header .navbar-brand{
                    font-size: 20px;
                }
                .divchat{
                    width:248%;
                    height:90.3vh;
                }
                .chat .form-control{
                    width: 207%;
                }
                .chat .btn-success{
                    left:208%;
                    width:40.2%;
                }
                .crtka{
                    width:248%;
                }
                .navbar-right{
                    display:none;
                }
                .malodugme img{
                    display:block;
                }
                #dugme3, #dugme4{
                    display:block;
                }
                .navbar-nav .dropdown1{
                    display:block;
                    margin-top:5px;
                }
                .dropdown1 .dropdown-toggle:focus{
                    background: none!important;
                    color:green!important;
                }
                #stanje{
                    display:none;
                }
            }
        </style>
    </head>
    <body>
        <div id="ekran">
            <div id="josjedanekran">
                <div class="modal" id="nijeulogovan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="false">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background:rgb(28, 28, 32);">
                                <h5 class="modal-title" id="exampleModalLongTitle"><img src="slike/logo.png"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="margin-top:-33px;background:red;padding-left:5px;padding-right:5px;color:white;">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" style="background:rgb(28, 28, 32);">
                            <p style="color:white;">Morate da se ulogujete na Steam da bi ste mogli da igrate!</p>
                            </div>
                            <div class="modal-footer" style="background:rgb(28, 28, 32);">
                                <?php echo "<a href='?login' id='btn btn-primary'><button type='button' class='btn btn-success'><i class='fa fa-steam'></i> Steam login</button></a>"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navigacija">
                <div class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="navbar-header">	
                                    <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                    <a class="navbar-brand" style="color: white;font-style: oblique;font-weight: bold;">CSGO</a>
                                    <a class="navbar-brand" style="color: green;margin-left: -12%;font-style: oblique;font-weight: bold;margin-left:-20px;">WHEEL</a>
                                    <div class="dugmence"><button type="button" class="btn btn-success" style="color:white;border: none;margin-right: 2rem;margin-top: 1rem;" onclick="closeChat()"><i class="fa fa-comment"></i></button></div>
                                </div>
                                <div class="navbar-collapse collapse" id="mobile_menu">
                                    <ul class="nav navbar-nav">
                                        <li><div class="dugmence1"><button type="button" class="btn btn-success" style="color:white;background:green;border: none;margin-right: 2rem;margin-top: 1rem;" onclick="closeChat()"><i class="fa fa-comment"></i></button></div></li>
                                        <li><a href="#">O nama</a></li>
                                        <li><a href="#">Kontakt</a></li>
                                        <li><a href="index.php">Rulet</a></li>
                                        <li><a href="tocak.php">Tocak srece</a></li>
                                        <?php
                                            if(!isset($_SESSION['steamid'])) {
                                                echo '<li><a href="?login" type="button" class="malodugme"><img src="slike/login.png" style="border-radius:3px;"></a></li>';
                                            }  else {
                                                include ('steamauth/userInfo.php');
                                                echo '<li><button type="button" id="dugme3" class="btn btn-success" style="color:white;border: none;margin-top: 7px;margin-left:15px;">DEPOSIT</button></li>';
                                                echo '<li><button type="button" id="dugme4" class="btn btn-success" style="color:white;border: none;margin-top: 13px;margin-left:15px;">WITHDRAW</button></li>';
                                                echo '<li class="dropdown1" style="margin-right:85px;">';
                                                    echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>"  .$steamprofile['personaname']. '<b class="caret"></b></a>';
                                                    echo '<span class="dropdown-arrow"></span>';
                                                    echo '<ul class="dropdown-menu">';
                                                        echo '<li><a href="#">Profil</a></li>';
                                                        echo '<li><a href="#">Besplatne kutije</a></li>';
                                                        echo '<li><a href="#">Opcija 3</a></li>';
                                                        echo '<li class="divinder"></li>';
                                                        echo "<li><a href='steamauth/logout.php'>Izloguj se</a></li>";
                                                    echo '</ul>';
                                                echo '</li>';
                                                echo '<li id="stanje"><img src="slike/coins.png"> </li>';
                                            }    
                                        ?>
                                    </ul>                           
                                    <ul class="nav navbar-nav navbar-right">
                                        <?php
                                            if(!isset($_SESSION['steamid'])) {
                                                //echo "<div class='dugmence'> .loginbutton();. </div>";
                                                echo "<a href='?login' id='dugmence'><img src='slike/login.png'></a>";
                                                
                                            }  else {
                                                include ('steamauth/userInfo.php');
                                                echo '<li><button type="button" id="dugme1" class="btn btn-success" style="color:white;border: none;margin-top:7px;margin-right:-15px;">WITHDRAW</button></li>';
                                                echo '<li><button type="button" id="dugme2" class="btn btn-success" style="color:white;border: none;margin-top: 7px;">DEPOSIT</button></li>';
                                                echo '<li class="dropdown" style="margin-right:85px;">';
                                                    echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>"  .$steamprofile['personaname']. '<b class="caret"></b></a>';
                                                    echo '<span class="dropdown-arrow"></span>';
                                                    echo '<ul class="dropdown-menu">';
                                                        echo '<li><a href="#">Profil</a></li>';
                                                        echo '<li><a href="#">Besplatne kutije</a></li>';
                                                        echo '<li><a href="#">Opcija 3</a></li>';
                                                        echo '<li class="divinder"></li>';
                                                        echo "<li><a href='steamauth/logout.php'>Izloguj se</a></li>";
                                                    echo '</ul>';
                                                echo '</li>';
                                                echo '<li id="stanje"><img src="slike/coins.png"> </li>';
                                            }    
                                        ?>  
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tocak">
                <div id="spin"></div>
                <div id="timer"><p id="tajmer">20</p></div>
                <span class="arrow"></span>
                <div class="containertocak">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                    <div class="four"></div>
                    <div class="five"></div>
                    <div class="six"></div>
                    <div class="seven"></div>
                    <div class="eight"></div>
                </div>
                <div class="zadnji">
                    <p class="pzadnji">ZADNJE IZABRANO</p>
                    <div id="images"></div>
                    <p class="ppzadnji">ZADNJIH 100</p>
                    <div class="crveno"><img src="slike/crveno.png"><p id="bcrveno">0</p></div>
                    <div class="plavo"><img src="slike/plavo.png"><p id="bplavo">0</p></div>
                    <div class="zuto"><img src="slike/zuto.png"><p id="bzuto">0</p></div>
                    <div class="zeleno"><img src="slike/zeleno.png"><p id="bzeleno">0</p></div>
                </div>
                <input type="number" id="polje" class="form-control" placeholder="Ulog" aria-label="Poruka" aria-describedby="basic-addon2" step="0.01">
                <div class="dugmici">
                    <?php
                        if(!isset($_SESSION['steamid'])) {
                            echo '<div class="dugme1">';
                            echo '<button class="btn btn-success" type="button" data-toggle="modal" data-target="#nijeulogovan">Izbrisi</button>';
                            echo '</div>';
                            
                            echo '<div class="dugme2">';
                            echo '<button class="btn btn-success" type="button" data-toggle="modal" data-target="#nijeulogovan"> 1 </button>';
                            echo '</div>';
                            
                            echo '<div class="dugme3">';
                            echo '<button class="btn btn-success" type="button" data-toggle="modal" data-target="#nijeulogovan">5</button>';
                            echo '</div>';
                            
                            echo '<div class="dugme4">';
                            echo '<button class="btn btn-success" type="button" data-toggle="modal" data-target="#nijeulogovan">10</button>';
                            echo '</div>';
                            
                            echo '<div class="dugme5">';
                            echo '<button class="btn btn-success" type="button" data-toggle="modal" data-target="#nijeulogovan">50</button>';
                            echo '</div>';
                            
                            echo '<div class="dugme6">';
                            echo '<button class="btn btn-success" type="button" data-toggle="modal" data-target="#nijeulogovan">100</button>';
                            echo '</div>';
                            
                            echo '<div class="dugme7">';
                            echo '<button class="btn btn-success" type="button" data-toggle="modal" data-target="#nijeulogovan">x2</button>';
                            echo '</div>';
                            
                            echo '<div class="dugme8">';
                            echo '<button class="btn btn-success" type="button" data-toggle="modal" data-target="#nijeulogovan">1/2</button>';
                            echo '</div>';
                            
                            echo '<div class="dugme9">';
                            echo '<button class="btn btn-success" type="button" data-toggle="modal" data-target="#nijeulogovan">MAX</button>';
                            echo '</div>';
                            
                        }  else {
                            echo '<div class="dugme1">';
                            echo '<button class="btn btn-success" type="button" onclick="brisi();">Izbrisi</button>';
                            echo '</div>';
                            
                            echo '<div class="dugme2">';
                            echo '<button class="btn btn-success" type="button" value="1" onclick="ik1(this.value);">1</button>';
                            echo '</div>';
                            
                            echo '<div class="dugme3">';
                            echo '<button class="btn btn-success" type="button" value="5" onclick="ik5(this.value);">5</button>';
                            echo '</div>';
                            
                            echo '<div class="dugme4">';
                            echo '<button class="btn btn-success" type="button" value="10" onclick="ik10(this.value);">10</button>';
                            echo '</div>';
                            
                            echo '<div class="dugme5">';
                            echo '<button class="btn btn-success" type="button" value="50" onclick="ik50(this.value);">50</button>';
                            echo '</div>';
                            
                            echo '<div class="dugme6">';
                            echo '<button class="btn btn-success" type="button" value="100" onclick="ik100(this.value);">100</button>';
                            echo '</div>';
                            
                            echo '<div class="dugme7">';
                            echo '<button class="btn btn-success" type="button" onclick="puta();">X2</button>';
                            echo '</div>';
                            
                            echo '<div class="dugme8">';
                            echo '<button class="btn btn-success" type="button" onclick="deli();">1/2</button>';
                            echo '</div>';
                            
                            echo '<div class="dugme9">';
                            echo '<button class="btn btn-success" type="button"">MAX</button>';
                            echo '</div>';
                        }
                    ?>
                </div>
                <?php
                    if(!isset($_SESSION['steamid'])) {
                        echo '<a href="#" type="button" class="btn1" id="ulogc" data-toggle="modal" data-target="#nijeulogovan" disabled="disabled"> x 2</a>';
                        echo '<a href="#" type="button" class="btn2" id="ulogp" data-toggle="modal" data-target="#nijeulogovan" disabled="disabled"> x 3</a>';
                        echo '<a href="#" type="button" class="btn3" id="ulogzu" data-toggle="modal" data-target="#nijeulogovan" disabled="disabled"> x 5</a>';
                        echo '<a href="#" type="button" class="btn4" id="ulogze" data-toggle="modal" data-target="#nijeulogovan" disabled="disabled"> x 50</a>';
                    }else{
                        echo '<button class="btn1" id="ulogc" onclick="UlogCT();" disabled="disabled"><p id="ctbroj"> x 2</p></button>';
                        echo '<button class="btn2" id="ulogp" onclick="UlogCT();" disabled="disabled"><p id="ctbroj"> x 3</p></button>';
                        echo '<button class="btn3" id="ulogzu" onclick="UlogKocka();" disabled="disabled"><p id="kbroj"> x 5</p></button>';
                        echo '<button class="btn4" id="ulogze" onclick="UlogTeror();" disabled="disabled"><p id="tbroj"> x 50</p></button>';
                    }
                ?>
                <div id="ulozi1"><p style='font-style:italic;font-size:14px;'>0 uloga <img src='slike/coins.png' style='margin-left:63%;'> 0</p></div>
                <div id="ulozi2"><p style='font-style:italic;font-size:14px;'>0 uloga <img src='slike/coins.png' style='margin-left:63%;'> 0</p></div>
                <div id="ulozi3"><p style='font-style:italic;font-size:14px;'>0 uloga <img src='slike/coins.png' style='margin-left:63%;'> 0</p></div>
                <div id="ulozi4"><p style='font-style:italic;font-size:14px;'>0 uloga <img src='slike/coins.png' style='margin-left:63%;'> 0</p></div>
                <div id="pkulo1"></div>
                <div id="pkulo2"></div>
                <div id="pkulo3"></div>
                <div id="pkulo4"></div>
            </div>
            <div id="josjosjedanekran">
                <footer class="footer-distributed">
                    <div class="footer-left">
                        <h3 style="font-style:italic;font-weight:bold;margin-bottom:5px;"><!--<img src="slike/logo.png">--> CSGO<span style="color: green;"> WHEEL</span></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <p class="footer-company-name" style="color: white;">Copyright © 2022. Site made by <a target="_blank" 
                            href="https://facebook.com/simke.brat" style="color: green;">Aleksandar Simić</a></p>
                    </div>
                    <div class="footer-center">
                        <div>
                            <i class="fa fa-map-marker"></i>
                            <p><span>Generala Ilije Gojkovica 53a</span> Drenovac</p>
                        </div>
                        <div>
                            <i class="fa fa-phone"></i>
                            <p>+381658614677</p>
                        </div>
                        <div>
                            <i class="fa fa-envelope"></i>
                            <p><a href="mailto:aleksandar.simic94@gmail.com" style="color: green;">aleksandar.simic94@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="footer-right">
                        <p class="footer-company-about">
                            <span>Ostale informacije</span>
                            Za vise informacija nas mozete kontaktirati putem drustvenih mreza ili preko mobilnih telefona.<br> 
                        </p>
                        <div class="footer-icons">
                            <a class="btn btn-floating m-1" style="color:#3b5998;background: none;"  href="https://www.facebook.com/simke.brat/" role="button"
                            target="_blank"><i class="fa fa-facebook"></i></a>
                            <a class="btn btn-floating m-1" style="color:rgba(0, 55, 236);background: none;" href="#!" role="button" target="_blank"
                                ><i class="fa fa-twitter"></i></a>
                            <a class="btn btn-floating m-1" style="color:#ac2bac;background: none;" href="https://www.instagram.com/simke_94/" role="button" target="_blank"
                                ><i class="fa fa-instagram"></i></a>
                            <a class="btn btn-floating m-1" style="color:rgb(10, 78, 226);background: none;" href="https://www.linkedin.com/in/aleksandar-simic-826379202/" role="button" target="_blank"
                                ><i class="fa fa-linkedin"></i></a>
                            <a class="btn btn-floating m-1" style="color:white;background: none;" href="https://github.com/Simke1994" role="button" target="_blank"
                                ><i class="fa fa-github"></i></a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <div id="chatid" class="chat">

            <div class="divchat" id="screen" style="overflow-y:scroll;"></div>
            <div class="chatbox">
                
                <?php
                    if(!isset($_SESSION['steamid'])) {
                        echo "<div class='crtka' style='background:green;color:white;'>MORATE SE ULOGOVATI!</div>";
                    }else{
                        echo '<form action="" method="POST">
                    
                            <input type="text" id="message" class="form-control" autocomplete="off" autofocus placeholder="Unesite poruku...">
                            <button type="button" id="ode" class="btn btn-success">Posalji</button>
                        
                        </form>';
                    }
                ?>
            </div>
        </div>
        <div id="mojmodal" style="position:absolute;left:37.5%;top:23%;z-index:11;">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-contenta">
                    <div class="modal-header" style="background:rgb(28, 28, 32);">
                        <h5 class="modal-title" id="exampleModalLongTitle"><img src="slike/logo.png"></h5>
                        
                    </div>
                    <div class="modal-body" style="background:rgb(28, 28, 32);">
                    <p style="color:white;">Mozete samo 2 puta da postavite ulog po rundi!</p>
                    </div>
                    <div class="modal-footer" style="background:rgb(28, 28, 32);">
                        <button type="button" class="btn btn-danger" onclick="zatvaraj();">Zatvori</button>
                    </div>
                </div>
            </div>
        </div>
        <!--navigacija-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--navigacija-->
        <script>
            
            $(document).ready(function(){
    			loadChat();
    			$('#screen').animate({scrollTop: $('#screen')[0].scrollHeight});
    		});
		    
		    
		    $('#ode').click(function(e){
    			var message = $("#message").val();
    				$.post('chatkonf.php?action=SendMessage&message='+message, function(response){
    					
    					loadChat();
    					$('#message').val('');
    				});
    				$('#screen').animate({scrollTop: $('#screen')[0].scrollHeight});
    		});
		  
    		function loadChat()
    		{
    			$.post('chatkonf.php?action=getChat', function(response){
    				
    				$('.divchat').html(response);
    			});
    		}
    		
    		setInterval(function(){
    			loadChat();
    		}, 2000);
            
            var kliknu=0;
            function closeChat() {
              if(kliknu===0){
                kliknu=1;
                document.getElementById("chatid").style.visibility = "hidden";
                document.getElementById("josjedanekran").style.opacity = "1";
                document.getElementById("josjosjedanekran").style.opacity = "1";
              }else if(kliknu===1){
                kliknu=0;
                document.getElementById("chatid").style.visibility = "visible";
                document.getElementById("josjedanekran").style.opacity = "0.3";
                document.getElementById("josjosjedanekran").style.opacity = "0.3";
              }
            }

        </script>
	
    </body>
</html>