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



        .body_taranga_div{
            width: 1%;
            color: #000;
        }

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
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/320100310_3298297927051558_5274726394301864290_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=cGcK0GHds0kAX-Jbz7f&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfAo1iVKP5mtQHA9JO2UrsTJhPV8swXoJG6tcL05W3I7Ag&oe=644E1B79") center center no-repeat;
            background-size: 400px;
        }

        .card1:hover {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/282758790_10159903741174812_3069308900031356904_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=174925&_nc_ohc=sbZ8qIzJ8u0AX-JGj7h&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfDvvHKlcmv_WlLf5jIxofaO1p2sgP5S6vulyGCWdM8noA&oe=644F28EA") left center no-repeat;
            background-size: 400px;
        }

        .card1:hover h2 {
            opacity: 1;
        }

        .card1:hover .fa {
            opacity: 1;
        }

        .card2 {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/305170934_2256291407871184_5690169524602239929_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=4mN92hs50moAX9Ewh7q&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfCxDck4S4UtpLeV-wm9jy9dlrSkYYWgWBo9lz8b7OFsCw&oe=644E2F78") center center no-repeat;
            background-size: 400px;
        }

        .card2:hover {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/245672050_4206171089512478_7841162018176852698_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=ad2b24&_nc_ohc=EwbHT3P3n38AX8jiNgU&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfBAKxHDO5v1Z69G6T5xwbbBXXICsjsRqsPpGB1sEAOgaA&oe=644D453E") left center no-repeat;
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
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/278295201_5059889757427277_8339642480611398392_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=TVXb_Q1bGlkAX_vEIDI&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfDGEAWSDD1VtHTFPiGovs6VytZW-TS669VvCAHzKSQXvw&oe=644E536D");
            background-size: 379px;
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

        .card4:hover {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/340969999_215274977865556_1613417213006846391_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=G61TRs-7TvkAX--gQX-&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfBTm1bfBsnySVqzoYb2OItxybGWEPQfGL8nAzvqOALEzg&oe=644E7B49") center center no-repeat;
            background-size: 400px;
        }

        .card4 {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/341032519_775208100513485_6842438373001166512_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=PaI_fYxmcS0AX-qCu1-&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfDNery4opYcn3QqC_oarLb-Epv0wqeMWbnpp7Oap93MVA&oe=644D5947") left center no-repeat;
            background-size: 400px;
        }

        .card4:hover h2 {
            opacity: 1;
        }

        .card4:hover .fa {
            opacity: 1;
        }

        .card5 {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/277348033_3032921246958557_5772300022218392030_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=UaacUjICwoEAX_wEZBC&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfBUQaBTdk2X-KcphSBh7OnS9t2OJ2O7K9sdr_EJ1SfUAg&oe=644EAB25") center center no-repeat;
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
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t1.6435-9/91704389_1554767171363973_5124059287374528512_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=e3f864&_nc_ohc=fsoGNqUi5igAX81vZls&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfDMZ_xLIL_VxPMAHuyr2jU4LYFuXDnXbRS8SvC_TkOOQw&oe=646B4A82") left center no-repeat;
            background-size: 800px;
        }

        .card8:hover h2 {
            opacity: 1;
        }

        .card8:hover .fa {
            opacity: 1;
        }




        .card9 {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/334802397_1923386234660604_1990792830499725123_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=rCOxezAfz2IAX-u2w3H&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfCCyXifFo95tBOT0D-KC0EwyRfk7KagsLCt1aY1k1OdXw&oe=644E6661") center center no-repeat;
            background-size: 300px;
        }

        .card9:hover {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/341263203_623492762954613_3709256299170556483_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=mIJwRVwlM7cAX82e8RA&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfDdiVuA9IrmSxYrqA-5AcEbkXiPF7f0ee4Bo7V60OwW-Q&oe=644C9DB8") left center no-repeat;
            background-size: 400px;
        }

        .card9:hover h2 {
            opacity: 1;
        }

        .card9:hover .fa {
            opacity: 1;
        }




        .card10 {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t1.6435-9/93479176_2760343534083699_4219659794698469376_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=pLk__fuuYAkAX88sVy9&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfA9pWqETYMSPJ6BiiwxWJqQ_dzWxhW7N2CX6O8H2AZK2g&oe=647012AE") center center no-repeat;
            background-size: 350px;
        }

        .card10:hover {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t1.18169-9/29511686_1561803777271020_5998498127183919746_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=qTpXA7_Y1oQAX8c1MrC&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfA8_iNjLFtr5FZWJFHOWAUqPnEcqzBE6LQCNNT_x0VILA&oe=646FEEF9") left center no-repeat;
            background-size: 505px;
        }

        .card10:hover h2 {
            opacity: 1;
        }

        .card10:hover .fa {
            opacity: 1;
        }





        .card11 {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/312393004_10166815304000582_4535558284794926757_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=174925&_nc_aid=0&_nc_ohc=MgA3EOaUPggAX9yWY4c&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfAZvDLNuH3thY2ZDMGfOpl5DrkFsLRrOgcJx0cSwORnGg&oe=644D9939") center center no-repeat;
            background-size: 400px;
        }

        .card11:hover {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/261215971_10165839256535582_5842020510883281714_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=174925&_nc_ohc=ragRzomEtLIAX-o43Ix&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfBKZ9zDXc5vXWrf9Xbzy9AACFHQRusE-ycoWxMM7kuegw&oe=644DA06B") left center no-repeat;
            background-size: 400px;
        }

        .card11:hover h2 {
            opacity: 1;
        }

        .card11:hover .fa {
            opacity: 1;
        }









        
/* GG part from here */








.card12 {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/328136693_1211040832859331_5416085175373745034_n.jpg?stp=cp6_dst-jpg&_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=kM9zDJbY5SoAX973X3H&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfACRMPQFNqAqJstvZxNRU6GmzxOFx2aV3MvL--GaQr3gA&oe=644D47D2") center center no-repeat;
            background-size: 400px;
        }

        .card12:hover {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/328916780_2316229551891590_3110728408556995009_n.jpg?stp=cp6_dst-jpg&_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=WxsMgpC8VTsAX_yK-Bf&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfCf_D-nmKmzwERMoop4QYzjUWcT4o-zdWQQYE2QBiviwg&oe=644E7BB2") left center no-repeat;
            background-size: 400px;
        }

        .card12:hover h2 {
            opacity: 1;
        }

        .card12:hover .fa {
            opacity: 1;
        }











        .card13 {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/341165006_250786687350080_4233278330328930204_n.jpg?stp=cp6_dst-jpg&_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=7KS_L_VO1S0AX8oCAm5&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfCgiLNcjKN_Ws1PfjiAvggpVYk3KoLmPUUy3b0-AmH-mw&oe=644D00FB") center center no-repeat;
            background-size: 400px;
        }

        .card13:hover {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/340826270_1340289260035463_1090093663616637190_n.jpg?stp=cp6_dst-jpg&_nc_cat=110&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=elKCqfwa0xgAX-elyhB&_nc_oc=AQmL0bcDcAc4zZF3FyVzDLSPLDLDilh8bK-8RMw0BdeztH5GibtOmxqvXE9-_XvF6tE&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfAyb2J-4CCDgswjaNS_4PhfMHo0kmBQQbYiPpxTe0Plfg&oe=644D8D85") left center no-repeat;
            background-size: 289px;
        }

        .card13:hover h2 {
            opacity: 1;
        }

        .card13:hover .fa {
            opacity: 1;
        }






        .card14 {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t31.18172-8/30073587_1492701550840288_3728761961845608269_o.jpg?_nc_cat=110&ccb=1-7&_nc_sid=19026a&_nc_ohc=8c9JMc3uqbUAX8rdDui&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfBUMJTOuzgG2DvrdbFCSMXB8PV4S05O9AMsYzn36_TXFQ&oe=646FF999") center center no-repeat;
            background-size: 400px;
        }

        .card14:hover {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t31.18172-8/27164695_1420636541380123_9115967449523856783_o.jpg?_nc_cat=103&ccb=1-7&_nc_sid=174925&_nc_ohc=_6w4EKK3F0AAX9Y_YKP&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfA7jhqGr87i3aoOCcrvhpb7fjwHufmX8uEtmTupyNRqFA&oe=64702372") left center no-repeat;
            background-size: 400px;
        }

        .card14:hover h2 {
            opacity: 1;
        }

        .card14:hover .fa {
            opacity: 1;
        }

        .card15 {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t1.6435-9/125443900_2733393343541872_1697242686392229290_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=3gCVRVBBmQMAX8yGtV7&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfD-ZBYUXwnnJVteEF34EoSaUVdpbriP6q110STm6V_cyg&oe=6471F1BE") center center no-repeat;
            background-size: 400px;
        }

        .card15:hover {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t31.18172-8/1009594_1386836448197575_238133049_o.jpg?_nc_cat=102&ccb=1-7&_nc_sid=730e14&_nc_ohc=GPMxc_SkZPgAX8j78bK&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfAK69DiDX0aYnRPYwAh-j0mLUFEvmZolZcS0IvUwKS-OA&oe=6471E883") left center no-repeat;
            background-size: 510px;
        }

        .card15:hover h2 {
            opacity: 1;
        }

        .card15:hover .fa {
            opacity: 1;
        }

        .card16 {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/242087893_6080219015353160_2243720562951238166_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=bgAHCyNwODkAX-yugrC&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfBpwvnxeHbzFCOgjWaqqXwUjMtYJftYl9dn2mZ6rcxWvw&oe=645065BB") center center no-repeat;
            background-size: 400px;
        }

        .card16:hover {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t1.6435-9/84552250_3477442378964074_7089184688480190464_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=2B9PeE8VPawAX8rO3kP&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfAM3lACXNTSH654gaA-63SBDsB3EC5DDbW1osX4BkDgCg&oe=64720BC9") left center no-repeat;
            background-size: 400px;
        }

        .card16:hover h2 {
            opacity: 1;
        }

        .card16:hover .fa {
            opacity: 1;
        }

        .card17 {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/317689614_10225775861934902_6477641235276164162_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=0Dp2plYLCf0AX9Uvka4&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfD4j1n2fCQPPf72gVYu0Gy1_vfPi5xSD2zfdKURoo1dBQ&oe=644E8C1E") center center no-repeat;
            background-size: 400px;
        }

        .card17:hover {
            background: url("https://scontent.fbhr1-1.fna.fbcdn.net/v/t39.30808-6/276260119_10224284766658452_5876619431901030125_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=4KpUY2HIC5IAX-Mabit&_nc_ht=scontent.fbhr1-1.fna&oh=00_AfCB35d7HaM3IiRii7R3cEgnl3Zk1MKW_1HA6lWi2YnhGg&oe=644EC0CB") left center no-repeat;
            background-size: 460px;
        }

        .card17:hover h2 {
            opacity: 1;
        }

        .card17:hover .fa {
            opacity: 1;
        }















/* GG part ended here */

        





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
                    <a class="navbar-brand" href=""> Teacher's Info </a>
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
                <div class="card card9">
                    <div class="border">
                        <h2>Keshav Pathak</h2>
                        <div class="icons">
                            <i class="fa fa-codepen" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="card card10">
                    <div class="border">
                        <h2>Narayan Shrestha</h2>
                        <div class="icons">
                            <i class="fa fa-codepen" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="card card11">
                    <div class="border">
                        <h2>Rabin Ghimire</h2>
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
                <div class="card card15">
                    <div class="border">
                        <h2>Sarad Adhikari</h2>
                        <div class="icons">
                            <i class="fa fa-codepen" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="card card16">
                    <div class="border">
                        <h2>Teeka Mainali</h2>
                        <div class="icons">
                            <i class="fa fa-codepen" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="card card17">
                    <div class="border">
                        <h2>Sujan Baral</h2>
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




        <div class="container">
            <div class="card card12">
                <div class="border">
                    <h2>Govinda Ghimire</h2>
                    <div class="icons">
                        <i class="fa fa-codepen" aria-hidden="true"></i>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="card card13">
                <div class="border">
                    <h2>Saraswati Timalsina</h2>
                    <div class="icons">
                        <i class="fa fa-codepen" aria-hidden="true"></i>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="card card14">
                <div class="border">
                    <h2>Hari Lamichchhane</h2>
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
