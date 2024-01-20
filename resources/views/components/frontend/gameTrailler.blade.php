
@if(count($movies['results']) > 0)
@foreach($movies['results'] as $movie)
<div id="dd" style="width: 100%">
    <div class="epic-slider-view">
      <div class="slider" style="width: 100%">
        <div style="width: 100%">
          <div>
            <video id="{{ $movie['id'] }}" poster="{{ $movie['preview'] }}" controls style="width: 100%">
              <source src="{{ $movie['data']['480'] }}" type="video/mp4">
            </video>
          </div>
        </div>
      </div>
    </div>
  </div>
  
@endforeach
@else
  <p>No movies found.</p>
@endif

 