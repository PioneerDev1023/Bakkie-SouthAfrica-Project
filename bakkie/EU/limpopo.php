<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Limpopo</title>
</head>

<body id="body">
    <div class="container">
        <!-- Sidebar -->
        <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:20%">
            <h3 class="w3-bar-item" style="padding-top: 20px; color: green; font-family: cursive;">Please select your city/town.</h3>
            <a href="#" class="w3-bar-item w3-button">Afguns</a>
            <a href="#" class="w3-bar-item w3-button">Alldays</a>
            <a href="#" class="w3-bar-item w3-button">Bandelierkop</a>
            <a href="#" class="w3-bar-item w3-button" >Ba-Phalaborwa</a>
            <a href="#" class="w3-bar-item w3-button">Bela-Bela</a>
            <a href="#" class="w3-bar-item w3-button">Bochum</a>
            <a href="#" class="w3-bar-item w3-button">Bosbokrand</a>
            <a href="#" class="w3-bar-item w3-button">Dendron</a>
            <a href="#" class="w3-bar-item w3-button">Duiwelskloof</a>
            <a href="#" class="w3-bar-item w3-button">Elim</a>
            <a href="#" class="w3-bar-item w3-button">Ellisras</a>
            <a href="#" class="w3-bar-item w3-button">Gravelotte</a>
            <a href="#" class="w3-bar-item w3-button">Haenertsburg</a>
            <a href="#" class="w3-bar-item w3-button">Hoedspruit</a>
            <a href="#" class="w3-bar-item w3-button">Jane furse</a>
            <a href="#" class="w3-bar-item w3-button">Klaserie</a>
            <a href="#" class="w3-bar-item w3-button">Lebowakgomo</a>
            <a href="#" class="w3-bar-item w3-button">Lephalale</a>
            <a href="#" class="w3-bar-item w3-button">Letsitele</a>
            <a href="#" class="w3-bar-item w3-button">Leydsdorp</a>
            <a href="#" class="w3-bar-item w3-button">Louis Trichardt</a>
            <a href="#" class="w3-bar-item w3-button">Messina</a>
            <a href="#" class="w3-bar-item w3-button">Modimolle</a>
            <a href="#" class="w3-bar-item w3-button">Modjadjiskloof</a>
            <a href="#" class="w3-bar-item w3-button">Mogwadi</a>
            <a href="#" class="w3-bar-item w3-button">Mokopane</a>
            <a href="#" class="w3-bar-item w3-button">Mokopane</a>
            <a href="#" class="w3-bar-item w3-button">Mookgophong</a>
            <a href="#" class="w3-bar-item w3-button">Musina</a>
            <a href="#" class="w3-bar-item w3-button">Naboomspruit</a>
            <a href="#" class="w3-bar-item w3-button">Nylstroom</a>
            <a href="#" class="w3-bar-item w3-button">Ofcolaco</a>
            <a href="#" class="w3-bar-item w3-button">Phalaborwa</a>
            <a href="#" class="w3-bar-item w3-button">Polokwane</a>
            <a href="#" class="w3-bar-item w3-button">Roedtan</a>
            <a href="#" class="w3-bar-item w3-button">Sekgopo</a>
            <a href="#" class="w3-bar-item w3-button">Senwabarwana</a>
            <a href="#" class="w3-bar-item w3-button">Seshego</a>
            <a href="#" class="w3-bar-item w3-button">Thabazimbi</a>
            <a href="#" class="w3-bar-item w3-button">Thohoyandou</a>
            <a href="#" class="w3-bar-item w3-button">Tzaneen</a>
            <a href="#" class="w3-bar-item w3-button">Vaalwater</a>
            <a href="#" class="w3-bar-item w3-button">Vivo</a>
            <a href="#" class="w3-bar-item w3-button">Zebedeila</a>
            <a href="#" class="w3-bar-item w3-button">Zion City Moria</a>        
        </div>
        <div style="margin-left:25%">
            <img src="../images/map/limpopo.png" usemap="#image-map" class="limpopo-map">
        </div>
        
    </div>
    <script src="../asset/js/jQuery-v3.5.1.js"></script>

    <script>
        $('.w3-bar-item').click(function(e) {
            e.preventDefault();
            var a = document.createElement('a'); 
            a.href = "../overall/index.php?seltown=" + e.target.innerText; 
            a.target = "bakkie-iframe";          
            a.click();
        });
    </script>
    
</body>

</html>