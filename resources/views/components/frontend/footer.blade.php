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
                            <a href="{{route('about')}}" class="footer-menu-link">About</a>
                        </li>


                        <li>
                            <a href="{{route('game')}}" class="footer-menu-link">Game</a>
                        </li>

                        <li>
                            <a href="{{route('userCart')}}" class="footer-menu-link">Cart</a>
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