@if(count($movies['results']) > 0)
    @foreach($movies['results'] as $movie)
        <div id="dd" style="width: 100% ; display: flex; text-align: center; align-items: center; justify-content: center;">
            <div class="epic-slider-view">
                <div class="slider" style="width: 100%">
                    <div style="width: 100%">
                        <div>
                            <h1>{{$movie['name']}}</h1><br>
                            @if(isset($movie['data']['480']) && !empty($movie['data']['480']))
                                <video id="{{ $movie['id'] }}" poster="{{ $movie['preview'] }}" controls style="width: 80%">
                                    <source src="{{ $movie['data']['480'] }}" type="video/mp4">
                                </video>
                            @else
                                <p>No trailer available for this movie.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @break <!-- This will exit the loop after processing the first movie -->
    @endforeach
@else
    <p>No movies found.</p>
@endif
