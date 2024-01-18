@extends('home')
@section('game')

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
                                <img src="{{ asset('home/images/img1.png') }}" alt="Gallery image">
                            </figure>
                        </li>

                        <li>
                            <figure class="gallery-item">
                                <img src="{{ asset('home/images/img2.png') }}" alt="Gallery image">
                            </figure>
                        </li>

                        <li>
                            <figure class="gallery-item">
                                <img src="{{ asset('home/images/img3.png') }}" alt="Gallery image">
                            </figure>
                        </li>



                    </ul>

                </div>
            </section>

<section class="gears" id="gears">
    <div class="container">

        <h2 class="h2 section-title">check our Games</h2>

        <ul class="gears-list">
            @foreach ($gamesPaginated as $gameId => $game)
                <li>
                    <div class="gears-card">
                        <div class="card-banner">
                            <a href="#">
                                <img src="{{ $game['background_image']}}"
                                    alt="{{ $game['name'] }}" style="width: 300px">
                            </a>
                            <button class="share">
                                <ion-icon name="share-social"></ion-icon>
                            </button>
                            <div class="card-time-wrapper">
                                <ion-icon name="time-outline"></ion-icon>
                                <span>{{ $game['released'] }}</span>
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="card-title-wrapper">
                                <h3 class="h3 card-title">{{ $game['name'] }}</h3>
                                <p class="card-subtitle">Xbox</p>
                            </div>
                            <div class="card-prize">$</div>
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

</div>

</article>
</main>
@endsection