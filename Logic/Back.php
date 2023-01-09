<?php
include "../config/db.php"; 

$url=$caseMaterial = $marke =$model =$referencenumber =$location =$priceFrom=$priceTo="";

//$marke = "Omega"; für test
//$model = "Speedmaster Day Date";
 
if (isset($_SESSION["userID"]) && !empty($_SESSION["userID"])) {

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
 
 
 
   $url = 'https://www.chrono24.at/search/index.htm?';

   if(isset($caseMaterial) && $caseMaterial != ""){
    $url = $url . $caseMaterial;

    echo "case ok";
   }

   if(isset($location)&& $caseMaterial != ""){
    $url = $url . '&countryIds=' . $location;

    echo "case ok";
   } 

   $url = $url . 'dosearch=true&';

   if(isset($marke)&& $marke != ""){
    $url = $url . $marke;

    echo "marke ok";
   }
   $url = $url . '&maxAgeInDays=0';

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

   if(isset($referencenumber)&& $referencenumber != ""){
    $url = $url . '&referenceNumber=' . $referencenumber;

    echo "reference ok";
   }

   $url = $url . '&resultview=block&sortorder=5';

    echo $url;

  $userID= "1";
  // $userID=$_POST['userID'];
  // $url=$_POST['url'];

   $sql = "INSERT INTO `suchAbfrage`( `userID`, `url` ) 
   VALUES ('$userID','$url')";
   if (mysqli_query($con, $sql)) {
       echo "success";
   } 
   else {
       echo json_encode(array("statusCode"=>201));
   }
}
   mysqli_close($con);
?>
<?php
include "../config/db.php"; 

$url=$caseMaterial = $marke =$model =$referencenumber =$location =$priceFrom=$priceTo="";

//$marke = "Omega"; für test
//$model = "Speedmaster Day Date";
 
if (isset($_SESSION["userID"]) && !empty($_SESSION["userID"])) {

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
 
 
 
   $url = 'https://www.chrono24.at/search/index.htm?';

   if(isset($caseMaterial) && $caseMaterial != ""){
    $url = $url . $caseMaterial;

    echo "case ok";
   }

   if(isset($location)&& $caseMaterial != ""){
    $url = $url . '&countryIds=' . $location;

    echo "case ok";
   } 

   $url = $url . 'dosearch=true&';

   if(isset($marke)&& $marke != ""){
    $url = $url . $marke;

    echo "marke ok";
   }
   $url = $url . '&maxAgeInDays=0';

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

   if(isset($referencenumber)&& $referencenumber != ""){
    $url = $url . '&referenceNumber=' . $referencenumber;

    echo "reference ok";
   }

   $url = $url . '&resultview=block&sortorder=5';

    echo $url;
  $userID= "1";
  // $userID=$_POST['userID'];
  // $url=$_POST['url'];

   $sql = "INSERT INTO `suchabfrage`( `userID`, `url` ) 
   VALUES ('$userID','$url')";
   if (mysqli_query($con, $sql)) {
       echo "success";
   } 
   else {
       echo json_encode(array("statusCode"=>201));
   }
}
   mysqli_close($con);
?>