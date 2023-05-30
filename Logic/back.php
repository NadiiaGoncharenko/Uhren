<?php
session_start();
require_once('../config/dbaccess.php'); // verbindung zu db herstellen

$url = "";
$marke = $_POST["marke"];
$ort = $_POST["ort"];
$model = $_POST["model"];
$caseMaterial = $_POST["caseMaterial"];

//$marke = "Omega"; für test
//$model = "Speedmaster Day Date";

if (isset($_SESSION["user"]) && !empty($_SESSION["user"])) {

  switch ($marke) {
    case 'Omega':
      $marke = "manufacturerIds=187";
      include "../modelsOmega.php";
      // $mo del= modelOmega($model);
      break;

    case 'Rolex':

      $marke = "manuacture rIds=221";

      
    
      break;

    case 'Audemars Piguet':
      $marke = "manufacturerIds=18";
      include "../modelAP.php";
      $model = modelAP($model);

      break;

    case 'Breitling':
      $marke = "manufacturerIds=32";
      include '../modelsBreitling.php';
      $model = modelBreitling($model);
      break;

    case 'Cartier':
      $marke = "manufacturerIds=43";
      include '../modelsCartier.php';
      $model = modelCartier($model);
      break;

    case 'Patek Philippe':
      $marke = "manufacturerIds=194";
      include '../modelsPP.php';
      $model = modelPP($model);
      break;
  }
  switch ((string) $model) {
    case 'Air King':
      $model = '&models=5';
      break;

    case 'Air King Date':
      $model = '&models=957';
      break;

    case 'Cellini':
      $model = '&models=43';
      break;

    case 'Cellini Danaos':
      $model = '&models=972';
      break;

    case 'Cellini Date':
      $model = '&models=970';
      break;

    case 'Cellini Dual Time':
      $model = '&models=971';
      break;

    case 'Cellini Moonphase':
      $model = '&models=2722';
      break;

    case 'Cellini Prince':
      $model = '&models=973';
      break;

    case 'Cellini Time':
      $model = '&models=974';
      break;

    case 'Chronograph':
      $model = '&models=44';
      break;

    case 'Datejust':
      $model = '&models=45';
      break;

    case 'Datejust 31':
      $model = '&models=3023';
      break;

    case 'Datejust 36':
      $model = '&models=2878';
      break;

    case 'Datejust 41':
      $model = '&models=3025';
      break;

    case 'Datejust II':
      $model = '&models=46';
      break;

    case 'Datejust Oysterquartz':
      $model = '&models=952';
      break;

    case 'Datejust Turn-O-Graph':
      $model = '&models=950';
      break;

    case 'Day-Date':
      $model = '&models=47';
      break;

    case 'Day-Date 36':
      $model = '&models=2723';
      break;

    case 'Day-Date 40':
      $model = '&models=964';
      break;

    case 'Day-Date II':
      $model = '&models=48';
      break;

    case 'Day-Date Oysterquartz':
      $model = '&models=954';
      break;

    case 'Daytona':
      $model = '&models=2';
      break;

    case 'Explorer':
      $model = '&models=50';
      break;
    case 'Explorer II':
      $model = '&models=51';
      break;
    case 'GMT-Master':
      $model = '&models=3';
      break;

    case 'GMT-Master II':
      $model = '&models=4';
      break;
    case 'Lady-Datejust':
      $model = '&models=53';
      break;
    case 'Lady-Datejust Pearlmaster':
      $model = '&models=951';
      break;

    case 'Milgauss':
      $model = '&models=54';
      break;

    case 'Oyster':
      $model = '&models=3030';
      break;
    case 'Oyster Perpetual':
      $model = '&models=55';
      break;
    case 'Oyster Perpetual 26':
      $model = '&models=2730';
      break;
    case 'Oyster Perpetual 28':
      $model = '&models=3028';
      break;
    case 'Oyster Perpetual 31':
      $model = '&models=2729';
      break;
    case 'Oyster Perpetual 34':
      $model = '&models=2728';
      break;
    case 'Oyster Perpetual 36':
      $model = '&models=2727';
      break;
    case 'Oyster Perpetual 39':
      $model = '&models=2726';
      break;
    case 'Oyster Perpetual 41':
      $model = '&models=3029';
      break;
    case 'Oyster Perpetual Date':
      $model = '&models=955';
      break;
    case 'Oyster Perpetual Lady Date':
      $model = '&models=956';
      break;
    case 'Oyster Presicion':
      $model = '&models=57';
      break;
    case 'Pearlmaster':
      $model = '&models=524';
      break;
    case 'Precision':
      $model = '&models=3027';
      break;
    case 'Prince':
      $model = '&models=523';
      break;

    case 'Sea-Dweller':
      $model = '&models=49';
      break;
    case 'Sea-Dweller 4000':
      $model = '&models=953';
      break;
    case 'Sea-Dweller Deepsea':
      $model = '&models=878';
      break;
    case 'Sky-Dweller':
      $model = '&models=611';
      break;
    case 'Submariner':
      $model = '&models=1';
      break;
    case 'Submariner Date':
      $model = '&models=981';
      break;
    case 'Submariner (No date)':
      $model = '&models=2460';
      break;

    case 'Yacht-Master':
      $model = '&models=58';
      break;
    case 'Yacht-Master 37':
      $model = '&models=2724';
      break;

    case 'Yacht-Master 40':
      $model = '&models=2725';
      break;
    case 'Yacht-Master 42':
      $model = '&models=2761';
      break;
    case 'Yacht-Master  II':
      $model = '&models=59';
      break;
      case 'Annual Calendar':
        $model = '&models=1963';
        break;
        
    case 'Aquanaut':  $model = '&models=92';
        break;
        case 'Beta 21':  $model = '&models=2013';
        break;
        case 'Calatrava':  $model = '&models=93';
        break;
        case 'Chronograph':  $model = '&models=1964';
        break;
        case 'Complications':  $model = '&models=96';
        break;
        case 'Ellipse dOr':  $model = '&models=97'; //Name is Ellipse d'Or for front
        break;
        case 'Gondolo':  $model = '&models=98';
        break;
        case 'Hour Glass':  $model = '&models=102';
        break;
        case 'Minute Repeater':  $model = '&models=1965';
        break;
        case 'Nautilus':  $model = '&models=106';
        break;
        case 'Neptune':  $model = '&models=2436';
        break;
        case 'Pagoda':  $model = '&models=107';
        break;
        case 'Perpetual Calendar':  $model = '&models=99';
        break;
        case 'Travel Time':  $model = '&models=108';
        break;
        case 'Twenty~4':  $model = '&models=109';
        break;
        case 'Vintage':  $model = '&models=110';
        break;
        case 'World Time':  $model = '&models=95';
        break;

case 'Constellation' : $modelCode =  '&models=60';
break;

case 'Constellation Day-Date' : $modelCode =  'models=1076'; 
break;

case 'Constellation Double Eagle' : $modelCode =  '&models=2440'; 
break;
case 'Constellation Ladies' : $modelCode =  '&models=61'; 
break;
case 'Constellation Petite Seconde' : $modelCode =  '&models=2575'; 
break;
case 'Constellation Men' : $modelCode =  '&models=1077'; 
break;
case 'Constellation Quadra' : $modelCode =  '&models=3070'; 
break;
case 'Constellation Quartz' : $modelCode =  '&models=1078'; 
break;
case 'De Ville' : $modelCode =  '&models=62'; 
break;
case 'De Ville Central Tourbillon' : $modelCode =  '&models=2576'; 
break;
case 'De Ville Co-Axial' : $modelCode =  '&models=38'; 
break;
case 'De Ville Hour Vision' : $modelCode =  '&models=637'; 
break;
case 'De Ville Ladymatic' : $modelCode =  '&models=635'; 
break;
case 'De Ville Prestige' : $modelCode =  '&models=636'; 
break;
case 'De Ville Tresor' : $modelCode =  '&models='; 
break;
case 'De Ville X2' : $modelCode =  '&models=2576'; 
break;
case 'Dynamic Chronograph' : $modelCode =  '&models=2489'; 
break;
case 'Flightmaster' : $modelCode =  '&models=1081'; 
break;
case 'Genève' : $modelCode =  '&models=1082'; 
break;
case 'Globemaster' : $modelCode =  '&models=1080'; 
break;
case 'Memomatic' : $modelCode =  '&models=63'; 
break;
case 'Museum' : $modelCode =  '&models=525'; 
break;
case 'Seamaster' : $modelCode =  '&models=66'; 
break;
case 'Seamaster 120 M' : $modelCode =  '&models=3067'; 
break;
case 'Seamaster 1948' : $modelCode =  '&models=3068'; 
break;
case 'Seamaster  300' : $modelCode =  '&models=376'; 
break;
case 'Seamaster  Apnea' : $modelCode =  '&models=3066'; 
break;
case 'Seamaster Aqua Terra' : $modelCode =  '&models=68'; 
break;
case 'Seamaster Bullhead' : $modelCode =  '&models=1074'; 
break;
case 'Seamaster DeVille' : $modelCode =  '&models=276'; 
break;
case 'Seamaster Diver 300 M' : $modelCode =  '&models=1073'; 
break;
case 'Seamaster Planet Ocean' : $modelCode =  '&models=65'; 
break;
case 'Seamaster Planet Ocean Chronograph' : $modelCode =  '&models=375'; 
break;
case 'Seamaster PloProf' : $modelCode =  '&models=67'; 
break;
case 'Seamaster Railmaster' : $modelCode =  '&models=69'; 
break;
case 'Speedmaster' : $modelCode =  '&models=74'; 
break;
case 'Speedmaster 57' : $modelCode =  '&models=1083'; 
break;
case 'Speedmaster Broad Arrow' : $modelCode =  '&models=242'; 
break;
case 'Speedmaster Date' : $modelCode =  '&models=277'; 
break;
case 'Speedmaster Day Date' : $modelCode =  '&models=73'; 
break;
case 'Speedmaster HB-SIA' : $modelCode =  '&models=1086'; 
break;
case 'Speedmaster Ladies Chronograph' : $modelCode =  '&models=2442'; 
break;
case 'Speedmaster Mark II' : $modelCode =  '&models=1084'; 
break;
case 'Speedmaster Mark III' : $modelCode =  '&models=3052'; 
break;
case 'Speedmaster Mark IV' : $modelCode = '&models=3053'; 
break;
case 'Speedmaster Professional Moonwatch' : $modelCode = '&models=71';
break;
case 'Speedmaster Professional Moonwatch Moonphase' : $modelCode = '&models=243'; 
break;
case 'Speedmaster Racing' : $modelCode =  '&models=1085'; 
break;
case 'Speedmaster Reduced' : $modelCode =  '&models=72'; 
break;
case 'Speedmaster Skywalker X-33' : $modelCode =  '&models=1087'; 
break;
case 'Speedmaster  Spacemaker Z-33' : $modelCode =  '&models=2441'; 
break;
case 'Speedmaster  Split-Seconds' : $modelCode =  '&models=3069'; 
break;
case 'Speedsonic' : $modelCode =  '&models=3071'; 
break;
        case '21 Chronoscaph':
            $model = '&models=162';
            break;
        case '21 Must de Cartier':
            $model = '&models=163';
            break;
        case 'Baignoire ':
            $model = '&models=164';
            break;

        case 'Ballon Bleu':
            $model = '&models=165';
            break;

        case 'Cougar ':
            $model = '&models=776';
            break;
        case 'Panthère':
            $model = '&models=168';
            break;
        case 'Pasha':
            $model = '&models=172';
            break;
        case 'Pasha C':
            $model = '&models=171';
            break;
        case 'Pasha Seatimer':
            $model = '&models=170';
            break;
        case '':
            $model = '&models=';
            break;
        case '':
            $model = '&models=';
            break;
        case 'Roadster':
            $model = '&models=173';
            break;
        case 'Ronde Croisière de Cartier':
                $model = '&models=2439';
        break;
        case 'Ronde de Cartier':
            $model = '&models=2523';
        break;
        case 'Ronde Solo de Cartier':
                $model = '&models=174';
        break;
        case 'Santos':
                    $model = '&models=180';
        break;
        case'Santos Demoiselle' :$model = '&models=177';
        break;
        case'Santos Galbée' :$model = '&models=179';
        break;
        case'Tank' :$model = '&models=186';
        break;
        case'Tank Divan' :$model = '&models=182';
        break;
        case'Tank Française' :$model = '&models=183';
        break;
        case'Tank Solo' :$model = '&models=185';
        break;
        case'Tank Vermeil' :$model = '&models=778';
        break;
        case 'Tortue':$model = '&models=451';
        break;
        case 'Trinity':$model = '&models=2466';
        break;
case 'Aerospace':
            $model = '&models=24';
            break;
        case 'Aerospace Avantage':
            $model = '&models=1760';
            break;
        case 'Airwolf':
            $model = '&models=25';
            break;
        case 'Antares':
            $model = '&models=1703';
            break;
        case 'Avenger':
            $model = '&models=377';
            break;
        case 'Avenger Seawolf':
            $model = '&models=29';
            break;
        case 'Avenger Skyland':
            $model = '&models=1724';
            break;

        case 'B-1':
            $model = '&models=1762';
            break; 
        case 'B-2':
            $model = '&models=1763';
            break;
        case 'Blackbird':
            $model = '&models=20';
            break;
        case 'Callistino':
            $model = '&models=1705';
            break;
        case 'Callisto':
            $model = '&models=1704';
            break;
        case 'Chrono Cockpit':
            $model = '&models=18';
            break;
        case 'Chronomat':
            $model = '&models=13';
            break;
        case 'Chronomat Colt':
            $model = '&models=2716';
            break;

        case 'Chronomat Evolution':
            $model = '&models=2610';
            break;
        case 'Chronomat GMT':
            $model = '&models=1701';
            break;
        case 'Chronospace':
            $model = '&models=23';
            break;
        case 'Cockpit':
            $model = '&models=14';
            break;
        case 'Cockpit Lady':
            $model = '&models=16';
            break;
        case 'Colt':
            $model = '&models=33';
            break;
        case 'Colt 36':
            $model = '&models=1728';
            break;
        case 'Colt 44':
            $model = '&models=1730';
            break;

        case 'Colt Automatic':
            $model = '&models=1727';
            break;
        case 'Colt Chronograph':
            $model = '&models=1726';
            break;
        case 'Colt Chronograph Automatic':
            $model = '&models=1725';
            break;
        case 'Colt GMT':
            $model = '&models=379';
            break;
        case 'Colt Lady':
            $model = '&models=1729';
            break;
        case 'Colt Oceane':
            $model = '&models=381';
            break;
        case 'Colt Quartz':
            $model = '&models=380';
            break;
        case 'Colt Skyracer':
            $model = '&models=2617';
            break;

        case 'Crosswind Racing':
            $model = '&models=890';
            break;
        case 'Duograph':
            $model = '&models=1707';
            break;
        case 'Endurance Pro':
            $model = '&models=3018';
            break;
        case 'Galactic':
            $model = '&models=1713';
            break;
        case 'Galactic 32':
            $model = '&models=386';
            break;
        case 'Galactic 36':
            $model = '&models=387';
            break;
        case 'Headwind':
            $model = '&models=1709';
            break;
        case 'Hercules':
            $model = '&models=27';
            break;

        case 'Jupiter Pilot':
            $model = '&models=1687';
            break;
        case 'Lady J':
            $model = '&models=1706';
            break;
        case 'Montbrillant':
            $model = '&models=12';
            break;
        case 'Navitimer':
            $model = '&models=9';
            break;
        case 'Navitimer World':
            $model = '&models=8';
            break;
        case 'Pluton':
            $model = '&models=1688';
            break;
        case 'Professional':
            $model = '&models=22';
            break;
        case 'Shadow Flyback':
            $model = '&models=1708';
            break;

        case 'Skyracer':
            $model = '&models=26';
            break;
        case 'Starliner':
            $model = '&models=19';
            break;
        case 'Superocean':
            $model = '&models=30';
            break;
        case 'Superocean 42':
            $model = '&models=1737';
            break;
        case 'Superocean Chronograph II':
            $model = '&models=3788';
            break;
        case 'Superocean Heritage':
            $model = '&models=32';
            break;
        case 'Superocean II 42':
            $model = '&models=1735';
            break;
        case 'Superocean Steelfish':
            $model = '&models=31';
            break;

        case 'Top Time':
            $model = '&models=1770';
            break;
        case 'Transocean':
            $model = '&models=316';
            break;
        case 'Transocean Chronograph':
            $model = '&models=1749';
            break;
        case 'Windrider':
            $model = '&models=17';
            break;
        case 'Wings Lady':
            $model = '&models=1710';
            break;


    case 'Code 11.59':
        $model = '&models=2734';
        break;

    case 'Edward Piguet':
        $model = '&models=111';
        break;

    case "Huitieme":
        $model = '&models=2419';
        break;

    case "Jules Audemars":
        $model = '&models=112';
        break;

    case "Millenary":
        $model = '&models=114';
        break;

    case "Millenary 4101":
        $model = '&models=1168';
        break;

    case "Millenary Chronograph":
        $model = '&models=2417';
        break;

    case "Millenary Ladies":
        $model = '&models=115';
        break;

    case "Promesse":
        $model = '&models=1184';
        break;

    case "Royal Oak":
        $model = '&models=116';
        break;

    case 'Royal Oak Chronograph':
        $model = '&models=1170';
        break;

    case 'Royal Oak Day-Date':
        $model = '&models=1174';
        break;

    case 'Royal Oak Dual Time':
        $model = '&models=2418';
        break;

    case 'Royal Oak Jumbo':
        $model = '&models=2733';
        break;

    case 'Royal Oak Lady':
        $model = '&models=113';
        break;

    case "Royal Oak Offshore":
        $model = '&models=117';
        break;

    case 'Royal Oak Offshore Chronograph':
        $model = '&models=1177';
        break;

    case 'Royal Oak Offshore Chronograph Volcano':
        $model = '&models=1181';
        break;

    case 'Royal Oak Offshore Diver':
        $model = '&models=1176';
        break;

    case 'Royal Oak Offshore Grand Prix':
        $model = '&models=1180';
        break;

    case 'Royal Oak Offshore Lady':
        $model = '&models=118';
        break;

    case 'Royal Oak Offshore Tourbillon Chronograph':
        $model = '&models=1179';
        break;

    case 'Royal Oak Perpetual Calendar':
        $model = '&models=1173';
        break;

    case 'Royal Oak Selfwinding':
        $model = '&models=1172';
        break;

    case 'Royal Oak Tourbillon':
        $model = '&models=';
        break;

    case 'Tradition':
        $model = '&models=1183';
        break;
  





  }

  switch ($ort) {
    case 'Ägypten':
      $ort = 'countryIds=EG';
      break;
    case 'Andora':
      $ort = 'countryIds=AD';
      break;
    case 'Albanien':
      $ort = 'countryIds=AL';
      break;
    case 'Armenien':
      $ort = 'countryIds=AM';
      break;
    case 'Argentinien':
      $ort = 'countryIds=AR';
      break;
    case 'Australien':
      $ort = 'countryIds=AU';
      break;
    case 'Bahrain':
      $ort = 'countryIds=BU';
      break;
    case 'Bermuda':
      $ort = 'countryIds=BM';
      break;
    case 'Belgien':
      $ort = 'countryIds=BE';
      break;
    case 'Brasilien':
      $ort = 'countryIds=BR';
      break;
    case 'Bulgarien':
      $ort = 'countryIds=BG';
      break;
    case 'Chile':
      $ort = 'countryIds=CL';
      break;
    case 'China':
      $ort = 'countryIds=CN';
      break;
    case 'Costa Rika':
      $ort = 'countryIds=CR';
      break;
    case 'Dänemark':
      $ort = 'countryIds=DK';
      break;
    case 'Deutschland':
      $ort = 'countryIds=DE';
      break;
    case 'Estland':
      $ort = 'countryIds=EE';
      break;
    case 'Finnland':
      $ort = 'countryIds=FI';
      break;
    case 'Frankreich':
      $ort = 'countryIds=FR';
      break;
    case 'Französisch-Polynesien':
      $ort = 'countryIds=PF';
      break;
    case 'Georgien':
      $ort = 'countryIds=GE';
      break;
    case 'Gibraltar':
      $ort = 'countryIds=GI';
      break;
    case 'Griechenland':
      $ort = 'countryIds=GR';
      break;
    case 'Großbritannien':
      $ort = 'countryIds=UK';
      break;
    case 'Guam':
      $ort = 'countryIds=GU';
      break;
    case 'Hongkong':
      $ort = 'countryIds=HK';
      break;
    case 'Indien':
      $ort = 'countryIds=IN';
      break;
    case 'Indonesien':
      $ort = 'countryIds=ID';
      break;
    case 'Irland':
      $ort = 'countryIds=IE';
      break;
    case 'Island':
      $ort = 'countryIds=IS';
      break;
    case 'Israel':
      $ort = 'countryIds=IL';
      break;
    case 'Italien':
      $ort = 'countryIds=T';
      break;
    case 'Japan':
      $ort = 'countryIds=JP';
      break;
    case 'Kanada':
      $ort = 'countryIds=CA';
      break;
    case 'Kasachstan':
      $ort = 'countryIds=KZ';
      break;
    case 'Kolumbien':
      $ort = 'countryIds=CO';
      break;
    case 'Kroatien':
      $ort = 'countryIds=HR';
      break;
    case 'Kuwait':
      $ort = 'countryIds=KW';
      break;
    case 'Laos':
      $ort = 'countryIds=LA';
      break;
    case 'Lettland':
      $ort = 'countryIds=LW';
      break;
    case 'Libanon':
      $ort = 'countryIds=LB';
      break;
    case 'Liechtenstein':
      $ort = 'countryIds=LI';
      break;
    case 'Litauen':
      $ort = 'countryIds=LT';
      break;
    case 'Luxemburg':
      $ort = 'countryIds=LU';
      break;
    case 'Macau':
      $ort = 'countryIds=MO';
      break;
    case 'Malaysia':
      $ort = 'countryIds=MY';
      break;
    case 'Malta':
      $ort = 'countryIds=MT';
      break;
    case 'Marokko':
      $ort = 'countryIds=MA';
      break;

    case 'Monaco':
      $ort = 'countryIds=MR';
      break;
    case 'Nepal':
      $ort = 'countryIds=NP';
      break;
    case 'Neuseeland':
      $ort = 'countryIds=NZ';
      break;
    case 'Niederlande':
      $ort = 'countryIds=NL';
      break;
    case 'Nigeria':
      $ort = 'countryIds=NG';
      break;
    case 'Norwegen':
      $ort = 'countryIds=NO';
      break;
    case 'Oman':
      $ort = 'countryIds=OM';
      break;
    case 'Österreich':
      $ort = 'countryIds=AT';
      break;
    case 'Pakistan':
      $ort = 'countryIds=PK';
      break;
    case 'Panama':
      $ort = 'countryIds=PA';
      break;
    case 'Philippinen':
      $ort = 'countryIds=PH';
      break;
    case 'Polen':
      $ort = 'countryIds=PL';
      break;
    case 'Portugal':
      $ort = 'countryIds=PT';
      break;
    case 'Puerto Rico':
      $ort = 'countryIds=PR';
      break;
    case 'Qatar':
      $ort = 'countryIds=QA';
      break;
    case 'Reunion':
      $ort = 'countryIds=RE';
      break;
    case 'Rumänien':
      $ort = 'countryIds=RO';
      break;
    case 'Russland':
      $ort = 'countryIds=RU';
      break;
    case 'San Marino':
      $ort = 'countryIds=SM';
      break;
    case 'Saudi-Arabien':
      $ort = 'countryIds=SA';
      break;
    case 'Schweden':
      $ort = 'countryIds=SE';
      break;
    case 'Schweiz':
      $ort = 'countryIds=CH';
      break;
    case 'Serbien':
      $ort = 'countryIds=RS';
      break;
    case 'Singapur':
      $ort = 'countryIds=SG';
      break;
    case 'Slowakei':
      $ort = 'countryIds=SK';
      break;
    case 'Slowenien':
      $ort = 'countryIds=SL';
      break;
    case 'Spanien':
      $ort = 'countryIds=ES';
      break;
    case 'Sri Lanka':
      $ort = 'countryIds=LK';
      break;
    case 'Südafrika':
      $ort = 'countryIds=ZA';
      break;
    case 'Südkorea':
      $ort = 'countryIds=KR';
      break;
    case 'Taiwan':
      $ort = 'countryIds=TW';
      break;
    case 'Thailand':
      $ort = 'countryIds=TH';
      break;
    case 'Trinidad und Tobago':
      $ort = 'countryIds=TT';
      break;
    case 'Tschechien':
      $ort = 'countryIds=CZ';
      break;
    case 'Tunesien':
      $ort = 'countryIds=TN';
      break;
    case 'Türkei':
      $ort = 'countryIds=TR';
      break;
    case 'Ukraine':
      $ort = 'countryIds=UA';
      break;
    case 'Ungarn':
      $ort = 'countryIds=HU';
      break;
    case 'Uruguay':
      $ort = 'countryIds=UY';
      break;
    case 'USA':
      $ort = 'countryIds=US';
      break;
    case 'Usbekistan':
      $ort = 'countryIds=UZ';
      break;
    case 'VAE':
      $ort = 'countryIds=AE';
      break;
    case 'Venezuela':
      $ort = 'countryIds=VE';
      break;
    case 'Vietnam':
      $ort = 'countryIds=VN';
      break;
    case 'Zypern':
      $ort = 'countryIds=CY';
      break;
  }



  switch ($caseMaterial) {
    case 'Aluminium':
      $caseMaterial = "caseMaterials=6";
      break;
    case 'Bronze':
      $caseMaterial = "caseMaterials=18";
      break;
    case 'Carbon':
      $caseMaterial = "caseMaterials=17";
      break;
    case 'Gelbgold':
      $caseMaterial = "caseMaterials=3";
      break;
    case 'Gold/Stahl':
      $caseMaterial = "caseMaterials=9";
      break;
    case 'Keramik':
      $caseMaterial = "caseMaterials=13";
      break;
    case 'Kunststoff':
      $caseMaterial = "caseMaterials=12";
      break;
    case 'Palladium':
      $caseMaterial = "caseMaterials=14";
      break;
    case 'Platin':
      $caseMaterial = "caseMaterials=7";
      break;
    case 'Roségold':
      $caseMaterial = "caseMaterials=1";
      break;
    case 'Rotgold':
      $caseMaterial = "caseMaterials=2";
      break;
    case 'Silber':
      $caseMaterial = "caseMaterials=10";
      break;
    case 'Stahl':
      $caseMaterial = "caseMaterials=4";
      break;
    case 'Tantal':
      $caseMaterial = "caseMaterials=16";
      break;
    case 'Titan':
      $caseMaterial = "caseMaterials=5";
      break;
    case 'Weißgold':
      $caseMaterial = "caseMaterials=8";
      break;
    case 'Wolfram':
      $caseMaterial = "caseMaterials=15";
      break;
    case 'Keine Angabe':
      $caseMaterial = "caseMaterials=0";
      break;
  }
}

$priceFrom = $_POST['priceFrom'];
$priceTo = $_POST['priceTo'];

//url bauen
$url = 'https://www.chrono24.at/search/index.htm?';

if (isset($caseMaterial) && $caseMaterial != "") {
  $url = $url . $caseMaterial;

 
}

if (isset($ort) && $ort != "") {
  $url = $url . '&' . $ort;

  
}

$url = $url . '&dosearch=true&';

if (isset($marke) && $marke != "") {
  $url = $url . $marke;

  
}
$url = $url . 'maxAgeInDays=0';

if (isset($model) && $model != "") {
  $url = $url . $model;

  
}
$url = $url . '&pageSize=60';

if (isset($priceFrom) && $priceFrom != "") {
  $url = $url . '&priceFrom=' . $priceFrom;

  
}
if (isset($priceTo) && $priceTo != "") {
  $url = $url . '&priceTo=' . $priceTo;

  
}

$url = $url . '&redirectToSearchIndex=true';

$referencenumber = $_POST['Search'];
if (isset($referencenumber) && $referencenumber != "") {
  $url = $url . '&referenceNumber=' . $referencenumber;

 
}

$url = $url . '&resultview=block&sortorder=5';


// $userID= "1";
// $userID=$_POST['userID'];
// $url=$_POST['url'];
$db_obj = new mysqli($host, $user, $password, $database); //datenabfrage
$sql = "INSERT INTO alerter (user_fk, watchurl) VALUES (?, ?)"; // activ ist dann automatisch direk aktiv und user ist gast 

//use prepare function
$stmt = $db_obj->prepare($sql); // um unerwünschte milisceos code zu verhindern

//"s" stands for string (string datatype is expected) ... i for integer, d for double
//followed by the variables which will be bound to the parameters
$stmt->bind_param("ss", $userID, $url);

$userID = $_SESSION["user"];


//executes the statement, if successful --> echo
if ($stmt->execute()) {
  
  //trigger forwarding to welcome-page, get-started tutorial,
  //confimation email with username (but without chosen password!), etc.
} else {
  echo "Error";
  //or specific error-page
}
$stmt->close();
//close the connection
$db_obj->close();
header('refresh: 3; url =../successpage.html');

?>