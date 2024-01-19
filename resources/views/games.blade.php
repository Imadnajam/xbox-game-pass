<!DOCTYPE html>
<html lang="en">

<head>
    
    @include('components.frontend.headLinks')
</head>

<body >
    @include('components.frontend.homeHeader')
  
    <div class="section-wrapper">
    @include('components.frontend.gameCard', ['gamesPaginated' => $gamesPaginated])
    </div> 

    @include('components.frontend.gameScriptP')

</body>

</html>
