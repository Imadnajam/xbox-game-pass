<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('gameData/css/style.css') }}">

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

    <a href="{{route('home')}}" class="logo" >
        <img src="{{ asset('home/images/logo.svg') }}" alt="gameDataX logo">
    </a>

    
        <div class="epic-slider">
            <div class="epic-slider-view">
                <div id="slider-1" class="slider-content active">
                    <div class="info">
                        <h3>{{ $gameData['name'] }}</h3>

                        <button> add to cart</button>
                    </div>
                    <div class="background" style="background-image: url('{{ $gameData['background_image'] }}');">
                    </div>
                </div>
                <div id="slider-2" class="slider-content">
                    <div class="info">
                        <h3>{{ $gameData['name'] }}</h3>

                        <button>add to cart</button>
                    </div>
                    <div class="background"
                        style="background-image: url('{{ $gameData['short_screenshots'][1]['image'] }}');">
                    </div>
                </div>
                <div id="slider-3" class="slider-content">
                    <div class="info">
                        <h3>{{ $gameData['name'] }}</h3>

                        <button>add to cart</button>
                    </div>
                    <div class="background"
                        style="background-image: url('{{ $gameData['short_screenshots'][2]['image'] }}');">
                    </div>
                </div>
                <div id="slider-4" class="slider-content">
                    <div class="info">
                        <h3>{{ $gameData['name'] }}</h3>

                        <button>add to cart</button>
                    </div>
                    <div class="background"
                        style="background-image: url('{{ $gameData['short_screenshots'][3]['image'] }}');">
                    </div>
                </div>

                <div id="slider-5" class="slider-content">
                    <div class="info">
                        <h3>{{ $gameData['name'] }}</h3>

                        <button>add to cart</button>
                    </div>
                    <div class="background"
                        style="background-image: url('{{ $gameData['short_screenshots'][4]['image'] }}');">
                    </div>
                </div>
            </div>
            
                <!-- Inside the loop where you display gameData information -->
                @if (isset($gameData['short_screenshots']) && is_array($gameData['short_screenshots']))
                    <div class="epic-slider-preview">
                        @php
                            // Get the first 4 screenshots or less if there are fewer than 4
                            $limitedScreenshots = array_slice($gameData['short_screenshots'], 0, 5);
                        @endphp
                      @foreach ($limitedScreenshots as $index => $screenshot)
                      <button data-slide="{{ $index + 1 }}" class="{{ $index == 0 ? 'active' : '' }} preview-element">
                          <div style="background-image: url('{{ $screenshot['image'] }}')" class="img" id="screenshot_{{ $screenshot['id'] }}"></div>
                          
                      </button>
                     @endforeach
                  
                    </div>
                @endif

           

        </div>
   

  
   

    <script src="{{ asset('gameData/js/script.js') }}"></script>
    
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    var currentPage = {{ $gameDatasPaginated->currentPage() }};
    var lastPage = {{ $gameDatasPaginated->lastPage() }};
    var isFetching = false;

    $(document).ready(function() {
        $(window).on('scroll', function() {
            if ($(window).scrollTop() + $(window).height() >= $(document).height() - 200 && !isFetching) {
                checkAndLoadMore();
            }
        });
    });

    function checkAndLoadMore() {
        if (currentPage < lastPage && !isFetching) {
            currentPage++;
            loadMoregameDatas(currentPage);
        }
    }

    function loadMoregameDatas(page) {
        isFetching = true;
        $.ajax({
            url: "{{ url()->current() }}?page=" + page,
            type: "GET",
            dataType: "html",
            success: function(data) {
                if (data.trim() !== "") {
                    $("#gameDatas-container").append(data);
                }
                isFetching = false;

                // Check if all items have been loaded
                if (currentPage >= lastPage) {
                    $(window).off('scroll');  // Disable scrolling when all items are loaded
                }
            },
            error: function() {
                isFetching = false;
            }
        });
    }
</script>

</body>

</html>
