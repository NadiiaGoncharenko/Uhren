<?php
session_start();
?>
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

    <title>Homepage</title>
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
                    <?php
                     if(!isset($_SESSION['user']))
                     {
                        echo "<a href='login.php' style='color: black;'><i class='bx bxs-user'></i></a>";
                     }
                     else{
                        echo "<a href='logout.php' style='color: black;'><i class='bx bxs-arrow-from-left'></i></a>";
                    }
                    ?>
                    
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
                <div class="home__img-bg">
                    <img src="images/main.png" alt="" class="home__img">
                </div>

                <div class="home__social">
                    <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                        Facebook
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="home__social-link">
                        Twitter
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                        Instagram
                    </a>
                </div>

                <div class="home__data">
                    <h1 class="home__title">WatchSearch</h1><br> 
                    <h2>Finden Sie Ihre Traumuhr auf dem Marktplatz für Luxusuhren.</h2> <br> <br>

                <form class="suche">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        Uhr finden
                      </button>
                    <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                        <li><a class="dropdown-item" href="searchrolex.php">Rolex</a></li>
                        <li><a class="dropdown-item" href="searchomega.php">Omega</a></li>
                        <li><a class="dropdown-item" href="searchpp.php">Patek Philippe</a></li>
                        <li><a class="dropdown-item" href="searchbreit.php">Breitling</a></li>
                        <li><a class="dropdown-item" href="searchcartier.php">Cartier</a></li>
                        <li><a class="dropdown-item" href="searchap.php">Audemars Piguet</a></li>
                      </ul>
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