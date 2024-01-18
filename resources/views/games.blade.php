<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('game/css/style.css') }}">

    <title>EpicGames Store</title>
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
        <img src="{{ asset('home/images/logo.svg') }}" alt="GameX logo">
    </a>

    @foreach ($gamesPaginated as $gameId => $game)
        <div class="epic-slider">
            <div class="epic-slider-view">
                <div id="slider-1" class="slider-content active">
                    <div class="info">
                        <h3>{{ $game['name'] }}</h3>

                        <button> add to cart</button>
                    </div>
                    <div class="background" style="background-image: url('{{ $game['background_image'] }}');">
                    </div>
                </div>
                <div id="slider-2" class="slider-content">
                    <div class="info">
                        <h3>{{ $game['name'] }}</h3>

                        <button>add to cart</button>
                    </div>
                    <div class="background"
                        style="background-image: url('{{ $game['short_screenshots'][1]['image'] }}');">
                    </div>
                </div>
                <div id="slider-3" class="slider-content">
                    <div class="info">
                        <h3>{{ $game['name'] }}</h3>

                        <button>add to cart</button>
                    </div>
                    <div class="background"
                        style="background-image: url('{{ $game['short_screenshots'][2]['image'] }}');">
                    </div>
                </div>
                <div id="slider-4" class="slider-content">
                    <div class="info">
                        <h3>{{ $game['name'] }}</h3>

                        <button>add to cart</button>
                    </div>
                    <div class="background"
                        style="background-image: url('{{ $game['short_screenshots'][3]['image'] }}');">
                    </div>
                </div>

                <div id="slider-5" class="slider-content">
                    <div class="info">
                        <h3>{{ $game['name'] }}</h3>

                        <button>add to cart</button>
                    </div>
                    <div class="background"
                        style="background-image: url('{{ $game['short_screenshots'][4]['image'] }}');">
                    </div>
                </div>
            </div>
            
                <!-- Inside the loop where you display game information -->
                @if (isset($game['short_screenshots']) && is_array($game['short_screenshots']))
                    <div class="epic-slider-preview">
                        @php
                            // Get the first 4 screenshots or less if there are fewer than 4
                            $limitedScreenshots = array_slice($game['short_screenshots'], 0, 5);
                        @endphp
                      @foreach ($limitedScreenshots as $index => $screenshot)
                      <button data-slide="{{ $index + 1 }}" class="{{ $index == 0 ? 'active' : '' }} preview-element">
                          <div style="background-image: url('{{ $screenshot['image'] }}')" class="img" id="screenshot_{{ $screenshot['id'] }}"></div>
                          
                      </button>
                     @endforeach
                  
                    </div>
                @endif

           

        </div>
    @endforeach

  
    <div class="pagination justify-content-center">
        {{ $gamesPaginated->links('pagination::bootstrap-4') }}
    </div>

    <script src="{{ asset('game/js/script.js') }}"></script>
    
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    var currentPage = {{ $gamesPaginated->currentPage() }};
    var lastPage = {{ $gamesPaginated->lastPage() }};
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
            loadMoreGames(currentPage);
        }
    }

    function loadMoreGames(page) {
        isFetching = true;
        $.ajax({
            url: "{{ url()->current() }}?page=" + page,
            type: "GET",
            dataType: "html",
            success: function(data) {
                if (data.trim() !== "") {
                    $("#games-container").append(data);
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
