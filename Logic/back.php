<?php
session_start();
require_once('../config/dbaccess.php'); // verbindung zu db herstellen

$url="";

//$marke = "Omega"; für test
//$model = "Speedmaster Day Date";
 
if (isset($_SESSION["user"]) && !empty($_SESSION["user"])) {
    if(isset($_POST['marke']))
    {
        $marke = $_POST['marke'];
   switch($marke){
    case 'Omega': $marke="manufacturerIds=187";
    include "modelsOmega.php";

    $model= modelOmega($model);
    break;

    case 'Rolex': $marke= "manufacturerIds=221";
   
    include "modelsRolex.php"; 
    $model= modelRolex($model);
    break;

    case 'Audemars Piguet': $marke="manufacturerIds=18";
    include "modelAP.php";
    $model= modelAP($model);
    
    break;

    case 'Breitling': $marke="manufacturerIds=32";
    include 'modelsBreitling.php';
    $model= modelBreitling($model);
    break;

    case 'Cartier': $marke="manufacturerIds=43";
    include 'modelsCartier.php';
    $model= modelCartier($model);
    break;

    case 'Patek Philippe': $marke="manufacturerIds=194";
    include 'modelsPP.php';
    $model= modelPP($model);
    break;
   }
    }
   if(isset($_POST['ort']))
   {
       $ort = $_POST['ort'];   
switch ($ort) {
    case 'Ägypten':
        $ort = 'countryIds=EG';break;
case 'Andora':$ort = 'countryIds=AD';break;
case 'Albanien':$ort = 'countryIds=AL';break;
case 'Armenien':$ort = 'countryIds=AM';break;
case 'Argentinien':$ort = 'countryIds=AR';break;
case 'Australien':$ort = 'countryIds=AU';break;
case 'Bahrain':$ort = 'countryIds=BU';break;
case 'Bermuda':$ort = 'countryIds=BM';break;
case 'Belgien':$ort = 'countryIds=BE';break;
case 'Brasilien':$ort = 'countryIds=BR';break;
case 'Bulgarien':$ort = 'countryIds=BG';break;
case 'Chile':$ort = 'countryIds=CL';break;
case 'China':$ort = 'countryIds=CN';break;
case 'Costa Rika':$ort = 'countryIds=CR';break;
case 'Dänemark':$ort = 'countryIds=DK';break;
case 'Deutschland':$ort = 'countryIds=DE';break;
case 'Estland':$ort = 'countryIds=EE';break;
case 'Finnland':$ort = 'countryIds=FI';break;
case 'Frankreich':$ort = 'countryIds=FR';break;
case 'Französisch-Polynesien':$ort = 'countryIds=PF';break;
case 'Georgien':$ort = 'countryIds=GE';break;
case 'Gibraltar':$ort = 'countryIds=GI';break;
case 'Griechenland':$ort = 'countryIds=GR';break;
case 'Großbritannien':$ort = 'countryIds=UK';break;
case 'Guam':$ort = 'countryIds=GU';break;
case 'Hongkong':$ort = 'countryIds=HK';break;
case 'Indien':$ort = 'countryIds=IN';break;
case 'Indonesien':$ort = 'countryIds=ID';break;
case 'Irland':$ort = 'countryIds=IE';break;
case 'Island':$ort = 'countryIds=IS';break;
case 'Israel':$ort = 'countryIds=IL';break;
case 'Italien':$ort = 'countryIds=T';break;
case 'Japan':$ort = 'countryIds=JP';break;
case 'Kanada':$ort = 'countryIds=CA';break;
case 'Kasachstan':$ort = 'countryIds=KZ';break;
case 'Kolumbien':$ort = 'countryIds=CO';break;
case 'Kroatien':$ort = 'countryIds=HR';break;
case 'Kuwait':$ort = 'countryIds=KW';break;
case 'Laos':$ort = 'countryIds=LA';break;
case 'Lettland':$ort = 'countryIds=LW';break;
case 'Libanon':$ort = 'countryIds=LB';break;
case 'Liechtenstein':$ort = 'countryIds=LI';break;
case 'Litauen':$ort = 'countryIds=LT';break;
case 'Luxemburg':$ort = 'countryIds=LU';break;
case 'Macau':$ort = 'countryIds=MO';break;
case 'Malaysia':$ort = 'countryIds=MY';break;
case 'Malta':$ort = 'countryIds=MT';break;
case 'Marokko':$ort = 'countryIds=MA';break;

case 'Monaco':$ort = 'countryIds=MR';break;
case 'Nepal':$ort = 'countryIds=NP';break;
case 'Neuseeland':$ort = 'countryIds=NZ';break;
case 'Niederlande':$ort = 'countryIds=NL';break;
case 'Nigeria':$ort = 'countryIds=NG';break;
case 'Norwegen':$ort = 'countryIds=NO';break;
case 'Oman':$ort = 'countryIds=OM';break;
case 'Österreich':$ort = 'countryIds=AT';break;
case 'Pakistan':$ort = 'countryIds=PK';break;
case 'Panama':$ort = 'countryIds=PA';break;
case 'Philippinen':$ort = 'countryIds=PH';break;
case 'Polen':$ort = 'countryIds=PL';break;
case 'Portugal':$ort = 'countryIds=PT';break;
case 'Puerto Rico':$ort = 'countryIds=PR'; break;
case 'Qatar':$ort = 'countryIds=QA';break;
case 'Reunion':$ort = 'countryIds=RE';break;
case 'Rumänien':$ort = 'countryIds=RO';break;
case 'Russland':$ort = 'countryIds=RU';break;
case 'San Marino':$ort = 'countryIds=SM';break;
case 'Saudi-Arabien':$ort = 'countryIds=SA';break;
case 'Schweden':$ort = 'countryIds=SE';break;
case 'Schweiz':$ort = 'countryIds=CH';break;
case 'Serbien':$ort = 'countryIds=RS';break;
case 'Singapur':$ort = 'countryIds=SG';break;
case 'Slowakei':$ort = 'countryIds=SK';break;
case 'Slowenien':$ort = 'countryIds=SL';break;
case 'Spanien':$ort = 'countryIds=ES';break;
case 'Sri Lanka':$ort = 'countryIds=LK';break;
case 'Südafrika':$ort = 'countryIds=ZA';break;
case 'Südkorea':$ort = 'countryIds=KR';break;
case 'Taiwan':$ort = 'countryIds=TW';break;
case 'Thailand':$ort = 'countryIds=TH';break;
case 'Trinidad und Tobago':$ort = 'countryIds=TT';break;
case 'Tschechien':$ort = 'countryIds=CZ';break;
case 'Tunesien':$ort = 'countryIds=TN';break;
case 'Türkei':$ort = 'countryIds=TR';break;
case 'Ukraine':$ort = 'countryIds=UA';break;
case 'Ungarn':$ort = 'countryIds=HU';break;
case 'Uruguay':$ort = 'countryIds=UY';break;
case 'USA':$ort = 'countryIds=US';break;
case 'Usbekistan':$ort = 'countryIds=UZ';break; 
case 'VAE':$ort = 'countryIds=AE';break;
case 'Venezuela':$ort = 'countryIds=VE';break;
case 'Vietnam':$ort = 'countryIds=VN';break;
case 'Zypern':$ort = 'countryIds=CY';break;
    }
   }

if(isset($_POST['caseMaterial']))
{
    $caseMaterial = $_POST['caseMaterial'];
    switch($caseMaterial){
        case 'Aluminium': $caseMaterial="caseMaterials=6"; 
        break;
        case 'Bronze': $caseMaterial="caseMaterials=18"; 
        break;
        case 'Carbon': $caseMaterial="caseMaterials=17"; 
        break;
        case 'Gelbgold': $caseMaterial="caseMaterials=3"; 
        break;
        case 'Gold/Stahl': $caseMaterial="caseMaterials=9"; 
        break;
        case 'Keramik': $caseMaterial="caseMaterials=13"; 
        break;
        case 'Kunststoff': $caseMaterial="caseMaterials=12"; 
        break;
        case 'Palladium': $caseMaterial="caseMaterials=14"; 
        break;
        case 'Platin': $caseMaterial="caseMaterials=7"; 
        break;
        case 'Roségold': $caseMaterial="caseMaterials=1"; 
        break;
        case 'Rotgold': $caseMaterial="caseMaterials=2"; 
        break;
        case 'Silber': $caseMaterial="caseMaterials=10"; 
        break;
        case 'Stahl': $caseMaterial="caseMaterials=4"; 
        break;
        case 'Tantal': $caseMaterial="caseMaterials=16"; 
        break;
        case 'Titan': $caseMaterial="caseMaterials=5"; 
        break;
        case 'Weißgold': $caseMaterial="caseMaterials=8"; 
        break;
        case 'Wolfram': $caseMaterial="caseMaterials=15"; 
        break;
        case 'Keine Angabe': $caseMaterial="caseMaterials=0"; 
        break;
        }
  }

$priceFrom=$_POST['priceFrom'];
$priceTo=$_POST['priceTo'];
 
 //url bauen
   $url = 'https://www.chrono24.at/search/index.htm?';

   if(isset($caseMaterial) && $caseMaterial != ""){
    $url = $url . $caseMaterial;

    echo "case ok";
   }

   if(isset($ort)&& $ort != ""){
    $url = $url . '&' . $ort;

    echo "case ok";
   } 

   $url = $url . '&dosearch=true&';

   if(isset($marke)&& $marke != ""){
    $url = $url . $marke;

    echo "marke ok";
   }
   $url = $url . 'maxAgeInDays=0';

   if(isset($model)&& $model != ""){
    $url = $url . $model;

    echo "model ok";
   }
   $url = $url . '&pageSize=60';

   if(isset($priceFrom)&& $priceFrom != ""){
    $url = $url . '&priceFrom=' . $priceFrom;

    echo "priceFrom ok";
   }
   if(isset($priceTo)&& $priceTo != ""){
    $url = $url . '&priceTo=' . $priceTo;

    echo "priceTo ok";
   }

   $url = $url . '&redirectToSearchIndex=true';

   $referencenumber=$_POST['Search'];
   if(isset($referencenumber)&& $referencenumber != ""){
    $url = $url . '&referenceNumber=' . $referencenumber;

    echo "reference ok";
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
      echo "Link Created successfully!";
      //trigger forwarding to welcome-page, get-started tutorial,
      //confimation email with username (but without chosen password!), etc.
  } else {
      echo "Error";
      //or specific error-page
  }
  $stmt->close();
			//close the connection
			$db_obj->close();
			header('refresh: 3; url =../index.php');
}
?>
