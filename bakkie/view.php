<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./asset/plugin/bootstrap-4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/style/style.css">

    <title>Hire-My-Bakkie</title>

    <?php
        // Check if the user is logged in, if not then redirect him to login page
        if(!isset($_SESSION['eu_info'])){
            header("location: index.php");
            exit;
        }

        /* ------------------------------------------------------- Logout module */
        if(isset($_GET['logout']) && $_SESSION['eu_info'] != ''){
            unset($_SESSION['eu_info']);
            session_destroy();
            header("Location: index.php");
        }
    ?>

</head>

<body class="body">
    <div class="container">

        <!-- slide area -->
        <a type="button" href="?logout" class="btn btn-warning mt-2 d-flex" style="width: 100px; margin-left: auto; font-weight: 700; font-family: cursive; color: white;">Logout <i class="fas fa-sign-in-alt" style="color: white; padding-right: 8px; font-size: 24px;"></i></a>
        <div class="bg-img">
            
        </div>

        <!-- country-map -->
        <div class="d-flex justify-content-center flex-column map-content">
            <h2 style="margin: 10px auto; color: green; font-family: cursive;"><i class="fa fa-map-pin" style="font-size:36px;color:green"></i>  Please click on your province.</h2>
            <img src="./images/map/southafrica.jpg" usemap="#image-map" class="country-map">

            <map name="image-map">
                <area target="map-iframe" alt="Limpopo" title="LIMPOPO" href="./EU-map/limpopo.php" coords="441,25,433,28,422,31,414,41,408,49,398,58,391,62,383,69,376,82,373,96,362,105,361,113,368,118,381,112,388,124,397,128,406,123,418,124,419,132,426,137,433,129,438,123,449,118,460,111,459,123,470,131,479,120,485,115,486,107,493,107,500,108,507,102,516,106,520,122,529,119,529,112,529,102,529,92,525,87,540,84,537,73,532,66,532,53,523,23,513,17,496,20,481,15,470,11,456,13,445,20" shape="poly">

                <area target="map-iframe" alt="Western cape" title="WESTERNCAPE" href="./EU-map/western-cape.php" coords="71,363,80,377,87,391,89,406,88,417,81,424,73,430,75,437,87,449,93,463,89,472,89,479,94,489,95,479,105,476,106,487,117,488,121,491,123,497,131,503,144,505,161,492,173,492,178,486,187,489,195,487,201,489,209,487,215,481,220,476,239,472,259,477,267,472,265,456,237,450,245,428,283,389,251,392,221,380,209,403,197,404,172,429,157,433,148,418,147,404,133,412,128,418,124,399,113,390,109,362,106,346,100,337,92,339,83,350,76,348,73,358" shape="poly">

                <area target="map-iframe" alt="Eastern cape" title="EASTERNCAPE" href="./EU-map/eastern-cape.php" coords="487,359,467,376,449,398,422,423,395,444,363,462,337,462,331,470,335,474,311,471,307,480,264,472,263,456,258,451,245,448,234,450,247,428,255,424,253,412,263,406,275,403,283,390,291,384,297,374,325,364,329,342,339,341,351,335,371,346,393,330,411,342,417,330,440,321,447,315,447,324,439,330,439,338,444,340,466,343" shape="poly">

                <area target="map-iframe" alt="Northern cape" title="NORTHERNCAPE" href="./EU-map/northern-cape.php" coords="142,113,143,256,117,270,115,277,57,266,44,242,25,262,66,362,76,346,85,345,97,334,111,388,123,398,126,414,148,398,156,431,176,422,194,406,210,399,221,377,246,392,262,382,275,387,281,386,297,370,322,363,328,340,288,304,311,243,310,228,300,226,296,244,289,228,282,231,279,214,266,220,244,206,243,187,233,184,233,164,201,192,164,194,165,180,172,168,164,140" shape="poly">

                <area target="map-iframe" alt="Free state" title="FREESTATE" href="./EU-map/free-state.php" coords="313,244,288,304,329,343,354,334,373,344,394,334,387,316,380,305,394,294,406,276,432,265,441,272,446,265,452,265,469,247,472,223,446,204,434,203,412,190,394,196,386,201,370,201,362,210,364,216,346,228,340,226,322,233" shape="poly">

                <area target="map-iframe" alt="Northwest" title="NORTHWEST" href="./EU-map/northwest.php" coords="231,159,245,135,259,135,277,147,303,155,317,153,327,148,341,116,359,107,371,119,379,111,387,125,400,128,411,122,419,133,413,146,408,153,404,158,393,158,391,169,388,180,399,179,395,194,375,198,362,206,361,215,350,223,326,225,311,241,310,227,299,223,295,242,289,228,281,230,279,213,267,221,245,209,245,189,232,183" shape="poly">

                <area target="map-iframe" alt="Mpumalanga" title="MPUMALANGA" href="./EU-map/mpumalanga.php" coords="538,80,544,93,545,146,542,162,526,152,515,158,503,183,511,193,520,209,505,212,483,214,469,218,446,203,433,201,421,199,431,184,433,172,429,163,439,157,451,137,442,135,442,129,427,129,445,119,471,130,485,111,492,103,509,100,521,120,527,119,530,107,526,87" shape="poly">

                <area target="map-iframe" alt="Gauteng" title="GAUTENG" href="./EU-map/gauteng.php" coords="419,133,411,147,410,155,395,155,387,175,395,178,394,190,407,189,411,183,419,198,427,190,433,175,428,161,437,165,443,151,443,134,433,128,427,138,423,133" shape="poly">

                <area target="map-iframe" alt="Kwazulu-Natal" title="KWAZULUNATAL" href="./EU-map/kwazulu-natal.php" coords="571,195,545,192,545,213,521,209,515,214,492,213,469,218,466,247,443,268,459,292,447,315,443,327,439,336,479,349,486,360,516,313,539,276,558,261,566,246,577,194" shape="poly">
            </map>
        </div>

        <div class="d-flex">
            <!-- dropdown city/town in a province -->
            <div class="width: 25%">
                <iframe name="map-iframe" src="./EU-map/gauteng.php" style="width:100%; height:800px; border: none;" id="map-iframe"></iframe>
            </div>

            <!-- finding bakkie -->
            <div style="margin-bottom: 50px; width: 65%">
                <h1 style="font-weight: 800; text-decoration: underline; text-align: center; color: red;">Hire-my-Bakkie</h1>
                <iframe name="bakkie-iframe" src="./findBakkie/index.php" height="1000px" width="100%" id="bakkie-iframe"></iframe>
            </div>
        </div>
    </div>

    <script src="asset/js/jQuery-v3.5.1.js"></script>
    <script src="asset/plugin/bootstrap-4.5.0/js/bootstrap.bundle.js"></script>
    <script src="asset/plugin/bootstrap-4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="asset/plugin/bootstrap-4.5.0/js/bootstrap.js"></script>
    <script src="asset/plugin/bootstrap-4.5.0/js/bootstrap.min.js"></script>
    <script src="asset/plugin/bootstrap-4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('area').on('click', function(){
                var selprovince = $(this).attr("title");
                $("#bakkie-iframe").attr("src", "./findBakkie/index.php?selprovince=" + selprovince);
            })
        });
    </script>
</body>

</html>