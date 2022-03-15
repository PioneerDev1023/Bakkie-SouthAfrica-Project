
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="./../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./../asset/plugin/bootstrap-4.5.0/css/bootstrap-grid.css">
    <link rel="stylesheet" href="./../asset/plugin/bootstrap-4.5.0/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./../asset/plugin/bootstrap-4.5.0/css/bootstrap.css">
    <link rel="stylesheet" href="./../asset/plugin/bootstrap-4.5.0/css/bootstrap.min.css">
    <title>Welcome <?php echo $_SESSION['user']['username']; ?></title>
    <?php
	// Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["user"])){
        header("location: ./../index.php");
        exit;
    }

    /* ------------------------------------------------------- Logout module */
    if(isset($_GET['logout']) && $_SESSION['user'] != ''){
        unset($_SESSION['user']);
        session_destroy();
        header("Location: ./index.php");
    }
    ?>

    <script>
        var email = "<?php echo $_SESSION['user']['email']; ?>";
    </script>
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
        loadProvince();
        function loadProvince(){
            chapterSel.length = 1;
            topicSel.length = 1;
            for (var y in subjectObject["South Africa"]) {
                topicSel.options[topicSel.options.length] = new Option(y, y);
            }
        }
        topicSel.onchange = function() {
            chapterSel.length = 1;
            var z = subjectObject["South Africa"][this.value];
            for (var i = 0; i < z.length; i++) {
            chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
            }
        }
        }
    </script>
</head>

<body class="text-center">
<div class="container">
    <img src="<?='inc/'.$_SESSION['user']['user_photo'] ?>" style="width: 450px; margin: 20px;" alt=""/>
    <h1 class="mt-2">Welcome <?php echo $_SESSION['user']['username']; ?></h1>
    <h3>Your details will appear on the website after approval</h3>
    <div style="margin-bottom: 25px;">
        <a href="?logout"><button class="btn btn-sm btn-warning mt-4" style="color: white;">Log Out <i class='fas fa-sign-out-alt'></i></button></a>
        <a href="./../index.php"><button class="btn btn-sm btn-success mt-4 ml-5"><i class="fa fa-home"></i> HOME</button></a>
    </div>

    <div class="form" id="register-form" enctype="multipart/form-data" style="border-top: 2px solid lightgrey; margin-bottom: 15px; display: none;">
        <div class="oper-btns d-flex" style="flex-direction: row-reverse;">
            <button class="signout-btn btn btn-danger" style="margin-top: 10px; width: 120px; margin-left: 10px;"><i class='fas fa-trash-alt'></i> Delete</button>
            <!-- Re-edit Modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-top: 10px; width: 120px;"><i class='fas fa-edit'></i>
                Edit
            </button>
            <div class="modal fade" id="myModal" style="display: none;">
                <div class="modal-dialog modal-dialog-centered  modal-xl">
                <div class="modal-content">
                
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Edit your details</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="inc/re-edit.php" method="post" class="form_edit" id="re-edit-form" enctype="multipart/form-data">
                            <div class="form-group d-flex flex-wrap">
                                <label class="form-group col-md-3 col-sm-12 col-xs-12">
                                    <i class="fa fa-image"></i>Picture of your face</br>(head & shoulders)*<input type="file" name="m_user_photo" id="m_user_photo" class="m_user_photo form-control" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/bmp" data-rule="required" data-msg="Choose your photo" onchange="previewFile1()" oninvalid="this.setCustomValidity('Please select picture of your face')" oninput="setCustomValidity('')">
                                    <div class="validation text-left text-danger"></div>
                                    <img class="user-img" src="" width="100%" alt="Image preview...">
                                </label>
                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                    <input type="text" name="nickname" id="m_nickname" class="nickname form-control" placeholder="Enter your nickname (what people call you)*" data-rule="minlen:2" data-msg="Please enter your nickname" style="margin-bottom: 10px;" oninvalid="this.setCustomValidity('Please enter your nickname')" oninput="setCustomValidity('')" required>
                                    <div class="validation text-left text-danger"></div>

                                    <div class="form-group d-flex justify-content-between" style="box-sizing: border-box;">
                                        <select name="country" id="country" class="country form-group form-control" style="margin-right: 10px;display:none;" data-rule="minlen:5" data-msg="Please select on your country">
                                            <option value="" selected="selected">Select country</option>
                                        </select>
                                        <div class="validation text-left text-danger"></div>

                                        <select name="province" id="province" class="m_province form-group form-control" style="margin-right: 10px;" data-rule="required" data-msg="Select on your province" required oninvalid="this.setCustomValidity('Please select a province')" oninput="setCustomValidity('')">
                                            <option class="form-group" value="" selected="selected">Select PROVINCE*</option>
                                        </select>
                                        <div class="validation text-left text-danger"></div>

                                        <select name="hometown" id="hometown" class="m_hometown form-group form-control" data-rule="required" data-msg="Select on your city/town" required  oninvalid="this.setCustomValidity('Please select a town/city')" oninput="setCustomValidity('')">
                                            <option value="" selected="selected">Select TOWN/CITY*</option>
                                        </select>
                                        <div class="validation text-left text-danger"></div>
                                    </div>
                                    <div class="validation text-left text-danger"></div>

                                    <div class="form-group d-flex justify-content-between flex-wrap">
                                        <div class="form-group col-12 d-flex align-items-center justify-content-between">
                                            <h4>R</h4>
                                            <input type="number" name="daily_rate" id="m_daily_rate" class="daily-rate form-control col-4" placeholder="Amount*" data-rule="required" data-msg="Please enter Daily Rate" oninvalid="this.setCustomValidity('Please enter Daily Rate')" oninput="setCustomValidity('')" required>
                                            <div class="validation text-left text-danger"></div>
                                            <h6 class="col-7" style="margin-bottom: 0px;">Daily Rate (Unlimited km's - 8 hrs)</h6>
                                        </div>

                                        <div class="col-12 align-items-center" style="color: grey;"><p style="margin-bottom: 0px;">(Excludes FUEL; LABOUR)</p></div>

                                        <div class="form-group col-12 d-flex align-items-center justify-content-between">
                                            <h6 style="margin-bottom: 0px;">Free</h6>
                                            <input type="number" name="free_rate" id="m_free_rate" class="free-rate form-control col-3" placeholder="Enter Km's*" data-rule="minlen:1" data-msg="Please enter Free Km's" oninvalid="this.setCustomValidity('Please enter Free km s')" oninput="setCustomValidity('')" required>
                                            <div class="validation text-left text-danger"></div>
                                            <h6 style="margin-bottom: 0px;">km's</h6>
                                            
                                            <h4 style="margin-bottom: 0px; padding-left: 20px">R</h4>
                                            <input type="number" name="hoc_rate" id="m_hoc_rate" class="hoc-rate form-control col-3" placeholder="Amount*" data-rule="minlen:1" data-msg="Please enter Ad Hoc Rate" oninvalid="this.setCustomValidity('Please enter Ad Hoc Rate')" oninput="setCustomValidity('')" required>
                                            <div class="validation text-left text-danger"></div>
                                            <h6 style="margin-bottom: 0px;">Ad Hoc Rate</h6>
                                        </div>                        
                                        <div class="validation text-left text-danger"></div>
                                    </div>
                                    <input type="number" name="cell_number" id="m_cell_number" class="form-control" placeholder="Enter 10-digit WhatsApp Cell Number*" data-rule="exact:10" data-msg="Please enter your 10-digit cell number" oninvalid="this.setCustomValidity('Please enter your 10-digit cell number')" oninput="setCustomValidity('')" required>
                                    <div class="validation text-left text-danger"></div>

                                    <input type="text" name="m_email" id="m_email" class="email form-control" placeholder="Enter your email*" data-rule="minlen:2" data-msg="Please enter your email" style="margin-bottom: 10px; display: none;">
                                    <div class="validation text-left text-danger"></div>
                                </div>
                                <label class="form-group col-md-3 col-sm-12 col-xs-12">
                                    <i class="fa fa-image"></i>Picture of your bakkie</br>(front & side-numberplate blanked)*<input type="file" name="m_bakkie_photo" id="m_bakkie_photo" class="bakkie-photo form-control" accept="image/x-png,image/gif,image/jpeg,image/jpg,image/bmp" data-rule="required" data-msg="Choose your bakkie photo" onchange="previewFile2()" oninvalid="this.setCustomValidity('Please select an image of your drivers license.')" oninput="setCustomValidity('')">
                                    <div class="validation text-left text-danger"></div>
                                    <img class="bakkie-img" src="" width="100%" alt="Image preview...">
                                </label>                     
                            </div>
                            <button type="submit" class="edit-register btn btn-block" style="width: 350px; margin: 0 auto;" id="edit-register" onclick="stringLengthCheck">Submit edit</button>
                        </form>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                    <p>New details to appear after admin approval</p>
                    </div>
                    
                </div>
                </div>
            </div>

        </div>

        <h2 style="margin-top: 30px; font-weight: 800; color: green;">Your register infos that approved.</h2>
        <input type="hidden" name="status" id="status" value="register">

        <div class="errorLogs"></div>
        <div class="form-group d-flex flex-wrap">
            <label class="btn btn-secondary col-md-3 col-sm-12 col-xs-12" style="background-color: white; border: none; margin: auto; color: red;">
                <img class="user-img" src="" width="100%" alt="No driver photo">
            </label>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <input type="text" name="nickname" id="nickname" class="nickname form-control" placeholder="Your nickname(what people call you)" style="margin-bottom: 5px; text-align: center; color: red; text-decoration: underline; font-weight: 700;" readonly>

                <div class="form-group d-flex justify-content-between" style="box-sizing: border-box; margin-bottom: 5px;">
                    <input name="country" id="w_country" class="country form-control" style="margin-right: 10px; display:none;" required data-rule="minlen:5" data-msg="Please select on your province">
                    </input>
                    <input name="province" id="w_province" class="province form-control" style="margin-right: 10px; font-weight: 700; text-align: center;" placeholder="Province" readonly>
                    </input>
                    <input name="hometown" id="w_hometown" class="hometown form-control" style="font-weight: 700; text-align: center;" placeholder="City/Town" readonly>
                    </input>
                </div>

                <div class="form-group d-flex justify-content-between flex-wrap" style=" margin-bottom: 5px;">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <h4 style="margin-bottom: 0px;">R</h4>
                        <input type="number" name="daily_rate" id="daily_rate" class="daily-rate form-control col-4" placeholder="Amount" style="    margin-bottom: 10px; text-align: center; color: red; font-weight: 700;" readonly>
                        <h6 class="col-7" style="margin-bottom: 10px;">Daily Rate <span>(Unlimited km's-8hrs)</span></h6>
                    </div>

                    <div class="col-12 align-items-center" style="color: grey;"><p style="margin-bottom: 0px;">(Excludes FUEL; LABOUR)</p></div>

                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <h6 style="margin-bottom: 0px;">Free</h6>
                        <input type="number" name="free_rate" id="free_rate" class="free-rate form-control col-3" placeholder="Enter Km's" style="margin-bottom: 10px; text-align: center; color: red; font-weight: 700;" readonly>
                        <h6 style="margin-bottom: 0px;">km's</h6>
                        
                        <h4 style="margin-bottom: 0px; padding-left: 20px">R</h4>
                        <input type="number" name="hoc_rate" id="hoc_rate" class="hoc-rate form-control col-3" placeholder="Amount" style="text-align: center; color: red; font-weight: 700;" readonly>
                        <h6 style="margin-bottom: 0px;">Ad Hoc Rate</h6>
                    </div>                        
                </div>
                <button style="border: none; background-color: white;">
                    <img style="width: 250px;"src="./../images/whatsapp.png"></img>
                </button>
            </div>
            <label class="btn btn-secondary col-md-3 col-sm-12 col-xs-12" style="background-color: white; border: none; color: red; margin: auto;">
                <img class="bakkie-img" src="" width="100%" alt="No bakkie photo">
            </label>                          
                                    
        </div>
                            
    </div>

    <script src="./../asset/js/jQuery-v3.5.1.js"></script>
    <script src="js/welcome.js"></script>
    <script src="./../asset/plugin/bootstrap-4.5.0/js/bootstrap.bundle.js"></script>
    <script src="./../asset/plugin/bootstrap-4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="./../asset/plugin/bootstrap-4.5.0/js/bootstrap.js"></script>
    <script src="./../asset/plugin/bootstrap-4.5.0/js/bootstrap.min.js"></script>
    <script src="./../asset/plugin/bootstrap-4.5.0/js/bootstrap.min.js"></script>
    <script>
        function previewFile1() {
            const preview = document.querySelector('.user-img');
            const file = document.querySelector('#m_user_photo').files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function () {
                // convert image file to base64 string
                preview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }
        
        function previewFile2() {
            const preview = document.querySelector('.bakkie-img');
            const file = document.querySelector('#m_bakkie_photo').files[0];
            const reader = new FileReader();

            reader.addEventListener("load", function () {
                // convert image file to base64 string
                preview.src = reader.result;
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
    
</div>
</body>

</html>