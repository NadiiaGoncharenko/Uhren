<?php
function  modelRolex($model){

switch($model){
    case 'Air King' : $model =  '&models=5';
    break;
    case 'Air King Date' : $model =  '&models=957';
    break;
    case 'Cellini' : $model =  '&models=43';
    break;
    case 'Cellini Danaos' : $model =  '&models=972';
  break;
  case 'Cellini Date' : $model =  '&models=970';
  break;
  
  case 'Cellini Dual Time' : $model =  '&models=971';
    break;
    case 'Cellini Moonphase' : $model =  '&models=2722';
   break;
   case 'Cellini Prince' : $model =  '&models=973';
  break;
  case 'Cellini Time' : $model =  '&models=974';
    break;
    case 'Chronograph' : $model =  '&models=44';
    break;
        case 'Datejust' : $model =  '&models=45';
    break;
case 'Datejust 31' : $model =  '&models=3023';
    break;
case 'Datejust 36' : $model =  '&models=2878';
    break;
case 'Datejust 41' : $model =  '&models=3025';
   break;
   case 'Datejust II' : $model =  '&models=46';
    break;
    case 'Datejust Oysterquartz' : $model =  '&models=952';
    break;
    case 'Datejust Turn-O-Graph' : $model =  '&models=950';
   break;
  
   case 'Day-Date' : $model =  '&models=47';
    break;
    case 'Day-Date 36' : $model =  '&models=2723';
    break;
    case 'Day-Date 40' : $model =  '&models=964';
    break;
    case 'Day-Date II' : $model =  '&models=48';
   break;
   case 'Day-Date Oysterquartz' : $model =  '&models=954';
    break;
    case 'Daytona' : $model =  '&models=2';
   break;
   case 'Explorer' : $model =  '&models=50';
  break;
  case 'Explorer II' : $model =  '&models=51';
    break;
    case 'GMT-Master' : $model =  '&models=3';
  break;
  
  case 'GMT-Master II' : $model =  '&models=4';
     break;
     case 'Lady-Datejust' : $model =  '&models=53';
   break;
   case '
   Lady-Datejust Pearlmaster' : $model =  '&models=951';
  break;
  case 'Milgauss' : $model =  '&models=54';
   break;

   case 'Oyster' : $model =  '&models=3030';
 break;
 case 'Oyster Perpetual' : $model =  '&models=55';
   break;
   case 'Oyster Perpetual 26' : $model =  '&models=2730';
   break;
   case 'Oyster Perpetual 28' : $model =  '&models=3028';
  break;
    case 'Oyster Perpetual 31' : $model = '&models=2729';
    break;
    case 'Oyster Perpetual 34' : $model =  '&models=2728';
   break;
   case 'Oyster Perpetual 36' : $model =  '&models=2727';
   break;
   case 'Oyster Perpetual 39' : $model =  '&models=2726';
   break;
   case 'Oyster Perpetual 41' : $model =  '&models=3029';
   break;
   case 'Oyster Perpetual Date' : $model =  '&models=955';
   break;
   case 'Oyster Perpetual Lady Date' : $model =  '&models=956';
   break;
   case 'Oyster Presicion' : $model =  '&models=57';
   break;
   case 'Pearlmaster' : $model =  '&models=524';
   break;
   case 'Precision' : $model =  '&models=3027';
   break;
   case 'Prince' : $model =  '&models=523';
     break;

  case 'Sea-Dweller' : $model =  '&models=49';
   break;
   case 'Sea-Dweller 4000' : $model =  '&models=953';
   break;
   case 'Sea-Dweller Deepsea' : $model =  '&models=878';
   break;
   case 'Sky-Dweller' : $model =  '&models=611';
   break;
   case 'Submariner' : $model =  '&models=1';
   break;
   case 'Submariner Date' : $model =  '&models=981';
   break;
   case 'Submariner (No date)' : $model =  '&models=2460';
   break;

   case 'Yacht-Master' : $model =  '&models=58';
   break;
   case 'Yacht-Master 37' : $model =  '&models=2724';
    break;
    
    case 'Yacht-Master 40' : $model =  '&models=2725';
   break;
   case 'Yacht-Master 42' : $model =  '&models=2761';
   break;
   case 'Yacht-Master  II' : $model =  '&models=59';
   break;

}
return $model;
}
?>