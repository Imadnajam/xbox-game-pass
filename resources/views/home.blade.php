<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.frontend.headLinks')
</head>

<body id="top">


    @include('components.frontend.homeHeader')

    <main>
        <article>

            <!--
        - #HERO
      -->
            @include('components.frontend.hero')





            <div class="section-wrapper">
                <!--
          - #GALLERY
        -->

                @include('components.frontend.gallery')

                @include('components.frontend.gameCard', ['gamesPaginated' => $gamesPaginated])




            </div>

        </article>
    </main>





    <!--
    - #FOOTER
  -->

    @include('components.frontend.footer')





    <!--
    - custom js link
  -->
    <script src="{{asset('home/js/script.js')}}"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



</body>

</html>
