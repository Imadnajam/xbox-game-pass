<section class="gears" id="gears">
    <div class="container">

        <h2 class="h2 section-title">check you cart</h2>

        <ul class="gears-list">
        @if(!empty($games))
         @foreach ($games as $gameId => $game) 
         <li>
            <div class="gears-card">
                <div class="card-banner">
                    <a href="{{ route('GameDetaille', ['id' => $game['id']]) }}">
                        <img src="{{ $game['background_image'] }}" alt="{{ $game['name'] }}" style="width: 250px">
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
                        <p class="card-subtitle">Xbox | PLAYSTATION</p>
                    </div>
                    <div class="card-prize">$<!-- Add actual price here --></div>
                </div>
                <button class="btn btn-primary" style="background-color: red">
                    <ion-icon name="remove-outline"></ion-icon>
                   <a href="{{route('removFromCart',['id'=>$game['id']])}}" style="color: white"><span>remove from cart</span></a> 
                </button>

              
            </div>
        </li>
            @endforeach
            @else
                <li style="text-align: center">you dont have anything in cart</li>
            @endif
           
                
            

          
           
        </ul>
        

    </div>
</section>