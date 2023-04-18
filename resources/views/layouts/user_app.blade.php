<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="apple-touch-icon" sizes="76x76" href="../home_assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../home_assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Sky-Home</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="../home_assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../home_assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <link href="../home_assets/css/demo.css" rel="stylesheet" />
    <style>
        @import url('https://fonts.googleapis.com/css?family=Heebo:800');





        .container {
            height: 100vh;
            width: 49vw;
            max-height: 100px;
            max-width: 1280px;
            min-height: 478px;
            min-width: 1000px;
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin: 0 auto;
        }

        .border {
            height: 369px;
            width: 290px;
            background: transparent;
            border-radius: 10px;
            transition: border 1s;
            position: relative;
        }

        .border:hover {
            border: 1px solid #fff;
        }

        .card {
            height: 379px;
            width: 300px;
            background: #808080;
            border-radius: 10px;
            transition: background 0.8s;
            overflow: hidden;
            background: #000;
            box-shadow: 0 70px 63px -60px #000;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        

        .card1 {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/320100310_3298297927051558_5274726394301864290_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=HnNHyDqJ_ywAX-hzcbY&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfDAYB86HjK8zV4qbkmShhIA_L9ku4Dvf45eekc3ICluGg&oe=64423DF9") center center no-repeat;
            background-size: 400px;
        }

        .card1:hover {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/255334282_10159571383194812_6165254877224171361_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=0debeb&_nc_ohc=zYTF_cuYDM8AX8FJ5rZ&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfAzWUEo7Z8Cinrfh2NDHskK9AkB3G52-6zvq1DbZXymlA&oe=644259EA") left center no-repeat;
            background-size: 400px;
        }

        .card1:hover h2 {
            opacity: 1;
        }

        .card1:hover .fa {
            opacity: 1;
        }

        .card2 {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/305170934_2256291407871184_5690169524602239929_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=CrhJ9o7Q2s8AX_1y9-8&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfCjfArXvlqkNjxDrQk9pBA-iB1lshEiAOI3qJa-zjRQKQ&oe=644251F8") center center no-repeat;
            background-size: 400px;
        }

        .card2:hover {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/245672050_4206171089512478_7841162018176852698_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=ad2b24&_nc_ohc=janlplXsXeMAX9FfuT9&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfD19tObnQMKVHxj6B8LsGLUqb6DPIQL0jv-V5j22_qgkA&oe=644361FE") left center no-repeat;
            background-size: 380px;
        }

        .card2:hover h2 {
            opacity: 1;
        }

        .card2:hover .fa {
            opacity: 1;
        }





















       
        .card3 {
          border-radius: 18px;
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/278295201_5059889757427277_8339642480611398392_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=dq9JzFmIUxwAX_Ny3m2&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfD-_m4wRuPhLhKEi1pPQqmryu3MC3VVYcorWZeKcX0eCA&oe=644275ED");
            background-size: 380px;
        }
        .card3:hover {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t1.6435-9/153040464_1138639476572222_6419129191519426794_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=O33nDSsrNnQAX8CgVv3&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfCDUmMbz75op1XQfIqn-f1MNcW4g6FLLcUM78ycc4g-2A&oe=6464E168") center center no-repeat;
            background-size: 400px;
        }

        

        .card3:hover h2 {
            opacity: 1;
        }

        .card3:hover .fa {
            opacity: 1;
        }

        .card4 {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t1.15752-9/338392000_957528001907853_8940535973547484050_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=ae9488&_nc_ohc=4ywJ3DqQ6o0AX9hU_mq&_nc_ht=scontent.fbhr1-1.fna&oh=03_AdSNl64mscjAkH43iGSApMUDMrblun6sMH2v5HvsxfOrpw&oe=6464FEE1") center center no-repeat;
            background-size: 400px;
        }

        .card4:hover {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/339985615_764591731870031_1282297422061155968_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=D16r8l-_HOcAX-cZGE3&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfAh9S_kGo2kgSsRc3sBpvdgoGVVhbKWq9Iow1B7hkNHTg&oe=6442D68A") left center no-repeat;
            background-size: 400px;
        }

        .card4:hover h2 {
            opacity: 1;
        }

        .card4:hover .fa {
            opacity: 1;
        }

        .card5 {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/277348033_3032921246958557_5772300022218392030_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=B42Ad7WP5dAAX_bPCNs&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfD0vJFjnBZPpk2_vqYqigzSB-Fh0IYe6k85kNGLNG9cVQ&oe=6442CDA5") center center no-repeat;
            background-size: 400px;
        }

        .card5:hover {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t1.18169-9/10422540_1538617206388976_491529646270937731_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=174925&_nc_ohc=Q3x-ZciteBkAX9LdJaZ&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfBUc4CKO6CEyVCvSrgfqXDSvDdB-_uQrLm9cx0na-qtow&oe=6464FEC1") left center no-repeat;
            background-size: 280px;
        }

        .card5:hover h2 {
            opacity: 1;
        }

        .card5:hover .fa {
            opacity: 1;
        }






        .card0 {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t31.18172-8/22538988_1507630625985888_9190710994922876043_o.jpg?_nc_cat=106&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=2hs6J75n8I4AX8CXFin&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfD-jpmcZ_EvKELNGxbMsa77aRXGDWLaJINPXNbDL9lD0g&oe=64655BE0") center center no-repeat;
            background-size: 400px;
        }

        .card0:hover {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t1.6435-9/38690999_1882784505094226_6010076367268347904_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=0Q5TagHolUgAX-BZKUO&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfBF-sJFHY2kEfM-OA1YL1ugthYCyEtdxoU5LeTLTkcPpw&oe=646586C5") left center no-repeat;
            background-size: 400px;
        }

        .card0:hover h2 {
            opacity: 1;
        }

        .card0:hover .fa {
            opacity: 1;
        }








        .card0 {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t31.18172-8/22538988_1507630625985888_9190710994922876043_o.jpg?_nc_cat=106&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=2hs6J75n8I4AX8CXFin&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfD-jpmcZ_EvKELNGxbMsa77aRXGDWLaJINPXNbDL9lD0g&oe=64655BE0") center center no-repeat;
            background-size: 400px;
        }

        .card0:hover {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t1.6435-9/38690999_1882784505094226_6010076367268347904_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=0Q5TagHolUgAX-BZKUO&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfBF-sJFHY2kEfM-OA1YL1ugthYCyEtdxoU5LeTLTkcPpw&oe=646586C5") left center no-repeat;
            background-size: 400px;
        }

        .card0:hover h2 {
            opacity: 1;
        }

        .card0:hover .fa {
            opacity: 1;
        }







        .card6 {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t1.6435-9/96525009_262745601534777_848077516349374464_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=174925&_nc_ohc=rdr3aAsmvvAAX90UDhe&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfCVVy--UeiCDnnzsTP6gRplj32adEz441GvDI44UPBnVw&oe=646563D4") center center no-repeat;
            background-size: 400px;
        }

        .card6:hover {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t1.6435-9/100104774_296506518412566_6394023542765125632_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=X77_OJG67X8AX8otus3&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfC-IzANodWpIVhdZ4U2brMoFUbyaa-ZQoRxrMPe39_P7w&oe=64656E31") left center no-repeat;
            background-size: 400px;
        }

        .card6:hover h2 {
            opacity: 1;
        }

        .card6:hover .fa {
            opacity: 1;
        }






        .card7 {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t1.6435-9/77101316_10157890369027299_5115940300241502208_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=gu4RNx0NcawAX80mfwZ&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfC1CfjldBGs89cV25H71mHUcM89hXCru-tJ9A5b_YMhMw&oe=64656BA3") center center no-repeat;
            background-size: 300px;
        }

        .card7:hover {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t1.18169-9/12802795_10153972554397299_6308610236692902266_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=174925&_nc_ohc=Ld0snNENWDQAX88JxYT&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfCoEO6VA2iG9NG12ocCdFzUsDU0fxCaJSMZ3y_TD9vN1Q&oe=6465659B") left center no-repeat;
            background-size: 380px;
        }

        .card7:hover h2 {
            opacity: 1;
        }

        .card7:hover .fa {
            opacity: 1;
        }





        
        .card8 {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t1.6435-9/134438625_3732207616836429_5098027327901450985_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=174925&_nc_ohc=ONf-NrSoP90AX9bfqkW&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfBsksOOPv7MTX79n8Qlt81QtKtUQxsjjNjuU97-yoBNZQ&oe=6465807D") center center no-repeat;
            background-size: 400px;
        }

        .card8:hover {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/317985887_2372588986248450_8630182135619429240_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=KC1ngNUjNGAAX8UeXeb&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfDRxWHSwykaY36kwHXx6_RelG4RqaCr3cIm--zHxH8G8A&oe=644340D2") left center no-repeat;
            background-size: 380px;
        }

        .card8:hover h2 {
            opacity: 1;
        }

        .card8:hover .fa {
            opacity: 1;
        }





        h2 {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #fff;
            margin: 20px;
            opacity: 0;
            transition: opacity 1s;
        }

        .fa {
            opacity: 0;
            transition: opacity 1s;
        }

        .icons {
            position: absolute;
            fill: #fff;
            color: #fff;
            height: 130px;
            top: 226px;
            width: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
        }







        * {

            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .parent {
            width: 681px;
            height: 384px;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto auto;
            overflow: hidden;
            position: absolute;
            border-radius: 16px;
            -webkit-box-shadow: 0 0 88px 5px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0 0 88px 5px rgba(0, 0, 0, 0.75);
            box-shadow: 0 0 88px 5px rgba(0, 0, 0, 0.75);
        }

        svg {
            position: absolute;
            z-index: 1;
            width: 681px;
            height: 384px;
        }

        button {
            position: absolute;
            z-index: 50;
            width: 40px;
            overflow: hidden;
            height: 40px;
            border: none;
            border-radius: 50%;
            background: #fff;
            cursor: pointer;
            -webkit-box-shadow: 0 0 88px 5px rgba(53, 47, 47, 0.75);
            -moz-box-shadow: 0 0 88px 5px rgba(62, 51, 51, 0.75);
            box-shadow: 0 0 88px 5px rgba(105, 97, 97, 0.75);
        }

        button:focus {
            outline-width: 0;
        }

        circle {
            stroke: #fff;
            fill: none;
            transition: 0.3s;
        }

        #svg1 circle {
            transition-timing-function: linear;
        }

        #svg2 circle {
            transition-timing-function: linear;
        }

        #Capa_1 {
            position: absolute;
            width: 16px;
            height: 16px;
            transform: translate(-7px, -8px);
        }

        #Capa_2 {
            position: absolute;
            width: 16px;
            height: 16px;
            transform: translate(-9px, -8px);
        }

        .right {
            margin-left: 628px;
            margin-top: 168px;
            border: 1px solid #849494;
            background-color: transparent;
            transition: 0.5s;
        }

        .right:hover {
            background-color: #fff;
        }

        .left {
            margin-left: 0.5%;
            margin-top: 168px;
            border: 1px solid #849494;
            background-color: transparent;
            transition: 0.5s;
        }

        .left:hover {
            background-color: #fff;
        }

        .circle1 {
            transition-delay: 0.05s;
        }

        .circle2 {
            transition-delay: 0.1s;
        }

        .circle3 {
            transition-delay: 0.15s;
        }

        .circle4 {
            transition-delay: 0.2s;
        }

        .circle5 {
            transition-delay: 0.25s;
        }

        .circle6 {
            transition-delay: 0.3s;
        }

        .circle7 {
            transition-delay: 0.35s;
        }

        .circle8 {
            transition-delay: 0.4s;
        }

        .circle9 {
            transition-delay: 0.45s;
        }

        .circle10 {
            transition-delay: 0.05s;
        }

        .circle11 {
            transition-delay: 0.1s;
        }

        .circle12 {
            transition-delay: 0.15s;
        }

        .circle13 {
            transition-delay: 0.2s;
        }

        .circle14 {
            transition-delay: 0.25s;
        }

        .circle15 {
            transition-delay: 0.3s;
        }

        .circle16 {
            transition-delay: 0.35s;
        }

        .circle17 {
            transition-delay: 0.4s;
        }

        .circle18 {
            transition-delay: 0.45s;
        }

        .slide1 {
            background-image: url('https://imgs.search.brave.com/lWqbDW1WwIMbVH0GrhbeHnsp4D1NzTwkzEaUqfWfzEs/rs:fit:1090:630:1/g:ce/aHR0cHM6Ly93d3cu/c2t5cmlkZXIuZWR1/Lm5wL21lZGlhL2dh/bGxlcnlfaW1hZ2Uv/UHJpbWFyeV9CdWls/ZGluZ19CbG9ja19B/LnBuZw');
        }

        .slide2 {
            background-image: url('https://imgs.search.brave.com/czKWh-6Pk9TFo91Znj9LXwY0J_-W-0-20ltCrCZvM4I/rs:fit:1087:432:1/g:ce/aHR0cHM6Ly93d3cu/c2t5cmlkZXIuZWR1/Lm5wL21lZGlhL2dh/bGxlcnlfaW1hZ2Uv/UGx1c18yX0Jsb2Nr/X0FfQi5wbmc');
        }

        .slide3 {
            background-image: url('https://imgs.search.brave.com/fp5MTZ6qWbpCPs8GicALzRHck4_T2fywFZPakxYEyd8/rs:fit:960:720:1/g:ce/aHR0cHM6Ly93d3cu/c2t5cmlkZXIuZWR1/Lm5wL3N0YXRpYy9p/bWcvc2s0LmpwZw');
        }

        .slide4 {
            background-image: url('https://imgs.search.brave.com/vk-SczzXaQ1rBqO4b4fJqkMs1t1LrKqNnx6pXaflRNc/rs:fit:964:634:1/g:ce/aHR0cHM6Ly93d3cu/c2t5cmlkZXIuZWR1/Lm5wL21lZGlhL2dh/bGxlcnlfaW1hZ2Uv/RXh0cmFfQWN0aXZp/dGllc18zLnBuZw');
        }

        .slider {
            position: absolute;
            width: 400%;
            height: 100%;
            background: #000;
            display: inline-flex;
            overflow: hidden;
        }

        .slide1,
        .slide2,
        .slide3,
        .slide4 {
            position: absolute;
            background-position: center;
            background-size: cover;
            color: #00d0ff;
            font-size: 62px;
            padding-top: 138px;
            font-weight: 800;
            font-family: 'Heebo', sans-serif;
            text-align: center;
            width: 25%;
            height: 100%;
            z-index: 10;
            transition: 1.4s;
        }

        .tran {
            transform: scale(1.3);
        }

        .up1 {
            z-index: 20;
        }

        .up2 {
            z-index: 40;
        }

        .steap {
            stroke-width: 0;
        }

        .streak {
            stroke-width: 82px;
        }

        @media (max-width: 700px) {
            .parent {
                margin-left: 1%;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../home_assets/img/sidebar-5.jpg">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="/" class="simple-text">
                        SKYRIDER
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="/home">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/user/result">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Student Results</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/admission/create">
                            <i class="nc-icon nc-notes"></i>
                            <p>Admissions</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/gallery">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Gallery</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/brochure" target="_blank">
                            <i class="nc-icon nc-atom"></i>
                            <p>Brochure</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/sky_location">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Location</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/user/notice">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notice</p>
                        </a>
                    </li>



                    <li>
                        <a class="nav-link" href="https://www.facebook.com/skyrider.edu.np" target="_BLANK">
                            <i class="material-icons">facebook</i>
                            <p>Facebook Page</p>
                        </a>
                    </li>


                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>LOG-OUT</p>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>



                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href=""> DASHBOARD </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button"
                        data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>

                </div>
            </nav>
            <!-- End Navbar -->



            @yield('user')





            {{-- HTML BODY STARTS HERE --}}



            <div class="container">
                <div class="card card0">
                    <div class="border">
                        <h2>Madan Puri</h2>
                        <div class="icons">
                            <i class="fa fa-codepen" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="card card1">
                    <div class="border">
                        <h2>Eka Dev Adhikari</h2>
                        <div class="icons">
                            <i class="fa fa-codepen" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="card card2">
                    <div class="border">
                        <h2>Ganga Dhungana</h2>
                        <div class="icons">
                            <i class="fa fa-codepen" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>







            <div class="container">
              <div class="card card3">
                  <div class="border">
                      <h2>Ishwor Mahato</h2>
                      <div class="icons">
                          <i class="fa fa-codepen" aria-hidden="true"></i>
                          <i class="fa fa-instagram" aria-hidden="true"></i>
                          <i class="fa fa-dribbble" aria-hidden="true"></i>
                          <i class="fa fa-twitter" aria-hidden="true"></i>
                          <i class="fa fa-facebook" aria-hidden="true"></i>
                      </div>
                  </div>
              </div>
              <div class="card card4">
                  <div class="border">
                      <h2>Santosh Sinkhada</h2>
                      <div class="icons">
                          <i class="fa fa-codepen" aria-hidden="true"></i>
                          <i class="fa fa-instagram" aria-hidden="true"></i>
                          <i class="fa fa-dribbble" aria-hidden="true"></i>
                          <i class="fa fa-twitter" aria-hidden="true"></i>
                          <i class="fa fa-facebook" aria-hidden="true"></i>
                      </div>
                  </div>
              </div>
              <div class="card card5">
                  <div class="border">
                      <h2>Sampurna Aryal</h2>
                      <div class="icons">
                          <i class="fa fa-codepen" aria-hidden="true"></i>
                          <i class="fa fa-instagram" aria-hidden="true"></i>
                          <i class="fa fa-dribbble" aria-hidden="true"></i>
                          <i class="fa fa-twitter" aria-hidden="true"></i>
                          <i class="fa fa-facebook" aria-hidden="true"></i>
                      </div>
                  </div>
              </div>
          </div>








          <div class="container">
            <div class="card card6">
                <div class="border">
                    <h2>Sandesh Aryal</h2>
                    <div class="icons">
                        <i class="fa fa-codepen" aria-hidden="true"></i>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="card card7">
                <div class="border">
                    <h2>Manoj Pokharel</h2>
                    <div class="icons">
                        <i class="fa fa-codepen" aria-hidden="true"></i>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="card card8">
                <div class="border">
                    <h2>Prakash Gupta</h2>
                    <div class="icons">
                        <i class="fa fa-codepen" aria-hidden="true"></i>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>







            {{-- HTML ENDS HERE BODY PART --}}







            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="https://www.facebook.com/profile.php?id=100081127939222">Taranga Baral</a>
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    <!--   -->
    <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
   <li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../home_assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../home_assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="..//home_assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../home_assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                </div>
            </li>

            <li class="header-title pro-title text-center">Want more components?</li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
    <button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
    </div>
</div>
 -->
</body>

<script src="../home_assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../home_assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../home_assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="../home_assets/js/plugins/bootstrap-switch.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="../home_assets/js/plugins/chartist.min.js"></script>
<script src="../home_assets/js/plugins/bootstrap-notify.js"></script>
<script src="../home_assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<script src="../home_assets/js/demo.js"></script>

<script>
    var curpage = 1;
    var sliding = false;
    var click = true;
    var left = document.getElementById("left");
    var right = document.getElementById("right");
    var pagePrefix = "slide";
    var pageShift = 500;
    var transitionPrefix = "circle";
    var svg = true;

    function leftSlide() {
        if (click) {
            if (curpage == 1) curpage = 5;
            console.log("woek");
            sliding = true;
            curpage--;
            svg = true;
            click = false;
            for (k = 1; k <= 4; k++) {
                var a1 = document.getElementById(pagePrefix + k);
                a1.className += " tran";
            }
            setTimeout(() => {
                move();
            }, 200);
            setTimeout(() => {
                for (k = 1; k <= 4; k++) {
                    var a1 = document.getElementById(pagePrefix + k);
                    a1.classList.remove("tran");
                }
            }, 1400);
        }
    }

    function rightSlide() {
        if (click) {
            if (curpage == 4) curpage = 0;
            console.log("woek");
            sliding = true;
            curpage++;
            svg = false;
            click = false;
            for (k = 1; k <= 4; k++) {
                var a1 = document.getElementById(pagePrefix + k);
                a1.className += " tran";
            }
            setTimeout(() => {
                move();
            }, 200);
            setTimeout(() => {
                for (k = 1; k <= 4; k++) {
                    var a1 = document.getElementById(pagePrefix + k);
                    a1.classList.remove("tran");
                }
            }, 1400);
        }
    }

    function move() {
        if (sliding) {
            sliding = false;
            if (svg) {
                for (j = 1; j <= 9; j++) {
                    var c = document.getElementById(transitionPrefix + j);
                    c.classList.remove("steap");
                    c.setAttribute("class", transitionPrefix + j + " streak");
                    console.log("streak");
                }
            } else {
                for (j = 10; j <= 18; j++) {
                    var c = document.getElementById(transitionPrefix + j);
                    c.classList.remove("steap");
                    c.setAttribute("class", transitionPrefix + j + " streak");
                    console.log("streak");
                }
            }
            setTimeout(() => {
                for (i = 1; i <= 4; i++) {
                    if (i == curpage) {
                        var a = document.getElementById(pagePrefix + i);
                        a.className += " up1";
                    } else {
                        var b = document.getElementById(pagePrefix + i);
                        b.classList.remove("up1");
                    }
                }
                sliding = true;
            }, 600);
            setTimeout(() => {
                click = true;
            }, 1700);

            setTimeout(() => {
                if (svg) {
                    for (j = 1; j <= 9; j++) {
                        var c = document.getElementById(transitionPrefix + j);
                        c.classList.remove("streak");
                        c.setAttribute("class", transitionPrefix + j + " steap");
                    }
                } else {
                    for (j = 10; j <= 18; j++) {
                        var c = document.getElementById(transitionPrefix + j);
                        c.classList.remove("streak");
                        c.setAttribute("class", transitionPrefix + j + " steap");
                    }
                    sliding = true;
                }
            }, 850);
            setTimeout(() => {
                click = true;
            }, 1700);
        }
    }

    left.onmousedown = () => {
        leftSlide();
    };

    right.onmousedown = () => {
        rightSlide();
    };

    document.onkeydown = e => {
        if (e.keyCode == 37) {
            leftSlide();
        } else if (e.keyCode == 39) {
            rightSlide();
        }
    };
</script>

</html>
