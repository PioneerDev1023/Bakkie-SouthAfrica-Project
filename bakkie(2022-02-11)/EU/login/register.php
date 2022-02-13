

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="shortcut icon" href="images/fav-icon.png" type="image/x-icon">
    <link rel="stylesheet" href="plugin/bootstrap-4.5.0/css/bootstrap-grid.css">
    <link rel="stylesheet" href="plugin/bootstrap-4.5.0/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="plugin/bootstrap-4.5.0/css/bootstrap.css">
    <link rel="stylesheet" href="plugin/bootstrap-4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugin/fontawesome-5.13.1/css/all.css">
    <link rel="stylesheet" href="plugin/fontawesome-5.13.1/css/all.min.css">
    <link rel="stylesheet" href="plugin/fontawesome-5.13.1/css/fontawesome.css">
    <link rel="stylesheet" href="plugin/fontawesome-5.13.1/css/fontawesome.min.css">

    <title>Login Form</title>

    <script>
        var subjectObject = {
        "South Africa": {
            "LIMPOPO": ["Afguns","Alldays","Bandelierkop","Ba-Phalaborwa","Bela-Bela","Bochum","Bosbokrand","Dendron","Duiwelskloof","Elim","Ellisras","Gravelotte","Haenertsburg","Hoedspruit","Jane furse","Klaserie","Lebowakgomo","Lephalale","Letsitele","Leydsdorp","Louis Trichardt","Messina","Modimolle","Modjadjiskloof","Mogwadi","Mokopane","Mokopane","Mookgophong","Musina","Naboomspruit","Nylstroom","Ofcolaco","Phalaborwa","Polokwane","Roedtan","Sekgopo","Senwabarwana","Seshego","Thabazimbi","Thohoyandou","Tzaneen","Vaalwater","Vivo","Zebedeila","Zion City Moria"],

            "GAUTENG": ["Alberton","Alexandra","Atteridgeville","Bekkersdal","Benoni","Boipatong","Boksburg","Bophelong","Brakpan","Bronberg","Bronkhorstspruit","Carletonville","Centurion","Cullinan","Daveyton","Devon","Dudza","Edenvale","Ekangala","Evaton","Germiston","Germiston","Hammanskraal","Heidelberg","Impumelelo","Irene","Isando","Johannesburg","Kagiso","Katlehong","KemptonPark","Khutsong","Kromdraai","Krugersdorp","KwaThema","Lenasia","Magaliesburg","Mamelodi","Meyerton","Midrand","Mohlakeng","Muldersdrift","Nigel","Pretoria","Randburg","Randfontein","Ratanda","Refilwe","ReigerPark","Roodepoort","Sandton","Sebokeng","Sharpeville","Soshanguve","Soweto","Springs","Tembisa","Thokoza","Tsakane","Vanderbijlpark","Vereeniging","Vosloorus","Wattville","Westonaria","Zithobeni"],

            "MPUMALANGA": [ "Aankoms" ,  "Acornhoek" ,  "Amersfoort",  "Amsterdam" ,  "Anysspruit" ,  "Argent" ,  "Avoca" , "Avontuur", "Badplaas", "Balfour", "Balmoral", "Bankkop", "Barberton",  "Belfast", "Berbice", "Bethal", "Bettiesdam", "Branddraai", "Braunschweig", "Breyten", "Brondal", "Bushbuckridge", "Carolina", "Chrissiesmeer", "Davale", "Delmas", "Diepdale", "Diepgezet", "Dullstroom", "Dundonald", "Eerstehoek", "Ekulindeni", "Elukwatini", "Embhuleni", "Emphuluzi", "Enkhaba", "Ermelo", "Fernie", "Glenmore", "Graskop", "Greylingstad",  "Hartebeeskop", "Hazyview", "Hectorspruit", "Kaapmuiden", "Kinross", "Komatipoort", "KwaMhlanga", "Lochiel", "Loopspruit", "Lydenburg", "Machadodorp", "Malelane", "Mbhejeka", "Mbombela", "Middelburg", "Moddergat", "Ngodwana", "Ohrigstad", "Perdekop", "Piet Retief", "Pilgrim's Rest", "Sabie", "Secunda", "Siyabuswa", "Skukuza", "Standerton", "Trichardt", "Vaalbank", "Volksrust", "Wakkerstroom", "Waterval Boven", "Waterval Onder", "White River", "Witbank"],

            "FREESTATE": ["Allanridge","Arlington","Bethlehem","Bethulie","Bloemfontein","Boshof","Bothaville","Botshabelo","Brandfort","Bultfontein","Clarens","Clocolan","Cornelia","Dealesville","Deneysville","Dewetsdorp","Edenburg","Edenville","Excelsior","Fauresmith","Ficksburg","Fouriesburg","Frankfort","Harrismith","Heilbron","Hennenman","Hertzogville","Hobhouse","Hoopstad","Itumeleng","Jacobsdal","Jagersfontein","Kestell","Kgotsong","Koffiefontein","Koppies","Kroonstad","Kutlwanong","Ladybrand","Lindley","Luckhoff","Makeleketla","Mangaung","Marquard","Memel","Mvela","Odendaalsrus","Oranjeville","Parys","Paul Roux","Petrus Steyn","Petrusburg","Philippolis","Phuthaditjhaba","Reddersburg","Reitz","Rosendal","Rouxville","Sasolburg","Senekal","Smithfield","Springfontein","Steynsrus","Swinburne","Thaba 'Nchu","Theunissen","Trompsburg","Tweeling","Tweespruit","Van Reenen","Van Stadensrus","Ventersburg","Verkeerdevlei","Viljoenskroon","Villiers","Virginia","Vrede","Vredefort","Warden","Welkom","Wepener","Wesselsbron","Winburg","Winburg","Zastron"],

            "EASTERNCAPE": ["Aberdeen","Addo","Adelaide","Alexandria","Alice","Aliwal North","Balfour","Barkly East","Bathurst","Bedford","Berlin","Bethulie","Bisho","Braunschweig","Burgersdorp","Butterworth","Cala","Cathcart","Cedarville","Centane","Chintsa","Coffee Bay","Cofimvaba","Cookhouse","Cradock","Despatch","Dohne","Dordrecht","East London","Elliot","Engcobo","Enon","Flagstaff","Fort Beaufort","Gonubie","Graaff Reinet","Grahamstown","Haga-Haga","Hamburg","Hankey","Hofmeyr","Hogsback","Humansdorp","Idutywa","Indwe","Jamestown","Jeffreys Bay","Joubertina","Kareedouw","Katberg","Kei Mouth","Keiskammahoek","Kenton-on-Sea","Kidds Beach","King William's Town","Kirkwood","Komga","Krakeelrivier","Lady Frere","Lady Frere","Lady Grey","Libode","Lusikisiki","Maclear","Mdantsane","Mhlangeni","Middelburg","Molteno","Morgan's Bay","Mount Fletcher","Mount Frere","Nieu-Bethesda","Nqamakwe","Oyster Bay","Patensie","Paterson","Peddie","Port Alfred","Port Elizabeth","Queenstown","Salem","Seymour","Somerset East","St Francis Bay","Sterkspruit","Sterkstroom","Steynsburg","Steytlerville","Stutterheim","Tarkastad","Tsomo","Uitenhage","Venterstad","Whittlesea","Willowmore","Zwelitsha"],

            "WESTERNCAPE": ["Albertinia","Arniston","Ashton","Atlantis","Aurora","Baardskeerdersbos","Barrydale","Beaufort West","Bellville","Betty's Bay","Birkenhead","Bitterfontein","Blue Downs","Boggomsbaai","Bonnievale","Botrivier","Brackenfell","Bredasdorp","Brenton-on-Sea","Buffelsbaai","Caledon","Calitzdorp","Cape Town","Ceres","Chatsworth","Citrusdal","Clanwilliam","Crossroads","Dana Baai","Darling","De Doorns","De Kelders","De Rust","De Rust","Denneburg","Dennehof","Doringbaai","Durbanville","Dwarskersbos","Dysselsdorp","Ebenhaeser","Eendekuil","Eerste River","Elands Bay","Elgin","Elim","Elsie's River","Fish Hoek","Fisherhaven","Franschhoek","Franskraalstrand","Friemersheim","Gansbaai","Genadendal","George","Glentana","Goedverwacht","Goodwood","Gordon's Bay","Gouda","Gouritsmond","Graafwater","Grabouw","Great Brak River","Greyton","Groot-Jongensfontein","Grotto Bay","Guguletu","Haarlem","Hartenbos","Hawston","Heidelberg","Herbertsdale","Hermanus","Herolds Bay","Hopefield","Hotagterklip","Hout Bay","Infanta","Jacobsbaai","Jakkalsfontein","Kalbaskraal","Kayamandi","Keurboomsrivier","Keurboomstrand","Khayelitsha","Klapmuts","Klawer","Kleinbaai","Kleinmond","Knysna","Koekenaap","Koringberg","Kraaifontein","Kranshoek","Kuils River","Kurland Estate","Kylemore","Ladismith","L'Agulhas","Laingsburg","Lamberts Bay","Langa","Langebaan","Langebaanweg","Languedoc","Leeu-Gamka","Little Brak River","Lutzville","Macassar","Malmesbury","Matjiesfontein","McGregor","Melkbosstrand","Merweville","Mfuleni","Milnerton","Mitchell's Plain","Montagu","Montagu","Moorreesburg","Mossel Bay","Murraysburg","Napier","Nature's Valley","Nelspoort","Noetzie","Noordhoek","Nyanga","Observatory","Onrusrivier","Op-die-Berg","Oudtshoorn","Paarl","Pacaltsdorp","Parow","Paternoster","Pearly Beach","Piketberg","Plettenberg Bay","Pniel","Port Beaufort","Porterville","Prince Albert","Prince Alfred Hamlet","Pringle Bay","Rawsonville","Redelinghuys","Rheenendal","Riebeek West","Riebeek-Kasteel","Riversdale","Riviersonderend","Robertson","Robertsvlei","Rooi Els","Rozendal","Saldanha","Saron","Sedgefield","Simon's Town","Slangrivier","Somerset West","St Helena Bay","Stanford","Stellenbosch","Stilbaai","Strand","Strandfontein","Struisbaai","Suiderstrand","Suurbraak","Swellendam","Touws River","Tulbagh","Uniondale","Van Dyksbaai","Vanrhynsdorp","Velddrif","Vermont","Victoria Bay","Villiersdorp","Volmoed","Vredenburg","Vredendal","Wellington","Wemmershoek","Wilderness","Wittedrift","Wolseley","Worcester","Wupperthal","Yzerfontein","Zoar"],
            
            "NORTHERNCAPE": ["Aggeneys","Alexander Bay","Andriesvale","Askham","Augrabies","Barkly West","Britstown","Campbell","Carolusberg","Colesberg","Concordia","Copperton","Danielskuil","De Aar","Delportshoop","Douglas","Garies","Griquatown","Groblershoop","Hanover","Hartswater","Hondeklip","Hopetown","Hutchinson","Jan Kempdorp","Kakamas","Kamieskroon","Kanoneiland","Kathu","Keimoes","Kenhardt","Kimberley","Kleinzee","Kuruman","Lime Acres","Louisvale","Loxton","Marydale","Mier","Modder River","Nababeep","Norvalspont","Noupoort","Okiep","Olifantshoek","Onseepkans","Orania","Pella","Petrusville","Philipstown","Pofadder","Port Nolloth","Postmasburg","Prieska","Putsonderwater","Richmond","Riemvasmaak","Soebatsfontein","Springbok","Steinkopf","Strydenburg","Ulco","Upington","Vanderkloof","Victoria West","Vosburg","Warrenton","Windsorton"],

            "NORTHWEST": ["Amalia","Babelegi","Beestekraal","Bloemhof","Bray","Brits","Broederstroom","Christiana","Coligny","Delareyville","Derby","Ganyesa","Ganyesa","Ga-Rankuwa","Groot Marico","Hartbeesfontein","Hartbeespoort","Hekpoort","Jericho","Klerksdorp","Kosmos","Koster","Kroondal","Leeudoringstad","Lehurutshe","Lethabong","Lichtenburg","Maanhaarrand","Mabopane","Magaliesburg","Mahikeng","Makwassie","Mareetsane","Mareetsane","Marikana","Mathibestad","Mmabatho","Mogwase","Mooinooi","Morokweng","Motlhabeng","Orkney","Ottosdal","Ottoshoop","Potchefstroom","Ramokokastad","Reivilo","Rustenburg","Sannieshof","Schweizer-Reneke","Setlagole","Setlopo","Skeerpoort","Stella","Stilfontein","Swartruggens","Taung","Tlhabane","Tosca","Ventersdorp","Vryburg","Wolmaransstad","Zeerust"],

            "KWAZULUNATAL": ["Adams Mission", "Amanzimtoti", "Anerley", "Assagay", "Babanango", "Balgowan", "Ballito", "Bazley Beach", "Bergville", "Boston", "Botha's Hill", "Bulwer", "Cato Ridge", "Charlestown", "Chatsworth", "Clermont", "Colenso", "Dalton", "Dannhauser", "Dududu", "Dundee", "Durban", "ekuPhakameni", "Elandslaagte", "Emadlangeni", "eMdloti", "Empangeni", "Eshowe", "Estcourt", "Ezinqoleni", "Franklin", "Gillitts", "Glencoe", "Greytown", "Harding", "Harding", "Hattingspruit", "Hibberdene", "Hillcrest", "Hilton", "Himeville", "Hluhluwe", "Howick", "Ifafa Beach", "Inanda", "Inchanga", "Ingwavuma", "Isipingo", "Ixopo", "Jozini", "Kelso", "Kingsburgh", "Kingsley", "Kloof", "Kokstad", "Kranskop", "KwaDukuza", "KwaMakhutha", "KwaMashu", "La Mercy", "Ladysmith", "Louwsburg", "Madadeni", "Mahlabatini", "Mandeni", "Manguzi", "Maphumulo", "Margate", "Mbazwana", "Melmoth", "Melville", "Merrivale", "Mkuze", "Mooi River", "Mpumalanga", "Mtubatuba", "Mtunzini", "Mtwalume", "Munster", "New Germany", "New Hanover", "Newcastle", "Ngagane", "Nkandla", "Nongoma", "Nquthu", "Ntuzuma", "Osizweni", "oThongathi", "Palm Beach", "Park Rynie", "Paulpietersburg", "Pennington", "Phoenix", "Pietermaritzburg", "Pinetown", "Pomeroy", "Pongola", "Port Edward", "Port Shepstone", "Prospecton", "Queensburgh", "Ramsgate", "Richards Bay", "Richmond", "Salt Rock", "Scottburgh", "Sezela", "Shallcross", "Shelly Beach", "Southbroom", "Ubombo", "Ulundi", "Umbumbulu", "Umgababa", "uMhlanga", "Umkomaas", "Umlazi", "Umtentweni", "Umzimkulu", "Umzinto", "Umzumbe", "Underberg", "Uvongo", "Verulam", "Vryheid", "Wartburg", "Wasbank", "Westville", "Weza"],
        }
        }
        window.onload = function() {
        var subjectSel = document.getElementById("country");
        var topicSel = document.getElementById("province");
        var chapterSel = document.getElementById("hometown");
        for (var x in subjectObject) {
            subjectSel.options[subjectSel.options.length] = new Option(x, x);
        }
        // subjectSel.onchange = function() {
        loadProvince();
        function loadProvince(){
            //empty Chapters- and Topics- dropdowns
            chapterSel.length = 1;
            topicSel.length = 1;
            // console.log(this.value);
            for (var y in subjectObject["South Africa"]) {
                topicSel.options[topicSel.options.length] = new Option(y, y);
            }
            //display correct values
            // for (var y in subjectObject[this.value]) {
            //     topicSel.options[topicSel.options.length] = new Option(y, y);
            // }
        }
        topicSel.onchange = function() {
            //empty Chapters dropdown
            chapterSel.length = 1;
            //display correct values
            // var z = subjectObject[subjectSel.value][this.value];
            var z = subjectObject["South Africa"][this.value];
            for (var i = 0; i < z.length; i++) {
            chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
            }
        }
        }
    </script>
</head>

<body id="body">
    <div class="container">
        <div class="row" style="margin-top: 20px;">
            <div class="col-9 justify-content-center text-center form-card">
                <!-- REGISTER AREA  -->
                <form action="inc/handler.inc.php" method="post" class="form" id="register-form" enctype="multipart/form-data">
                    <input type="hidden" name="status" id="status" value="register">
                    <h2 style="font-weight: 800; text-decoration: underline;">Employer Registration</h2>
                    <div class="errorLogs"></div>
                    <div class="form-group d-flex flex-wrap">
                        <div class="form-group d-flex justify-content-between col-12" style="box-sizing: border-box;">
                            <select name="country" id="country" class="form-control" style="margin-right: 10px;display:none;" required data-rule="minlen:5" data-msg="Please select on your province">
                                <option value="" selected="selected">Select country</option>
                            </select>

                            <select name="province" id="province" class="form-control col-6" style="margin-right: 10px;" data-rule="required"  data-msg="Please click on your province" required>
                                <option value="" selected="selected">Select PROVINCE</option>
                            </select>
                            <div class="validation text-left text-danger"></div>

                            <select name="hometown" id="hometown" class="form-control col-6" data-rule="required" data-msg="Please click on your town/city" required>
                                <option value="" selected="selected">Select TOWN/CITY</option>
                            </select>
                            <div class="validation text-left text-danger"></div>
                        </div>
                        <!-- <div class="validation text-left text-danger"></div> -->

                        <input type="text" name="username" id="username" class="form-control" placeholder="Enter your name" data-rule="required" data-msg="Please enter your name">
                        <div class="validation text-left text-danger"></div>

                        <input type="text" name="surname" id="surname" class="form-control" placeholder="Enter your surname" data-rule="required" data-msg="Please enter your surname">
                        <div class="validation text-left text-danger"></div>

                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter email (ex:user@email.com)" data-rule="email" data-msg="Please enter your email">                        
                        <div class="validation text-left text-danger"></div>

                        <input type="number" name="cell_number" id="cell_number" class="form-control" placeholder="Enter 10-digit WhatsApp Cell Number" data-rule="minlen:5" data-msg="Please enter your cell number" required>
                        <div class="validation text-left text-danger"></div>

                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter password" data-rule="minlen:6" data-msg="Please enter at least 6 chars">
                        <div class="validation text-left text-danger"></div>

                        <input type="password" name="re_pass" id="re_pass" class="form-control" placeholder="Re-enter password" data-rule="minlen:6" data-msg="Please enter at least 6 chars">
                        <div class="validation text-left text-danger pwd-retype"></div>
                        
                        <button type="submit" class="register btn btn-block" style="width: 250px; margin: 15px auto;" id="register">Register</button>
                        <div class="link mt-4">
                            <p>Already a member ? <a href="index.php" id="loginLink">Login </a></p>
                        </div>
                        
                    </div>
                                        
                    

                    
                </form>
            </div>
            </row>
        </div>
    </div>




    <script src="js/jQuery-v3.5.1.js"></script>
    <script src="js/main.js"></script>
    <script src="plugin/bootstrap-4.5.0/js/bootstrap.bundle.js"></script>
    <script src="plugin/bootstrap-4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="plugin/bootstrap-4.5.0/js/bootstrap.js"></script>
    <script src="plugin/bootstrap-4.5.0/js/bootstrap.min.js"></script>
    <script src="plugin/bootstrap-4.5.0/js/bootstrap.min.js"></script>
    <script src="plugin/fontawesome-5.13.1/js/all.js"></script>
    <script src="plugin/fontawesome-5.13.1/js/all.min.js"></script>
    <script src="plugin/fontawesome-5.13.1/js/fontawesome.js"></script>
    <script src="plugin/fontawesome-5.13.1/js/fontawesome.min.js"></script>
    
</body>

</html>