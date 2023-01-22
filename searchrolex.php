<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--=============== BOXICONS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!--=============== SWIPER CSS ===============--> 
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="style.css">

    <title>Rolex Search</title>
</head>
<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="index.php" class="nav__logo">
                <i class='bx bxs-watch nav__logo-icon'></i> WatchSearch
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Startseite</a>
                    </li>
                    <li class="nav__item">
                        <a href="#featured" class="nav__link">Featured</a>
                    </li>
                    <li class="nav__item">
                        <a href="#products" class="nav__link">Produkte</a>
                    </li>
                    <li class="nav__item">
                        <a href="#new" class="nav__link">Neu</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x' ></i>
                    <i class='bx bxs-x' ></i>
                </div>
            </div>

            <div class="nav__btns">
                <!-- Theme change button -->
                <div class="nav__shop" id="cart-shop">
                    <a href="login.php" style="color: black;"><i class='bx bxs-user'></i></a>
                </div>
                

                <div class="nav__shop" id="cart-shop">
                    <i class='bx bx-shopping-bag' ></i>
                </div>

            </div>
        </nav>
    </header>

    <!--==================== CART ====================-->
    <div class="cart" id="cart">
        <i class='bx bx-x cart__close' id="cart-close"></i>

        <h2 class="cart__title-center">My Cart</h2>

        <div class="cart__container">
            <article class="cart__card">
                <div class="cart__box">
                    <img src="assets/img/featured1.png" alt="" class="cart__img">
                </div>

                <div class="cart__details">
                    <h3 class="cart__title">Jazzmaster</h3>
                    <span class="cart__price">$1050</span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                <i class='bx bx-minus' ></i>
                            </span>

                            <span class="cart__amount-number">1</span>

                            <span class="cart__amount-box">
                                <i class='bx bx-plus' ></i>
                            </span>
                        </div>

                        <i class='bx bx-trash-alt cart__amount-trash' ></i>
                    </div>
                </div>
            </article>
            
            <article class="cart__card">
                <div class="cart__box">
                    <img src="assets/img/featured3.png" alt="" class="cart__img">
                </div>

                <div class="cart__details">
                    <h3 class="cart__title">Rose Gold</h3>
                    <span class="cart__price">$850</span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                <i class='bx bx-minus' ></i>
                            </span>

                            <span class="cart__amount-number">1</span>

                            <span class="cart__amount-box">
                                <i class='bx bx-plus' ></i>
                            </span>
                        </div>

                        <i class='bx bx-trash-alt cart__amount-trash' ></i>
                    </div>
                </div>
            </article>

            <article class="cart__card">
                <div class="cart__box">
                    <img src="assets/img/new1.png" alt="" class="cart__img">
                </div>

                <div class="cart__details">
                    <h3 class="cart__title">Longines Rose</h3>
                    <span class="cart__price">$980</span>

                    <div class="cart__amount">
                        <div class="cart__amount-content">
                            <span class="cart__amount-box">
                                <i class='bx bx-minus' ></i>
                            </span>

                            <span class="cart__amount-number">1</span>

                            <span class="cart__amount-box">
                                <i class='bx bx-plus' ></i>
                            </span>
                        </div>

                        <i class='bx bx-trash-alt cart__amount-trash' ></i>
                    </div>
                </div>
            </article>
        </div>

        <div class="cart__prices">
            <span class="cart__prices-item">3 items</span>
            <span class="cart__prices-total">$2880</span>
        </div>
    </div>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home" id="home">
            <div class="home__container container grid">

            <form action='Logic/back.php' method="POST">

                  <div class="btn-group">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false" style="background-color: rgba(13, 68, 32, 0.836);">
                      Modell
                    </button>
                    <select name="model" class="dropdown-menu" aria-labelledby="defaultDropdown" style="width: 100%;">
                      <option class="dropdown-item" value="Air King">Air King</option>
                      <option class="dropdown-item" value="Air King Date">Air King Date</option>
                      <option class="dropdown-item" value="Cellini">Cellini</option>
                      <option class="dropdown-item" value="Cellini Danaos">Cellini Danaos</option>
                      <option class="dropdown-item" value="Cellini Date">Cellini Date</option>
                      <option class="dropdown-item" value="Cellini Dual Time">Cellini Dual Time</option>
                      <option class="dropdown-item" value="Cellini Moonphase">Cellini Moonphase</option>
                      <option class="dropdown-item" value="Cellini Prince">Cellini Prince</option>
                      <option class="dropdown-item" value="Cellini Time">Cellini Time</option>
                      <option class="dropdown-item" value="Chronograph">Chronograph</option>
                      <option class="dropdown-item" value="Datejust">Datejust</option>
                      <option class="dropdown-item" value="Datejust 31">Datejust 31</option>
                      <option class="dropdown-item" value="Datejust 36">Datejust 36</option>
                      <option class="dropdown-item" value="Datejust 41">Datejust 41</option>
                      <option class="dropdown-item" value="Datejust II">Datejust II</option>
                      <option class="dropdown-item" value="Datejust Oysterquartz">Datejust Oysterquartz</option>
                      <option class="dropdown-item" value="Datejust Turn-O-Graph">Datejust Turn-O-Graph</option>
                      <option class="dropdown-item" value="Day-Date">Day-Date</option>
                      <option class="dropdown-item" value="Day-Date 36">Day-Date 36</option>
                      <option class="dropdown-item" value="Day-Date 40">Day-Date 40</option>
                      <option class="dropdown-item" value="Day-Date II">Day-Date II</option>
                      <option class="dropdown-item" value="Day-Date Oysterquartz">Day-Date Oysterquartz</option>
                      <option class="dropdown-item" value="Daytona">Daytona</option>
                      <option class="dropdown-item" value="Explorer">Explorer</option>
                      <option class="dropdown-item" value="Explorer II">Explorer II</option>
                      <option class="dropdown-item" value="GMT-Master">GMT-Master</option>
                      <option class="dropdown-item" value="GMT-Master II">GMT-Master II</option>
                      <option class="dropdown-item" value="Lady-Datejust">Lady-Datejust</option>
                      <option class="dropdown-item" value="Lady-Datejust Pearlmaster">Lady-Datejust Pearlmaster</option>
                      <option class="dropdown-item" value="Milgauss">Milgauss</option>
                      <option class="dropdown-item" value="Oyster">Oyster</option>
                      <option class="dropdown-item" value="Oyster Perpetual">Oyster Perpetual</option>
                      <option class="dropdown-item" value="Oyster Perpetual 26">Oyster Perpetual 26</option>
                      <option class="dropdown-item" value="Oyster Perpetual 28">Oyster Perpetual 28</option>
                      <option class="dropdown-item" value="Oyster Perpetual 31">Oyster Perpetual 31</option>
                      <option class="dropdown-item" value="Oyster Perpetual 34">Oyster Perpetual 34</option>
                      <option class="dropdown-item" value="Oyster Perpetual 36">Oyster Perpetual 36</option>
                      <option class="dropdown-item" value="Oyster Perpetual 39">Oyster Perpetual 39</option>
                      <option class="dropdown-item" value="Oyster Perpetual 41">Oyster Perpetual 41</option>
                      <option class="dropdown-item" value="Oyster Perpetual Date">Oyster Perpetual Date</option>
                      <option class="dropdown-item" value="Oyster Perpetual Lady Date">Oyster Perpetual Lady Date</option>
                      <option class="dropdown-item" value="Oyster Presicion">Oyster Presicion</option>
                      <option class="dropdown-item" value="Pearlmaster">Pearlmaster</option>
                      <option class="dropdown-item" value="Precision">Precision</option>
                      <option class="dropdown-item" value="Prince">Prince</option>
                      <option class="dropdown-item" value="Sea-Dweller">Sea-Dweller</option>
                      <option class="dropdown-item" value="Sea-Dweller 4000">Sea-Dweller 4000</option>
                      <option class="dropdown-item" value="Sea-Dweller Deepsea">Sea-Dweller Deepsea</option>
                      <option class="dropdown-item" value="Sky-Dweller">Sky-Dweller</option>
                      <option class="dropdown-item" value="Submariner">Submariner</option>
                      <option class="dropdown-item" value="Submariner Date">Submariner Date</option>
                      <option class="dropdown-item" value="Submariner (No date)">Submariner (No date)</option>
                      <option class="dropdown-item" value="Yacht-Master">Yacht-Master</option>
                      <option class="dropdown-item" value="Yacht-Master 37">Yacht-Master 37</option>
                      <option class="dropdown-item" value="Yacht-Master 40">Yacht-Master 40</option>
                      <option class="dropdown-item" value="Yacht-Master 42">Yacht-Master 42</option>
                      <option class="dropdown-item" value="Yacht-Master II">Yacht-Master  II</option>
                    </select>
                  </div>
                  
               <div class="btn-group">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false" style="background-color: rgba(13, 68, 32, 0.836);">
                      Preis vom
                    </button>
                   <select name="priceFrom" class="dropdown-menu" aria-labelledby="defaultDropdown">
                        
                         <option class="dropdown-item" value="7000">7000€</option>
                          <option class="dropdown-item" value="10000">10000€</option>
                          <option class="dropdown-item" value="16000">16000€</option>
                           <option class="dropdown-item" value="23000">23000€</option>
                       </select>
                        </div>
                        
                          
                          <div class="btn-group">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false" style="background-color: rgba(13, 68, 32, 0.836);">
                      Preis bis
                    </button>
                     <select name="priceTo" class="dropdown-menu" aria-labelledby="defaultDropdown">
                        <option class="dropdown-item" value="7000">7000€</option>
                        <option class="dropdown-item" value="10000">10000€</option>
                        <option class="dropdown-item" value="16000€">16000€</option>
                        <option class="dropdown-item" value="23000€">23000€</option>
                      
                    </select>
                  </div>
                  
                 
                  <div class="btn-group">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false" style="background-color: rgba(13, 68, 32, 0.836);">
                      Standort
                    </button>
                    <select name="ort" class="dropdown-menu" aria-labelledby="defaultDropdown" style="width: 100%;">
                      <option class="dropdown-item" value="Ägypten">Ägypten</option>
                      <option class="dropdown-item" value="Andora">Andora</option>
                      <option class="dropdown-item" value="Albanien">Albanien</option>
                      <option class="dropdown-item" value="Armenien">Armenien</option>
                      <option class="dropdown-item" value="Australien">Australien</option>
                      <option class="dropdown-item" value="Bahrain">Bahrain</option>
                      <option class="dropdown-item" value="Bermuda">Bermuda</option>
                      <option class="dropdown-item" value="Belgien">Belgien</option>
                      <option class="dropdown-item" value="Brasilien">Brasilien</option>
                      <option class="dropdown-item" value="Bulgarien">Bulgarien</option>
                      <option class="dropdown-item" value="Chile">Chile</option>
                      <option class="dropdown-item" value="China">China</option>
                      <option class="dropdown-item" value="Costa Rika">Costa Rika</option>
                      <option class="dropdown-item" value="Dänemark">Dänemark</option>
                      <option class="dropdown-item" value="Deutschland">Deutschland</option>
                      <option class="dropdown-item" value="Estland">Estland</option>
                      <option class="dropdown-item" value="Finnland">Finnland</option>
                      <option class="dropdown-item" value="Frankreich">Frankreich</option>
                      <option class="dropdown-item" value="Französisch-Polynesien">Französisch-Polynesien</option>
                      <option class="dropdown-item" value="Georgien">Georgien</option>
                      <option class="dropdown-item" value="Gibraltar">Gibraltar</option>
                      <option class="dropdown-item" value="Griechenland">Griechenland</option>
                      <option class="dropdown-item" value="Großbritannien">Großbritannien</option>
                      <option class="dropdown-item" value="Guam">Guam</option>
                      <option class="dropdown-item" value="Hongkong">Hongkong</option>
                      <option class="dropdown-item" value="Indien">Indien</option>
                      <option class="dropdown-item" value="Indonesien">Indonesien</option>
                      <option class="dropdown-item" value="Irland">Irland</option>
                      <option class="dropdown-item" value="Island">Island</option>
                      <option class="dropdown-item" value="Israel">Israel</option>
                      <option class="dropdown-item" value="Italien">Italien</option>
                      <option class="dropdown-item" value="Japan">Japan</option>
                      <option class="dropdown-item" value="Kanada">Kanada</option>
                      <option class="dropdown-item" value="Kasachstan">Kasachstan</option>
                      <option class="dropdown-item" value="Kolumbien">Kolumbien</option>
                      <option class="dropdown-item" value="Kroatien">Kroatien</option>
                      <option class="dropdown-item" value="Kuwait">Kuwait</option>
                      <option class="dropdown-item" value="Laos">Laos</option>
                      <option class="dropdown-item" value="Lettland">Lettland</option>
                      <option class="dropdown-item" value="Libanon">Libanon</option>
                      <option class="dropdown-item" value="Liechtenstein">Liechtenstein</option>
                      <option class="dropdown-item" value="Litauen">Litauen</option>
                      <option class="dropdown-item" value="Luxemburg">Luxemburg</option>
                      <option class="dropdown-item" value="Macau">Macau</option>
                      <option class="dropdown-item" value="Malaysia">Malaysia</option>
                      <option class="dropdown-item" value="Malta">Malta</option>
                      <option class="dropdown-item" value="Marokko">Marokko</option>
                      <option class="dropdown-item" value="Monaco">Monaco</option>
                      <option class="dropdown-item" value="Nepal">Nepal</option>
                      <option class="dropdown-item" value="Neuseeland">Neuseeland</option>
                      <option class="dropdown-item" value="Niederlande">Niederlande</option>
                      <option class="dropdown-item" value="Nigeria">Nigeria</option>
                      <option class="dropdown-item" value="Norwegen">Norwegen</option>
                      <option class="dropdown-item" value="Oman">Oman</option>
                      <option class="dropdown-item" value="Österreich">Österreich</option>
                      <option class="dropdown-item" value="Pakistan">Pakistan</option>
                      <option class="dropdown-item" value="Panama">Panama</option>
                      <option class="dropdown-item" value="Philippinen">Philippinen</option>
                      <option class="dropdown-item" value="Polen">Polen</option>
                      <option class="dropdown-item" value="Portugal">Portugal</option>
                      <option class="dropdown-item" value="Puerto Rico">Puerto Rico</option>
                      <option class="dropdown-item" value="Qatar">Qatar</option>
                      <option class="dropdown-item" value="Reunion">Reunion</option>
                      <option class="dropdown-item" value="Rumänien">Rumänien</option>
                      <option class="dropdown-item" value="Russland">Russland</option>
                      <option class="dropdown-item" value="San Marino">San Marino</option>
                      <option class="dropdown-item" value="Saudi-Arabien">Saudi-Arabien</option>
                      <option class="dropdown-item" value="Schweden">Schweden</option>
                      <option class="dropdown-item" value="Schweiz">Schweiz</option>
                      <option class="dropdown-item" value="Serbien">Serbien</option>
                      <option class="dropdown-item" value="Singapur">Singapur</option>
                      <option class="dropdown-item" value="Slowakei">Slowakei</option>
                      <option class="dropdown-item" value="Slowenien">Slowenien</option>
                      <option class="dropdown-item" value="Spanien">Spanien</option>
                      <option class="dropdown-item" value="Sri Lanka">Sri Lanka</option>
                      <option class="dropdown-item" value="Südafrika">Südafrika</option>
                      <option class="dropdown-item" value="Südkorea">Südkorea</option>
                      <option class="dropdown-item" value="Taiwan">Taiwan</option>
                      <option class="dropdown-item" value="Thailand">Thailand</option>
                      <option class="dropdown-item" value="Trinidad und Tobago">Trinidad und Tobago</option>
                      <option class="dropdown-item" value="Tschechien">Tschechien</option>
                      <option class="dropdown-item" value="Tunesien">Tunesien</option>
                      <option class="dropdown-item" value="Türkei">Türkei</option>
                      <option class="dropdown-item" value="Ukraine">Ukraine</option>
                      <option class="dropdown-item" value="Ungarn">Ungarn</option>
                      <option class="dropdown-item" value="Uruguay">Uruguay</option>
                      <option class="dropdown-item" value="USA">USA</option>
                      <option class="dropdown-item" value="Usbekistan">Usbekistan</option>
                      <option class="dropdown-item" value="VAE">VAE</option>
                      <option class="dropdown-item" value="Venezuela">Venezuela</option>
                      <option class="dropdown-item" value="Vietnam">Vietnam</option>
                      <option class="dropdown-item" value="Zypern">Zypern</option>
                    </select>
                  </div>
                
                  <div class="btn-group">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false" style="background-color: rgba(13, 68, 32, 0.836);">
                      Gehäuse
                    </button>
                    <select name="caseMaterial" class="dropdown-menu" aria-labelledby="defaultDropdown">
                      <option class="dropdown-item" value="Aluminium">Aluminium</option>
                      <option class="dropdown-item" value="Bronze">Bronze</option>
                      <option class="dropdown-item" value="Carbon">Carbon</option>
                      <option class="dropdown-item" value="Gelbgold">Gelbgold</option>
                      <option class="dropdown-item" value="Gold/Stahl">Gold/Stahl</option>
                      <option class="dropdown-item" value="Keramik">Keramik</option>
                      <option class="dropdown-item" value="Kunststoff">Kunststoff</option>
                      <option class="dropdown-item" value="Palladium">Palladium</option>
                      <option class="dropdown-item" value="Platin">Platin</option>
                      <option class="dropdown-item" value="Roségold">Roségold</option>
                      <option class="dropdown-item" value="Rotgold">Rotgold</option>
                      <option class="dropdown-item" value="Silber">Silber</option>
                      <option class="dropdown-item" value="Stahl">Stahl</option>
                      <option class="dropdown-item" value="Tantal">Tantal</option>
                      <option class="dropdown-item" value="Titan">Titan</option>
                      <option class="dropdown-item" value="Weißgold">Weißgold</option>
                      <option class="dropdown-item" value="Wolfram">Wolfram</option>
                      <option class="dropdown-item" value="keine Angabe">Keine Angabe</option>
                    </select>
                  </div>
                    <input type="text" name="Referenznummer" placeholder="Referenznummer">
                    <button class="btn btn-secondary " type="submit" >
                        Uhrsuche starten
                      </button>
                    <style type="text/css">
                        .suche input,button{
                          width:70%;
                          border:2px solid white;
                          border-right:0px;
                          font-size: 18px;
                          padding:12px;
                          background-color: transparent;
                          color:rgb(0, 0, 0);
                        }
                        .suche input:hover{
                          opacity: .8;
                        }
                        .suche button{
                          width:30%;
                          font-size: 18px;
                          padding:12px;
                          background-color: rgba(13, 68, 32, 0.836);
                          color:rgb(255, 255, 255);
                          transition: all 0.3s;
                          float: right;
                          border-left:0px;
                        }
                        .suche button:hover{
                          opacity: .8;
                        }
                        </style>
                </form>

            </div>
        </section>

       <!--==================== FEATURED ====================-->
       <section class="featured section container" id="featured">
        <h2 class="section__title">
            Featured
        </h2>

        <div class="featured__container grid">
            <article class="featured__card">
                <span class="featured__tag">Sale</span>

                <img src="images/rolex1.png" alt="" class="featured__img">

                <div class="featured__data">
                    <h3 class="featured__title">Rolex Yacht Master</h3>
                    <span class="featured__price">€43.100</span>
                </div>

                <button class="button featured__button">Entdecken</button>
            </article>

            <article class="featured__card">
                <span class="featured__tag">Sale</span>

                <img src="images/cartier1.png" alt="" class="featured__img">

                <div class="featured__data">
                    <h3 class="featured__title">Cartier Ballon Bleu</h3>
                    <span class="featured__price">€10.900</span>
                </div>

                <button class="button featured__button">Entdecken</button>
            </article>

            <article class="featured__card">
                <span class="featured__tag">Sale</span>

                <img src="images/patek.png" alt="" class="featured__img">

                <div class="featured__data">
                    <h3 class="featured__title">Patek Philippe Nautilus 5711 </h3>
                    <span class="featured__price">€30.400</span>
                </div>

                <button class="button featured__button">Entdecken</button>
            </article>
        </div>
    </section>

    <!--==================== STORY ====================-->
    <section class="story section container">
        <div class="story__container grid">
            <div class="story__data">
                <h2 class="section__title story__section-title">
                    Rolex Day-Date
                </h2>

                <h1 class="story__title">
                    Verwirklichung eines Ideals
                </h1>

                <p class="story__description">
                    Wenn die Zeit alles verändert, dann verändert diese Minute die Dinge wie keine andere. Um Mitternacht wird die Oyster Perpetual Day-Date zu einer Brücke zwischen Vergangenheit und Zukunft, zwischen bereits Erreichtem und dem, was es zu erleben gilt. Seit 1956 wird sie am Handgelenk von Visionären, Virtuosen und Pionieren Zeugin der größten Momente der Geschichte. Menschen, die jeden Tag zu einem Versprechen für die Zukunft machen.
                </p>

                <a href="#" class="button button--small">Entdecken</a>
            </div>

            <div class="story__images">
                <img src="images/daydate.jpg" alt="" class="story__img">
                <div class="story__square"></div>
            </div>
        </div>
    </section>

    <!--==================== PRODUCTS ====================-->
    <section class="products section container" id="products">
        <h2 class="section__title">
            Produkte
        </h2>

        <div class="products__container grid">
            <article class="products__card">
                <img src="images/seiko.png" alt="" class="products__img">

                <h3 class="products__title">Seiko</h3>
                <span class="products__price">€1.500</span>

            </article>

            <article class="products__card">
                <img src="images/iwc.png" alt="" class="products__img">

                <h3 class="products__title">IWC</h3>
                <span class="products__price">€1.350</span>

            </article>

            <article class="products__card">
                <img src="images/breitling.png" alt="" class="products__img">

                <h3 class="products__title">Breitling</h3>
                <span class="products__price">€870</span>

            </article>

            <article class="products__card">
                <img src="images/panerai.png" alt="" class="products__img">

                <h3 class="products__title">Panerai</h3>
                <span class="products__price">€6.500</span>

            </article>

            <article class="products__card">
                <img src="images/audemars.jpg" alt="" class="products__img">

                <h3 class="products__title">Audemars Piguet Royal Oak</h3>
                <span class="products__price">€62.000</span>

            </article>

            <article class="products__card">
                <img src="images/hublot.png" alt="" class="products__img">

                <h3 class="products__title">Hublot</h3>
                <span class="products__price">€7.900</span>

            </article>
        </div>
    </section>

    <!--==================== TESTIMONIAL ====================-->
    <section class="testimonial section container">
        <div class="testimonial__container grid">
            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                    <div class="testimonial__card swiper-slide">
                        <div class="testimonial__quote">
                            <i class='bx bxs-quote-alt-left' ></i>
                        </div>
                        <p class="testimonial__description">
                            They are the best watches that one acquires, also they are always with the latest 
                            news and trends, with a very comfortable price and especially with the attention 
                            you receive, they are always attentive to your questions.
                        </p>
                        <h3 class="testimonial__date">September 28. 2022</h3>

                        <div class="testimonial__perfil">
                            <img src="images/lee.png" alt="" class="testimonial__perfil-img">

                            <div class="testimonial__perfil-data">
                                <span class="testimonial__perfil-name">Carl Adams</span>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>

            <div class="testimonial__images">
                <div class="testimonial__square"></div>
                <img src="images/roli.jpg" alt="" class="testimonial__img">
            </div>
        </div>
    </section>

    <!--==================== NEW ====================-->
    <section class="new section container" id="new">
        <h2 class="section__title">
            Neuerscheinungen
        </h2>
        
        <div class="new__container">
            <div class="swiper new-swiper">
                <div class="swiper-wrapper">
                    <article class="new__card swiper-slide">
                        <span class="new__tag">Neu</span>

                        <img src="images/rolex2.png" alt="" class="new__img">

                        <div class="new__data">
                            <h3 class="new__title">Rolex</h3>
                            <span class="new__price">€43.100</span>
                        </div>
                    </article>

                    <article class="new__card swiper-slide">
                        <span class="new__tag">Neu</span>

                        <img src="images/patek2.png" alt="" class="new__img">

                        <div class="new__data">
                            <h3 class="new__title">Patek Philippe</h3>
                            <span class="new__price">€612.676</span>
                        </div>
                    </article>

                    <article class="new__card swiper-slide">
                        <span class="new__tag">Neu</span>

                        <img src="images/cartier2.png" alt="" class="new__img">

                        <div class="new__data">
                            <h3 class="new__title">Cartier</h3>
                            <span class="new__price">€10.900</span>
                        </div>

                    </article>

                    <article class="new__card swiper-slide">
                        <span class="new__tag">Neu</span>

                        <img src="images/breiti.png" alt="" class="new__img">

                        <div class="new__data">
                            <h3 class="new__title">Breitling</h3>
                            <span class="new__price">€4.500</span>
                        </div>
                    </article>                       
                </div>
            </div>
        </div>
    </section>

        <!--==================== NEWSLETTER ====================-->
        <section class="newsletter section container">
            <div class="newsletter__bg grid">
                <div>
                    <h2 class="newsletter__title">Newsletter <br> Abonnieren</h2>
                    <p class="newsletter__description">
                        Verpassen Sie nicht unsere Rabatte. Abonnieren Sie unseren E-Mail 
                        Newsletter, um die besten Angebote, Gutscheine, Geschenke und vieles mehr zu erhalten.
                    </p>
                </div>

                <form action="" class="newsletter__subscribe">
                    <input type="email" placeholder="E-Mail Adresse eingeben" class="newsletter__input">
                    <button class="button">
                        ABONNIEREN
                    </button>
                </form>
            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content">
                <h3 class="footer__title">Information</h3>

                <ul class="footer__list">
                    <li>1010, Wien</li>
                    <li>Dorotheergasse</li>
                </ul>
            </div>
            <div class="footer__content">
                <h3 class="footer__title">Über Uns</h3>

                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">Support Center</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Customer Support</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Über Uns</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Copy Right</a>
                    </li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Produkte</h3>

                <ul class="footer__links">
                    <li>
                        <a href="#" class="footer__link">Rolex</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Patek Philippe</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Seiko</a>
                    </li>
                    <li>
                        <a href="#" class="footer__link">Weitere Produkte</a>
                    </li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Social</h3>

                <ul class="footer__social">
                    <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                        <i class='bx bxl-facebook'></i>
                    </a>

                    <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                        <i class='bx bxl-twitter' ></i>
                    </a>

                    <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                        <i class='bx bxl-instagram' ></i>
                    </a>
                </ul>
            </div>
        </div>

        <span class="footer__copy">&#169; WatchSearch. All rights reserved</span>
    </footer>

    <!--=============== SCROLL UP ===============-->
    <a href="#" class="scrollup" id="scroll-up"> 
        <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
    </a>


</body>
</html>
