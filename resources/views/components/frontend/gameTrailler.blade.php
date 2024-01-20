
@if(count($movies['results']) > 0)
@foreach($movies['results'] as $movie)

  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div style='max-width: 800px; position: relative; margin: 0 auto; margin-top: 0px; margin-top: 64px;'>
          <video id="{{ $movie['id'] }}" poster="{{ $movie['preview'] }}" controls>
            <source src="{{ $movie['data']['480'] }}" type="video/mp4">
            <!-- You can add more tracks for different languages if needed -->
            <track kind="captions" label="English" srclang="en" src="https://raw.githubusercontent.com/BMSVieira/moovie.js/main/demo-template/subtitles/en.vtt">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </div>
@endforeach
@else
  <p>No movies found.</p>
@endif

  <!-- Moovie JS Core -->
  <script src="{{ asset('game/js/moovie.js') }}"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
            var demo1 = new Moovie({
              selector: "#example",
              dimensions: {
                   width: "100%"
              },
              config: {
                  storage: {
                     captionOffset: false,
                     playrateSpeed: false,
                     captionSize: false
                  }
              }
            });
    });
  </script>

