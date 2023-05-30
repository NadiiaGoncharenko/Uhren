-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Jan 2023 um 22:50
-- Server-Version: 10.4.27-MariaDB
-- PHP-Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `watchsearch`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `alerter`
--

CREATE TABLE `alerter` (
  `AlerterID` int(11) NOT NULL,
  `user_fk` int(11) NOT NULL,
  `watchurl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `alerter`
--

INSERT INTO `alerter` (`AlerterID`, `user_fk`, `watchurl`) VALUES
(1, 2, 'https://www.chrono24.at/search/index.htm?countryIds=AT&countryIds=CH&countryIds=DE&currencyId=EUR&dosearch=true&manufacturerIds=221&maxAgeInDays=0&models=2&movementTypes=1&pageSize=60&redirectToSearchIndex=true&resultview=block&sortorder=0'),
(2, 2, 'https://www.chrono24.at/search/index.htm?caseMaterials=7&countryIds=AT&countryIds=CH&countryIds=DE&currencyId=EUR&dosearch=true&manufacturerIds=221&maxAgeInDays=0&models=2&pageSize=60&redirectToSearchIndex=true&resultview=block&sortorder=0'),
(3, 2, 'https://www.chrono24.at/search/index.htm?caseMaterials=3&currencyId=EUR&dosearch=true&manufacturerIds=32&maxAgeInDays=0&models=24&pageSize=60&redirectToSearchIndex=true&resultview=block&sortorder=0'),
(4, 3, 'https://www.chrono24.at/search/index.htm?countryIds=AT&countryIds=CH&countryIds=DE&currencyId=EUR&dosearch=true&manufacturerIds=221&maxAgeInDays=0&models=2&movementTypes=1&pageSize=60&priceFrom=4750&priceTo=32000&redirectToSearchIndex=true&referenceNumber=116500ln%24221&resultview=block&sortorder=0'),
(5, 3, 'https://www.chrono24.at/search/index.htm?countryIds=AT&countryIds=CH&countryIds=DE&currencyId=EUR&dosearch=true&manufacturerIds=18&maxAgeInDays=0&models=112&pageSize=60&redirectToSearchIndex=true&resultview=block&sortorder=0'),
(6, 4, 'https://www.chrono24.at/search/index.htm?caseMaterials=6&countryIds=EGdosearch=true&&maxAgeInDays=0&pageSize=60&priceFrom=7000&priceTo=7000&redirectToSearchIndex=true&resultview=block&sortorder=5'),
(7, 4, 'https://www.chrono24.at/search/index.htm?caseMaterials=10&countryIds=ATdosearch=true&&maxAgeInDays=0&pageSize=60&priceFrom=10000&priceTo=16000€&redirectToSearchIndex=true&resultview=block&sortorder=5'),
(8, 4, 'https://www.chrono24.at/search/index.htm?caseMaterials=6&countryIds=EGdosearch=true&&maxAgeInDays=0&pageSize=60&priceFrom=7000&priceTo=7000&redirectToSearchIndex=true&resultview=block&sortorder=5'),
(9, 4, 'https://www.chrono24.at/search/index.htm?caseMaterials=6&countryIds=EGdosearch=true&&maxAgeInDays=0&pageSize=60&priceFrom=7000&priceTo=7000&redirectToSearchIndex=true&resultview=block&sortorder=5'),
(10, 4, 'https://www.chrono24.at/search/index.htm?caseMaterials=1&countryIds=EGdosearch=true&&maxAgeInDays=0&pageSize=60&priceFrom=7000&priceTo=7000&redirectToSearchIndex=true&resultview=block&sortorder=5'),
(11, 4, 'https://www.chrono24.at/search/index.htm?caseMaterials=6&countryIds=EGdosearch=true&&maxAgeInDays=0&pageSize=60&priceFrom=16000&priceTo=7000&redirectToSearchIndex=true&resultview=block&sortorder=5'),
(12, 4, 'https://www.chrono24.at/search/index.htm?caseMaterials=6&countryIds=EGdosearch=true&&maxAgeInDays=0&pageSize=60&priceFrom=7000&priceTo=7000&redirectToSearchIndex=true&resultview=block&sortorder=5'),
(43, 4, 'https://www.chrono24.at/search/index.htm?&dosearch=true&manufacturerIds=221&maxAgeInDays=0Air King&pageSize=60&redirectToSearchIndex=true&resultview=block&sortorder=5'),
(44, 4, 'https://www.chrono24.at/search/index.htm?&dosearch=true&manufacturerIds=221&maxAgeInDays=0Cellini Dual Time&pageSize=60&redirectToSearchIndex=true&resultview=block&sortorder=5'),
(45, 4, 'https://www.chrono24.at/search/index.htm?&dosearch=true&manufacturerIds=221&maxAgeInDays=0Air King&pageSize=60&redirectToSearchIndex=true&resultview=block&sortorder=5'),
(46, 4, 'https://www.chrono24.at/search/index.htm?&dosearch=true&manufacturerIds=221&maxAgeInDays=0Air King&pageSize=60&redirectToSearchIndex=true&resultview=block&sortorder=5'),
(47, 4, 'https://www.chrono24.at/search/index.htm?&dosearch=true&manufacturerIds=221&maxAgeInDays=0Air King&pageSize=60&redirectToSearchIndex=true&resultview=block&sortorder=5'),
(48, 4, 'https://www.chrono24.at/search/index.htm?&dosearch=true&manufacturerIds=221&maxAgeInDays=0Air King&pageSize=60&redirectToSearchIndex=true&resultview=block&sortorder=5'),
(49, 4, 'https://www.chrono24.at/search/index.htm?&dosearch=true&manufacturerIds=221&maxAgeInDays=0&models=5&pageSize=60&redirectToSearchIndex=true&resultview=block&sortorder=5'),
(50, 4, 'https://www.chrono24.at/search/index.htm?&dosearch=true&manufacturerIds=18&maxAgeInDays=0&models=115&pageSize=60&redirectToSearchIndex=true&resultview=block&sortorder=5'),
(51, 4, 'https://www.chrono24.at/search/index.htm?&dosearch=true&manufacturerIds=194&maxAgeInDays=0&models=1965&pageSize=60&redirectToSearchIndex=true&resultview=block&sortorder=5');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `url`
--

CREATE TABLE `url` (
  `Url_ID` int(11) NOT NULL,
  `Alerter_fk` int(11) NOT NULL,
  `user_fk` int(11) NOT NULL,
  `timeStamp` date NOT NULL DEFAULT current_timestamp(),
  `ErgebnisURL` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `url`
--

INSERT INTO `url` (`Url_ID`, `Alerter_fk`, `user_fk`, `timeStamp`, `ErgebnisURL`) VALUES
(2, 2, 2, '2023-01-13', '/rolex/116519-daytona-beach-blue-nos-full-set-eu--sofort--id8999015.htm'),
(3, 2, 2, '2023-01-13', '/rolex/rolex-rolex-daytona-116519-black-dial-serial-y--id26216516.htm'),
(4, 2, 2, '2023-01-13', '/rolex/daytona-cosmograph-ref-16519-18k-white-gold-white-dial-folding-clasp-box-bj-1998--id26328041.htm'),
(5, 2, 2, '2023-01-13', '/rolex/rolex-daytona-paul-newman-dial-yellow-gold-rare-model-with-factory-crocodile-strap-y-serial--id25399084.htm'),
(6, 2, 2, '2023-01-13', '/rolex/rolex-cosmograph-daytona-lc100-cal-4030--id26482958.htm'),
(7, 2, 2, '2023-01-13', '/rolex/rolex-cosmograph-daytona-116515ln-rosegold--id26735035.htm'),
(8, 2, 2, '2023-01-13', '/rolex/rolex-daytona-cosmograph-18k-gelbgold-unpolished-boxpap-2012-lc170-ref-116518--id25970729.htm'),
(9, 2, 2, '2023-01-13', '/rolex/daytona-elfenbein-18k-rosegold-oyster-perpetual-ref-116515ln-bp-2016--id25534795.htm'),
(10, 2, 2, '2023-01-13', '/rolex/rolex-daytona-beach-green-chronograph-116519--id25459541.htm'),
(11, 2, 2, '2023-01-13', '/rolex/rolex-daytona-cosmograph-meteorite-gold-leather-bracelet--id24358220.htm'),
(12, 2, 2, '2023-01-13', '/rolex/daytona-ref16528--id26248653.htm'),
(13, 2, 2, '2023-01-13', '/rolex/daytona-cosmograph-ref-116518-18k-white-gold-rubellite-diamond-dial-box-papers-bj-2005-spain-excellent--id26598135.htm'),
(14, 2, 2, '2023-01-13', '/rolex/daytona--id26623553.htm'),
(15, 2, 2, '2023-01-13', '/rolex/daytona-rose-choco-dial-like-new-2012-lc100-ref116515ln--id12496871.htm'),
(16, 2, 2, '2023-01-13', '/rolex/-daytona-18kt-white-gold-ref116519-black-dial-full-set--id25611756.htm'),
(17, 2, 2, '2023-01-13', '/rolex/daytona-elfenbein-18k-rosegold-oyster-perpetual-116515ln-bp-2016-lc100--id26857343.htm'),
(18, 2, 2, '2023-01-13', '/rolex/rolex-daytona-sodalite-zenith--id23136562.htm'),
(19, 2, 2, '2023-01-13', '/rolex/rolex-daytona-mop-dial---no-polish--id25246048.htm'),
(20, 2, 2, '2023-01-13', '/rolex/daytona-chronograph-ref-116519-18k-white-gold-folding-clasp-box-papers-bj-2008--id25458154.htm'),
(21, 2, 2, '2023-01-13', '/rolex/-daytona-zenith-ref-16518-18kt-yellow-gold-from-1991-with-service--id23304050.htm'),
(22, 2, 2, '2023-01-13', '/rolex/-daytona-zenith-ref-16518-white-diamonds-dial-18kt-yellow-gold-full-set-1995--id23342388.htm'),
(23, 1, 2, '2023-01-13', '/rolex/rolex-cosmograph-daytona-18-kt-weissgold-ref-116509-blau--id5493479.htm'),
(24, 1, 2, '2023-01-13', '/rolex/daytona-panda-dial-chronograph-oyster-perpetual-ref-116500ln-bp-2017--id24142078.htm'),
(25, 1, 2, '2023-01-13', '/rolex/rolex-daytona-gelbgold--oysterflex-116518ln-champagner-diamant-discontinued-dial--id23291233.htm'),
(26, 1, 2, '2023-01-13', '/rolex/rolex-daytona-116505--meteorite--2022--neu--full-set--id26755921.htm'),
(27, 1, 2, '2023-01-13', '/rolex/rolex-116519-daytona-750-weissgold--diamant-zifferblatt-diamond-dial---lc100-full-set--service--id22767415.htm'),
(28, 1, 2, '2023-01-13', '/rolex/rolex-daytona-steelgold-new-122022-new--id26791115.htm'),
(29, 1, 2, '2023-01-13', '/rolex/rolex-116589saci-daytona-the-blue--sodalite-dial--sapphire-bezel--full-set--id26660334.htm'),
(30, 1, 2, '2023-01-13', '/rolex/rolex-cosmograph-daytona-weissgold-116509-blau-2020-lc100--id23637431.htm'),
(31, 1, 2, '2023-01-13', '/rolex/rolex-daytona-40-mm---neu-ungetragen-112022--id25922913.htm'),
(32, 1, 2, '2023-01-13', '/rolex/rolex-daytona-mint-first-series-lc100--id25450388.htm'),
(33, 1, 2, '2023-01-13', '/rolex/rolex-daytona-2022-partially-in-stickers--id23816950.htm'),
(34, 1, 2, '2023-01-13', '/rolex/rolex-daytona-lc100-zenith-w-serie--wempe-service-stahl-inverted-6-sammlerstueck--id19142781.htm'),
(35, 1, 2, '2023-01-13', '/rolex/rolex-rolex-daytona--meteorite--2022--neu--full-set--id24310967.htm'),
(36, 1, 2, '2023-01-13', '/rolex/rolex-daytona-40mm-edelstahl-116520-zb-schwarz---lc100-full-set--full-sticker--verklebt---nos--id25167765.htm'),
(37, 1, 2, '2023-01-13', '/rolex/rolex-daytona-cosmograph-new-102022-new--id26302827.htm'),
(38, 1, 2, '2023-01-13', '/rolex/rolex-16520-daytona-porcelain-dial--floating--unpolished--full-set--just-perfect--id16776871.htm'),
(39, 1, 2, '2023-01-13', '/rolex/rolex-daytona-chronograph--y-serie-2002--service-2022--id26799053.htm'),
(40, 1, 2, '2023-01-13', '/rolex/rolex-rolex-daytona-40mm--neu-ungetragen-122022--id26880578.htm'),
(41, 1, 2, '2023-01-13', '/rolex/rolex-daytona-diamond-dial--steelgold--like-new--2020--id26945148.htm'),
(42, 1, 2, '2023-01-13', '/rolex/oyster-perpetual-cosmograph-daytona-ref-116509-lc100--id25864650.htm'),
(43, 1, 2, '2023-01-13', '/rolex/rolex-daytona-stahl-weiss-2016--id26162965.htm'),
(44, 1, 2, '2023-01-13', '/rolex/rolex-daytona-116508--neu--2023--meteorite--full-set--id26942072.htm'),
(45, 1, 2, '2023-01-13', '/rolex/rolex-daytona-40--116503--1222--new--bp--id26867904.htm'),
(46, 1, 2, '2023-01-13', '/rolex/rolex-daytona-cosmograph-panda-2019-like-new--id26902596.htm'),
(47, 1, 2, '2023-01-13', '/rolex/rolex-116520-daytona-p-serial--cream-dial--full-set-from-mexico--id24694064.htm'),
(48, 1, 2, '2023-01-13', '/rolex/rolex-daytona-chronograph--ungetragen--2016--fullset--id26869305.htm'),
(49, 1, 2, '2023-01-13', '/rolex/rolex-daytona--16503--stgold--gold--801--lc170--id25361730.htm'),
(50, 1, 2, '2023-01-13', '/rolex/rolex-daytona-newsealed--id26211248.htm'),
(51, 1, 2, '2023-01-13', '/rolex/rolex-daytona-072018-stickered-stickers-unworn-box-papers--id23879864.htm'),
(52, 1, 2, '2023-01-13', '/rolex/oyster-perpetual-daytona-ref-116503--id25824784.htm'),
(53, 1, 2, '2023-01-13', '/rolex/rolex-rolex-daytona-116509--meteorite--2022--neu--full-set--id26745951.htm'),
(54, 1, 2, '2023-01-13', '/rolex/rolex-daytona-rose-gold-116505-1a-condition-full-set-2012--id25550751.htm'),
(55, 1, 2, '2023-01-13', '/rolex/rolex-daytona-oysterflex-chocolate-dial-2022--id26086885.htm'),
(56, 1, 2, '2023-01-13', '/rolex/rolex-daytona16520-daytona-the-crazy-patrizzi--full-set--id23333264.htm'),
(57, 1, 2, '2023-01-13', '/rolex/rolex-daytona-m-16520-zenith-inverted-six-white-dial-ca-1989-service-2022--id26732751.htm'),
(58, 1, 2, '2023-01-13', '/rolex/rolex-daytona--116523--fullset--stahlgold--901---id23550779.htm'),
(59, 1, 2, '2023-01-13', '/rolex/rolex-daytona-lc-100-112022-rose-18k-dia-dial-neu-baguette--id24077828.htm'),
(60, 1, 2, '2023-01-13', '/rolex/rolex-daytona-eye-of-the-tiger-lc-100-unworn-fully-stickered-box-papers--id23674515.htm'),
(61, 1, 2, '2023-01-13', '/rolex/rolex-daytona-chronograph--lc100--2018--fullset--id26732447.htm'),
(62, 1, 2, '2023-01-13', '/rolex/rolex-rolex-daytona-116519ln--meteorite--2022--neu--full-set--id24311015.htm'),
(63, 1, 2, '2023-01-13', '/rolex/rolex-daytona-40-white-and-black-dial-116520-lc100-nos-100-new-unworn-full-set-2006--id26057897.htm'),
(64, 1, 2, '2023-01-13', '/rolex/rolex-daytona-steel-gold-fresh-2022--id26085183.htm'),
(65, 1, 2, '2023-01-13', '/rolex/rolex-daytona-40-black-dial--new--1222--bp-partially-stickers--id26973851.htm'),
(66, 1, 2, '2023-01-13', '/rolex/rolex-daytona-platin-like-new-aus-2019--id25783165.htm'),
(67, 1, 2, '2023-01-13', '/rolex/oyster-perpetual-daytona-ref-116503-lc-eu--id26930454.htm'),
(68, 1, 2, '2023-01-13', '/rolex/rolex-sticker-new-2021-daytona--id26738046.htm'),
(69, 1, 2, '2023-01-13', '/rolex/rolex-daytona-chocolate-dial-122019-perfect-condition-box-papers-vat--id18936730.htm'),
(70, 1, 2, '2023-01-13', '/rolex/rolex-daytona-meteorite-dial---116519ln--id26052591.htm'),
(71, 1, 2, '2023-01-13', '/rolex/rolex-daytona-116515ln--chocolate--neu--2022--full-set--id24987542.htm'),
(72, 1, 2, '2023-01-13', '/rolex/rolex-daytona-116520-white-dial-edelstahl-box--papers-unworn-nos---new-old-stock--id23289593.htm'),
(73, 1, 2, '2023-01-13', '/rolex/rolex-daytona-cosmograph-mop-dial-perlmutt-zifferblatt-like-new--id26902102.htm'),
(74, 1, 2, '2023-01-13', '/rolex/rolex-daytona-diamond-dial-116519ln-fullset-new-0522--id24358880.htm'),
(75, 1, 2, '2023-01-13', '/rolex/rolex-daytona-40-platinum-ice-blue-116506-full-set-like-new-2021--id23203902.htm'),
(76, 1, 2, '2023-01-13', '/rolex/oyster-perpetual-cosmograph-daytona-ref-116500ln-lc-eu--id25683288.htm'),
(77, 1, 2, '2023-01-13', '/rolex/rolex-daytona2020--id26484139.htm'),
(78, 1, 2, '2023-01-13', '/rolex/rolex-daytona-oysterflex-092017-pink-dial-perfect-condition-box-papers--id26768511.htm'),
(79, 1, 2, '2023-01-13', '/rolex/rolex-daytona-116506-platinum-baguette--id26264044.htm'),
(80, 1, 2, '2023-01-13', '/rolex/rolex-daytona-116505--neu--2022--chocolate--fullset--id23650218.htm'),
(81, 1, 2, '2023-01-13', '/rolex/rolex-daytona-green-dial-like-new-2020--id23180728.htm'),
(82, 1, 2, '2023-01-13', '/rolex/rolex-daytona-cosmograph-2018-like-new--id26899145.htm'),
(83, 1, 2, '2023-01-13', '/rolex/rolex-daytona-116523-steel-gold-white-dial-062014-lc100--id25384496.htm'),
(84, 1, 2, '2023-01-13', '/rolex/rolex-daytona-chronograph--lc100--neu--112022--fullset--id26972502.htm'),
(85, 1, 2, '2023-01-13', '/rolex/rolex-daytona-green-2022-lc-100--id25514564.htm'),
(86, 1, 2, '2023-01-13', '/rolex/rolex-rolex-daytona-green-dial-116508-full-set-2020--id23286096.htm'),
(87, 1, 2, '2023-01-13', '/rolex/rolex-116518ln-daytona-18k-pikachu--dial----lc-100-oysterflex-juni-2022--id26455122.htm'),
(88, 1, 2, '2023-01-13', '/rolex/rolex-116500-ln-daytona-stahl--zb-schwarz-neu--122017--lc-eu-b--p--sofort--id25598038.htm'),
(89, 1, 2, '2023-01-13', '/rolex/rolex-cosmograph-daytona-116508-mop-gelbgold-perlmutt-diamant-aus-2017--id22616596.htm'),
(90, 1, 2, '2023-01-13', '/rolex/rolex-daytona-chronograph--neu--2022--fullset--rose-dial--id25361393.htm'),
(91, 1, 2, '2023-01-13', '/rolex/rolex-116500-ln-daytona-jubi-neu--122017--lc-eu-b--p--sofort--id19818056.htm'),
(92, 3, 2, '2023-01-13', '/breitling/aerospace-herren-uhr-18k-750-gold-quarz-k56062-vintage-rar-top-selten--id26330411.htm'),
(93, 1, 2, '2023-01-14', '/rolex/rolex-daytona-black-diamond-dial-18k-fullset--service-116528--id25153782.htm'),
(94, 1, 2, '2023-01-14', '/rolex/rolex-rolex-daytona-116505-2010-pink-dial-everose-daytona-full-set--id23097025.htm'),
(95, 1, 2, '2023-01-14', '/rolex/rolex-116519-daytona-beach-pink-dia-dial--box-papiere----p--serie--neuer-service-2022--id26358139.htm'),
(96, 1, 2, '2023-01-14', '/rolex/rolex-cosmograph-daytona-116520-black-dial-rehaut--id26554925.htm'),
(97, 1, 2, '2023-01-14', '/rolex/rolex-daytona-40-white-gold-116509-racing-dial-lc100-germany-full-set-2007--id24951192.htm'),
(98, 1, 2, '2023-01-14', '/rolex/rolex-daytona-116520-lc100-sealedstickerverklebt-nos-fullset-aph-dial--id22300226.htm'),
(99, 1, 2, '2023-01-14', '/rolex/rolex-rolex-daytona-116518ln--meteorite--2022--neu--full-set--id24311085.htm'),
(100, 1, 2, '2023-01-14', '/rolex/daytona--116515ln-----diamond-dial------id26823665.htm'),
(101, 1, 2, '2023-01-14', '/rolex/rolex-daytona-platin-ref-116506---new-service---2022--id24912855.htm'),
(102, 1, 2, '2023-01-14', '/rolex/rolex-daytona-ref16520-patrizzi-in-full-set-lc100--id26319405.htm'),
(103, 2, 2, '2023-01-14', '/rolex/rolex-rolex-daytona-116508-mop-diamond-full-set--id25824891.htm'),
(104, 2, 2, '2023-01-14', '/rolex/rolex-116520-daytona-neu--verklebt-082016-lc-100-b--p-sofort--id1865991.htm'),
(105, 1, 2, '2023-01-14', '/rolex/rolex-rolex-daytona-116505-rose-gold-new-2022--id24494409.htm'),
(106, 1, 2, '2023-01-14', '/rolex/rolex-daytona-weissgold-tahiti-perlmutt-mop--box--papers--id26456778.htm'),
(107, 3, 2, '2023-01-14', '/rolex/rolex-daytona-edelstahl-116520-weiss-aus-2008-v-serie--id26114550.htm'),
(108, 3, 2, '2023-01-14', '/rolex/rolex-rolex-daytona-lemon-cream-dial-serial-p-full-set--id25827932.htm'),
(110, 1, 3, '2023-01-14', '/audemarspiguet/jules-audemars-extra-thin--id24189553.htm'),
(111, 1, 3, '2023-01-14', '/audemarspiguet/jules--id24422939.htm'),
(112, 1, 3, '2023-01-14', '/audemarspiguet/jules-audemars-25859ba-gelbgold-750-chronograph-1999-automatik-18kt-yellow-gold--id26411174.htm'),
(113, 1, 3, '2023-01-14', '/audemarspiguet/jules-audemars-quantieme-perpetual---platin---armband-leder---41mm---wie-neu---vintage-limitiert--id26327299.htm'),
(114, 1, 3, '2023-01-14', '/audemarspiguet/jules-audemars-chronograph-18k-0750-gold-automatik-ref-25859--id25473245.htm'),
(115, 1, 3, '2023-01-14', '/audemarspiguet/audemars-piguet-jules-chronograph-18k-weissgold-26100bc--id22296141.htm'),
(116, 1, 3, '2023-01-14', '/audemarspiguet/jules-audemars-dual-time-power-reserve-rosegold-26380or00do88cr01--id9028292.htm'),
(117, 1, 3, '2023-01-14', '/audemarspiguet/jules-classic-ultra-thin-breguet-numerals--id26395084.htm'),
(118, 1, 3, '2023-01-14', '/audemarspiguet/jules-small-seconds-15056bc-wg18k750-boxpapiereservice--id26555556.htm'),
(119, 1, 3, '2023-01-14', '/audemarspiguet/audemars-piguet-39mm-mens-automatic-watch-15120or-jules-18k--id23877066.htm'),
(120, 1, 3, '2023-01-14', '/audemarspiguet/jules-audemars---as-new---sale--id12925445.htm'),
(121, 1, 3, '2023-01-14', '/audemarspiguet/audemars-piguet-jules-audemars-tourbillon--id25738615.htm'),
(122, 1, 3, '2023-01-14', '/audemarspiguet/jules-audemars--id26474711.htm'),
(123, 1, 3, '2023-01-14', '/audemarspiguet/jules-audemars-ultra-thin-18k-rosegold-handaufzug-ref-150930r--id25473232.htm'),
(124, 1, 3, '2023-01-14', '/audemarspiguet/-jules-classic-dual-time-gmt-platinum-ref-25685pt--id23914781.htm'),
(125, 1, 3, '2023-01-14', '/audemarspiguet/jules-audemars-arnold-all-star-perpetual-calendar--id26469589.htm'),
(126, 1, 3, '2023-01-14', '/audemarspiguet/audemars-piguet-jules-audemars-equation-of-time--id26632366.htm'),
(127, 1, 3, '2023-01-14', '/audemarspiguet/jules-audemars-minute-repeater-tourbillon-weissgold-2004---25858bcood002cr02--id21694925.htm'),
(128, 1, 3, '2023-01-14', '/audemarspiguet/audemars-piguet-jules-audemars-chronometer-with-audemars-piguet-escapement--id4928304.htm'),
(129, 1, 3, '2023-01-14', '/audemarspiguet/audemars-piguet-jules-audemars--id25872704.htm'),
(130, 1, 3, '2023-01-14', '/audemarspiguet/audemars-piguet-jules-audemars-extra-thin--id23611726.htm'),
(131, 1, 3, '2023-01-14', '/audemarspiguet/jules-audemars--id26219168.htm'),
(132, 1, 3, '2023-01-14', '/audemarspiguet/jules-18k-0750-gelbgold-handaufzug-herrenuhr-gold-klassiker--id25969771.htm'),
(133, 1, 3, '2023-01-14', '/audemarspiguet/audemars-piguet-jules-audemars-pave-diamond-18k-white-gold-full-set-nos--id14384129.htm'),
(134, 1, 3, '2023-01-14', '/audemarspiguet/jules-audemars--id22047009.htm'),
(135, 1, 3, '2023-01-14', '/audemarspiguet/audemars-piguet-jules-audemars-gstaad-classic-chronograph-limitiert--id25813360.htm'),
(136, 1, 3, '2023-01-14', '/audemarspiguet/audemars-piguet-jules-audemars-small-seconds--id26107355.htm'),
(137, 1, 3, '2023-01-14', '/audemarspiguet/audemars-piguet-jules-audemars-chronograph-18-karat-gold--id26732561.htm'),
(138, 4, 3, '2023-01-14', '/rolex/daytona-ref-116500--id23195017.htm'),
(139, 4, 3, '2023-01-14', '/rolex/rolex-daytona-116500ln-black-dial--id25409415.htm'),
(140, 4, 3, '2023-01-14', '/rolex/rolex-daytona-116500ln-panda-newunworn-2021-full-set--id26974497.htm'),
(141, 4, 3, '2023-01-14', '/rolex/rolex-daytona-116500ln--neu--2022--full-set--id23959190.htm'),
(142, 4, 3, '2023-01-14', '/rolex/daytona--id26821588.htm'),
(143, 4, 3, '2023-01-14', '/rolex/rolex-daytona--id26993745.htm'),
(144, 4, 3, '2023-01-14', '/rolex/cosmograph-daytona-116500ln-2021--id23688378.htm'),
(145, 4, 3, '2023-01-14', '/rolex/rolex-daytona-edelstahl-116500ln-schwarz--id26646495.htm'),
(146, 4, 3, '2023-01-14', '/rolex/rolex-daytona-schwarz---112022---lc100---neu--ungetragen---fullset--id26958487.htm'),
(147, 4, 3, '2023-01-14', '/rolex/daytona-stahl-116500ln---2018--id26841304.htm'),
(148, 4, 3, '2023-01-14', '/rolex/rolex-daytona-panda-new-unwornstickers-2018-box--papers-full-set-116500ln--id23134873.htm'),
(149, 4, 3, '2023-01-14', '/rolex/daytona-chronograph-herrenuhr-oyster-perpetual-ref-116500ln-papiere-2016--id25249793.htm'),
(150, 4, 3, '2023-01-14', '/rolex/daytona--id26816417.htm'),
(151, 4, 3, '2023-01-14', '/rolex/rolex-daytona-116500ln-black-ceramic-new--id19928235.htm'),
(152, 4, 3, '2023-01-14', '/rolex/rolex-daytona-keramik-black-new-2022-ref116500ln--id10291170.htm'),
(153, 4, 3, '2023-01-14', '/rolex/rolex-daytona-panda-ungetragen-alle-papiere--box--id26719466.htm'),
(154, 4, 3, '2023-01-14', '/rolex/daytona-stahl--id26500934.htm'),
(155, 4, 3, '2023-01-14', '/rolex/rolex-oyster-cosmographe-daytona--id26446084.htm'),
(156, 4, 3, '2023-01-14', '/rolex/daytona--id26828226.htm'),
(157, 4, 3, '2023-01-14', '/rolex/daytona-ceramic--id26948338.htm'),
(158, 4, 3, '2023-01-14', '/rolex/daytona--id26540990.htm'),
(159, 4, 3, '2023-01-14', '/rolex/daytona--id26496905.htm'),
(160, 4, 3, '2023-01-14', '/rolex/daytona--id26469772.htm'),
(161, 4, 3, '2023-01-14', '/rolex/daytona--id26432547.htm'),
(162, 4, 3, '2023-01-14', '/rolex/rolex-daytona-edelstahl-116500ln-schwarz--id26693498.htm'),
(163, 4, 3, '2023-01-14', '/rolex/daytona-cosmograph-2020-new-certificate---116500ln--id26978340.htm'),
(164, 4, 3, '2023-01-14', '/rolex/cosmograph-daytona--id27005607.htm'),
(165, 4, 3, '2023-01-14', '/rolex/rolex-daytona-116500ln--unworn-2022-new-black-dial-fullset-lc100--id26743647.htm'),
(166, 4, 3, '2023-01-14', '/rolex/rolex-rolex-daytona-ref-116500--ln-012022--schwarzes--zb--id18706259.htm'),
(167, 4, 3, '2023-01-14', '/rolex/daytona-116500ln-boxpapers-2018--id26918980.htm'),
(168, 4, 3, '2023-01-14', '/rolex/rolex-daytona-fullset--id23403497.htm'),
(169, 4, 3, '2023-01-14', '/rolex/rolex-daytona-116500ln-stahl-rehaut-random--id19930287.htm'),
(170, 4, 3, '2023-01-14', '/rolex/daytona--id26807634.htm'),
(171, 4, 3, '2023-01-14', '/rolex/rolex-daytona-black-ceramic-new-unworn-ref-116500ln--id26016570.htm'),
(172, 4, 3, '2023-01-14', '/rolex/daytona-cosmograph-2022-full-set---116500ln--id26978338.htm'),
(173, 4, 3, '2023-01-14', '/rolex/rolex-daytona-116500ln---full-set---perfect-condition--id25729046.htm'),
(174, 4, 3, '2023-01-14', '/rolex/rolex-daytona-116500ln-ungetragen-aus-2022-schwarz-stahl--id26346554.htm'),
(175, 4, 3, '2023-01-14', '/rolex/daytona-116500ln-full-set-2020-mint--id26918981.htm'),
(176, 2, 2, '2023-01-14', '/rolex/rolex-daytona-platin-chrono-baguette-dial---like-new--id20714331.htm'),
(177, 2, 2, '2023-01-14', '/rolex/rolex-daytona-platin-baguette--id26921817.htm'),
(178, 2, 2, '2023-01-14', '/rolex/daytona-ref-116506-950-platinum-diamond-dial-102022-eu-unworn--id26690174.htm'),
(179, 2, 2, '2023-01-14', '/rolex/rolex-daytona-116506-baguette--neu--2022--full-set--id23973339.htm'),
(180, 2, 2, '2023-01-14', '/rolex/daytona-platin-arabic-dial-2020---116506-verklebt--id26240103.htm'),
(181, 2, 2, '2023-01-14', '/rolex/rolex-daytona-like-new-aus-2020--id23789322.htm'),
(182, 2, 2, '2023-01-14', '/rolex/rolex-daytona-platin-uhr-116506-papiere-box-neu-ungetragen-2022--id25206335.htm'),
(183, 2, 2, '2023-01-14', '/rolex/rolex-daytona-platinum---ice-blue-dial--id26529823.htm'),
(184, 2, 2, '2023-01-14', '/rolex/rolex-daytona--platin--ice-blue-baguette-dial--box--papers--2021--id25736093.htm'),
(185, 2, 2, '2023-01-14', '/rolex/cosmograph-daytona---full-set----ref-116506--id25574393.htm'),
(186, 2, 2, '2023-01-14', '/rolex/daytona---ref-116506---box-amp-de-papiere---950er-platin---baguette-indizes---automatik---jahr-2022--id23885824.htm'),
(187, 2, 2, '2023-01-14', '/rolex/daytona-cosmonaute-ref-116506-950-platinum-box-papers-bj-2019-lc100-germany-excellent--id25962024.htm'),
(188, 2, 2, '2023-01-14', '/rolex/rolex-daytona-116506--neu--2022--full-set--id23973156.htm'),
(189, 2, 2, '2023-01-14', '/rolex/rolex-daytona-cosmograph-40mm-platinum-ice-blue-dial-platine-new-2022--id25477048.htm'),
(190, 2, 2, '2023-01-14', '/rolex/rolex-daytona-chronograph-950-platin-116506-factory-diamonds--id26340844.htm'),
(191, 2, 2, '2023-01-14', '/rolex/daytona-platinum-ref-116506--6-2021--eu--new--full-set---id26085972.htm'),
(192, 2, 2, '2023-01-14', '/rolex/rolex-daytona-116506-platinum-baguette--id25586636.htm'),
(193, 2, 2, '2023-01-14', '/rolex/rolex-daytona-ref-116506-iceblau-brillant-baguette-zifferblatt--id23778326.htm'),
(194, 2, 2, '2023-01-14', '/rolex/rolex-daytona--id26834167.htm'),
(195, 2, 2, '2023-01-14', '/rolex/daytona--id26717026.htm'),
(196, 2, 2, '2023-01-14', '/rolex/cosmograph-daytona--id25550973.htm'),
(197, 2, 2, '2023-01-14', '/rolex/daytona--id25828869.htm'),
(198, 2, 2, '2023-01-14', '/rolex/daytona--id25941922.htm'),
(199, 2, 2, '2023-01-14', '/rolex/rolex-daytona-platin-baguette-new-2022-lc-eu-ref116506--id16388973.htm'),
(200, 2, 2, '2023-01-14', '/rolex/rolex-rolex-daytona-cosmograph-platinum-like-new--id21956745.htm'),
(201, 2, 2, '2023-01-14', '/rolex/rolex-daytona-platinum--diamond-index-2022-new--id23591552.htm'),
(202, 2, 2, '2023-01-14', '/rolex/daytona-ref-116506-ice-blue-index-zifferblatt--id2500962.htm'),
(203, 2, 2, '2023-01-14', '/rolex/rolex-rolex-daytona-platinum-116506--id18320486.htm'),
(204, 2, 2, '2023-01-14', '/rolex/daytona-platin-116506-ice-blue--id23486718.htm'),
(205, 2, 2, '2023-01-14', '/rolex/cosmograph-daytona-platinum-baguette-dial--id26063000.htm'),
(206, 2, 2, '2023-01-14', '/rolex/rolex-daytona-platin-116506-aus-2020-voll-voll-vollverklebt-inklusive-qr-code-im-fullset--id23214622.htm'),
(207, 2, 2, '2023-01-14', '/rolex/cosmograph-daytona--id27005606.htm'),
(208, 2, 2, '2023-01-14', '/rolex/rolex-daytona-platinum-new-2022-lc-eu-ref116506--id19049990.htm'),
(209, 2, 2, '2023-01-14', '/rolex/daytona-platin---116576tbr--id24913636.htm'),
(210, 2, 2, '2023-01-14', '/rolex/rolex-daytona-arabic-in-platinum--diamond-116576tbr--id23580228.htm'),
(211, 2, 2, '2023-01-14', '/rolex/rolex-daytona-116506-2014-eu-unpolished-platinum-ice-blue-top--id25175136.htm'),
(212, 2, 2, '2023-01-14', '/rolex/rolex-daytona--id26957589.htm'),
(213, 2, 2, '2023-01-14', '/rolex/rolex-daytona-ref116506---service-by-rolex---052022--id24836327.htm'),
(214, 2, 2, '2023-01-14', '/rolex/-daytona-116506--id25707681.htm'),
(215, 2, 2, '2023-01-14', '/rolex/rolex-daytona-in-platinum--diamond-116576tbr--id3090496.htm'),
(216, 2, 2, '2023-01-14', '/rolex/cosmograph-daytona--id27005609.htm'),
(217, 2, 2, '2023-01-14', '/rolex/rolex-daytona-in-platinum--baguette-diamond-dial---116506--id16585906.htm'),
(218, 2, 2, '2023-01-14', '/rolex/daytona-platin-2022---116506--id25686574.htm'),
(219, 2, 2, '2023-01-14', '/rolex/daytona-platin-2022---116506--id26411516.htm'),
(220, 2, 2, '2023-01-14', '/rolex/cosmograph-daytona-in-platinum--diamond-bezel---116576-tbr--id4371474.htm'),
(221, 2, 2, '2023-01-14', '/rolex/rolex-daytona-in-platinum-with-arabic-numerals---116506-0004--id9705944.htm'),
(222, 1, 2, '2023-01-16', '/rolex/rolex-daytona--black-dia-dial--rolex-service-2022---id23394048.htm'),
(223, 1, 2, '2023-01-16', '/rolex/rolex-daytona-116515ln--black-diamond--neu--2022--full-set---schwarz-diamant--id27034698.htm'),
(224, 1, 2, '2023-01-16', '/rolex/rolex-daytona-116508-in-yellow-gold-green-dial-bp-042021--id26631151.htm'),
(225, 1, 2, '2023-01-16', '/rolex/rolex-daytona-zenith-ref16523-sticker-top-unpolished-condition-inverted-6--id23185986.htm'),
(226, 1, 2, '2023-01-16', '/rolex/rolex-daytona-116500ln-black-dial-lc100-fullset-mit-erstkaufrechnung--id23531515.htm'),
(227, 1, 2, '2023-01-16', '/rolex/rolex-daytona-116520-black-dial-edelstahl-box--papers-unworn-nos---new-old-stock--id23288551.htm'),
(228, 4, 3, '2023-01-16', '/rolex/daytona-cosmograph-2018---116500ln--id27031672.htm'),
(229, 4, 3, '2023-01-16', '/rolex/daytona--id27026778.htm'),
(230, 1, 2, '2023-01-16', '/rolex/rolex-daytona-cosmograph-lc100-fullset-16518--id25153655.htm'),
(231, 1, 2, '2023-01-17', '/rolex/rolex-daytona-40-black-dial--new--122022--boxpapers-partially-stickers--id26973851.htm'),
(232, 1, 2, '2023-01-17', '/rolex/rolex-daytona-40--116503--122022--new--boxpapers--id26867904.htm'),
(233, 1, 2, '2023-01-17', '/rolex/rolex-daytona-116500ln-steel-ceramic-white-dial-bp-072021--id26408336.htm'),
(234, 1, 2, '2023-01-17', '/rolex/rolex-daytona-zenith-18k-yellow-gold-very-good-with-service-card--id26978734.htm'),
(235, 4, 3, '2023-01-17', '/rolex/rolex-daytona-panda---112022---lc100---neu--ungetragen---fullset--id26634806.htm'),
(236, 4, 3, '2023-01-17', '/rolex/rolex-daytona-panda---112022---lc100---neu---fullset--id26894570.htm'),
(237, 4, 3, '2023-01-17', '/rolex/rolex-daytona-schwarz---102022---lc100---neu--ungetragen---fullset--id26958487.htm');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `userID` int(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`userID`, `pwd`, `email`, `username`) VALUES
(1, '1234', 'salmagmail', ''),
(2, 'koko', 'wi19b075@technikum-wien.at', ''),
(3, 'koko', 'wi19b075@technikum-wien.at', ''),
(4, '$2y$10$APAUtzqAOeTQcJ4tHbkIhO9KoEwxk4kTNBro5zluE1YrGLwm.Bpvm', 'kornelia.kopf@gmail.com', 'koko');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `alerter`
--
ALTER TABLE `alerter`
  ADD PRIMARY KEY (`AlerterID`),
  ADD KEY `user_fk` (`user_fk`);

--
-- Indizes für die Tabelle `url`
--
ALTER TABLE `url`
  ADD PRIMARY KEY (`Url_ID`),
  ADD UNIQUE KEY `Url` (`ErgebnisURL`) USING HASH,
  ADD UNIQUE KEY `ErgebnisURL` (`ErgebnisURL`) USING HASH,
  ADD KEY `Alerter_fk` (`Alerter_fk`),
  ADD KEY `user_fk` (`user_fk`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `alerter`
--
ALTER TABLE `alerter`
  MODIFY `AlerterID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT für Tabelle `url`
--
ALTER TABLE `url`
  MODIFY `Url_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `alerter`
--
ALTER TABLE `alerter`
  ADD CONSTRAINT `alerter_ibfk_1` FOREIGN KEY (`user_fk`) REFERENCES `user` (`userID`);

--
-- Constraints der Tabelle `url`
--
ALTER TABLE `url`
  ADD CONSTRAINT `url_ibfk_1` FOREIGN KEY (`Alerter_fk`) REFERENCES `alerter` (`AlerterID`),
  ADD CONSTRAINT `url_ibfk_2` FOREIGN KEY (`user_fk`) REFERENCES `user` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
