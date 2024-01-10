<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Pass | Xbox</title>

    <!--
    - favicon link
  -->
    <link rel="shortcut icon" href="./assets/images/logo.svg" type="image/svg+xml">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ asset('home/css/style.css') }}">

    <!--
    - google font link

  -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@400;500;700&display=swap"
        rel="stylesheet">

        <style>
            .pagination {
                color: white;
                display: flex;
                justify-content: center;
                list-style: none;
                padding: 0;
            }
        
            .pagination li {
                margin: 0 5px;
                display: inline-block;
            }
        
            .pagination a, .pagination span {
                padding: 8px 12px;
                border: 1px solid #ccc;
                text-decoration: none;
                color: #333;
                border-radius: 4px;
            }
        
            .pagination .active span {
                background-color: #007bff;
                color: #fff;
            }
        
            .pagination a:hover {
                background-color: #f0f0f0;
            }
        </style>
</head>

<body id="top">

    <!--
    - #HEADER
  -->

    <header class="header">

        <!--
      - overlay
    -->
        <div class="overlay" data-overlay></div>

        <div class="container">

            <a href="#" class="logo" >
                <img src="{{ asset('home/images/logo.svg') }}" alt="GameX logo">
            </a>

            <button class="nav-open-btn" data-nav-open-btn>
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <nav class="navbar" data-nav>

                <div class="navbar-top">

                    <a href="#" class="logo">
                        <img src="{{ asset('home/images/logo.svg') }}" alt="GameX logo">
                    </a>

                    <button class="nav-close-btn" data-nav-close-btn>
                        <ion-icon name="close-outline"></ion-icon>
                    </button>

                </div>

                <ul class="navbar-list">

                    <li>
                        <a href="{{route('home')}}" class="navbar-link">Home</a>
                    </li>

                    <li>
                        <a href="#about" class="navbar-link">About</a>
                    </li>

                    <li>
                        <a href="{{route('game')}}" class="navbar-link">Games</a>
                    </li>

                    <li>
                        <a href="#contact" class="navbar-link">Contact</a>
                    </li>

                </ul>

                <ul class="nav-social-list">

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-github"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-youtube"></ion-icon>
                        </a>
                    </li>

                </ul>

            </nav>

            <div class="header-actions">

                <button class="search">
                    <ion-icon name="search-outline"></ion-icon>
                </button>

                <button class="btn-sign_in">

                    <div class="icon-box">
                        <ion-icon name="log-in-outline"></ion-icon>
                    </div>

                    <span>Log-in</span>

                </button>

            </div>

        </div>

    </header>





    <main>
        <article>

            <!--
        - #HERO
      -->

            <section class="hero" id="hero">
                <div class="container">

                    <p class="hero-subtitle">The Season 8</p>

                    <h1 class="h1 hero-title">Steam</h1>

                    <div class="btn-group">

                        <button class="btn btn-primary">
                            <span>Watch live</span>

                            <ion-icon name="play-circle"></ion-icon>
                        </button>

                        <button class="btn btn-link">Dream making</button>

                    </div>

                </div>
            </section>





            <div class="section-wrapper">








                <!--
          - #GALLERY
        -->

                <section class="gallery">
                    <div class="container">

                        <ul class="gallery-list has-scrollbar">

                            <li>
                                <figure class="gallery-item">
                                    <img src="{{asset('home/images/img1.png') }}" alt="Gallery image" >
                                </figure>
                            </li>

                            <li>
                                <figure class="gallery-item">
                                    <img src="{{asset('home/images/img2.png') }}" alt="Gallery image"  >
                                </figure>
                            </li>

                            <li>
                                <figure class="gallery-item">
                                    <img src="{{asset('home/images/img3.png') }}" alt="Gallery image" >
                                </figure>
                            </li>

                           

                        </ul>

                    </div>
                </section>





                <!--
          - #TEAM
        -->




                <!--
          - #GEARS
        -->

                <section class="gears" id="gears">
                    <div class="container">

                        <h2 class="h2 section-title">check our Games</h2>

                        <ul class="gears-list">
                            @foreach ($gamesPaginated as $gameId => $game)
                                <li>
                                    <div class="gears-card">
                                        <div class="card-banner">
                                            <a href="#">
                                                <img src="{{ $game['images']['Poster'][0] }}"
                                                    alt="{{ $game['productTitle'] }}">
                                            </a>
                                            <button class="share">
                                                <ion-icon name="share-social"></ion-icon>
                                            </button>
                                            <div class="card-time-wrapper">
                                                <ion-icon name="time-outline"></ion-icon>
                                                <span>{{ $game['releaseDate'] }}</span>
                                            </div>
                                        </div>

                                        <div class="card-content">
                                            <div class="card-title-wrapper">
                                                <h3 class="h3 card-title">{{ $game['productTitle'] }}</h3>
                                                <p class="card-subtitle">Xbox</p>
                                            </div>
                                            <div class="card-prize">${{ $game['pricing']['ListPrice'] }}</div>
                                        </div>

                                        <div class="card-actions">
                                            <button class="btn btn-primary">
                                                <ion-icon name="add-outline"></ion-icon>
                                                <span>Add to cart</span>
                                            </button>
                                            <button class="btn card-btn">
                                                <ion-icon name="heart-outline"></ion-icon>
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            @endforeach

                          
                           
                        </ul>
                        <br>
                        <div class="pagination justify-content-center">
                            {{ $gamesPaginated->links('pagination::bootstrap-4') }}
                        </div>

                    </div>
                </section>





                <!--
          - #NEWSLETTER
        -->

                
            </div>

        </article>
    </main>





    <!--
    - #FOOTER
  -->

    <footer>

        <div class="footer-top">
            <div class="container">

                <div class="footer-brand-wrapper">

                    <a href="#" class="logo">
                        <img src="{{ asset('home/images/logo.svg') }}" alt="GameX logo">
                    </a>

                    <div class="footer-menu-wrapper">

                        <ul class="footer-menu-list">

                            <li>
                                <a href="#hero" class="footer-menu-link">Home</a>
                            </li>

                            <li>
                                <a href="#about" class="footer-menu-link">About</a>
                            </li>

                            <li>
                                <a href="#tournament" class="footer-menu-link">Tournament</a>
                            </li>

                            <li>
                                <a href="#team" class="footer-menu-link">Team</a>
                            </li>

                            <li>
                                <a href="#gears" class="footer-menu-link">Gears</a>
                            </li>

                            <li>
                                <a href="#" class="footer-menu-link">Contact</a>
                            </li>

                        </ul>

                        <div class="footer-input-wrapper">
                            <input type="text" name="message" required placeholder="Find Here Now"
                                class="footer-input">

                            <button class="btn btn-primary">
                                <ion-icon name="search-outline"></ion-icon>
                            </button>
                        </div>

                    </div>

                </div>

                <div class="footer-quicklinks">

                    <ul class="quicklink-list">

                        <li>
                            <a href="#" class="quicklink-item">Faq</a>
                        </li>

                        <li>
                            <a href="#" class="quicklink-item">Help center</a>
                        </li>

                        <li>
                            <a href="#" class="quicklink-item">Terms of use</a>
                        </li>

                        <li>
                            <a href="#" class="quicklink-item">Privacy</a>
                        </li>

                    </ul>

                    <ul class="footer-social-list">

                        <li>
                            <a href="#" class="footer-social-link">
                                <ion-icon name="logo-discord"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="footer-social-link">
                                <ion-icon name="logo-twitch"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="footer-social-link">
                                <ion-icon name="logo-xbox"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="footer-social-link">
                                <ion-icon name="logo-youtube"></ion-icon>
                            </a>
                        </li>

                    </ul>

                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <p class="copyright">
                    Copyright &copy; 2024 <a href="#">Imad Najam</a>. all rights reserved
                </p>

                <figure class="footer-bottom-img">
                    <img src="{{ asset('home/images/logo.svg') }}" alt="Online payment companies logo">
                </figure>
            </div>
        </div>

    </footer>





    <!--
    - #GO TO TOP
  -->

    <a href="#top" class="btn btn-primary go-top" data-go-top>
        <ion-icon name="chevron-up-outline"></ion-icon>
    </a>





    <!--
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



</body>

</html>
