<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('game/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">




    <title>{{ $gameData['name'] }}</title>
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

        .pagination a,
        .pagination span {
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

<body>

    <a href="{{ route('home') }}" class="logo">
        <img src="{{ asset('home/images/logo.svg') }}" alt="gameDataX logo">
    </a>

    <div class="epic-slider">
        <div class="epic-slider-view">
            @foreach ($screenshots['results'] as $index => $screenshot)
                <div id="slider-{{ $index + 1 }}" class="slider-content {{ $index == 0 ? 'active' : '' }}">
                    <div class="info">
                        <h3>{{ $gameData['name'] }}</h3>
                        <a href="{{route('addToCart',['id'=>$gameData['id']])}}" style="color: white"><button>Add to cart</button></a> 
                           
                    </div>
                    <div class="background" style="background-image: url('{{ $screenshot['image'] }}');">
                    </div>
                </div>
            @endforeach
        </div>

        @if (isset($screenshots['results']) && is_array($screenshots['results']))
            <div class="epic-slider-preview">
                @foreach ($screenshots['results'] as $index => $screenshot)
                    <button data-slide="{{ $index + 1 }}" class="{{ $index == 0 ? 'active' : '' }} preview-element">
                        <div style="background-image: url('{{ $screenshot['image'] }}')" class="img"
                            id="screenshot_{{ $screenshot['id'] }}"></div>
                    </button>
                @endforeach
            </div>
        @endif
       
    </div>
    <br>

    <br>

    
        @include('components.frontend.gameTrailler', ['movies' => $movies])
  
    
    

  
    



    <script src="{{ asset('game/js/script.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


</body>

</html>
