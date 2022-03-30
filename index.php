<?php

    require 'steamauth/steamauth.php';

    if(isset($_SESSION['steamid'])){
        $id = $_SESSION['steamid'];
      } else {
        
      }

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
        <!--rulet-->
        <link rel="stylesheet" href="css/rulet.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <!--chat-->
        <link rel="stylesheet" href="css/chat.css">
        
        <!--donji deo-->
        <link rel="stylesheet" href="css/donjideo.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="js/rulet.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js"></script>
        
        <script src="https://code.jquery.com/jquery-3.3.1.js" 
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

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
            .ruletic{
                position:absolute;
                top:15%;
                margin:2%;
                width:96%;
                z-index:-1;
            }
            .ruletic img{
                height:12vh;
            }
            #okvir{
                position:absolute;
                top:10%;
                left:46%;
                width:8%;
                height:6%;
                background:transparent;
                border:5px solid green;
                border-radius:17px;
                padding-left:1%;
                padding-right:1%;
                border-bottom:none;
                border-top:none;
            }
            #tajmer{
                font-size:35px;
                top:10%;
                display: flex;
                justify-content: center;
                align-items: center;
                color:white;
                font-weight:bold;
                text-shadow: 3px 3px green;
            }
            #crta{
                position:absolute;
                top:16.8%;
                left:50%;
                width:4px;
                border-radius:2px;
                height:16%;
                background: rgb(255, 0, 0);
                opacity:1;
                display:block;
                z-index: 9;
            }
            #slicka1,#slicka2,#slicka3,#slicka4,#slicka5,#slicka6,#slicka7,#slicka8,#slicka9,#slicka10,#slicka11,
            #slicka12,#slicka13,#slicka14,#slicka15,#slicka16{
                opacity:0.6;
            }
            .zadnjirols{
                position: absolute;
                top: 36%;
                right:28%;
                color: white;
                font: bold 14px sans-serif;
            }
            .zadnjirols .t100{
                position: absolute;
                top:2%;
                left:90%;
                font-size:14px;
                font-weight: bold;
                font-style: italic;
            }
            .zadnjirols .s1001{
                position: relative;
                top: 25%;
                left:85%;
                width:3%;
            }
            .zadnjirols .s1002{
                position: relative;
                top: 25%;
                left:90%;
                width:3%;
            }
            .zadnjirols .s1003{
                position: relative;
                top: 25%;
                left:95%;
                width:3%;
            }
            .zadnjirols #t1001{
                position: absolute;
                top: 61%;
                left:89%;
                font-size:16px;
                font-weight: bold;
                font-style: oblique;
            }
            .zadnjirols #t1002{
                position: absolute;
                top: 61%;
                left:97.5%;
                font-size:16px;
                font-weight: bold;
                font-style: oblique;
            }
            .zadnjirols #t1003{
                position: absolute;
                top: 61%;
                left:106%;
                font-size:16px;
                font-weight: bold;
                font-style: oblique;
            }
            .zadnjirols .zadnjihdeset{
                position:relative;
                left:37%;
                font-size:14px;
                font-weight: bold;
                font-style: italic;
            }
            #images{
                position:absolute;
                left:21%;
                width:40%;
                height:5vh;
                overflow:hidden;
            }
            #images img{
                display: inline-block;
                width:7.3%;
                margin:3px;
            }
            .footer-distributed{
                width: 100%;
                bottom:-70%;
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
            .dugmence1 a{
                height:2vh;
            }
            .dugmici{
                display:flex;
                position: absolute;
                top: 50%;
                left:43%;
            }
            .dugmici .btn{
                margin:3px;
                color:black;
            }
            .rulet .form-control{
                position:absolute;
                top:50.5%;
                left:23%;
                width:19.5%;
                height:3.5vh;
                border-radius:3px;
            }
            .btn1{
                width: 28.2%;
                height: 6vh;
                background: transparent;
                border: 3px solid rgb(1, 36, 88);
                position: absolute;
                top: 60%;
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
                width: 28.2%;
                height: 6vh;
                background: transparent;
                border:3px solid rgb(1, 99, 1);
                position: absolute;
                top: 60%;
                left:35.5%;
                color: white;
                padding-top: 0.5%;
                border-radius:4px;
                text-align: center;
                text-decoration: none!important;
                transition:0.5s background;
                font-size:20px;
            }
            .btn3{
                width: 28.2%;
                height: 6vh;
                background: transparent;
                border:3px solid rgb(141, 18, 2);
                position: absolute;
                top: 60%;
                left: 66%;
                color: white;
                border-radius:4px;
                padding-top: 0.5%;
                text-align: center;
                text-decoration: none!important;
                transition:0.5s background;
                font-size:20px;
            }
            .btn1 img{
                width: 11%;
            }
            .btn2 img{
                width: 11%;
            }
            .btn3 img{
                width: 11%;
            }
            .btn1:hover{
                background: rgb(1, 36, 88);
                color: white;
            }
            .btn2:hover{
                background: rgb(1, 99, 1);
                color: white;
            }
            .btn3:hover{
                background: rgb(141, 18, 2);
                color: white;
            }
            /*.btn1:active,.btn2:active,.btn3:active{
                transform: translateY(4px);
            }*/
            #ulozi1{
                width: 28.2%;
                height: 5vh;
                background: transparent;
                position: absolute;
                top: 68%;
                left: 4.5%;
                border-radius: 2px;
                border: 1px solid black;
                color:white;
            }
            #ulozi2{
                width: 28.2%;
                height: 5vh;
                background: transparent;
                position: absolute;
                top: 68%;
                left: 35.5%;
                border-radius: 2px;
                border: 1px solid black;
                color:white;
            }
            #ulozi3{
                width: 28.2%;
                height: 5vh;
                background: transparent;
                position: absolute;
                top: 68%;
                left: 66%;
                border-radius: 2px;
                border: 1px solid black;
                color:white;
            }
            #ulozi1 img, #ulozi2 img, #ulozi3 img{
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
            #pkulo1{
                width: 28.2%;
                height: 55vh;
                background: transparent;
                position: absolute;
                top: 73%;
                left: 4.5%;
                border-radius: 2px;
                border: 1px solid black;
                color:white;
                overflow:hidden;
            }
            #pkulo2{
                width: 28.2%;
                height: 55vh;
                background: transparent;
                position: absolute;
                top: 73%;
                left: 35.5%;
                border-radius: 2px;
                border: 1px solid black;
                color:white;
                overflow:hidden;
            }
            #pkulo3{
                width: 28.2%;
                height: 55vh;
                background: transparent;
                position: absolute;
                top: 73%;
                left: 66%;
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
            .ulogic span{
                text-align:right;
                position:absolute;
                right:3%;
                font-size:12px;
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
            .btn1 img, .btn2 img, .btn3 img{
                width:7%;
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
            @media (max-width:880px){
                .footer-distributed{
                    bottom:-88%;
                }
                .ruletic{
                    top:11%;
                }
                #crta{
                    height:20vh;
                    top:11%;
                    margin-bottom:20px;
                }
                .zadnjirols{
                    top:70%;
                    left:5%;
                    width:70%;
                    height:40vh;
                }
                .zadnjirols .zadnjihdeset{
                    top:19%;
                    left:1%;
                }
                #images{
                    top:17%;
                    left:30%;
                    width:100%;
                }
                #images img{
                    width:7%;
                }
                .zadnjirols .t100{
                    top:4%;
                    left:1%;
                }
                .zadnjirols .s1001{
                    position:absolute;
                    top: 2%;
                    left:45%;
                    width:7%;
                }
                .zadnjirols #t1001{
                    position:absolute;
                    top: 3%;
                    left:55%;
                }
                .zadnjirols .s1002{
                    position:absolute;
                    top: 2%;
                    left:70%;
                    width:7%;
                }
                .zadnjirols #t1002{
                    position:absolute;
                    top: 3%;
                    left:80%;
                }
                .zadnjirols .s1003{
                    position:absolute;
                    top: 2%;
                    left:95%;
                    width: 7%;
                }
                .zadnjirols #t1003{
                    position:absolute;
                    top: 3%;
                    left:105%;
                }
                #okvir{
                    width:34%;
                    height:9vh;
                    left:33%;
                    top:15%;
                    background:rgb(28, 28, 32,0.8);
                    border:none;
                    z-index: 10;
                }
                #tajmer{
                    font-size:45px;
                }
                .rulet .form-control{
                    width: 36%;
                    height: 4.2vh;
                    top:38.6%;
                    left:3%;
                }
                .dugmici{
                    left:40%;
                    top:38.2%;
                }
                .dugmici .dugme1{
                    display:none;
                }
                .dugme3{
                    display:none;
                }
                .dugme5{
                    display:none;
                }
                .dugme9{
                    display:none;
                }
                .ruletic{
                    margin-bottom:15px;
                }
                .ruletic img{
                    height:16vh;
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
                .btn1{
                    top:47%;
                    left:67%;
                    height:5vh;
                    background: rgb(1, 36, 88);
                }
                .btn2{
                    top:55%;
                    left:67%;
                    height:5vh;
                    background: rgb(1, 99, 1);
                }
                .btn3{
                    top:63%;
                    left:67%;
                    height:5vh;
                    background: rgb(141, 18, 2);
                }
                #ulozi1{
                    width:60%;
                    top:47%;
                    border: 3px solid rgb(1, 36, 88);
                }
                #ulozi2{
                    width:60%;
                    top:55%;
                    left:4.5%;
                    border:3px solid rgb(1, 99, 1);
                }
                #ulozi3{
                    width:60%;
                    top:63%;
                    left:4.5%;
                    border:3px solid rgb(141, 18, 2);
                }
                #ulozi1 p{
                    padding-left:13px;
                    padding-top:8px;
                    padding-bottom:13px;
                    padding-right:5px;
                }
                #ulozi2 p{
                    padding-left:13px;
                    padding-top:8px;
                    padding-bottom:13px;
                    padding-right:5px;
                }
                #ulozi3 p{
                    padding-left:13px;
                    padding-top:8px;
                    padding-bottom:13px;
                    padding-right:5px;
                }
                #pkulo1{
                    display:none;
                }
                #pkulo2{
                    display:none;
                }
                #pkulo3{
                    display:none;
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
                .btn1 img{
                    width: 12%;
                }
                .btn2 img{
                    width: 12%;
                }
                .btn3 img{
                    width: 12%;
                }
            }
        </style>
    </head>
    <body>
        <div id="ekran">
            <div id="josjedanekran">
                <div class="velikiekran">
                    <div class="rulet">
                        <div class="ruletic">
                            <div class="owl-carousel owl-theme">
                                <div class="item element-roulette" data-item="5"><img src="slike/x14.png" id="slicka5"></div>
                                <div class="item element-roulette" data-item="1"><img src="slike/2teror.png" id="slicka1"></div>
                                <div class="item element-roulette" data-item="2"><img src="slike/ct3.png" id="slicka2"></div>
                                <div class="item element-roulette" data-item="3"><img src="slike/2teror.png" id="slicka3"></div>
                                <div class="item element-roulette" data-item="4"><img src="slike/ct3.png" id="slicka4"></div>
                                <div class="item element-roulette" data-item="6"><img src="slike/2teror.png" id="slicka6"></div>
                                <div class="item element-roulette" data-item="7"><img src="slike/ct3.png" id="slicka7"></div>
                                <div class="item element-roulette" data-item="8"><img src="slike/2teror.png" id="slicka8"></div>
                                <div class="item element-roulette" data-item="9"><img src="slike/ct3.png" id="slicka9"></div>
                                <div class="item element-roulette" data-item="10"><img src="slike/2teror.png" id="slicka10"></div>
                                <div class="item element-roulette" data-item="11"><img src="slike/ct3.png" id="slicka11"></div>
                            </div>
                        </div>
                        <div id="okvir"><p id="tajmer">20</p></div>
                        <div id="crta"></div>
                        <div class="zadnjirols">
                            <p class="zadnjihdeset">ZADNJIH 10</p>
                            <div id="images"><img src="slike/ct3.png" id="slicka11">
                            </div>
                            <p class="t100">ZADNJIH 100</p>
                            <div class="deset">
                                <img src="slike/2teror.png" class="s1001">
                                <p id="t1001">0</p>
                                <img src="slike/x14.png" class="s1002">
                                <p id="t1002">0</p>
                                <img src="slike/ct3.png" class="s1003">
                                <p id="t1003">0</p>
                            </div>
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
                    </div>  
                    <?php
                        if(!isset($_SESSION['steamid'])) {
                            echo '<a href="#" type="button" class="btn1" id="ctulog" data-toggle="modal" data-target="#nijeulogovan" disabled="disabled"><img src="slike/ct3.png">  x 2</a>';
                            echo '<a href="#" type="button" class="btn2" id="kockaulog" data-toggle="modal" data-target="#nijeulogovan" disabled="disabled"><img src="slike/x14.png">    x 14</a>';
                            echo '<a href="#" type="button" class="btn3" id="tulog" data-toggle="modal" data-target="#nijeulogovan" disabled="disabled"><img src="slike/2teror.png">    x 2</a>';
                        }else{
                            echo '<button class="btn1" id="ctulog" onclick="UlogCT();" disabled="disabled"><p id="ctbroj">2 x </p></button>';
                            echo '<button class="btn2" id="kockaulog" onclick="UlogKocka();" disabled="disabled"><p id="kbroj">14 x </p></button>';
                            echo '<button class="btn3" id="tulog" onclick="UlogTeror();" disabled="disabled"><p id="tbroj">2 x </p></button>';
                        }
                    ?>
                    <div id="ulozi1"><p style='font-style:italic;font-size:14px;'>0 uloga <img src='slike/coins.png' style='margin-left:63%;'> 0</p></div>
                    <div id="ulozi2"><p style='font-style:italic;font-size:14px;'>0 uloga <img src='slike/coins.png' style='margin-left:63%;'> 0</p></div>
                    <div id="ulozi3"><p style='font-style:italic;font-size:14px;'>0 uloga <img src='slike/coins.png' style='margin-left:63%;'> 0</p></div>
                    <div id="pkulo1"></div>
                    <div id="pkulo2"></div>
                    <div id="pkulo3"></div>
                </div>
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
                                        <!--<li><a href="tocak.php">Tocak srece</a></li>-->
                                        <!--<?php echo "<li><a href='steamauth/logout.php'>Izloguj se</a></li>"; ?>-->
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
            function zatvaraj() {
                document.getElementById("mojmodal").style.display = "none";
                document.getElementById("ekran").style.opacity = "1";
            }
            function ik1(val){
                result = document.getElementById('polje');
                result.value = result.value? parseInt(result.value) + parseInt(val) : parseInt(val);  
            }
            function ik5(val){
                result = document.getElementById('polje');
                result.value = result.value? parseInt(result.value) + parseInt(val) : parseInt(val);  
            }
            function ik10(val){
                result = document.getElementById('polje');
                result.value = result.value? parseInt(result.value) + parseInt(val) : parseInt(val);  
            }
            function ik50(val){
                result = document.getElementById('polje');
                result.value = result.value? parseInt(result.value) + parseInt(val) : parseInt(val);  
            }
            function ik100(val){
                result = document.getElementById('polje');
                result.value = result.value? parseInt(result.value) + parseInt(val) : parseInt(val);  
            }
            function puta(){
                result = document.getElementById('polje');
                result.value = parseInt(result.value)* 2;  
            }
            function deli(){
                result = document.getElementById('polje');
                result.value = parseInt(result.value)/ 2;  
            }
            function brisi(){
                result = document.getElementById('polje');
                result.value = 0;  
            }
            
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
