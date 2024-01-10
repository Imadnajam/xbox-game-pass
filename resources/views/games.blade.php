<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('game/css/style.css') }}">
    <title>EpicGames Store</title>
</head>

<body>
    @foreach ($gamesPaginated as $gameId => $game)
        <div class="epic-slider">
            <div class="epic-slider-view">
                <div id="slider-1" class="slider-content active">
                    <div class="info">
                        <h3>{{ $game['productTitle'] }}</h3>
                        <p>
                            {{ $game['productDescription'] }}
                        </p>
                        <button> {{ $game['developerName'] }}</button>
                    </div>
                    <div class="background" style="background-image: url('{{ $game['images']['Poster'][0] }}');">
                    </div>
                </div>
                <div id="slider-2" class="slider-content">
                    <div class="info">
                        <h3>{{ $game['productTitle'] }}</h3>
                        <p>
                            {{ $game['productDescription'] }}
                        </p>
                        <button>{{ $game['developerName'] }}</button>
                    </div>
                    <div class="background" style="background-image: url('');">
                    </div>
                </div>
                <div id="slider-3" class="slider-content">
                    <div class="info">
                        <h3>{{ $game['productTitle'] }}</h3>
                        <p>
                            {{ $game['productDescription'] }}
                        </p>
                        <button>Hemen Ön Satın Alım Yap</button>
                    </div>
                    <div class="background"
                        style="background-image: url('img/pd3-egs-carousel-desktop-16x9-image-1248x702-a3a08c1de90e.avif');">
                    </div>
                </div>
                <div id="slider-4" class="slider-content">
                    <div class="info">
                        <h3>{{ $game['productTitle'] }}</h3>
                        <p>
                            {{ $game['productDescription'] }}
                        </p>
                        <button>Hemen Ön Satın Alım Yap</button>
                    </div>
                    <div class="background"
                        style="background-image: url('img/pd3-egs-carousel-desktop-16x9-image-1248x702-a3a08c1de90e.avif');">
                    </div>
                </div>
                <div id="slider-5" class="slider-content">
                    <div class="info">
                        <h3>{{ $game['productTitle'] }}</h3>
                        <p>
                            {{ $game['productDescription'] }}
                        </p>
                        <button>Hemen Ön Satın Alım Yap</button>
                    </div>
                    <div class="background"
                        style="background-image: url('img/pd3-egs-carousel-desktop-16x9-image-1248x702-a3a08c1de90e.avif');">
                    </div>
                </div>
            </div>
            <div class="epic-slider-preview">
                @if (isset($game['images']['Screenshot']) && is_array($game['images']['Screenshot']))
                    @php
                        // Get the first 4 screenshots or less if there are fewer than 4
                        $screenshots = array_slice($game['images']['Screenshot'], 0, 4);
                    @endphp
            
                    @foreach ($screenshots as $index => $screenshot)
                        <button data-slide="{{ $index + 1 }}" class="{{ $index == 0 ? 'active' : '' }} preview-element">
                            <div style="background-image: url('{{ $screenshot }}')" class="img"></div>
                            <p>{{ $game['productTitle'] }}</p>
                        </button>
                    @endforeach
                @endif
            </div>
            
            
            
        </div>
    @endforeach
    <div class="pagination justify-content-center">
        {{ $gamesPaginated->links() }}
    </div>

    <script src="{{ asset('game/js/script.js') }}"></script>
</body>

</html>
