<?php
function  modelAP($model){
switch ($model) {

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
return $model;
}
?>