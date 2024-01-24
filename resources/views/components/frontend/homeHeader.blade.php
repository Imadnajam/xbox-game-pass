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
                    <a href="{{route('about')}}" class="navbar-link">About</a>
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

                <a href="{{route('login')}}" style="color: white"><span>Log-in</span></a>

            </button>

        </div>

    </div>

</header>

