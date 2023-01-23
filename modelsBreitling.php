<?php

function  modelBreitling($model){

    switch ($model) {
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

}
return $model;
}

?>